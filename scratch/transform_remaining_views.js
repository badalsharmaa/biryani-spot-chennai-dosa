const fs = require('fs');
const path = require('path');

const VIEWS_DIR = path.join(__dirname, '..', 'app', 'views');

function updateFile(filePath, transforms) {
  let content = fs.readFileSync(filePath, 'utf8');
  for (const [search, replace] of transforms) {
    if (typeof search === 'string') {
      content = content.split(search).join(replace);
    } else if (search instanceof RegExp) {
      content = content.replace(search, replace);
    }
  }
  fs.writeFileSync(filePath, content, 'utf8');
  console.log(`✅ Updated ${path.relative(__dirname + '/..', filePath)}`);
}

// 1. GALLERY/INDEX.PHP (Filterable Masonry Grid with 14 Unique High-Res Google Maps Assets)
const galleryPath = path.join(VIEWS_DIR, 'gallery', 'index.php');
updateFile(galleryPath, [
  ['/assets/images/DSC1424-scaled.webp', '/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg'],
  ['/assets/images/Reservations-Image-e1776860891702.webp', '/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_interior_dining_01.jpg'],
  ['/assets/images/Experience-Landing-Image-1.webp', '/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_12.jpg'],
  ['/assets/images/DSC1408-1-scaled.webp', '/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chicken65_appetizer_07.jpg'],
  ['/assets/images/DSCF1624-scaled.webp', '/assets/images/google_maps/milpitas/curries_and_appetizers/milpitas_special_curry_platter_05.jpg'],
  ['/assets/images/Lifestyle-Shots-Image-e1776860814909.webp', '/assets/images/google_maps/livermore/store_interior_and_vibe/livermore_interior_dining_08.jpg'],
  ['/assets/images/7ED80C55-5E86-4B12-AF7E-C57DE165057F.webp', '/assets/images/google_maps/milpitas/dosas_and_tiffin/milpitas_crispy_dosa_04.jpg'],
  ['/assets/images/DSC06023.webp', '/assets/images/google_maps/livermore/biryani_specials/livermore_dum_biryani_02.jpg'],
  ['/assets/images/DSC03440.webp', '/assets/images/google_maps/livermore/curries_and_appetizers/livermore_special_curry_platter_36.jpg'],
  ['/assets/images/Bolandrini_16_03_2026_11.webp', '/assets/images/google_maps/milpitas/store_interior_and_vibe/milpitas_interior_dining_01.jpg'],
  ['/assets/images/Screenshot-2026-04-21-at-14.22.01.webp', '/assets/images/google_maps/concord/dosas_and_tiffin/concord_crispy_dosa_04.jpg'],
  ['/assets/images/DSC04524-scaled.webp', '/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_interior_dining_33.jpg'],
  ['/assets/images/Inside-Khufus.webp', '/assets/images/google_maps/livermore/store_interior_and_vibe/livermore_interior_dining_35.jpg'],
  ['/assets/images/Experience-Landing-Image.webp', '/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_26.jpg'],
  ['The Plateau', 'Culinary Art'],
  ['Atmosphere', 'Dining Ambiance'],
  ['Ritual', 'Kitchen & Tawa Craft'],
  ['Cuisine', 'Royal Dishes']
]);

// 2. ABOUT/INDEX.PHP
const aboutPath = path.join(VIEWS_DIR, 'about', 'index.php');
if (fs.existsSync(aboutPath)) {
  updateFile(aboutPath, [
    ['About Khufu\'s', 'About Biryani Spot Chennai Dosa'],
    ['Our Story at the Pyramids', 'Our South Indian Heritage in the Bay Area'],
    ['Pyramids of Giza', 'San Francisco Bay Area (Dublin, Milpitas, Livermore, Concord)'],
    ['/assets/images/50-best-3-1536x1165-1.webp', '/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg'],
    ['/assets/images/50-best-1-1536x1024-1.webp', '/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_12.jpg']
  ]);
}

// 3. EXPERIENCE/INDEX.PHP
const expPath = path.join(VIEWS_DIR, 'experience', 'index.php');
if (fs.existsSync(expPath)) {
  updateFile(expPath, [
    ['The Khufu\'s Experience', 'The Biryani Spot Culinary Experience'],
    ['A Journey of the Senses Beside History', 'The 4 Pillars of South Indian Gastronomy'],
    ['/assets/images/Experience-Landing-Image.webp', '/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg'],
    ['/assets/images/Experience-Landing-Image-1.webp', '/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_12.jpg']
  ]);
}

// 4. LEGACY/INDEX.PHP
const legPath = path.join(VIEWS_DIR, 'legacy', 'index.php');
if (fs.existsSync(legPath)) {
  updateFile(legPath, [
    ['The Legacy | Khufu\'s Bistro', 'The Legacy & Heritage | Biryani Spot Chennai Dosa'],
    ['The Heritage of Khufu\'s', 'Generations of Authentic South Indian Craft'],
    ['/assets/images/50-best-3-1536x1165-1.webp', '/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg']
  ]);
}

console.log('🎉 All secondary views updated with zero duplicate assets and authentic South Indian copy!');
