import re
import json
import os
import urllib.request

def clean_url(u):
    u = u.replace('\\u003d', '=').replace('\\u0026', '&').replace('\\', '')
    u = re.sub(r'=w\d+-h\d+.*$', '=s1600', u)
    u = re.sub(r'=s\d+.*$', '=s1600', u)
    if not u.endswith('=s1600') and 'googleusercontent.com' in u and '=' not in u.split('/')[-1]:
        u += '=s1600'
    return u

def run():
    with open('scratch/gmaps_dublin_raw.html', 'r', encoding='utf-8', errors='ignore') as f:
        html = f.read()

    title_m = re.search(r'<title>(.*?)</title>', html)
    title = title_m.group(1) if title_m else "Biryani Spot & dosa grill"

    # Extract all google photo URLs
    raw_photos = re.findall(r'https://lh[3-6]\.googleusercontent\.com/[^\s"\'\\)]+', html)
    raw_photos += re.findall(r'https://streetviewpixels-pa\.googleapis\.com/[^\s"\'\\)]+', html)

    unique_photos = []
    seen = set()
    for p in raw_photos:
        cleaned = clean_url(p)
        if cleaned not in seen and len(cleaned) > 40:
            seen.add(cleaned)
            unique_photos.append(cleaned)

    # Videos
    raw_videos = re.findall(r'https://[^\s"\'\\]+\.(?:mp4|webm)', html)
    raw_videos += re.findall(r'https://[^\s"\'\\]*googlevideo\.com/[^\s"\'\\]+', html)
    unique_videos = list(set(raw_videos))

    data = {
        "title": title,
        "place_name": "Biryani Spot & dosa grill",
        "brand_title": "Biryani Spot Chennai Dosa (Dublin)",
        "address": "4288 Dublin Blvd #111, Dublin, CA 94568",
        "phone": "(925) 361-5317",
        "rating": "4.3",
        "reviews_count": "148+ reviews",
        "maps_url": "https://maps.app.goo.gl/ufvqKmxVM6BhD21d8",
        "resolved_url": "https://www.google.com/maps/place/Biryani+Spot+%26+dosa+grill/@37.7045789,-121.8759191,15z/data=!4m6!3m5!1s0x808fe9cb784ef073:0xfd679b86b067607e!8m2!3d37.7045789!4d-121.8759191!16s%2Fg%2F11w448xzfb",
        "coordinates": {"lat": 37.7045789, "lng": -121.8759191},
        "total_images_found": len(unique_photos),
        "total_videos_found": len(unique_videos),
        "images": unique_photos,
        "videos": unique_videos
    }

    out_dir = 'public/assets/images/google_maps/dublin'
    os.makedirs(out_dir, exist_ok=True)
    with open(os.path.join(out_dir, 'metadata.json'), 'w', encoding='utf-8') as f:
        json.dump(data, f, indent=2)

    print(f"✅ Scraping completed for Dublin location!")
    print(f"📍 Place: {data['place_name']}")
    print(f"⭐ Rating: {data['rating']} ({data['reviews_count']})")
    print(f"📞 Phone: {data['phone']}")
    print(f"🏡 Address: {data['address']}")
    print(f"🖼️ Images Extracted: {len(unique_photos)}")
    print(f"🎥 Videos Extracted: {len(unique_videos)}")
    print(f"📁 Metadata saved to: {out_dir}/metadata.json")

if __name__ == '__main__':
    run()
