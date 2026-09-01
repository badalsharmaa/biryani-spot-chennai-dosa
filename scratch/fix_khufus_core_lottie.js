const fs = require('fs');
const path = require('path');

const CORE_PATH = path.join(__dirname, '..', 'public', 'assets', 'js', 'khufus-core.js');
let content = fs.readFileSync(CORE_PATH, 'utf8');

// Replace old initLottieMenu in khufus-core.js to let BiryaniDrawer handle it exclusively
const oldFunc = /function initLottieMenu\(\) \{[\s\S]*?function initCustomPopups/;
const newFunc = `function initLottieMenu() {
  // Handled cleanly by BiryaniDrawer in layouts/drawer.php
}

function initCustomPopups`;

content = content.replace(oldFunc, newFunc);
fs.writeFileSync(CORE_PATH, content, 'utf8');
console.log('✅ Disabled conflicting initLottieMenu in khufus-core.js!');
