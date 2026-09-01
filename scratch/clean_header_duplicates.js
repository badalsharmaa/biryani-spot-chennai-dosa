const fs = require('fs');
const path = require('path');

const HEADER_PATH = path.join(__dirname, '..', 'app', 'views', 'layouts', 'header.php');
let content = fs.readFileSync(HEADER_PATH, 'utf8');

// 1. Remove duplicate #custom-menu-drawer-css from header.php if present
content = content.replace(/<style id="custom-menu-drawer-css">[\s\S]*?<\/style>/g, '');

// 2. In .elementor-element-0f99354, only keep the wrapper and lottie-toggle div
const toggleMarkup = `<div class="lottie-wrapper" style="position: relative; height: 50px; overflow: visible;">
  <div id="lottie-toggle" style="position: absolute; right: -40px; width: 90px; height: 50px; cursor: pointer;"></div>
</div>`;

const targetSection = /<div class="elementor-element elementor-element-0f99354 elementor-widget elementor-widget-html"[\s\S]*?<\/header>/;
const replacement = `<div class="elementor-element elementor-element-0f99354 elementor-widget elementor-widget-html" data-id="0f99354" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					${toggleMarkup}
				</div>
				</div>
				</div>
				</header>`;

content = content.replace(targetSection, replacement);
fs.writeFileSync(HEADER_PATH, content, 'utf8');
console.log('✅ Cleaned up header.php duplicates!');
