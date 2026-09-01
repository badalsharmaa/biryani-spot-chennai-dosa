const fs = require('fs');
const path = require('path');

const HEADER_VIEW = path.join(__dirname, '..', 'app', 'views', 'layouts', 'header.php');
let content = fs.readFileSync(HEADER_VIEW, 'utf8');

// 1. Fix srcset on the 3 Drawer image cards
content = content.replace(
  /<img width="1024" height="674" src="\/assets\/images\/google_maps\/dublin\/store_interior_and_vibe\/dublin_interior_dining_01\.jpg"[\s\S]*?\/>/,
  `<img width="1024" height="674" src="/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_interior_dining_01.jpg" alt="Dining Room Reservations" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;" />`
);

content = content.replace(
  /<img width="1024" height="683" src="\/assets\/images\/google_maps\/milpitas\/dosas_and_tiffin\/milpitas_crispy_dosa_04\.jpg"[\s\S]*?\/>/,
  `<img width="1024" height="683" src="/assets/images/google_maps/milpitas/dosas_and_tiffin/milpitas_crispy_dosa_04.jpg" alt="Crispy Dosa Craft" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;" />`
);

content = content.replace(
  /<img width="1024" height="684" src="\/assets\/images\/google_maps\/dublin\/biryani_specials\/dublin_dum_biryani_43\.jpg"[\s\S]*?\/>/,
  `<img width="1024" height="684" src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_22.jpg" alt="Dum Biryani & Thali Platter" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;" />`
);

// 2. Add explicit display: block rule for is-open in #custom-menu-drawer-css
content = content.replace(
  /#elementor-popup-modal-166\.is-open \{[\s\S]*?\}/,
  `#elementor-popup-modal-166.is-open {
    opacity: 1 !important;
    pointer-events: auto !important;
    transform: translateY(0) !important;
  }
  #elementor-popup-modal-166.is-open .elementor-location-popup,
  #elementor-popup-modal-166.is-open [data-elementor-type="popup"],
  #elementor-popup-modal-166.is-open .elementor-166 {
    display: block !important;
  }`
);

fs.writeFileSync(HEADER_VIEW, content, 'utf8');
console.log('✅ Finalized drawer images, display rules, and scripts in header.php!');
