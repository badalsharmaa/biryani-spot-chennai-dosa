const fs = require('fs');
const path = require('path');

const HOME_VIEW = path.join(__dirname, '..', 'app', 'views', 'home', 'index.php');
let content = fs.readFileSync(HOME_VIEW, 'utf8');

// 1. Replace slideImages and slides in expRight script
const oldSlideImagesRegex = /const slideImages = \{[\s\S]*?\};[\s\S]*?const slides = \[[\s\S]*?\];/;
const newSlidesCode = `const slideImages = {
    mena50Best: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_22.jpg",
    resyOneToWatch: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_09.jpg",
    laListeHiddenGem: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chicken65_appetizer_76.jpg",
    laListeBestAfrica: "/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_interior_dining_01.jpg"
  };

  const slides = [
    {
      title: "4.4★ ON GOOGLE REVIEWS",
      text: "Celebrated across Dublin, Milpitas, Livermore, and Concord with over 4,500+ verified ratings praising our authentic Dum Biryanis and crispy tiffins.",
      imageKey: "mena50Best"
    },
    {
      title: "TOP BAY AREA BIRYANI DESTINATION",
      text: "Recognized as a premier Silicon Valley hotspot for authentic Hyderabadi Dum cooking, slow-cooked in traditional dough-sealed handis.",
      imageKey: "resyOneToWatch"
    },
    {
      title: "AUTHENTIC CHENNAI DOSA CRAFT",
      text: "Naturally fermented stone-ground batter swirled paper-thin on smoking cast-iron tawas and roasted with pure golden ghee.",
      imageKey: "laListeHiddenGem"
    },
    {
      title: "PREMIER CATERING PARTNER",
      text: "Trusted for corporate events, tech campus catering, and grand family celebrations across the entire San Francisco Bay Area.",
      imageKey: "laListeBestAfrica"
    }
  ];`;

content = content.replace(oldSlideImagesRegex, newSlidesCode);

// 2. Ensure custom-why-sec-gradient has correct flow:
// - a38dd6e (Why cards) = #DAB79F
// - e58559a (03 Recognition) = starts at #DAB79F, becomes white #FFFFFF from half section down
// - 69bf7a3, b408a9f, cf05877 = #FFFFFF
const styleBlock = `<style id="custom-why-sec-gradient">
  /* Section 2 & 3: Why Cards Container */
  .elementor-1536 .elementor-element.elementor-element-a38dd6e,
  .elementor-1536 .elementor-element.elementor-element-a38dd6e:not(.elementor-motion-effects-element-type-background),
  .elementor-1536 .elementor-element.elementor-element-a38dd6e > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background: #DAB79F !important;
    background-color: #DAB79F !important;
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

  /* Section 03: Recognition Section - starts with #DAB79F above, transitions to white from half section */
  .elementor-1536 .elementor-element.elementor-element-e58559a,
  .elementor-1536 .elementor-element.elementor-element-e58559a:not(.elementor-motion-effects-element-type-background),
  .elementor-1536 .elementor-element.elementor-element-e58559a > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background: linear-gradient(180deg, #DAB79F 0%, #DAB79F 35%, #FFFFFF 75%, #FFFFFF 100%) !important;
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
</style>`;

if (content.includes('id="custom-why-sec-gradient"')) {
  content = content.replace(/<style id="custom-why-sec-gradient">[\s\S]*?<\/style>/, styleBlock);
}

fs.writeFileSync(HOME_VIEW, content, 'utf8');
console.log('✅ Updated expRight slider slides and Section 03 gradient!');
