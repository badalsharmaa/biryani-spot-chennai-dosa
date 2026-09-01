const fs = require('fs');
const path = require('path');

const DRAWER_PATH = path.join(__dirname, '..', 'app', 'views', 'layouts', 'drawer.php');
let content = fs.readFileSync(DRAWER_PATH, 'utf8');

// Replace initialization with strictly idempotent logic
const target = `document.addEventListener("DOMContentLoaded", function(){
  const toggleEl = document.getElementById("lottie-toggle");
  const modal = document.getElementById("elementor-popup-modal-166");
  if (!toggleEl || !modal) return;`;

const replacement = `function initBiryaniDrawer() {
  const toggleEl = document.getElementById("lottie-toggle");
  const modal = document.getElementById("elementor-popup-modal-166");
  if (!toggleEl || !modal || toggleEl.dataset.initialized === "true") return;
  toggleEl.dataset.initialized = "true";
  toggleEl.innerHTML = "";`;

content = content.replace(target, replacement);
content = content.replace(
  `  window.BiryaniDrawer = {
    open: openDrawer,
    close: closeDrawer,
    toggle: toggleDrawer,
    isOpen: () => isOpen
  };
});`,
  `  window.BiryaniDrawer = {
    open: openDrawer,
    close: closeDrawer,
    toggle: toggleDrawer,
    isOpen: () => isOpen
  };
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initBiryaniDrawer);
} else {
  initBiryaniDrawer();
}`
);

fs.writeFileSync(DRAWER_PATH, content, 'utf8');
console.log('✅ Made drawer initialization strictly idempotent!');
