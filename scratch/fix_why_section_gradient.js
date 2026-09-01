const fs = require('fs');
const path = require('path');

const HOME_VIEW = path.join(__dirname, '..', 'app', 'views', 'home', 'index.php');
const KHUFUS_THEME_CSS = path.join(__dirname, '..', 'public', 'assets', 'css', 'khufus-theme.css');
const POST_1536_CSS = path.join(__dirname, '..', 'public', 'assets', 'css', 'elementor', 'post-1536.css');

// 1. Update app/views/home/index.php
let homeContent = fs.readFileSync(HOME_VIEW, 'utf8');

// Replace old pyramid image in Card 1
homeContent = homeContent.replace(
  /<img decoding="async" src="\/assets\/images\/Pyramids-Backdrop\.webp">/g,
  '<img decoding="async" src="/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg" alt="Authentic Dum Biryani">'
);

// Update inline CSS in home/index.php for khf-why-sec to remove any white box and ensure clean background
homeContent = homeContent.replace(
  /\.khf-why-panel--1 img\{\s*filter:grayscale\(\.78\) saturate\(\.45\);\s*\}/g,
  '.khf-why-panel--1 img{ filter:none; }'
);

// Add custom style override for Section 3 container gradient and removing white sub-box
const gradientStyleTag = `
<style id="custom-why-sec-gradient">
  .elementor-1536 .elementor-element.elementor-element-a38dd6e,
  .elementor-1536 .elementor-element.elementor-element-a38dd6e:not(.elementor-motion-effects-element-type-background),
  .elementor-1536 .elementor-element.elementor-element-a38dd6e > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background: linear-gradient(180deg, #DAB79F 0%, #DAB79F 30%, #5C472B 70%, #241810 100%) !important;
    background-color: transparent !important;
  }
  .khf-why-sec {
    background: transparent !important;
    background-color: transparent !important;
    box-shadow: none !important;
    border: none !important;
  }
  .khf-why-panel--1 img {
    filter: none !important;
  }
</style>
`;

if (!homeContent.includes('id="custom-why-sec-gradient"')) {
  homeContent = homeContent.replace('</head>', `${gradientStyleTag}\n</head>`);
  if (!homeContent.includes('id="custom-why-sec-gradient"')) {
    // If no </head>, insert before section
    homeContent = homeContent.replace('<section class="khf-why-sec"', `${gradientStyleTag}\n<section class="khf-why-sec"`);
  }
}

fs.writeFileSync(HOME_VIEW, homeContent, 'utf8');

// 2. Update public/assets/css/khufus-theme.css
let themeCss = fs.readFileSync(KHUFUS_THEME_CSS, 'utf8');
themeCss = themeCss.replace(
  /\.khf-why-sec\s*\{[\s\S]*?background-color:\s*var\(--color-cream\);[\s\S]*?\}/,
  `.khf-why-sec {\n  width: 100%;\n  padding: 80px 48px 120px;\n  background: transparent !important;\n  background-color: transparent !important;\n  overflow: hidden;\n}`
);
fs.writeFileSync(KHUFUS_THEME_CSS, themeCss, 'utf8');

// 3. Update public/assets/css/elementor/post-1536.css
let postCss = fs.readFileSync(POST_1536_CSS, 'utf8');
postCss = postCss.replace(
  /\.elementor-1536 \.elementor-element\.elementor-element-a38dd6e:not\(\.elementor-motion-effects-element-type-background\)[^{]*\{background-color:#DAB79F;\}/g,
  '.elementor-1536 .elementor-element.elementor-element-a38dd6e:not(.elementor-motion-effects-element-type-background), .elementor-1536 .elementor-element.elementor-element-a38dd6e > .elementor-motion-effects-container > .elementor-motion-effects-layer{background:linear-gradient(180deg, #DAB79F 0%, #DAB79F 30%, #5C472B 70%, #241810 100%) !important;}'
);
fs.writeFileSync(POST_1536_CSS, postCss, 'utf8');

console.log('✅ Successfully removed white sub-box, fixed Card 1 image, and applied top-to-bottom background gradient!');
