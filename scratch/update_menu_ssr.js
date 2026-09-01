const fs = require('fs');
const path = require('path');

const MENU_VIEW_PATH = path.join(__dirname, '..', 'app', 'views', 'menu', 'index.php');
let content = fs.readFileSync(MENU_VIEW_PATH, 'utf8');

// Update Featured Title & Meta SSR
content = content.replace(
  /<span class="js-title-words"><span class="kh-featured-title-line">.*?<\/span><span class="kh-featured-title-line">.*?<\/span><span class="kh-featured-title-line">.*?<\/span><\/span>/,
  '<span class="js-title-words"><span class="kh-featured-title-line">Vijayawada</span><span class="kh-featured-title-line">Special</span><span class="kh-featured-title-line">Biryani</span></span>'
);

content = content.replace(
  /<span class="kh-featured-menu-label js-menu">Breakfast<\/span>/,
  '<span class="kh-featured-menu-label js-menu">Royal Dum</span>'
);

content = content.replace(
  /<span class="kh-featured-date js-date">Set<\/span>/,
  '<span class="kh-featured-date js-date">Signature</span>'
);

content = content.replace(
  /<div class="kh-featured-slide is-active"><img decoding="async" src=".*?" alt=".*?"><\/div>/,
  '<div class="kh-featured-slide is-active"><img decoding="async" src="/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg" alt="Vijayawada Special Biryani"></div>'
);

content = content.replace(
  /<div class="kh-featured-desc js-desc">.*?<\/div>/,
  '<div class="kh-featured-desc js-desc">Aromatic basmati rice tossed with rich whole spices, topped with spicy boneless chicken gravy cooked in traditional Andhra style. Served with cooling raitha and mirchi ka salan.</div>'
);

// Update Accordion Tabs SSR
content = content.replace(
  /<article class="kh-menu-item is-active\s*" data-book-key="breakfast">[\s\S]*?<\/article>/,
  `<article class="kh-menu-item is-active" data-book-key="biryanis">
        <button class="kh-menu-trigger" type="button" aria-expanded="true">
          <div class="kh-menu-trigger-inner">
            <div class="kh-menu-title-wrap"><h2 class="kh-menu-title">ROYAL BIRYANIS</h2></div>
            <div class="kh-menu-cta-wrap"><div class="kh-menu-cta"><span class="kh-menu-cta-icon">→</span><span class="kh-menu-cta-text"><span class="kh-menu-cta-label">Explore</span><span class="kh-menu-cta-star"></span><span>Dum Specialties</span></span><span class="kh-menu-cta-line"></span></div></div>
          </div>
        </button>
        <div class="kh-menu-panel"><div class="kh-menu-panel-inner"><div class="kh-menu-panel-content"><div class="kh-book-layout"><div class="kh-book-col"><div class="kh-book" data-book="biryanis"></div></div><div class="kh-detail-col"><div class="kh-detail-stage" data-detail="biryanis"></div></div></div></div></div></div>
      </article>`
);

content = content.replace(
  /<article class="kh-menu-item\s*" data-book-key="lunch">[\s\S]*?<\/article>/,
  `<article class="kh-menu-item" data-book-key="dosas">
        <button class="kh-menu-trigger" type="button" aria-expanded="false">
          <div class="kh-menu-trigger-inner">
            <div class="kh-menu-title-wrap"><h2 class="kh-menu-title">CHENNAI DOSAS</h2></div>
            <div class="kh-menu-cta-wrap"><div class="kh-menu-cta"><span class="kh-menu-cta-icon">→</span><span class="kh-menu-cta-text"><span class="kh-menu-cta-label">Explore</span><span class="kh-menu-cta-star"></span><span>Crispy Tiffins</span></span><span class="kh-menu-cta-line"></span></div></div>
          </div>
        </button>
        <div class="kh-menu-panel"><div class="kh-menu-panel-inner"><div class="kh-menu-panel-content"><div class="kh-book-layout"><div class="kh-book-col"><div class="kh-book" data-book="dosas"></div></div><div class="kh-detail-col"><div class="kh-detail-stage" data-detail="dosas"></div></div></div></div></div></div>
      </article>`
);

content = content.replace(
  /<article class="kh-menu-item\s*kh-menu-item--text-only kh-menu-item--pdf-only" data-book-key="beverages">[\s\S]*?<\/article>/,
  `<article class="kh-menu-item" data-book-key="curries">
        <button class="kh-menu-trigger" type="button" aria-expanded="false">
          <div class="kh-menu-trigger-inner">
            <div class="kh-menu-title-wrap"><h2 class="kh-menu-title">CURRIES & APPETIZERS</h2></div>
            <div class="kh-menu-cta-wrap"><div class="kh-menu-cta"><span class="kh-menu-cta-icon">→</span><span class="kh-menu-cta-text"><span class="kh-menu-cta-label">Explore</span><span class="kh-menu-cta-star"></span><span>Rich Gravies & Starters</span></span><span class="kh-menu-cta-line"></span></div></div>
          </div>
        </button>
        <div class="kh-menu-panel"><div class="kh-menu-panel-inner"><div class="kh-menu-panel-content"><div class="kh-book-layout"><div class="kh-book-col"><div class="kh-book" data-book="curries"></div></div><div class="kh-detail-col"><div class="kh-detail-stage" data-detail="curries"></div></div></div></div></div></div>
      </article>`
);

fs.writeFileSync(MENU_VIEW_PATH, content, 'utf8');
console.log('✅ Updated menu SSR markup with Royal Biryanis, Chennai Dosas, and Curries!');
