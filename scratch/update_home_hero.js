const fs = require('fs');
const path = require('path');

const HOME_VIEW_PATH = path.join(__dirname, '..', 'app', 'views', 'home', 'index.php');
let content = fs.readFileSync(HOME_VIEW_PATH, 'utf8');

// Replace Hero Desktop & Mobile Titles
content = content.replace(
  /<span class="khf-line-inner">\s*WHERE THE SETTING\s*<\/span>\s*<\/span>\s*<span class="khf-line">\s*<span class="khf-line-inner">\s*BECOMES PART OF THE <em>TABLE<\/em>\s*<\/span>/s,
  `<span class="khf-line-inner">\n        THE ROYAL ART OF\n      </span>\n    </span>\n    <span class="khf-line">\n      <span class="khf-line-inner">\n        DUM BIRYANI & <em>CRISPY DOSAS</em>\n      </span>`
);

content = content.replace(
  /<span class="khf-line-inner">\s*WHERE THE\s*<\/span>\s*<\/span>\s*<span class="khf-line">\s*<span class="khf-line-inner">\s*<em>SETTING<\/em> LEADS\s*<\/span>/s,
  `<span class="khf-line-inner">\n        THE ROYAL ART\n      </span>\n    </span>\n    <span class="khf-line">\n      <span class="khf-line-inner">\n        OF <em>DUM BIRYANI</em>\n      </span>`
);

// Replace Panel 1
content = content.replace(
  /<h3 class="khf-why-title">\s*Setting\s*<span class="khf-why-script">Where Place Defines Presence<\/span>\s*<\/h3>/s,
  `<h3 class="khf-why-title">\n              Dum Pukht\n              <span class="khf-why-script">Slow-Steamed Royal Heritage</span>\n            </h3>`
);
content = content.replace(
  /Its legacy is felt less as history retold and more as presence\s*carried forward\. Place, memory, and cultural gravity give the\s*restaurant a sense of continuity that feels quietly enduring\./s,
  `Fragrant aged basmati rice layered with whole roasted spices, sealed with whole wheat dough in traditional clay handis to lock in rich aroma and authentic flavor.`
);

// Replace Panel 2
content = content.replace(
  /<h3 class="khf-why-title">\s*Composition\s*<span class="khf-why-script">Every Detail Holds Intention<\/span>\s*<\/h3>/s,
  `<h3 class="khf-why-title">\n              Dosa Craft\n              <span class="khf-why-script">The Cast-Iron Tawa Mastery</span>\n            </h3>`
);
content = content.replace(
  /Behind the restaurant is a point of view shaped with restraint\.\s*Intention, authorship, and perspective come together in a language\s*that reveals how Khufu's came to feel singular from the start\./s,
  `Naturally fermented stone-ground rice and lentil batter swirled paper-thin on smoking cast-iron griddles and roasted with pure golden ghee, served with our fresh chutney trio.`
);
content = content.replace(
  /<img decoding="async" src="\/assets\/images\/DSC04524-scaled\.webp">/g,
  `<img decoding="async" src="/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_12.jpg">`
);

// Replace Panel 3
content = content.replace(
  /<h3 class="khf-why-title">\s*Atmosphere\s*<span class="khf-why-script">A Rhythm That Settles In<\/span>\s*<\/h3>/s,
  `<h3 class="khf-why-title">\n              Chettinad Spices\n              <span class="khf-why-script">Freshly Ground Spice Alchemy</span>\n            </h3>`
);
content = content.replace(
  /The experience unfolds in measured layers rather than all at once\.\s*Atmosphere, detail, and emotion arrive gradually, creating a rhythm\s*that lingers beyond the moment itself, shaped through elevated Egyptian\s*dining\./s,
  `Hand-pounded coriander seeds, black peppercorns, star anise, and fiery Guntur red chillies roasted daily to produce authentic South Indian curries and sizzling appetizers.`
);
content = content.replace(
  /<img decoding="async" src="\/assets\/images\/Khufus-Cap-Back\.webp">/g,
  `<img decoding="async" src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chicken65_appetizer_07.jpg">`
);

fs.writeFileSync(HOME_VIEW_PATH, content, 'utf8');
console.log('✅ Updated Home Hero title and 3 Why cards cleanly!');
