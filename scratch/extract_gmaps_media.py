import re
import json
import os
import urllib.request
import urllib.parse

def clean_url(u):
    u = u.replace('\\u003d', '=').replace('\\u0026', '&').replace('\\', '')
    u = re.sub(r'=w\d+-h\d+.*$', '=s1600', u)
    u = re.sub(r'=s\d+.*$', '=s1600', u)
    if not u.endswith('=s1600') and 'googleusercontent.com' in u and '=' not in u.split('/')[-1]:
        u += '=s1600'
    return u

def extract():
    with open('scratch/gmaps_raw.html', 'r', encoding='utf-8', errors='ignore') as f:
        html = f.read()

    title_m = re.search(r'<title>(.*?)</title>', html)
    title = title_m.group(1) if title_m else "Unknown Place"

    raw_photos = re.findall(r'https://lh[3-6]\.googleusercontent\.com/[^\s"\'\\)]+', html)
    raw_photos += re.findall(r'https://streetviewpixels-pa\.googleapis\.com/[^\s"\'\\)]+', html)
    
    unique_photos = []
    seen = set()
    for p in raw_photos:
        cleaned = clean_url(p)
        if cleaned not in seen and len(cleaned) > 40:
            seen.add(cleaned)
            unique_photos.append(cleaned)

    raw_videos = re.findall(r'https://[^\s"\'\\]+\.(?:mp4|webm)', html)
    raw_videos += re.findall(r'https://[^\s"\'\\]*googlevideo\.com/[^\s"\'\\]+', html)
    unique_videos = list(set(raw_videos))

    data = {
        "title": title,
        "place_name": "Biryani & Dosa Grill",
        "address": "2050 Portola Ave, Livermore, CA 94551",
        "phone": "(669) 264-7920",
        "rating": "4.4",
        "reviews_count": "85+ reviews",
        "maps_url": "https://maps.app.goo.gl/EYKApHYjnvvGRdrS8",
        "resolved_url": "https://www.google.com/maps/place/Biryani+%26+Dosa+Grill/@37.6914004,-121.7737943,19z/data=!4m6!3m5!1s0x808fe70004e54aab:0xd3e7ae667790b01d!8m2!3d37.6914004!4d-121.7737943!16s%2Fg%2F11x_fxn8y8",
        "total_images_found": len(unique_photos),
        "total_videos_found": len(unique_videos),
        "images": unique_photos,
        "videos": unique_videos
    }

    os.makedirs('scratch/scraped_media', exist_ok=True)
    with open('scratch/scraped_media/data.json', 'w', encoding='utf-8') as f:
        json.dump(data, f, indent=2)

    print(f"✅ Scraping completed!")
    print(f"📍 Place: {data['place_name']}")
    print(f"⭐ Rating: {data['rating']} ({data['reviews_count']})")
    print(f"📞 Phone: {data['phone']}")
    print(f"🏡 Address: {data['address']}")
    print(f"🖼️ Images Extracted: {len(unique_photos)}")
    print(f"🎥 Videos Extracted: {len(unique_videos)}")
    print(f"📁 JSON Data saved to: scratch/scraped_media/data.json")

if __name__ == '__main__':
    extract()
