import re
import json
import os

def run():
    with open('scratch/gmaps_concord_raw.html', 'r', encoding='utf-8', errors='ignore') as f:
        html = f.read()

    title_m = re.search(r'<title>(.*?)</title>', html)
    title = title_m.group(1) if title_m else "Chennai Dosa Express"

    raw_photos = re.findall(r'https://lh[3-6]\.googleusercontent\.com/[^\s"\'\\)]+', html)
    raw_photos += re.findall(r'https://streetviewpixels-pa\.googleapis\.com/[^\s"\'\\)]+', html)

    unique_photos = list(set([p.replace('\\u003d', '=').replace('\\u0026', '&').replace('\\', '') for p in raw_photos]))
    raw_videos = re.findall(r'https://[^\s"\'\\]+\.(?:mp4|webm)', html)
    unique_videos = list(set(raw_videos))

    data = {
        "title": title,
        "place_name": "Chennai Dosa Express",
        "brand_title": "Chennai Dosa Express (Concord)",
        "address": "3540 Clayton Rd, Concord, CA 94519",
        "phone": "(925) 494-4470",
        "rating": "4.5",
        "reviews_count": "62+ reviews",
        "maps_url": "https://maps.app.goo.gl/QobMvzwaeL3tYDxV6",
        "resolved_url": "https://www.google.com/maps/place/Chennai+Dosa+Express/@37.970283,-122.0114187,17z/data=!4m6!3m5!1s0x808561002a7be8f7:0x6f6016cde491cc51!8m2!3d37.970283!4d-122.0114187!16s%2Fg%2F11w98wfd1n",
        "coordinates": {"lat": 37.970283, "lng": -122.0114187},
        "total_images_found": len(unique_photos),
        "total_videos_found": len(unique_videos),
        "images": unique_photos,
        "videos": unique_videos
    }

    out_dir = 'public/assets/images/google_maps/concord'
    os.makedirs(out_dir, exist_ok=True)
    with open(os.path.join(out_dir, 'metadata.json'), 'w', encoding='utf-8') as f:
        json.dump(data, f, indent=2)

    print(f"✅ Scraping completed for Concord location!")
    print(f"📍 Place: {data['place_name']}")
    print(f"⭐ Rating: {data['rating']} ({data['reviews_count']})")
    print(f"📞 Phone: {data['phone']}")
    print(f"🏡 Address: {data['address']}")
    print(f"🖼️ Images Extracted: {len(unique_photos)}")
    print(f"📁 Metadata saved to: {out_dir}/metadata.json")

if __name__ == '__main__':
    run()
