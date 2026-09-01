const fs = require('fs');
const path = require('path');

const BASE_DIR = path.join(__dirname, '..', 'public', 'assets', 'images', 'google_maps');

function getAllImages(dirPath, arrayOfFiles = []) {
  const files = fs.readdirSync(dirPath);
  files.forEach(file => {
    const fullPath = path.join(dirPath, file);
    if (fs.statSync(fullPath).isDirectory()) {
      getAllImages(fullPath, arrayOfFiles);
    } else if (file.endsWith('.jpg') || file.endsWith('.png') || file.endsWith('.webp')) {
      arrayOfFiles.push(fullPath);
    }
  });
  return arrayOfFiles;
}

const images = getAllImages(BASE_DIR);
console.log(`Indexing ${images.length} images...`);

const catalog = [];

for (const imgPath of images) {
  const stat = fs.statSync(imgPath);
  const fname = path.basename(imgPath);
  const relFromPublic = '/' + path.relative(path.join(__dirname, '..', 'public'), imgPath).replace(/\\/g, '/');
  
  // Extract location and category
  const parts = relFromPublic.split('/');
  // /assets/images/google_maps/[location]/[category]/[filename]
  const location = parts[4] || 'unknown';
  const category = parts[5] || 'general';

  // Human readable title
  const cleanTitle = fname
    .replace(/^[a-z]+_/, '')
    .replace(/\.[a-zA-Z0-9]+$/, '')
    .split('_')
    .map(w => w.charAt(0).toUpperCase() + w.slice(1))
    .join(' ');

  catalog.push({
    filename: fname,
    title: cleanTitle,
    location: location,
    category: category,
    path: relFromPublic,
    sizeKB: (stat.size / 1024).toFixed(1),
    sizeBytes: stat.size,
    lastModified: stat.mtime.toISOString()
  });
}

catalog.sort((a, b) => a.location.localeCompare(b.location) || a.category.localeCompare(b.category) || a.title.localeCompare(b.title));

// 1. Write JSON Index
const jsonPath = path.join(BASE_DIR, 'assets_index.json');
fs.writeFileSync(jsonPath, JSON.stringify(catalog, null, 2), 'utf8');
console.log(`✅ JSON Index created: ${path.relative(process.cwd(), jsonPath)}`);

// 2. Write Comprehensive Markdown Index
let md = `# 🗂️ Google Maps Assets Master Index\n\n`;
md += `> **Total Indexed Assets**: ${catalog.length} High-Resolution Files\n`;
md += `> **Last Updated**: ${new Date().toISOString()}\n\n`;

md += `### 📍 Summary by Location & Category\n\n`;

const locGroup = {};
for (const item of catalog) {
  if (!locGroup[item.location]) locGroup[item.location] = {};
  if (!locGroup[item.location][item.category]) locGroup[item.location][item.category] = 0;
  locGroup[item.location][item.category]++;
}

md += `| Location | Category | Assets Count |\n`;
md += `| :--- | :--- | :--- |\n`;
for (const [loc, cats] of Object.entries(locGroup)) {
  for (const [cat, count] of Object.entries(cats)) {
    md += `| **${loc.toUpperCase()}** | \`${cat}\` | **${count}** |\n`;
  }
}

md += `\n---\n\n### 🖼️ Full Asset Ledger\n\n`;
md += `| # | Location | Category | Content Title | High-Res Filename | Size | Public URI |\n`;
md += `| :--- | :--- | :--- | :--- | :--- | :--- | :--- |\n`;

catalog.forEach((item, idx) => {
  md += `| ${idx + 1} | **${item.location.toUpperCase()}** | \`${item.category}\` | ${item.title} | \`${item.filename}\` | ${item.sizeKB} KB | \`${item.path}\` |\n`;
});

const mdPath = path.join(BASE_DIR, 'INDEX.md');
fs.writeFileSync(mdPath, md, 'utf8');
console.log(`✅ Markdown Index created: ${path.relative(process.cwd(), mdPath)}`);

// 3. Write Interactive HTML Visual Gallery Index
const html = `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Maps Assets Index & Visual Browser</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #0d0f12;
      --card-bg: #161a20;
      --border: rgba(255, 255, 255, 0.08);
      --accent: #ff8a3d;
      --accent-glow: rgba(255, 138, 61, 0.2);
      --text: #f0f2f5;
      --text-muted: #8c96a5;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
      background: var(--bg);
      color: var(--text);
      padding: 30px 20px 80px;
    }
    .header {
      max-width: 1400px;
      margin: 0 auto 30px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      border-bottom: 1px solid var(--border);
      padding-bottom: 24px;
    }
    h1 { font-size: 28px; font-weight: 800; display: flex; align-items: center; gap: 12px; }
    .badge {
      background: var(--accent-glow);
      color: var(--accent);
      border: 1px solid rgba(255, 138, 61, 0.4);
      padding: 4px 12px;
      border-radius: 999px;
      font-size: 13px;
      font-weight: 700;
    }
    .controls {
      max-width: 1400px;
      margin: 0 auto 24px;
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      align-items: center;
    }
    .search-input {
      flex: 1;
      min-width: 250px;
      background: var(--card-bg);
      border: 1px solid var(--border);
      color: #fff;
      padding: 10px 16px;
      border-radius: 8px;
      font-size: 14px;
      outline: none;
      transition: border-color 0.2s;
    }
    .search-input:focus { border-color: var(--accent); }
    .filter-btn {
      background: var(--card-bg);
      border: 1px solid var(--border);
      color: var(--text-muted);
      padding: 8px 16px;
      border-radius: 8px;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s;
    }
    .filter-btn:hover, .filter-btn.active {
      background: var(--accent);
      color: #000;
      border-color: var(--accent);
    }
    .stats-bar {
      max-width: 1400px;
      margin: 0 auto 20px;
      font-size: 13px;
      color: var(--text-muted);
    }
    .grid {
      max-width: 1400px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 20px;
    }
    .card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 12px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.2s, border-color 0.2s, box-shadow 0.2s;
    }
    .card:hover {
      transform: translateY(-4px);
      border-color: rgba(255, 138, 61, 0.4);
      box-shadow: 0 10px 25px rgba(0,0,0,0.5);
    }
    .img-wrap {
      position: relative;
      width: 100%;
      height: 200px;
      background: #000;
      overflow: hidden;
    }
    .img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .card:hover .img-wrap img {
      transform: scale(1.05);
    }
    .loc-tag {
      position: absolute;
      top: 10px;
      left: 10px;
      background: rgba(0, 0, 0, 0.75);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.1);
      padding: 3px 8px;
      border-radius: 6px;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .size-tag {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background: rgba(0, 0, 0, 0.75);
      padding: 2px 6px;
      border-radius: 4px;
      font-size: 11px;
      color: var(--text-muted);
    }
    .info {
      padding: 14px;
      display: flex;
      flex-direction: column;
      gap: 6px;
      flex: 1;
    }
    .title {
      font-size: 14px;
      font-weight: 700;
      color: #fff;
      line-height: 1.3;
    }
    .cat {
      font-size: 12px;
      color: var(--accent);
      font-weight: 600;
      text-transform: capitalize;
    }
    .file-path {
      font-family: monospace;
      font-size: 11px;
      color: var(--text-muted);
      background: rgba(0, 0, 0, 0.3);
      padding: 4px 8px;
      border-radius: 4px;
      word-break: break-all;
      margin-top: auto;
      cursor: pointer;
    }
    .file-path:hover {
      color: #fff;
      background: rgba(255, 138, 61, 0.15);
    }
    .copied-toast {
      position: fixed;
      bottom: 24px;
      right: 24px;
      background: var(--accent);
      color: #000;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: 700;
      box-shadow: 0 4px 15px rgba(0,0,0,0.4);
      display: none;
      z-index: 1000;
    }
  </style>
</head>
<body>
  <div class="header">
    <div>
      <h1>📸 Google Maps Assets Index <span class="badge" id="totalCount">${catalog.length} Assets</span></h1>
      <p style="color: var(--text-muted); font-size: 14px; margin-top: 6px;">Visual catalog of high-resolution food, dosa, biryani, interior, and storefront photos.</p>
    </div>
  </div>

  <div class="controls">
    <input type="text" class="search-input" id="searchInput" placeholder="🔍 Search dishes, biryani, dosas, curries, locations...">
    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="dublin">Dublin</button>
      <button class="filter-btn" data-filter="livermore">Livermore</button>
      <button class="filter-btn" data-filter="milpitas">Milpitas</button>
      <button class="filter-btn" data-filter="concord">Concord</button>
    </div>
  </div>

  <div class="stats-bar" id="statsBar">Showing ${catalog.length} images</div>

  <div class="grid" id="assetGrid">
    ${catalog.map(item => `
      <div class="card" data-location="${item.location}" data-category="${item.category}" data-search="${item.title.toLowerCase()} ${item.filename.toLowerCase()} ${item.location.toLowerCase()}">
        <div class="img-wrap">
          <img src="${item.path}" alt="${item.title}" loading="lazy">
          <span class="loc-tag">${item.location}</span>
          <span class="size-tag">${item.sizeKB} KB</span>
        </div>
        <div class="info">
          <div class="cat">${item.category.replace(/_/g, ' ')}</div>
          <div class="title">${item.title}</div>
          <div class="file-path" title="Click to copy path" onclick="copyToClipboard('${item.path}')">${item.filename}</div>
        </div>
      </div>
    `).join('')}
  </div>

  <div class="copied-toast" id="toast">Copied path to clipboard!</div>

  <script>
    const searchInput = document.getElementById('searchInput');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.card');
    const statsBar = document.getElementById('statsBar');
    const toast = document.getElementById('toast');

    let currentFilter = 'all';
    let currentSearch = '';

    function filterCards() {
      let visible = 0;
      cards.forEach(card => {
        const matchesLoc = (currentFilter === 'all' || card.dataset.location === currentFilter);
        const matchesSearch = (!currentSearch || card.dataset.search.includes(currentSearch));

        if (matchesLoc && matchesSearch) {
          card.style.display = 'flex';
          visible++;
        } else {
          card.style.display = 'none';
        }
      });
      statsBar.textContent = 'Showing ' + visible + ' of ${catalog.length} images';
    }

    searchInput.addEventListener('input', (e) => {
      currentSearch = e.target.value.toLowerCase().trim();
      filterCards();
    });

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        currentFilter = btn.dataset.filter;
        filterCards();
      });
    });

    function copyToClipboard(text) {
      navigator.clipboard.writeText(text).then(() => {
        toast.style.display = 'block';
        setTimeout(() => toast.style.display = 'none', 1800);
      });
    }
  </script>
</body>
</html>`;

const htmlPath = path.join(BASE_DIR, 'index.html');
fs.writeFileSync(htmlPath, html, 'utf8');
console.log(`✅ Visual Interactive HTML Index created: ${path.relative(process.cwd(), htmlPath)}`);
