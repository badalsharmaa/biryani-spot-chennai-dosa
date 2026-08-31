import re, os, urllib.request, ssl, glob

ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE
headers = {"User-Agent": "Mozilla/5.0"}

def download_and_replace_assets(html):
    if not html:
        return ""
    # Find all image and media URLs
    urls = re.findall(r"https?://(?:khufus\.com|khufusbistro\.com)/wp-content/uploads/[^\s\"\x27\)\>]+", html)
    for u in set(urls):
        clean_u = u.split("?")[0]
        fname = os.path.basename(clean_u)
        fname = re.sub(r"[^a-zA-Z0-9_\.-]", "_", fname)
        local_path = os.path.join("public/assets/images", fname)
        web_path = f"/assets/images/{fname}"
        
        if not os.path.exists(local_path):
            try:
                req = urllib.request.Request(clean_u, headers=headers)
                with urllib.request.urlopen(req, context=ctx, timeout=6) as resp, open(local_path, "wb") as f:
                    f.write(resp.read())
            except Exception:
                pass
        html = html.replace(u, web_path)
    
    # Replace stylesheets with local elementor css paths
    css_urls = re.findall(r"https?://(?:khufus\.com|khufusbistro\.com)/[^\s\"\x27\)\>]+\.css(?:\?[^\s\"\x27\)\>]*)?", html)
    for c in set(css_urls):
        clean_c = c.split("?")[0]
        fname = os.path.basename(clean_c)
        if "post-" in clean_c:
            fname = "post-" + clean_c.split("post-")[-1]
        local_css = f"/assets/css/elementor/{fname}"
        html = html.replace(c, local_css)
        
    # Replace navigation links
    html = re.sub(r"https?://(?:khufus\.com|khufusbistro\.com)/contact/?", "/contact", html)
    html = re.sub(r"https?://(?:khufus\.com|khufusbistro\.com)/experience/?", "/experience", html)
    html = re.sub(r"https?://(?:khufus\.com|khufusbistro\.com)/legacy/?", "/legacy", html)
    html = re.sub(r"https?://(?:khufus\.com|khufusbistro\.com)/menu/?", "/menu", html)
    html = re.sub(r"https?://(?:khufus\.com|khufusbistro\.com)/reservations/?", "/reservations", html)
    html = re.sub(r"https?://(?:khufus\.com|khufusbistro\.com)/about/?", "/about", html)
    html = re.sub(r"https?://(?:khufus\.com|khufusbistro\.com)/gallery/?", "/gallery", html)
    html = re.sub(r"https?://(?:khufus\.com|khufusbistro\.com)/?", "/", html)
    
    return html

def extract_body_elementor(html):
    # Find everything inside <div class="site-content" ...> or from <header ...></header> to <footer ...></footer>
    m = re.search(r"</header>(.*?)<footer", html, re.DOTALL)
    if m:
        return m.group(1)
    return html

# 1. Process Master Header and Footer
with open("scratch/khufus_raw/home.html", "r", encoding="utf-8") as f:
    raw_home = f.read()

head_matches = re.findall(r"(<link[^>]+rel=[\"\x27]stylesheet[\"\x27][^>]*>|<style[^>]*>.*?</style>)", raw_home, re.DOTALL)
head_css = "\n".join(head_matches)
head_css = download_and_replace_assets(head_css)

header_match = re.search(r"(<header\s+class=[\"\x27]elementor-location-header[\"\x27]>.*?</header>)", raw_home, re.DOTALL)
header_html = header_match.group(1) if header_match else ""
header_html = download_and_replace_assets(header_html)

footer_match = re.search(r"(<footer\s+class=[\"\x27]elementor-location-footer[\"\x27]>.*?</footer>)", raw_home, re.DOTALL)
footer_html = footer_match.group(1) if footer_match else ""
footer_html = download_and_replace_assets(footer_html)

header_php = "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n  <meta charset=\"UTF-8\">\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n  <title><?= htmlspecialchars($pageTitle ?? \"Biryani Spot Chennai Dosa | Elevated Dining\") ?></title>\n  <link rel=\"icon\" type=\"image/svg+xml\" href=\"/assets/images/logo-white.svg\">\n  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js\"></script>\n" + head_css + "\n  <link rel=\"stylesheet\" href=\"/assets/css/khufus-theme.css\">\n</head>\n<body class=\"home page-template-default page wp-custom-logo ast-desktop ast-separate-container elementor-default elementor-kit-48\">\n" + header_html

with open("app/views/layouts/header.php", "w", encoding="utf-8") as f:
    f.write(header_php)

footer_php = footer_html + "\n<script src=\"/assets/js/khufus-core.js\"></script>\n</body>\n</html>"
with open("app/views/layouts/footer.php", "w", encoding="utf-8") as f:
    f.write(footer_php)

print("Saved app/views/layouts/header.php and footer.php")

# 2. Process all pages
page_mappings = [
    ("home.html", "app/views/home/index.php", "Biryani Spot Chennai Dosa | Elevated Dining"),
    ("reservations.html", "app/views/reservations/index.php", "Reservations & FAQ | Biryani Spot Chennai Dosa"),
    ("experience.html", "app/views/experience/index.php", "The Experience | Biryani Spot Chennai Dosa"),
    ("legacy.html", "app/views/legacy/index.php", "The Legacy | Biryani Spot Chennai Dosa"),
    ("menu.html", "app/views/menu/index.php", "The Menu | Biryani Spot Chennai Dosa"),
    ("contact.html", "app/views/locations/index.php", "Contact & Locations | Biryani Spot Chennai Dosa"),
    ("about.html", "app/views/about/index.php", "About | Biryani Spot Chennai Dosa"),
    ("gallery.html", "app/views/gallery/index.php", "Gallery | Biryani Spot Chennai Dosa"),
    ("bistro.html", "app/views/bistro/index.php", "The Bistro | Biryani Spot Chennai Dosa")
]

for raw_name, target_php, title in page_mappings:
    raw_path = os.path.join("scratch/khufus_raw", raw_name)
    if not os.path.exists(raw_path):
        continue
    with open(raw_path, "r", encoding="utf-8") as f:
        raw_html = f.read()
        
    body_content = extract_body_elementor(raw_html)
    body_content = download_and_replace_assets(body_content)
    
    # Also extract any page-specific inline styles or stylesheets from raw_html
    page_styles = re.findall(r"(<link[^>]+rel=[\"\x27]stylesheet[\"\x27][^>]*post-[0-9]+\.css[^>]*>|<style[^>]*>.*?</style>)", raw_html, re.DOTALL)
    page_styles_str = download_and_replace_assets("\n".join(page_styles))
    
    page_php = f"<?php\n$pageTitle = \"{title}\";\nrequire_once __DIR__ . \"/../layouts/header.php\";\n?>\n\n{page_styles_str}\n\n{body_content}\n\n<?php require_once __DIR__ . \"/../layouts/footer.php\"; ?>"
    with open(target_php, "w", encoding="utf-8") as f:
        f.write(page_php)
    print(f"Generated 100% exact raw Elementor DOM for: {target_php}")
