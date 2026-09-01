const fs = require('fs');
const path = require('path');

const ORNAMENTS_DIR = path.join(__dirname, '..', 'public', 'assets', 'images', 'ornaments');
const IMAGES_DIR = path.join(__dirname, '..', 'public', 'assets', 'images');

// 1. Chettinad Star Anise Corner Ornament (corner-ornament.svg)
const cornerSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <!-- Outer Corner Anchor Lines -->
  <path d="M2 58V14C2 7.373 7.373 2 14 2H58" stroke="#C59B27" stroke-width="0.8" stroke-linecap="round"/>
  <path d="M6 54V16C6 10.477 10.477 6 16 6H54" stroke="#D4AF37" stroke-width="0.5" stroke-dasharray="1.5 2" stroke-linecap="round"/>

  <!-- Corner Finial Node (Top-Left) -->
  <circle cx="2" cy="2" r="1.5" fill="#C59B27"/>
  <circle cx="14" cy="2" r="1" fill="#D4AF37"/>
  <circle cx="2" cy="14" r="1" fill="#D4AF37"/>
  <circle cx="58" cy="2" r="1.5" fill="#C59B27"/>
  <circle cx="2" cy="58" r="1.5" fill="#C59B27"/>

  <!-- Central Star Anise Bloom at Corner Apex -->
  <g transform="translate(18, 18)">
    <!-- 8-Pointed Star Anise Petals -->
    <path d="M0 -12 C1 -6, 4 -4, 10 0 C4 4, 1 6, 0 12 C-1 6, -4 4, -10 0 C-4 -4, -1 -6, 0 -12Z" fill="none" stroke="#C59B27" stroke-width="0.7"/>
    <path d="M-8.5 -8.5 C-4 -5, -3 -2, 0 0 C3 -2, 4 -5, 8.5 -8.5 C5 -4, 2 -3, 0 0 C-2 3, -5 4, -8.5 8.5 C-4 5, -2 3, 0 0 C2 -3, 5 -4, 8.5 8.5" fill="none" stroke="#D4AF37" stroke-width="0.5"/>
    <circle cx="0" cy="0" r="2.2" fill="#C59B27"/>
    <circle cx="0" cy="0" r="1" fill="#FFF8E7"/>
  </g>

  <!-- Flowing Chettinad Manga (Paisley) & Cardamom Curves -->
  <path d="M18 6 C28 6, 38 12, 42 22 C36 22, 30 18, 26 14" fill="none" stroke="#C59B27" stroke-width="0.6"/>
  <path d="M6 18 C6 28, 12 38, 22 42 C22 36, 18 30, 14 26" fill="none" stroke="#C59B27" stroke-width="0.6"/>

  <!-- Kolam Diamond & Rice Grain Embellishments -->
  <path d="M32 10 L34 12 L32 14 L30 12 Z" fill="#D4AF37"/>
  <path d="M10 32 L12 34 L14 32 L12 30 Z" fill="#D4AF37"/>
  <path d="M46 8 L47.5 9.5 L46 11 L44.5 9.5 Z" fill="#C59B27"/>
  <path d="M8 46 L9.5 47.5 L11 46 L9.5 44.5 Z" fill="#C59B27"/>

  <!-- Diagonal Spoke Flourish -->
  <path d="M26 26 C34 34, 44 40, 52 44" fill="none" stroke="#D4AF37" stroke-width="0.5" stroke-linecap="round"/>
  <circle cx="52" cy="44" r="1.2" fill="#C59B27"/>
</svg>`;

// 2. Seamless Repeating Spice & Kolam Damask Pattern (leaves-pattern.svg)
const patternSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <!-- Repeating Grid Lines -->
  <path d="M0 40 H80 M40 0 V80" stroke="#C59B27" stroke-width="0.3" stroke-opacity="0.25"/>
  <path d="M0 0 L80 80 M80 0 L0 80" stroke="#C59B27" stroke-width="0.25" stroke-opacity="0.15"/>

  <!-- Central Star Anise Bloom (40, 40) -->
  <g transform="translate(40, 40)">
    <!-- 8 Star Anise Petals -->
    <path d="M0 -14 C1.5 -7, 5 -5, 12 0 C5 5, 1.5 7, 0 14 C-1.5 7, -5 5, -12 0 C-5 -5, -1.5 -7, 0 -14Z" stroke="#C59B27" stroke-width="0.65" fill="none"/>
    <path d="M-10 -10 C-5 -5, -2 -2, 0 0 C2 -2, 5 -5, 10 -10 C5 -5, 2 -2, 0 0 C-2 2, -5 5, -10 10 C-5 5, -2 2, 0 0 C2 -2, 5 -5, 10 10" stroke="#D4AF37" stroke-width="0.45" fill="none"/>
    <circle cx="0" cy="0" r="2.5" fill="#C59B27"/>
    <circle cx="0" cy="0" r="1" fill="#FFF8E7"/>

    <!-- 4 Diamond Kolam Seeds -->
    <path d="M0 -18 L2 -20 L0 -22 L-2 -20 Z" fill="#D4AF37"/>
    <path d="M0 18 L2 20 L0 22 L-2 20 Z" fill="#D4AF37"/>
    <path d="M-18 0 L-20 2 L-22 0 L-20 -2 Z" fill="#D4AF37"/>
    <path d="M18 0 L20 2 L22 0 L20 -2 Z" fill="#D4AF37"/>
  </g>

  <!-- Corner Cardamom Pods & Chettinad Arches (Seamless Edge Matching) -->
  <!-- Top-Left Corner (0,0) -->
  <g transform="translate(0, 0)">
    <path d="M0 14 C5 10, 10 5, 14 0" stroke="#C59B27" stroke-width="0.6" fill="none"/>
    <circle cx="0" cy="0" r="3" fill="#C59B27"/>
  </g>
  <!-- Top-Right Corner (80,0) -->
  <g transform="translate(80, 0)">
    <path d="M0 14 C-5 10, -10 5, -14 0" stroke="#C59B27" stroke-width="0.6" fill="none"/>
    <circle cx="0" cy="0" r="3" fill="#C59B27"/>
  </g>
  <!-- Bottom-Left Corner (0,80) -->
  <g transform="translate(0, 80)">
    <path d="M0 -14 C5 -10, 10 -5, 14 0" stroke="#C59B27" stroke-width="0.6" fill="none"/>
    <circle cx="0" cy="0" r="3" fill="#C59B27"/>
  </g>
  <!-- Bottom-Right Corner (80,80) -->
  <g transform="translate(80, 80)">
    <path d="M0 -14 C-5 -10, -10 -5, -14 0" stroke="#C59B27" stroke-width="0.6" fill="none"/>
    <circle cx="0" cy="0" r="3" fill="#C59B27"/>
  </g>

  <!-- Interlocking Saffron Rice Grain Loops -->
  <path d="M20 20 C25 25, 30 25, 35 20 C30 15, 25 15, 20 20Z" fill="#D4AF37" fill-opacity="0.35" stroke="#C59B27" stroke-width="0.3"/>
  <path d="M60 20 C55 25, 50 25, 45 20 C50 15, 55 15, 60 20Z" fill="#D4AF37" fill-opacity="0.35" stroke="#C59B27" stroke-width="0.3"/>
  <path d="M20 60 C25 55, 30 55, 35 60 C30 65, 25 65, 20 60Z" fill="#D4AF37" fill-opacity="0.35" stroke="#C59B27" stroke-width="0.3"/>
  <path d="M60 60 C55 55, 50 55, 45 60 C50 65, 55 65, 60 60Z" fill="#D4AF37" fill-opacity="0.35" stroke="#C59B27" stroke-width="0.3"/>
</svg>`;

// 3. Central Royal Crest: Twin Peacocks (Mayil), Dum Handi, & Golden Dosa Swirl
const crestSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="300" height="248" viewBox="0 0 300 248" fill="none">
  <defs>
    <linearGradient id="goldGradient" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#FFF0B3"/>
      <stop offset="35%" stop-color="#D4AF37"/>
      <stop offset="70%" stop-color="#AA7C11"/>
      <stop offset="100%" stop-color="#E5C158"/>
    </linearGradient>
    <linearGradient id="brassGradient" x1="0%" y1="100%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="#8C6D23"/>
      <stop offset="50%" stop-color="#D4AF37"/>
      <stop offset="100%" stop-color="#FFF5CC"/>
    </linearGradient>
  </defs>

  <!-- Top Star Anise Finial & Aromatic Steam -->
  <g transform="translate(150, 24)">
    <path d="M0 -14 C1.5 -7, 4 -4, 9 0 C4 4, 1.5 7, 0 14 C-1.5 7, -4 4, -9 0 C-4 -4, -1.5 -7, 0 -14Z" fill="url(#goldGradient)"/>
    <circle cx="0" cy="0" r="2.5" fill="#FFF5CC"/>
    <!-- Ascending Steam Spirals -->
    <path d="M-8 12 C-14 20, -4 28, -6 36" stroke="url(#goldGradient)" stroke-width="1.2" stroke-linecap="round" fill="none"/>
    <path d="M0 14 C-2 24, 6 30, 2 40" stroke="url(#goldGradient)" stroke-width="1.5" stroke-linecap="round" fill="none"/>
    <path d="M8 12 C14 20, 4 28, 6 36" stroke="url(#goldGradient)" stroke-width="1.2" stroke-linecap="round" fill="none"/>
  </g>

  <!-- Central Royal Dum Handi (Pot) -->
  <g transform="translate(150, 115)">
    <!-- Handi Lid & Dough Dum Seal (Purdah) -->
    <ellipse cx="0" cy="-28" rx="28" ry="7" fill="url(#brassGradient)" stroke="#FFF5CC" stroke-width="0.8"/>
    <path d="M-28 -28 C-28 -24, 28 -24, 28 -28 C28 -32, -28 -32, -28 -28 Z" fill="#D4AF37" stroke="#8C6D23" stroke-width="0.5"/>
    <path d="M-26 -28 Q-20 -25, -14 -28 Q-8 -25, -2 -28 Q4 -25, 10 -28 Q16 -25, 22 -28 Q26 -26, 26 -28" stroke="#FFF5CC" stroke-width="0.8" fill="none"/>

    <!-- Handi Body (Wide-Bellied Brass Pot) -->
    <path d="M-24 -22 C-38 -10, -42 12, -26 26 C-15 35, 15 35, 26 26 C42 12, 38 -10, 24 -22 Z" fill="url(#brassGradient)" stroke="#FFF5CC" stroke-width="1.2"/>

    <!-- Handi Belly Ornate Girdle & Kolam Beadings -->
    <path d="M-36 2 Q0 12, 36 2" stroke="#FFF5CC" stroke-width="1.2" fill="none"/>
    <path d="M-30 14 Q0 24, 30 14" stroke="#8C6D23" stroke-width="0.8" stroke-dasharray="2 3" fill="none"/>
    <circle cx="0" cy="8" r="4" fill="#FFF5CC"/>
    <circle cx="0" cy="8" r="2" fill="#8C6D23"/>
    <circle cx="-14" cy="5" r="2.5" fill="#FFF5CC"/>
    <circle cx="14" cy="5" r="2.5" fill="#FFF5CC"/>

    <!-- Handi Base Pedestal -->
    <path d="M-18 28 L-22 34 H22 L18 28 Z" fill="url(#goldGradient)" stroke="#8C6D23" stroke-width="0.8"/>
  </g>

  <!-- LEFT PEACOCK (Mayil) -->
  <g transform="translate(150, 115)">
    <!-- Peacock Head & Crown (Facing Center) -->
    <path d="M-62 -48 C-56 -48, -50 -42, -52 -34 C-54 -26, -60 -18, -66 -10" stroke="url(#goldGradient)" stroke-width="2" stroke-linecap="round" fill="none"/>
    <path d="M-52 -38 L-44 -36 L-51 -32 Z" fill="url(#goldGradient)"/> <!-- Beak -->
    <circle cx="-56" cy="-38" r="1.5" fill="#FFF5CC"/> <!-- Eye -->
    <!-- Crest Feathers -->
    <path d="M-60 -48 L-64 -58 M-58 -48 L-58 -60 M-56 -48 L-52 -58" stroke="url(#goldGradient)" stroke-width="1.2" stroke-linecap="round"/>
    <circle cx="-64" cy="-58" r="1.8" fill="#FFF5CC"/>
    <circle cx="-58" cy="-60" r="1.8" fill="#FFF5CC"/>
    <circle cx="-52" cy="-58" r="1.8" fill="#FFF5CC"/>

    <!-- Peacock Breast & Wing Arch -->
    <path d="M-66 -10 C-78 0, -88 18, -82 38 C-80 44, -72 48, -64 42 C-58 36, -56 20, -58 8" fill="url(#brassGradient)" stroke="#FFF5CC" stroke-width="1"/>

    <!-- Ornate Tail Plumes Fan (Left Cascading Feathers) -->
    <path d="M-82 20 C-102 12, -125 24, -135 48 C-125 44, -110 40, -96 42" stroke="url(#goldGradient)" stroke-width="1.4" fill="none"/>
    <path d="M-80 32 C-104 30, -128 48, -132 74 C-120 64, -104 56, -88 52" stroke="url(#goldGradient)" stroke-width="1.4" fill="none"/>
    <path d="M-74 44 C-94 50, -114 72, -112 98 C-104 84, -92 72, -78 62" stroke="url(#goldGradient)" stroke-width="1.4" fill="none"/>

    <!-- Peacock Eye Feathers (Mayilkan) -->
    <circle cx="-130" cy="46" r="4" fill="url(#goldGradient)"/>
    <circle cx="-130" cy="46" r="2" fill="#8C6D23"/>
    <circle cx="-126" cy="72" r="4" fill="url(#goldGradient)"/>
    <circle cx="-126" cy="72" r="2" fill="#8C6D23"/>
    <circle cx="-106" cy="94" r="4" fill="url(#goldGradient)"/>
    <circle cx="-106" cy="94" r="2" fill="#8C6D23"/>
  </g>

  <!-- RIGHT PEACOCK (Mayil - Symmetrical Mirror) -->
  <g transform="translate(150, 115) scale(-1, 1)">
    <!-- Peacock Head & Crown -->
    <path d="M-62 -48 C-56 -48, -50 -42, -52 -34 C-54 -26, -60 -18, -66 -10" stroke="url(#goldGradient)" stroke-width="2" stroke-linecap="round" fill="none"/>
    <path d="M-52 -38 L-44 -36 L-51 -32 Z" fill="url(#goldGradient)"/>
    <circle cx="-56" cy="-38" r="1.5" fill="#FFF5CC"/>
    <!-- Crest Feathers -->
    <path d="M-60 -48 L-64 -58 M-58 -48 L-58 -60 M-56 -48 L-52 -58" stroke="url(#goldGradient)" stroke-width="1.2" stroke-linecap="round"/>
    <circle cx="-64" cy="-58" r="1.8" fill="#FFF5CC"/>
    <circle cx="-58" cy="-60" r="1.8" fill="#FFF5CC"/>
    <circle cx="-52" cy="-58" r="1.8" fill="#FFF5CC"/>

    <!-- Peacock Breast & Wing Arch -->
    <path d="M-66 -10 C-78 0, -88 18, -82 38 C-80 44, -72 48, -64 42 C-58 36, -56 20, -58 8" fill="url(#brassGradient)" stroke="#FFF5CC" stroke-width="1"/>

    <!-- Ornate Tail Plumes Fan -->
    <path d="M-82 20 C-102 12, -125 24, -135 48 C-125 44, -110 40, -96 42" stroke="url(#goldGradient)" stroke-width="1.4" fill="none"/>
    <path d="M-80 32 C-104 30, -128 48, -132 74 C-120 64, -104 56, -88 52" stroke="url(#goldGradient)" stroke-width="1.4" fill="none"/>
    <path d="M-74 44 C-94 50, -114 72, -112 98 C-104 84, -92 72, -78 62" stroke="url(#goldGradient)" stroke-width="1.4" fill="none"/>

    <!-- Peacock Eye Feathers -->
    <circle cx="-130" cy="46" r="4" fill="url(#goldGradient)"/>
    <circle cx="-130" cy="46" r="2" fill="#8C6D23"/>
    <circle cx="-126" cy="72" r="4" fill="url(#goldGradient)"/>
    <circle cx="-126" cy="72" r="2" fill="#8C6D23"/>
    <circle cx="-106" cy="94" r="4" fill="url(#goldGradient)"/>
    <circle cx="-106" cy="94" r="2" fill="#8C6D23"/>
  </g>

  <!-- BOTTOM FOUNDATION: Banana Leaf & Golden Dosa Swirl Crest -->
  <g transform="translate(150, 195)">
    <!-- Banana Leaf Arch Base -->
    <path d="M-110 10 C-60 -8, 60 -8, 110 10 C65 2, -65 2, -110 10Z" fill="url(#goldGradient)" stroke="#8C6D23" stroke-width="0.8"/>
    <!-- Banana Leaf Center Rib & Veins -->
    <path d="M-110 10 Q0 0, 110 10" stroke="#FFF5CC" stroke-width="1" fill="none"/>

    <!-- Central Dosa Tawa Spiral Medallion -->
    <circle cx="0" cy="18" r="18" fill="url(#brassGradient)" stroke="#FFF5CC" stroke-width="1.5"/>
    <path d="M0 18 m-12 0 a 12 12 0 1 0 24 0 a 12 12 0 1 0 -24 0" stroke="#FFF5CC" stroke-width="0.6" stroke-dasharray="1.5 2" fill="none"/>
    <!-- Golden Swirl Spiral -->
    <path d="M0 18 Q4 14, 8 18 Q10 24, 0 26 Q-10 24, -8 16 Q-6 8, 4 10 Q12 12, 10 20" stroke="url(#goldGradient)" stroke-width="1.2" stroke-linecap="round" fill="none"/>
    <circle cx="0" cy="18" r="2.5" fill="#FFF5CC"/>

    <!-- Flanking Traditional Kolam Dots -->
    <circle cx="-26" cy="18" r="2" fill="#D4AF37"/>
    <circle cx="-34" cy="18" r="1.5" fill="#D4AF37"/>
    <circle cx="-42" cy="18" r="1" fill="#D4AF37"/>
    <circle cx="26" cy="18" r="2" fill="#D4AF37"/>
    <circle cx="34" cy="18" r="1.5" fill="#D4AF37"/>
    <circle cx="42" cy="18" r="1" fill="#D4AF37"/>
  </g>
</svg>`;

// 4. Section Divider Flourish (divider-spice-flourish.svg)
const dividerSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="400" height="40" viewBox="0 0 400 40" fill="none">
  <defs>
    <linearGradient id="lineGradLeft" x1="100%" y1="0%" x2="0%" y2="0%">
      <stop offset="0%" stop-color="#D4AF37"/>
      <stop offset="100%" stop-color="#D4AF37" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="lineGradRight" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="#D4AF37"/>
      <stop offset="100%" stop-color="#D4AF37" stop-opacity="0"/>
    </linearGradient>
  </defs>

  <!-- Left & Right Tapering Rules -->
  <line x1="20" y1="20" x2="155" y2="20" stroke="url(#lineGradLeft)" stroke-width="0.8"/>
  <line x1="245" y1="20" x2="380" y2="20" stroke="url(#lineGradRight)" stroke-width="0.8"/>

  <!-- Left & Right Diamond Pips -->
  <path d="M20 20 L24 17 L28 20 L24 23 Z" fill="#C59B27"/>
  <path d="M380 20 L376 17 L372 20 L376 23 Z" fill="#C59B27"/>

  <!-- Left Cardamom / Mango Scroll -->
  <path d="M155 20 C165 14, 175 14, 185 20 C175 22, 165 24, 155 20Z" fill="#D4AF37" stroke="#C59B27" stroke-width="0.5"/>
  <circle cx="160" cy="20" r="1.5" fill="#FFF8E7"/>

  <!-- Right Cardamom / Mango Scroll -->
  <path d="M245 20 C235 14, 225 14, 215 20 C225 22, 235 24, 245 20Z" fill="#D4AF37" stroke="#C59B27" stroke-width="0.5"/>
  <circle cx="240" cy="20" r="1.5" fill="#FFF8E7"/>

  <!-- Central Star Anise Bloom (200, 20) -->
  <g transform="translate(200, 20)">
    <path d="M0 -14 C1.5 -7, 4 -4, 10 0 C4 4, 1.5 7, 0 14 C-1.5 7, -4 4, -10 0 C-4 -4, -1.5 -7, 0 -14Z" fill="#C59B27" stroke="#D4AF37" stroke-width="0.6"/>
    <path d="M-8 -8 C-4 -4, -2 -2, 0 0 C2 -2, 4 -4, 8 -8 C4 -4, 2 -2, 0 0 C-2 2, -4 4, -8 8 C-4 4, -2 2, 0 0 C2 -2, 4 -4, 8 8" stroke="#FFF8E7" stroke-width="0.6" fill="none"/>
    <circle cx="0" cy="0" r="3" fill="#D4AF37"/>
    <circle cx="0" cy="0" r="1.2" fill="#FFF8E7"/>
  </g>
</svg>`;

// 5. Heritage Athangudi Brass Seal & Platter Badge (heritage-brass-seal.svg)
const sealSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" viewBox="0 0 160 160" fill="none">
  <defs>
    <linearGradient id="sealGold" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#FFF0B3"/>
      <stop offset="50%" stop-color="#D4AF37"/>
      <stop offset="100%" stop-color="#8C6D23"/>
    </linearGradient>
  </defs>

  <!-- Outer Beaded Athangudi Ring -->
  <circle cx="80" cy="80" r="76" stroke="url(#sealGold)" stroke-width="1.5"/>
  <circle cx="80" cy="80" r="72" stroke="#C59B27" stroke-width="0.6" stroke-dasharray="2 3"/>

  <!-- 24 Radial Ray Serrations -->
  <g transform="translate(80, 80)">
    ${Array.from({length: 24}).map((_, i) => {
      const deg = i * 15;
      return `<line x1="0" y1="-72" x2="0" y2="-66" stroke="#D4AF37" stroke-width="1" transform="rotate(${deg})" />`;
    }).join('\n    ')}
  </g>

  <!-- Middle Concentric Gold Ring -->
  <circle cx="80" cy="80" r="62" stroke="url(#sealGold)" stroke-width="1.8"/>
  <circle cx="80" cy="80" r="58" stroke="#8C6D23" stroke-width="0.5"/>

  <!-- Center Core: Handi + Dosa Silhouette with Star Anise -->
  <g transform="translate(80, 80)">
    <!-- Star Anise Background Radiance -->
    <path d="M0 -36 C3 -18, 12 -12, 28 0 C12 12, 3 18, 0 36 C-3 18, -12 12, -28 0 C-12 -12, -3 -18, 0 -36Z" fill="#D4AF37" fill-opacity="0.25"/>
    <path d="M-22 -22 C-11 -11, -6 -6, 0 0 C6 -6, 11 -11, 22 -22 C11 -11, 6 -6, 0 0 C-6 6, -11 11, -22 22 C-11 11, -6 6, 0 0 C6 -6, 11 -11, 22 22" stroke="#C59B27" stroke-width="0.6" fill="none"/>

    <!-- Central Clay Handi & Dosa Cone -->
    <path d="M-18 -10 C-26 -2, -28 14, -18 22 C-10 28, 10 28, 18 22 C28 14, 26 -2, 18 -10 Z" fill="url(#sealGold)" stroke="#FFF8E7" stroke-width="1"/>
    <ellipse cx="0" cy="-12" rx="18" ry="4" fill="#8C6D23" stroke="#FFF8E7" stroke-width="0.8"/>
    <path d="M0 -12 L0 -24" stroke="#FFF8E7" stroke-width="1.2" stroke-linecap="round"/>
    <circle cx="0" cy="-26" r="2.5" fill="#FFF8E7"/>

    <!-- Dosa Cone Overlay -->
    <path d="M-8 12 L0 -6 L8 12 Q0 16, -8 12Z" fill="#FFF5CC" stroke="#8C6D23" stroke-width="0.6"/>
  </g>
</svg>`;

// 6. Sacred Radial Kolam Mandala Watermark (kolam-mandala-watermark.svg)
const kolamWatermarkSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" fill="none">
  <g transform="translate(250, 250)" stroke="#C59B27" stroke-width="0.75" fill="none">
    <!-- Concentric Guidelines -->
    <circle cx="0" cy="0" r="230" stroke-width="0.4" stroke-opacity="0.3"/>
    <circle cx="0" cy="0" r="180" stroke-width="0.5" stroke-opacity="0.4"/>
    <circle cx="0" cy="0" r="120" stroke-width="0.5" stroke-opacity="0.5"/>
    <circle cx="0" cy="0" r="60" stroke-width="0.6" stroke-opacity="0.6"/>
    <circle cx="0" cy="0" r="12" fill="#C59B27" fill-opacity="0.4"/>

    <!-- 8 Primary Kolam Lotus Petals -->
    ${Array.from({length: 8}).map((_, i) => {
      const deg = i * 45;
      return `<g transform="rotate(${deg})">
        <path d="M0 0 C20 -40, 50 -80, 0 -120 C-50 -80, -20 -40, 0 0Z" stroke="#D4AF37" stroke-width="0.8"/>
        <path d="M0 -120 C30 -150, 70 -190, 0 -230 C-70 -190, -30 -150, 0 -120Z" stroke="#C59B27" stroke-width="0.7"/>
        <circle cx="0" cy="-120" r="4" fill="#D4AF37"/>
        <circle cx="0" cy="-230" r="5" fill="#D4AF37"/>
        <line x1="0" y1="0" x2="0" y2="-230" stroke="#C59B27" stroke-width="0.4" stroke-dasharray="2 3"/>
      </g>`;
    }).join('\n    ')}

    <!-- 8 Secondary Interlocking Rice Grain / Cardamom Spokes -->
    ${Array.from({length: 8}).map((_, i) => {
      const deg = i * 45 + 22.5;
      return `<g transform="rotate(${deg})">
        <path d="M0 0 C15 -30, 35 -60, 0 -90 C-35 -60, -15 -30, 0 0Z" stroke="#C59B27" stroke-width="0.5" stroke-dasharray="3 3"/>
        <circle cx="0" cy="-90" r="3" fill="#C59B27"/>
        <path d="M0 -90 C25 -120, 45 -160, 0 -195 C-45 -160, -25 -120, 0 -90Z" stroke="#D4AF37" stroke-width="0.6"/>
        <circle cx="0" cy="-195" r="3.5" fill="#D4AF37"/>
      </g>`;
    }).join('\n    ')}
  </g>
</svg>`;

// Write all ornaments to public/assets/images/ornaments/
fs.writeFileSync(path.join(ORNAMENTS_DIR, 'corner-chettinad-star.svg'), cornerSvg);
fs.writeFileSync(path.join(ORNAMENTS_DIR, 'pattern-spice-kolam.svg'), patternSvg);
fs.writeFileSync(path.join(ORNAMENTS_DIR, 'crest-biryani-dosa.svg'), crestSvg);
fs.writeFileSync(path.join(ORNAMENTS_DIR, 'divider-spice-flourish.svg'), dividerSvg);
fs.writeFileSync(path.join(ORNAMENTS_DIR, 'heritage-brass-seal.svg'), sealSvg);
fs.writeFileSync(path.join(ORNAMENTS_DIR, 'kolam-mandala-watermark.svg'), kolamWatermarkSvg);

// Also update the active root image files so they take effect across all existing CSS & PHP views seamlessly!
fs.writeFileSync(path.join(IMAGES_DIR, 'corner-ornament.svg'), cornerSvg);
fs.writeFileSync(path.join(IMAGES_DIR, 'leaves-pattern.svg'), patternSvg);
fs.writeFileSync(path.join(IMAGES_DIR, 'crest-biryani-dosa.svg'), crestSvg);
fs.writeFileSync(path.join(IMAGES_DIR, 'divider-spice-flourish.svg'), dividerSvg);

console.log('✅ All 6 Luxury Biryani & Chennai Dosa SVG Ornaments successfully created and linked!');
