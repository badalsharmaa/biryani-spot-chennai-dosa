const fs = require('fs');
const path = require('path');

const HOME_VIEW = path.join(__dirname, '..', 'app', 'views', 'home', 'index.php');
const KHUFUS_THEME_CSS = path.join(__dirname, '..', 'public', 'assets', 'css', 'khufus-theme.css');
const POST_1536_CSS = path.join(__dirname, '..', 'public', 'assets', 'css', 'elementor', 'post-1536.css');

// 1. Update app/views/home/index.php
let homeContent = fs.readFileSync(HOME_VIEW, 'utf8');

const gradientCss = `<style id="custom-why-sec-gradient">
  /* Section 2 & 3: Why Cards Container - Solid #DAB79F */
  div.elementor-element-a38dd6e,
  .elementor-element.elementor-element-a38dd6e,
  [data-id="a38dd6e"] {
    background-color: #DAB79F !important;
    background: #DAB79F !important;
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

  /* Section 03: Recognition Section - starts with #DAB79F above, transitions to white #FFFFFF from half section */
  div.elementor-element-e58559a,
  .elementor-element.elementor-element-e58559a,
  [data-id="e58559a"] {
    background: linear-gradient(180deg, #DAB79F 0%, #DAB79F 35%, #FFFFFF 75%, #FFFFFF 100%) !important;
    background-color: transparent !important;
  }

  /* Polaroid Slider & 3D Gallery Sections below: White canvas */
  div.elementor-element-69bf7a3,
  div.elementor-element-b408a9f,
  div.elementor-element-cf05877,
  div.elementor-element-c6d4a00,
  [data-id="69bf7a3"],
  [data-id="b408a9f"],
  [data-id="cf05877"],
  [data-id="c6d4a00"] {
    background-color: #FFFFFF !important;
    background: #FFFFFF !important;
  }
</style>`;

if (homeContent.includes('id="custom-why-sec-gradient"')) {
  homeContent = homeContent.replace(/<style id="custom-why-sec-gradient">[\s\S]*?<\/style>/, gradientCss.trim());
} else {
  homeContent = homeContent.replace('<section class="khf-why-sec"', `${gradientCss}\n<section class="khf-why-sec"`);
}

fs.writeFileSync(HOME_VIEW, homeContent, 'utf8');

// 2. Append to khufus-theme.css
let themeCss = fs.readFileSync(KHUFUS_THEME_CSS, 'utf8');
if (!themeCss.includes('/* Final Section 03 Gradient Rules */')) {
  themeCss += `\n\n/* Final Section 03 Gradient Rules */
div.elementor-element-a38dd6e, [data-id="a38dd6e"] {
  background-color: #DAB79F !important;
  background: #DAB79F !important;
}
div.elementor-element-e58559a, [data-id="e58559a"] {
  background: linear-gradient(180deg, #DAB79F 0%, #DAB79F 35%, #FFFFFF 75%, #FFFFFF 100%) !important;
  background-color: transparent !important;
}
div.elementor-element-69bf7a3, div.elementor-element-b408a9f, [data-id="69bf7a3"], [data-id="b408a9f"] {
  background-color: #FFFFFF !important;
  background: #FFFFFF !important;
}\n`;
  fs.writeFileSync(KHUFUS_THEME_CSS, themeCss, 'utf8');
}

console.log('✅ Permanent CSS rules for Section 03 gradient applied to home view and khufus-theme.css!');
