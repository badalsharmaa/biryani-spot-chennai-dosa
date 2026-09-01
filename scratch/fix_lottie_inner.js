const fs = require('fs');
const path = require('path');

const DRAWER_PATH = path.join(__dirname, '..', 'app', 'views', 'layouts', 'drawer.php');
let content = fs.readFileSync(DRAWER_PATH, 'utf8');

// Ensure toggleEl is emptied before loadAnimation
content = content.replace(
  'if (window.lottie) {',
  'if (window.lottie) {\n    toggleEl.innerHTML = "";'
);

fs.writeFileSync(DRAWER_PATH, content, 'utf8');
console.log('✅ Added toggleEl.innerHTML = "" before loadAnimation!');
