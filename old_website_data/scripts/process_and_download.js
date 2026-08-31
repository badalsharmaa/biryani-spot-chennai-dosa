const fs = require('fs');
const path = require('path');
const https = require('https');

const ROOT_DIR = path.resolve(__dirname, '..');
const DATA_DIR = path.join(ROOT_DIR, 'data');
const ASSETS_DIR = path.join(ROOT_DIR, 'public', 'assets', 'images');

// Ensure directories exist
fs.mkdirSync(path.join(ASSETS_DIR, 'banners'), { recursive: true });
fs.mkdirSync(path.join(ASSETS_DIR, 'dishes'), { recursive: true });
fs.mkdirSync(path.join(ASSETS_DIR, 'menus'), { recursive: true });
fs.mkdirSync(path.join(ASSETS_DIR, 'brand'), { recursive: true });
fs.mkdirSync(path.join(ASSETS_DIR, 'promos'), { recursive: true });

// Read raw files
const apolloState = JSON.parse(fs.readFileSync(path.join(DATA_DIR, 'raw_apollo_state.json'), 'utf8'));
const dublinData = JSON.parse(fs.readFileSync(path.join(DATA_DIR, 'raw_dublin.json'), 'utf8'));
const milpitasData = JSON.parse(fs.readFileSync(path.join(DATA_DIR, 'raw_milpitas.json'), 'utf8'));
const livermoreData = JSON.parse(fs.readFileSync(path.join(DATA_DIR, 'raw_livermore.json'), 'utf8'));
const concordData = JSON.parse(fs.readFileSync(path.join(DATA_DIR, 'raw_concord.json'), 'utf8'));

// 1. Process Brand & Theme
const restaurantEntity = Object.values(apolloState).find(v => v.__typename === 'Restaurant') || {};
const brandAndTheme = {
  name: restaurantEntity.name || "Biryani and Dosa Grill",
  brandTitle: "Biryani Spot Chennai Dosa",
  tagline: "Authentic Chettinad South Indian Cuisine",
  cuisine: restaurantEntity.cuisine || "Indian",
  priceRange: restaurantEntity.priceRange || "$$",
  acceptedPaymentTypes: restaurantEntity.acceptedPaymentTypes || "Cash, Credit card, Tap to pay, Apple Pay, Google Pay, Debit card",
  domains: ["biryanispotchennaidosa.com", "chennaidosa.toast.site"],
  theme: restaurantEntity.theme || {},
  fonts: {
    heading: "Zilla Slab",
    body: "Inter",
    secondary: "Effra"
  },
  colors: {
    primary: "#0d1416",
    surface: "#f7f9fa",
    surfaceSecondary: "#fbfdfe",
    surfaceTertiary: "#ffffff",
    textDefault: "#202020",
    textSecondary: "#646464"
  }
};

fs.writeFileSync(path.join(DATA_DIR, 'brand_and_theme.json'), JSON.stringify(brandAndTheme, null, 2));
console.log('Saved brand_and_theme.json');

// 2. Process Locations
const locationEntities = Object.values(apolloState).filter(v => v.__typename === 'RestaurantLocation');
const locations = locationEntities.map(loc => {
  return {
    id: loc.id,
    externalId: loc.externalId,
    name: loc.name,
    slug: loc.shortUrl,
    address: {
      address1: loc.address1,
      address2: loc.address2 || "",
      city: loc.city,
      state: loc.state || loc.administrativeArea,
      zipcode: loc.zipcode,
      country: loc.country || "US",
      fullAddress: `${loc.address1}${loc.address2 ? ' ' + loc.address2 : ''}, ${loc.city}, ${loc.state} ${loc.zipcode}`
    },
    phoneNumber: loc.phoneNumber ? `(${loc.phoneNumber.slice(0,3)}) ${loc.phoneNumber.slice(3,6)}-${loc.phoneNumber.slice(6)}` : "",
    rawPhone: loc.phoneNumber,
    coordinates: {
      latitude: loc.lat,
      longitude: loc.long
    },
    schedule: loc.schedule || [],
    businessHours: loc.businessHours || null,
    orderUrl: `https://biryanispotchennaidosa.com/order/${loc.shortUrl}`,
    toastOrderUrl: `https://order.toasttab.com/online/${loc.shortUrl}`,
    googleMapsUrl: `https://google.com/maps/place?q=${encodeURIComponent('Biryani and Dosa Grill, ' + loc.address1 + ', ' + loc.city + ', ' + loc.state + ' ' + loc.zipcode)}`
  };
});

fs.writeFileSync(path.join(DATA_DIR, 'locations.json'), JSON.stringify(locations, null, 2));
console.log(`Saved locations.json with ${locations.length} locations`);

// 3. Process Menus By Location
const menusByLocation = {
  dublin: dublinData,
  milpitas: milpitasData,
  livermore: livermoreData,
  concord: concordData
};

fs.writeFileSync(path.join(DATA_DIR, 'menus_by_location.json'), JSON.stringify(menusByLocation, null, 2));
console.log('Saved menus_by_location.json');

// 4. Process Unified Master Menu
const unifiedCategories = {};

[dublinData, milpitasData, livermoreData, concordData].forEach(locData => {
  locData.sections.forEach(sec => {
    const catName = sec.category.trim();
    if (!unifiedCategories[catName]) {
      unifiedCategories[catName] = {
        name: catName,
        items: new Map()
      };
    }

    sec.items.forEach(item => {
      const itemKey = item.title.trim().toLowerCase();
      const existing = unifiedCategories[catName].items.get(itemKey);
      
      if (!existing) {
        unifiedCategories[catName].items.set(itemKey, {
          id: item.id,
          title: item.title.trim(),
          price: item.price,
          description: item.description,
          imageUrl: item.imageUrl,
          availableLocations: [locData.locationName],
          locationPrices: {
            [locData.locationName]: item.price
          }
        });
      } else {
        if (!existing.availableLocations.includes(locData.locationName)) {
          existing.availableLocations.push(locData.locationName);
        }
        existing.locationPrices[locData.locationName] = item.price;
        if (!existing.description && item.description) existing.description = item.description;
        if (!existing.imageUrl && item.imageUrl) existing.imageUrl = item.imageUrl;
      }
    });
  });
});

const unifiedMenu = Object.values(unifiedCategories).map(cat => ({
  category: cat.name,
  itemsCount: cat.items.size,
  items: Array.from(cat.items.values())
})).filter(c => c.itemsCount > 0);

const totalUnifiedItems = unifiedMenu.reduce((sum, c) => sum + c.itemsCount, 0);

fs.writeFileSync(path.join(DATA_DIR, 'unified_menu.json'), JSON.stringify(unifiedMenu, null, 2));
console.log(`Saved unified_menu.json with ${unifiedMenu.length} categories and ${totalUnifiedItems} unique items`);

// 5. Process Pages Content
const pagesContent = {
  home: {
    hero: {
      headline: "Authentic Chettinad Indian Cuisine",
      subheadline: "Experience a fiery and aromatic South Indian style known for its complex, freshly ground spice blends (masalas), sun-dried meats, and slow-cooked dishes",
      primaryCta: "Order Now",
      bannerImage: "public/assets/images/banners/hero_banner.webp"
    },
    features: [
      {
        title: "Signature Biryani",
        description: "Aromatic basmati rice cooked with premium spices and your choice of protein",
        image: "public/assets/images/dishes/traditional_thali.webp"
      },
      {
        title: "Crispy Dosas",
        description: "South Indian crepes made with fermented rice batter, served with authentic chutneys",
        image: "public/assets/images/dishes/indian_thali_curries.webp"
      },
      {
        title: "Fresh Curries",
        description: "Traditional curry dishes prepared daily with fresh ingredients and aromatic spices",
        image: "public/assets/images/dishes/curries_and_naan.webp"
      }
    ],
    foodTruck: {
      title: "Biryani Spot Food Truck",
      description: "Bringing authentic South Indian flavors on wheels"
    },
    drinks: {
      title: "Wine and Beer Menu",
      image: "public/assets/images/menus/wine_and_beer_menu.jpg"
    }
  },
  catering: {
    title: "Biryani Spot Catering",
    description: "Catering for weddings, corporate events, birthday parties, and gatherings with authentic Chettinad and South Indian specialties.",
    image: "public/assets/images/dishes/catering_spread.webp"
  },
  contact: {
    title: "Get in Touch with us!",
    description: "We'd love to hear from you! Whether you have questions, feedback, or special requests, our team is here to help.",
    responseTime: "We aim to respond within 24 hours."
  },
  promos: [
    {
      title: "Tea Combo Happy Hour",
      image: "public/assets/images/promos/tea_combo_happy_hour.jpeg"
    }
  ]
};

fs.writeFileSync(path.join(DATA_DIR, 'pages_content.json'), JSON.stringify(pagesContent, null, 2));
console.log('Saved pages_content.json');

// 6. Asset Download List
const assetsToDownload = [
  {
    url: "https://d1w7312wesee68.cloudfront.net/jTzPBHssdBYRhtMbTuMEIIzUicFgc3WnXMv3PPsiOJY/ext:webp/quality:85/c:3456:1344:ce:0:0/plain/s3://toast-sites-resources-prod/restaurantImages/36ff028b-5def-4475-b7d4-3e7d5ba38526/Biryani_Spot_Website_Banner_0402260852.png",
    localPath: "public/assets/images/banners/hero_banner.webp",
    name: "Hero Website Banner",
    category: "banners"
  },
  {
    url: "https://d1w7312wesee68.cloudfront.net/TkC9ALxcEEMKDZw9jjSFt3wAIRlthQWQMZpvsd9TMAs/ext:webp/quality:85/plain/s3://toast-sites-resources-prod/restaurantImages/36ff028b-5def-4475-b7d4-3e7d5ba38526/94accf6d-7a70-43f3-a6d3-c845b7a5eeff-3",
    localPath: "public/assets/images/dishes/traditional_thali.webp",
    name: "Traditional Indian Thali",
    category: "dishes"
  },
  {
    url: "https://d1w7312wesee68.cloudfront.net/X4dhqozAy3a7-YD7UuXjqhMzS8Pr6SP4TCIIyT6KLVg/ext:webp/quality:85/plain/s3://toast-sites-resources-prod/restaurantImages/36ff028b-5def-4475-b7d4-3e7d5ba38526/94accf6d-7a70-43f3-a6d3-c845b7a5eeff-6",
    localPath: "public/assets/images/dishes/indian_thali_curries.webp",
    name: "Indian Thali with Curries & Rice",
    category: "dishes"
  },
  {
    url: "https://d1w7312wesee68.cloudfront.net/YicAPL0QGtqQTsAhsmCfY31FOeqDExeGFvGjnsLzE1U/ext:webp/quality:85/plain/s3://toast-sites-resources-prod/restaurantImages/36ff028b-5def-4475-b7d4-3e7d5ba38526/94accf6d-7a70-43f3-a6d3-c845b7a5eeff-1",
    localPath: "public/assets/images/dishes/curries_and_naan.webp",
    name: "Assorted Indian Curries and Naan",
    category: "dishes"
  },
  {
    url: "https://d1w7312wesee68.cloudfront.net/TlnSPV32UOQVKTn_n1cgv4wYt2ePn_KIcB-sOG0oJYI/ext:webp/quality:85/c:1079:1919:ce:0:0/plain/s3://toast-sites-resources-prod/restaurantImages/36ff028b-5def-4475-b7d4-3e7d5ba38526/94accf6d-7a70-43f3-a6d3-c845b7a5eeff-1",
    localPath: "public/assets/images/dishes/catering_spread.webp",
    name: "Catering Spread & Curries",
    category: "dishes"
  },
  {
    url: "https://d1w7312wesee68.cloudfront.net/5j14_pEMYTgmycNalMojyhLPbHk1gwE_Il6eOBVBL54/ext:webp/quality:85/plain/s3://toast-sites-resources-prod/restaurantImages/36ff028b-5def-4475-b7d4-3e7d5ba38526/94accf6d-7a70-43f3-a6d3-c845b7a5eeff-0",
    localPath: "public/assets/images/brand/restaurant_icon.webp",
    name: "Restaurant Brand Icon",
    category: "brand"
  },
  {
    url: "https://d1w7312wesee68.cloudfront.net/Z4LpFFj4HhvWJtnJmoE7DYk609NidTDa3c3gHBMe9VQ/ext:webp/quality:85/c:1236:1600:ce:0:0/plain/s3://toast-sites-resources-prod/restaurantImages/36ff028b-5def-4475-b7d4-3e7d5ba38526/BiryaniSpotWineandBeerMenu.jpg",
    localPath: "public/assets/images/menus/wine_and_beer_menu.jpg",
    name: "Wine & Beer Menu Board",
    category: "menus"
  },
  {
    url: "https://cf-images.hiraya.digital/emails/compatible-images/images/WhatsApp_Image_2026-08-28_at_01.16.41.jpeg",
    localPath: "public/assets/images/promos/tea_combo_happy_hour.jpeg",
    name: "Tea Combo Happy Hour Promo Flyer",
    category: "promos"
  }
];

fs.writeFileSync(path.join(DATA_DIR, 'assets_manifest.json'), JSON.stringify(assetsToDownload, null, 2));
console.log(`Saved assets_manifest.json with ${assetsToDownload.length} assets`);

// Download Helper
async function downloadFile(url, dest) {
  return new Promise((resolve, reject) => {
    const fullDest = path.join(ROOT_DIR, dest);
    const file = fs.createWriteStream(fullDest);
    
    const request = https.get(url, {
      headers: {
        'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
      }
    }, response => {
      if (response.statusCode >= 300 && response.statusCode < 400 && response.headers.location) {
        return downloadFile(response.headers.location, dest).then(resolve).catch(reject);
      }
      if (response.statusCode !== 200) {
        return reject(new Error(`Failed to download ${url}: status code ${response.statusCode}`));
      }
      response.pipe(file);
      file.on('finish', () => {
        file.close(() => {
          console.log(`Downloaded: ${dest} (${fs.statSync(fullDest).size} bytes)`);
          resolve();
        });
      });
    });

    request.on('error', err => {
      fs.unlink(fullDest, () => {});
      reject(err);
    });
  });
}

async function runDownloads() {
  console.log('\n--- Starting Asset Downloads ---');
  for (const asset of assetsToDownload) {
    try {
      await downloadFile(asset.url, asset.localPath);
    } catch (err) {
      console.error(`Error downloading ${asset.name}:`, err.message);
    }
  }
  console.log('\n--- Asset Downloads Completed Successfully ---');
}

runDownloads();
