const fs = require('fs');
const path = require('path');

const HEADER_VIEW = path.join(__dirname, '..', 'app', 'views', 'layouts', 'header.php');
let content = fs.readFileSync(HEADER_VIEW, 'utf8');

// Replace card 2 with dublin_special_curry_platter_09.jpg
content = content.replace(
  /\/assets\/images\/google_maps\/milpitas\/dosas_and_tiffin\/milpitas_crispy_dosa_04\.jpg/g,
  '/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_09.jpg'
);

fs.writeFileSync(HEADER_VIEW, content, 'utf8');
console.log('✅ Card 2 updated with authentic Thali food photo!');
