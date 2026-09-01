const fs = require('fs');
const path = require('path');

const HOME_VIEW = path.join(__dirname, '..', 'app', 'views', 'home', 'index.php');
const KHUFUS_THEME_CSS = path.join(__dirname, '..', 'public', 'assets', 'css', 'khufus-theme.css');
const POST_1536_CSS = path.join(__dirname, '..', 'public', 'assets', 'css', 'elementor', 'post-1536.css');

let content = fs.readFileSync(HOME_VIEW, 'utf8');

// 1. Update Section 03 Text Copy in home/index.php
content = content.replace(
  /<div class="kh-rec-kicker-only">\s*GLOBAL RECOGNITION\s*<\/div>/s,
  `<div class="kh-rec-kicker-only">\n      BAY AREA RECOGNITION\n    </div>`
);

content = content.replace(
  /<h2 class="kh-rec-title-only">\s*A PLACE THE WORLD<br>\s*TOOK NOTE OF\s*<span class="kh-rec-script-only">Recognition With Substance<\/span>\s*<\/h2>/s,
  `<h2 class="kh-rec-title-only">\n      A TASTE THE BAY AREA<br>\n      FELL IN LOVE WITH\n      <span class="kh-rec-script-only">Celebrated Across 4 Locations</span>\n    </h2>`
);

content = content.replace(
  /<p class="kh-rec-text-only">\s*In a setting shaped by millennia[\s\S]*?<\/p>/s,
  `<p class="kh-rec-text-only">\n      From Dublin and Livermore to Milpitas and Concord, Biryani Spot &amp; Chennai Dosa has earned acclaim as the Bay Area's premier destination for authentic Hyderabadi Dum Biryanis and crispy Chennai Dosas—crafted with traditional stone-ground masalas, fragrant basmati, and 100% halal meats.\n    </p>`
);

content = content.replace(
  /<p class="kh-rec-note-only">\s*From Cairo to global stages[\s\S]*?<\/p>/s,
  `<p class="kh-rec-note-only">\n      Over 4,500+ five-star guest reviews across Silicon Valley and the East Bay celebrating authentic spice, warmth, and culinary heritage.\n    </p>`
);

// Update Section 04 3D Gallery intro copy
content = content.replace(
  /<p data-start="150" data-end="391">[\s\S]*?<\/p>/s,
  `<p>Across Dublin, Livermore, Milpitas, and Concord, Biryani Spot Chennai Dosa brings the authentic warmth of South Indian hospitality to life. Every steaming handi of dum biryani and golden, paper-thin dosa is crafted with time-honored techniques, freshly roasted spices, and the finest halal meats.</p>`
);

content = content.replace(
  /<h2 class="khx-mobile-title">\s*The Khufu’s\s*<br>Experience\s*<span class="khx-mobile-script">moments held in frame<\/span>\s*<\/h2>/s,
  `<h2 class="khx-mobile-title">\n      The Culinary\n      <br>Experience\n      <span class="khx-mobile-script">moments held in frame</span>\n    </h2>`
);

content = content.replace(
  /<p class="khx-mobile-text">\s*A visual passage through Khufu’s[\s\S]*?<\/p>/s,
  `<p class="khx-mobile-text">\n      A visual passage through Biryani Spot Chennai Dosa, where atmosphere, craft, and royal flavors come together in moments shared around the table.\n    </p>`
);

// 2. Update CSS background colors & gradients
// Section a38dd6e (Why Cards) = solid #DAB79F (same color)
// Section e58559a (03 Recognition) = starts with #DAB79F, transitions to white #FFFFFF at half section
// Section 69bf7a3, b408a9f (Polaroid & Gallery) = solid #FFFFFF

const updatedStyleTag = `
<style id="custom-why-sec-gradient">
  /* Section 2 & 3: Why Cards Container */
  .elementor-1536 .elementor-element.elementor-element-a38dd6e,
  .elementor-1536 .elementor-element.elementor-element-a38dd6e:not(.elementor-motion-effects-element-type-background),
  .elementor-1536 .elementor-element.elementor-element-a38dd6e > .elementor-motion-effects-container > .elementor-motion-effects-layer {
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

  /* Section 03: Global Recognition with top same color (#DAB79F) and bottom half white (#FFFFFF) */
  .elementor-1536 .elementor-element.elementor-element-e58559a,
  .elementor-1536 .elementor-element.elementor-element-e58559a:not(.elementor-motion-effects-element-type-background),
  .elementor-1536 .elementor-element.elementor-element-e58559a > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background: linear-gradient(180deg, #DAB79F 0%, #DAB79F 40%, #FFFFFF 85%, #FFFFFF 100%) !important;
    background-color: transparent !important;
  }

  /* Polaroid Slider & 3D Gallery Sections below: White canvas */
  .elementor-1536 .elementor-element.elementor-element-69bf7a3,
  .elementor-1536 .elementor-element.elementor-element-b408a9f,
  .elementor-1536 .elementor-element.elementor-element-cf05877,
  .elementor-1536 .elementor-element.elementor-element-c6d4a00 {
    background-color: #FFFFFF !important;
    background: #FFFFFF !important;
  }
</style>
`;

if (content.includes('id="custom-why-sec-gradient"')) {
  content = content.replace(/<style id="custom-why-sec-gradient">[\s\S]*?<\/style>/, updatedStyleTag.trim());
} else {
  content = content.replace('<section class="khf-why-sec"', `${updatedStyleTag}\n<section class="khf-why-sec"`);
}

fs.writeFileSync(HOME_VIEW, content, 'utf8');

// 3. Update public/assets/css/elementor/post-1536.css
let postCss = fs.readFileSync(POST_1536_CSS, 'utf8');

// a38dd6e solid #DAB79F
postCss = postCss.replace(
  /\.elementor-1536 \.elementor-element\.elementor-element-a38dd6e:not\(\.elementor-motion-effects-element-type-background\)[\s\S]*?background-color:[^;]+;/g,
  '.elementor-1536 .elementor-element.elementor-element-a38dd6e:not(.elementor-motion-effects-element-type-background), .elementor-1536 .elementor-element.elementor-element-a38dd6e > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#DAB79F;}'
);

// e58559a gradient from #DAB79F to #FFFFFF
postCss = postCss.replace(
  /\.elementor-1536 \.elementor-element\.elementor-element-e58559a:not\(\.elementor-motion-effects-element-type-background\)[\s\S]*?background-image:linear-gradient\([^;]+\);/g,
  '.elementor-1536 .elementor-element.elementor-element-e58559a:not(.elementor-motion-effects-element-type-background), .elementor-1536 .elementor-element.elementor-element-e58559a > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:transparent;background-image:linear-gradient(180deg, #DAB79F 0%, #DAB79F 40%, #FFFFFF 85%, #FFFFFF 100%);}'
);

fs.writeFileSync(POST_1536_CSS, postCss, 'utf8');

console.log('✅ Section 03 recognition copy updated and smooth gradient from #DAB79F to #FFFFFF applied!');
