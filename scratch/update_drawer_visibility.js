const fs = require('fs');
const path = require('path');

const DRAWER_PATH = path.join(__dirname, '..', 'app', 'views', 'layouts', 'drawer.php');
let content = fs.readFileSync(DRAWER_PATH, 'utf8');

// Add visibility override to drawer CSS
const visibilityOverride = `
  #elementor-popup-modal-166 .popup-stagger .elementor-widget-image,
  #elementor-popup-modal-166 .popup-stagger .elementor-widget-heading,
  #elementor-popup-modal-166[aria-hidden="false"] .popup-stagger .elementor-widget-image,
  #elementor-popup-modal-166[aria-hidden="false"] .popup-stagger .elementor-widget-heading,
  #elementor-popup-modal-166.is-open .popup-stagger .elementor-widget-image,
  #elementor-popup-modal-166.is-open .popup-stagger .elementor-widget-heading {
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
  }
`;

content = content.replace('/* Standalone Header Menu Drawer */', `/* Standalone Header Menu Drawer */\n${visibilityOverride}`);
fs.writeFileSync(DRAWER_PATH, content, 'utf8');
console.log('✅ Added explicit opacity: 1 !important to drawer items!');
