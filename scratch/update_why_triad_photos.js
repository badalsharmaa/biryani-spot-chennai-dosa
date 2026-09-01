const fs = require('fs');
const path = require('path');

const HOME_VIEW = path.join(__dirname, '..', 'app', 'views', 'home', 'index.php');
let content = fs.readFileSync(HOME_VIEW, 'utf8');

// Update section subhead text
content = content.replace(
  /<p>Set beneath an ancient skyline, interpreted through a modern lens\. A New Standard in Elevated Egyptian Dining<\/p>/g,
  '<p>Rooted in centuries of royal South Indian culinary heritage, crafted for the modern table across the Bay Area.</p>'
);

// Update 3 Cards photos
// Card 1: Dum Biryani
content = content.replace(
  /<article class="khf-why-panel khf-why-panel--1" data-speed="0\.25">\s*<img decoding="async" src=".*?" alt=".*?">/s,
  `<article class="khf-why-panel khf-why-panel--1" data-speed="0.25">\n      <img decoding="async" src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_25.jpg" alt="Royal Dum Biryani">`
);

// Card 2: South Indian Feast / Tiffin Thali
content = content.replace(
  /<article class="khf-why-panel khf-why-panel--2" data-speed="0\.35">\s*<img decoding="async" src=".*?">/s,
  `<article class="khf-why-panel khf-why-panel--2" data-speed="0.35">\n      <img decoding="async" src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_09.jpg" alt="South Indian Thali & Tiffin">`
);

// Card 3: Chettinad Spices & Chicken 65
content = content.replace(
  /<article class="khf-why-panel khf-why-panel--3" data-speed="0\.28">\s*<img decoding="async" src=".*?">/s,
  `<article class="khf-why-panel khf-why-panel--3" data-speed="0.28">\n      <img decoding="async" src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chicken65_appetizer_76.jpg" alt="Chettinad Spices & Starters">`
);

fs.writeFileSync(HOME_VIEW, content, 'utf8');
console.log('✅ Updated Triad photos with professional food photography and updated section subhead!');
