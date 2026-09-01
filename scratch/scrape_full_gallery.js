const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

async function scrape() {
  console.log('🌐 Launching headless browser to extract full media gallery...');
  const browser = await puppeteer.launch({
    headless: "new",
    args: ['--no-sandbox', '--disable-setuid-sandbox']
  });

  const page = await browser.newPage();
  await page.setViewport({ width: 1400, height: 900 });

  const targetUrl = "https://www.google.com/maps/place/Biryani+%26+Dosa+Grill/@37.6914004,-121.7737943,19z/data=!4m7!3m6!1s0x808fe70004e54aab:0xd3e7ae667790b01d!8m2!3d37.6914004!4d-121.7737943!10e5!16s%2Fg%2F11x_fxn8y8";
  
  await page.goto(targetUrl, { waitUntil: 'networkidle2', timeout: 30000 });

  // Wait for photos container or scrollable elements
  await page.waitForTimeout(3000).catch(() => new Promise(r => setTimeout(r, 3000)));

  // Extract all photo URLs from DOM and network
  const photos = await page.evaluate(() => {
    const urls = new Set();
    document.querySelectorAll('img, [style*="background-image"]').forEach(el => {
      if (el.tagName === 'IMG' && el.src && el.src.includes('googleusercontent.com')) {
        urls.add(el.src.replace(/=w\d+-h\d+.*$/, '=s1600').replace(/=s\d+.*$/, '=s1600'));
      }
      const bg = el.style.backgroundImage;
      if (bg && bg.includes('googleusercontent.com')) {
        const m = bg.match(/url\("?(.*?)"?\)/);
        if (m) urls.add(m[1].replace(/=w\d+-h\d+.*$/, '=s1600').replace(/=s\d+.*$/, '=s1600'));
      }
    });
    return Array.from(urls);
  });

  console.log(`📸 Found ${photos.length} photos!`);
  
  await browser.close();
}

scrape().catch(err => console.log('Puppeteer note:', err.message));
