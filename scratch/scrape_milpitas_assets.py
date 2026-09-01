import re
import json
import os

def run():
    with open('scratch/gmaps_milpitas_raw.html', 'r', encoding='utf-8', errors='ignore') as f:
        html = f.read()

    title_m = re.search(r'<title>(.*?)</title>', html)
    title = title_m.group(1) if title_m else "Biryani & Dosa grill ( fast food )"

    raw_photos = re.findall(r'https://lh[3-6]\.googleusercontent\.com/[^\s"\'\\)]+', html)
    raw_photos += re.findall(r'https://streetviewpixels-pa\.googleapis\.com/[^\s"\'\\)]+', html)

    unique_photos = list(set([p.replace('\\u003d', '=').replace('\\u0026', '&').replace('\\', '') for p in raw_photos]))
    raw_videos = re.findall(r'https://[^\s"\'\\]+\.(?:mp4|webm)', html)
    unique_videos = list(set(raw_videos))

    data = {
        "title": title,
        "place_name": "Biryani & Dosa grill (fast food)",
        "brand_title": "Biryani & Dosa Grill (Milpitas)",
        "address": "380 S Main St, Milpitas, CA 95035",
        "phone": "(669) 264-7920",
        "rating": "4.3",
        "reviews_count": "11+ reviews",
        "maps_url": "https://maps.app.goo.gl/4Y4uwgkYr8jHpFqq8",
        "resolved_url": "https://www.google.com/maps/place/Biryani+%26+Dosa+grill+(+fast+food+)/@37.425358,-121.905063,17z/data=!4m6!3m5!1s0x808fc9c79c15e257:0xa1165c48f82a5375!8m2!3d37.425358!4d-121.905063!16s%2Fg%2F11n9cghzxd",
        "coordinates": {"lat": 37.425358, "lng": -121.905063},
        "total_images_found": len(unique_photos),
        "total_videos_found": len(unique_videos),
        "images": unique_photos,
        "videos": unique_videos
    }

    out_dir = 'public/assets/images/google_maps/milpitas'
    os.makedirs(out_dir, exist_ok=True)
    with open(os.path.join(out_dir, 'metadata.json'), 'w', encoding='utf-8') as f:
        json.dump(data, f, indent=2)

    print(f"✅ Scraping completed for Milpitas location!")
    print(f"📍 Place: {data['place_name']}")
    print(f"⭐ Rating: {data['rating']} ({data['reviews_count']})")
    print(f"📞 Phone: {data['phone']}")
    print(f"🏡 Address: {data['address']}")
    print(f"🖼️ Images Extracted: {len(unique_photos)}")
    print(f"📁 Metadata saved to: {out_dir}/metadata.json")

if __name__ == '__main__':
    run()
