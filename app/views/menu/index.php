<?php
$pageTitle = "The Menu | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";

/** @var array<\App\Models\MenuItem> $items */
/** @var array<string> $categories */

$repo = new \App\Repositories\MenuRepository();

// Group items by category for structured SSR rendering
$grouped = [];
foreach ($items as $item) {
    $cat = $item->category ?: 'Specialities';
    if (!isset($grouped[$cat])) {
        $grouped[$cat] = [];
    }
    $grouped[$cat][] = $item;
}

// Exact Khufu's Featured Hero Items (Authentic South Indian Specialties)
$featuredItems = [
    [
        'titleWords' => ['VIJAYAWADA', 'SPECIAL', 'BIRYANI'],
        'title' => 'Vijayawada Special Biryani',
        'menu' => 'Royal Dum',
        'date' => 'Chef Signature',
        'label' => "Chef Signature",
        'desc' => 'Aromatic basmati rice tossed with rich whole spices, topped with spicy boneless chicken gravy cooked in traditional Andhra style. Served with cooling raitha and mirchi ka salan.',
        'image' => '/assets/images/DSCF1644-1024x1024.webp',
        'link' => '/reservations'
    ],
    [
        'titleWords' => ['GHEE PAPER', 'ROAST', 'DOSA'],
        'title' => 'Ghee Paper Roast Dosa',
        'menu' => 'Chennai Tiffin',
        'date' => 'Crispy Delight',
        'label' => 'Customer Favorite',
        'desc' => 'Crispy, golden-brown wafer-thin fermented rice and lentil crepe roasted with pure desi ghee. Served with freshly ground coconut, tomato, and coriander chutneys and steaming vegetable sambar.',
        'image' => '/assets/images/DSCF1420-1024x1024.webp',
        'link' => '/reservations'
    ],
    [
        'titleWords' => ['ANDHRA', 'CHICKEN', '65'],
        'title' => 'Andhra Chicken 65',
        'menu' => 'Starters',
        'date' => 'Fiery Special',
        'label' => 'House Special',
        'desc' => 'Crispy fried boneless chicken tossed with fresh curry leaves, mustard seeds, crushed black pepper, and fiery green chillies.',
        'image' => '/assets/images/DSCF1845-1024x1024.webp',
        'link' => '/reservations'
    ],
    [
        'titleWords' => ['CHETTINAD', 'MUTTON', 'SUKKA'],
        'title' => 'Chettinad Mutton Sukka',
        'menu' => 'Curries & Roasts',
        'date' => 'Chettinad',
        'label' => 'Heritage Recipe',
        'desc' => 'Tender boneless goat pieces slow-roasted in freshly ground Chettinad spices, black pepper, and caramelized shallots.',
        'image' => '/assets/images/DSCF1676-1024x1024.webp',
        'link' => '/reservations'
    ],
    [
        'titleWords' => ['MALABAR', 'FLAKY', 'PAROTTA'],
        'title' => 'Malabar Flaky Parotta',
        'menu' => 'Breads & Tiffin',
        'date' => 'Traditional',
        'label' => 'Authentic Bread',
        'desc' => 'Multi-layered, flaky, golden flatbread grilled on hot iron tawa. The perfect accompaniment to spicy curries and gravies.',
        'image' => '/assets/images/DSCF1581-1024x1024.webp',
        'link' => '/reservations'
    ],
    [
        'titleWords' => ['ROYAL DUM', 'FEAST', 'THALI'],
        'title' => 'Royal Dum Feast Thali',
        'menu' => 'Thalis & Combos',
        'date' => 'Traditional',
        'label' => 'Chef Special',
        'desc' => 'A royal feast composed of fragrant saffron rice, slow-simmered regional curries, fresh warm flatbread, and traditional house desserts.',
        'image' => '/assets/images/DSCF1541-1024x1024.webp',
        'link' => '/reservations'
    ]
];
?>

<div class="menu-page-root">
  <!-- 1. EXACT KHUFUS HERO FEATURED SECTION DESIGN -->
  <div class="elementor-element elementor-element-0111a11 e-con-full e-flex e-con e-parent" data-id="0111a11" data-element_type="container" data-e-type="container">
    <div class="elementor-element elementor-element-d829637 elementor-widget elementor-widget-shortcode" data-id="d829637" data-element_type="widget" data-e-type="widget">
      <div class="elementor-shortcode">
        <section class="kh-featured-widget tmenu-featured-widget" id="tmenuFeatured9447">
          <div class="kh-featured-inner">
            
            <!-- Left Copy: Large Multi-line Serif Title & Meta -->
            <div class="kh-featured-copy">
              <div class="kh-featured-copy-inner">
                <h1 class="kh-featured-title is-medium-title" id="khFeaturedTitle">
                  <span class="js-title-words">
                    <span class="kh-featured-title-line"><?= htmlspecialchars($featuredItems[0]['titleWords'][0]) ?></span>
                    <span class="kh-featured-title-line"><?= htmlspecialchars($featuredItems[0]['titleWords'][1]) ?></span>
                    <span class="kh-featured-title-line"><?= htmlspecialchars($featuredItems[0]['titleWords'][2]) ?></span>
                  </span>
                </h1>
                <div class="kh-featured-meta js-meta">
                  <span class="kh-featured-menu-label js-menu" id="khFeaturedMenu"><?= htmlspecialchars($featuredItems[0]['menu']) ?></span>
                  <span class="kh-featured-star"></span>
                  <span class="kh-featured-date js-date" id="khFeaturedDate"><?= htmlspecialchars($featuredItems[0]['date']) ?></span>
                </div>
                <div class="kh-featured-mobile-label js-mobile-label" id="khFeaturedMobileLabel"><?= htmlspecialchars($featuredItems[0]['label']) ?></div>
              </div>
            </div>

            <!-- Center Visual: 320x320 Framed Photo with Navigation Hits & Floating Cursive Label -->
            <div class="kh-featured-visual">
              <div class="kh-featured-hit is-prev js-prev" id="khPrevSlide" aria-label="Previous featured dish" title="Previous Dish"></div>
              <div class="kh-featured-hit is-next js-next" id="khNextSlide" aria-label="Next featured dish" title="Next Dish"></div>
              <div class="kh-featured-frame">
                <?php foreach ($featuredItems as $idx => $feat): ?>
                  <div class="kh-featured-slide <?= $idx === 0 ? 'is-active' : '' ?>" data-index="<?= $idx ?>">
                    <img src="<?= htmlspecialchars($feat['image']) ?>" alt="<?= htmlspecialchars($feat['title']) ?>" loading="lazy" decoding="async" />
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="kh-featured-label js-label" id="khFeaturedLabel"><?= htmlspecialchars($featuredItems[0]['label']) ?></div>
              
              <!-- Slide Indicator Dots -->
              <div class="kh-featured-dots">
                <?php foreach ($featuredItems as $idx => $feat): ?>
                  <button type="button" class="kh-featured-dot <?= $idx === 0 ? 'active' : '' ?>" data-dot="<?= $idx ?>" aria-label="Go to slide <?= $idx + 1 ?>"></button>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Right Side: Narrative Description & Reservation CTA -->
            <div class="kh-featured-side">
              <div class="kh-featured-side-inner">
                <div class="kh-featured-desc js-desc" id="khFeaturedDesc">
                  <?= htmlspecialchars($featuredItems[0]['desc']) ?>
                </div>
                <a href="/reservations" class="kh-featured-more js-more" id="khFeaturedCta">
                  <span>Reserve Table</span>
                  <span class="kh-featured-more-arrow">→</span>
                </a>
              </div>
            </div>

          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- 2. STICKY CONTROLS: SEARCH, DIETARY & CATEGORY TABS -->
  <section class="menu-controls-sticky" id="menuControls">
    <div class="menu-section-container">
      <div class="menu-controls-wrapper">
        <!-- Search Input -->
        <div class="menu-search-box">
          <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input type="text" id="menuSearchInput" placeholder="Search 400+ dishes (Vijayawada, Ghee Dosa, Chicken 65, Paneer...)" autocomplete="off" />
          <button type="button" id="menuSearchClear" class="search-clear-btn" aria-label="Clear search" style="display: none;">&times;</button>
        </div>

        <!-- Dietary Filter Chips -->
        <div class="dietary-filter-group">
          <button type="button" class="dietary-btn active" data-diet="all">All Dishes (<?= count($items) ?>)</button>
          <button type="button" class="dietary-btn" data-diet="veg"><span class="dot-veg"></span> Pure Veg</button>
          <button type="button" class="dietary-btn" data-diet="nonveg"><span class="dot-nonveg"></span> Non-Veg</button>
          <button type="button" class="dietary-btn" data-diet="spicy"><span class="icon-spicy">🌶️</span> Spicy & Specials</button>
        </div>

        <!-- Location Filter -->
        <div class="location-filter-pills">
          <span class="loc-pill active" data-loc="all">All Locations</span>
          <span class="loc-pill" data-loc="Dublin">Dublin</span>
          <span class="loc-pill" data-loc="Milpitas">Milpitas</span>
          <span class="loc-pill" data-loc="Livermore">Livermore</span>
          <span class="loc-pill" data-loc="Concord">Concord</span>
        </div>
      </div>

      <!-- Main Category Tabs -->
      <div class="category-tabs-scroll">
        <button type="button" class="category-tab-btn active" data-group="all">All Categories</button>
        <button type="button" class="category-tab-btn" data-group="biryanis">Royal Biryanis</button>
        <button type="button" class="category-tab-btn" data-group="dosas">Chennai Dosas & Tiffins</button>
        <button type="button" class="category-tab-btn" data-group="appetizers">Appetizers & Starters</button>
        <button type="button" class="category-tab-btn" data-group="curries">Curries & Entrees</button>
        <button type="button" class="category-tab-btn" data-group="breads">Breads & Parottas</button>
        <button type="button" class="category-tab-btn" data-group="thalis">Thalis & Combos</button>
        <button type="button" class="category-tab-btn" data-group="beverages">Desserts & Drinks</button>
      </div>
    </div>
  </section>

  <!-- 3. FULL MENU CATALOG -->
  <main class="menu-catalog-section">
    <div class="menu-section-container">
      
      <!-- Live Filter Status Message -->
      <div id="filterStatus" class="filter-status-bar" style="display: none;">
        <span id="filterCount">Showing 0 dishes</span>
        <button type="button" id="resetAllFiltersBtn" class="reset-filter-link">Reset all filters</button>
      </div>

      <!-- No Results State -->
      <div id="noResultsState" class="no-results-box" style="display: none;">
        <div class="no-results-icon">🍲</div>
        <h3>No matching dishes found</h3>
        <p>Try searching for a different dish name, ingredients, or resetting your filter criteria.</p>
        <button type="button" class="btn-reset-filters" onclick="resetMenuFilters()">View Full Menu</button>
      </div>

      <!-- Category Sections -->
      <div id="menuCatalogGrid" class="catalog-categories-container">
        <?php foreach ($grouped as $catName => $catItems): 
          $groupSlug = $repo->getParentGroup($catName);
        ?>
          <div class="menu-category-block" data-category="<?= htmlspecialchars(strtolower($catName)) ?>" data-group="<?= htmlspecialchars($groupSlug) ?>">
            <div class="category-block-header">
              <div class="cat-header-content">
                <span class="cat-kicker">TRADITIONAL SPECIALTY</span>
                <h2 class="cat-title"><?= htmlspecialchars($catName) ?></h2>
              </div>
              <span class="cat-item-count"><?= count($catItems) ?> Dishes</span>
            </div>

            <div class="dishes-cards-grid">
              <?php foreach ($catItems as $item): 
                $isVeg = $item->isVegetarian || (stripos($item->name, 'veg') !== false && stripos($item->name, 'non-veg') === false && stripos($item->name, 'chicken') === false && stripos($item->name, 'mutton') === false && stripos($item->name, 'goat') === false && stripos($item->name, 'fish') === false && stripos($item->name, 'prawn') === false && stripos($item->name, 'egg') === false) || stripos($catName, 'veg') !== false;
                $isSpicy = $item->isSpicy || stripos($item->name, '65') !== false || stripos($item->name, 'spicy') !== false || stripos($item->name, 'vijayawada') !== false || stripos($item->name, 'chettinad') !== false || stripos($item->name, 'masala') !== false || stripos($item->name, 'sukka') !== false;
                $locationsList = implode(',', $item->availableLocations);
                $locationsDisplay = !empty($item->availableLocations) ? implode(' • ', $item->availableLocations) : 'All Locations';
              ?>
                <article class="dish-card" 
                         data-name="<?= htmlspecialchars(strtolower($item->name)) ?>" 
                         data-category="<?= htmlspecialchars(strtolower($catName)) ?>" 
                         data-group="<?= htmlspecialchars($groupSlug) ?>"
                         data-veg="<?= $isVeg ? 'true' : 'false' ?>"
                         data-spicy="<?= $isSpicy ? 'true' : 'false' ?>"
                         data-locations="<?= htmlspecialchars(strtolower($locationsList)) ?>">
                  
                  <div class="dish-card-media">
                    <img src="<?= htmlspecialchars($item->imageUrl) ?>" alt="<?= htmlspecialchars($item->name) ?>" loading="lazy" decoding="async" onerror="this.src='/assets/images/DSCF1644-1024x1024.webp';" />
                    <div class="dish-diet-pill <?= $isVeg ? 'is-veg' : 'is-nonveg' ?>">
                      <span class="diet-dot"></span>
                      <span><?= $isVeg ? 'VEG' : 'NON-VEG' ?></span>
                    </div>
                    <?php if ($isSpicy): ?>
                      <span class="dish-spicy-pill">🌶️ Spicy</span>
                    <?php endif; ?>
                  </div>

                  <div class="dish-card-content">
                    <div class="dish-title-price-row">
                      <h3 class="dish-name"><?= htmlspecialchars($item->name) ?></h3>
                      <div class="dish-price">$<?= number_format($item->price, 2) ?></div>
                    </div>

                    <?php if (!empty($item->description)): ?>
                      <p class="dish-desc"><?= htmlspecialchars($item->description) ?></p>
                    <?php else: ?>
                      <p class="dish-desc">Authentic house recipe prepared fresh daily with stone-ground spices and traditional South Indian culinary expertise.</p>
                    <?php endif; ?>

                    <div class="dish-card-footer">
                      <span class="dish-locations-tag">
                        <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2">
                          <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"></path>
                          <circle cx="12" cy="9" r="2.5"></circle>
                        </svg>
                        <?= htmlspecialchars($locationsDisplay) ?>
                      </span>
                    </div>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>
</div>

<style>
/* ==========================================================================
   EXACT KHUFUS HERO FEATURED SECTION CSS
   ========================================================================== */
.elementor-element-0111a11 {
  background-color: #1a0f0a !important;
  background-image: linear-gradient(180deg, rgba(20, 10, 5, 0.45) 0%, rgba(20, 10, 5, 0.6) 60%, rgba(30, 18, 12, 0.95) 100%), url("/assets/ai_ganerated/images/menu_page.png") !important;
  background-position: center center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
  background-attachment: scroll !important;
  position: relative;
  width: 100%;
  min-height: 92vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 140px 0 70px;
  overflow: visible;
  border-bottom: 1px solid rgba(226, 196, 175, 0.2);
}

.elementor-element-0111a11::before {
  content: "";
  position: absolute;
  inset: 0;
  background-image: url("/assets/images/ornaments/pattern-gold.webp");
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size: cover;
  opacity: 0.04;
  pointer-events: none;
}

.kh-featured-widget {
  --kh-white: #FFFFFF;
  --kh-blue: #E2C4AF;
  --kh-gold: #ffcd57;
  position: relative;
  width: 100%;
  background: transparent;
  overflow: visible;
  font-family: 'Bricolage Grotesque', sans-serif;
}

.kh-featured-inner {
  width: min(1180px, 92vw);
  margin: 0 auto;
  display: grid;
  grid-template-columns: minmax(0, 1.25fr) 320px minmax(0, 1fr);
  column-gap: 36px;
  align-items: center;
  min-height: 520px;
  position: relative;
}

/* Left Title Copy */
.kh-featured-copy {
  position: relative;
  z-index: 4;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: center;
  width: 100%;
  min-width: 0;
}

.kh-featured-copy-inner {
  width: max-content;
  max-width: 100%;
  margin-left: auto;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.kh-featured-title {
  margin: 0;
  width: max-content;
  max-width: 100%;
  text-align: right;
  font-family: "Cinzel", "IvyOraDisplay", Georgia, serif !important;
  font-weight: 400 !important;
  font-style: normal !important;
  text-transform: uppercase !important;
  color: var(--kh-white) !important;
  font-size: clamp(38px, 4.5vw, 68px) !important;
  line-height: 0.95 !important;
  letter-spacing: 0.04em !important;
  text-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.kh-featured-title-line {
  display: block;
  width: 100%;
  text-align: right;
  white-space: nowrap;
}

.kh-featured-meta {
  margin-top: 18px;
  width: max-content;
  max-width: 100%;
  margin-left: auto;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  gap: 12px;
  white-space: nowrap;
  text-align: right;
  font-size: 13px;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  transition: opacity 0.3s ease;
}

.kh-featured-menu-label {
  color: #ffffff;
  white-space: nowrap;
}

.kh-featured-star {
  width: 7px;
  height: 7px;
  background: var(--kh-gold);
  transform: rotate(45deg);
}

.kh-featured-date {
  color: var(--kh-gold);
  white-space: nowrap;
}

.kh-featured-mobile-label {
  display: none;
  font-family: "Alex Brush", "GoldenHopes", cursive;
  font-size: 26px;
  color: var(--kh-gold);
  margin-top: 8px;
}

/* Center Visual Frame */
.kh-featured-visual {
  position: relative;
  width: 320px;
  height: 320px;
  margin: 0 auto;
  z-index: 3;
}

.kh-featured-frame {
  position: relative;
  width: 100%;
  height: 100%;
  background: #170d08;
  border-radius: 4px;
  overflow: hidden;
  box-shadow: 0 20px 45px rgba(0, 0, 0, 0.7), 0 0 0 1px rgba(226, 196, 175, 0.25);
}

.kh-featured-slide {
  position: absolute;
  inset: 0;
  opacity: 0;
  transform: scale(0.96);
  transition: opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1), transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  pointer-events: none;
}

.kh-featured-slide.is-active {
  opacity: 1;
  transform: scale(1);
  pointer-events: auto;
}

.kh-featured-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.kh-featured-label {
  position: absolute;
  top: -30px;
  right: -32px;
  z-index: 7;
  pointer-events: none;
  text-align: left;
  color: var(--kh-gold);
  font-family: "Alex Brush", "GoldenHopes", cursive;
  font-weight: 400;
  font-size: 38px;
  line-height: 0.9;
  letter-spacing: 0.01em;
  white-space: nowrap;
  text-shadow: 0 4px 12px rgba(0, 0, 0, 0.8);
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.kh-featured-hit {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 48%;
  z-index: 8;
  cursor: pointer;
}

.kh-featured-hit.is-prev {
  left: 0;
}

.kh-featured-hit.is-next {
  right: 0;
}

.kh-featured-dots {
  display: flex;
  justify-content: center;
  gap: 8px;
  margin-top: 20px;
}

.kh-featured-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.25);
  border: none;
  padding: 0;
  cursor: pointer;
  transition: all 0.25s ease;
}

.kh-featured-dot.active {
  background: var(--kh-gold);
  transform: scale(1.3);
}

/* Right Narrative Side */
.kh-featured-side {
  position: relative;
  z-index: 4;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.kh-featured-side-inner {
  width: 100%;
  max-width: 270px;
}

.kh-featured-desc {
  width: 100%;
  text-align: left;
  font-family: 'Bricolage Grotesque', sans-serif;
  font-size: 13.5px;
  font-weight: 300;
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.8);
  transition: opacity 0.3s ease;
}

.kh-featured-more {
  margin-top: 20px;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  border: none !important;
  background: transparent !important;
  padding: 0;
  color: var(--kh-gold) !important;
  font-family: 'Bricolage Grotesque', sans-serif;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  cursor: pointer;
  text-decoration: none;
  transition: opacity 0.2s;
}

.kh-featured-more:hover {
  opacity: 0.8;
}

.kh-featured-more-arrow {
  display: inline-block;
  font-size: 15px;
  transition: transform 0.25s ease;
}

.kh-featured-more:hover .kh-featured-more-arrow {
  transform: translateX(4px);
}

/* ==========================================================================
   STICKY CONTROLS & MENU CATALOG STYLING
   ========================================================================== */
.menu-page-root {
  background-color: #1e120c;
  color: #f9f6fe;
  min-height: 100vh;
  font-family: "Bricolage Grotesque", sans-serif;
}

.menu-section-container {
  max-width: 1320px;
  margin: 0 auto;
  padding: 0 24px;
}

.menu-controls-sticky {
  position: sticky;
  top: 0;
  z-index: 99;
  background: rgba(30, 18, 12, 0.96);
  backdrop-filter: blur(12px);
  border-bottom: 1px solid rgba(226, 196, 175, 0.15);
  padding: 16px 0 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
}

.menu-controls-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  margin-bottom: 14px;
  flex-wrap: wrap;
}

.menu-search-box {
  position: relative;
  flex: 1;
  min-width: 280px;
  max-width: 440px;
}

.menu-search-box .search-icon {
  position: absolute;
  left: 14px;
  top: 50%;
  transform: translateY(-50%);
  width: 16px;
  height: 16px;
  stroke: #b8aba2;
}

.menu-search-box input {
  width: 100%;
  padding: 10px 38px 10px 38px !important;
  background: rgba(255, 255, 255, 0.06) !important;
  border: 1px solid rgba(226, 196, 175, 0.18) !important;
  border-radius: 6px !important;
  color: #ffffff !important;
  font-size: 13px !important;
  transition: border-color 0.2s, background 0.2s;
}

.menu-search-box input:focus {
  background: rgba(255, 255, 255, 0.1) !important;
  border-color: #ffcd57 !important;
  outline: none;
}

.search-clear-btn {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  color: #b8aba2;
  font-size: 18px;
  cursor: pointer;
  padding: 0;
  line-height: 1;
}

.dietary-filter-group {
  display: flex;
  gap: 6px;
  flex-wrap: wrap;
}

.dietary-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 7px 12px;
  border-radius: 6px;
  font-size: 11.5px;
  font-weight: 500;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(226, 196, 175, 0.15);
  color: #f9f6fe;
  cursor: pointer;
  transition: all 0.2s ease;
}

.dietary-btn:hover,
.dietary-btn.active {
  background: rgba(255, 205, 87, 0.15);
  border-color: #ffcd57;
  color: #ffcd57;
}

.dot-veg {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background-color: #22c55e;
  box-shadow: 0 0 6px #22c55e;
}

.dot-nonveg {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background-color: #ef4444;
  box-shadow: 0 0 6px #ef4444;
}

.location-filter-pills {
  display: flex;
  gap: 6px;
}

.loc-pill {
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 11px;
  font-weight: 600;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(226, 196, 175, 0.15);
  color: #b8aba2;
  cursor: pointer;
  transition: all 0.2s ease;
}

.loc-pill.active,
.loc-pill:hover {
  background: #ffcd57;
  border-color: #ffcd57;
  color: #170d08;
}

.category-tabs-scroll {
  display: flex;
  gap: 8px;
  overflow-x: auto;
  padding-bottom: 4px;
  scrollbar-width: none;
}

.category-tabs-scroll::-webkit-scrollbar {
  display: none;
}

.category-tab-btn {
  white-space: nowrap;
  padding: 6px 14px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  background: none;
  border: none;
  border-bottom: 2px solid transparent;
  color: #b8aba2;
  cursor: pointer;
  transition: all 0.2s ease;
}

.category-tab-btn:hover {
  color: #ffffff;
}

.category-tab-btn.active {
  color: #ffcd57;
  border-bottom-color: #ffcd57;
}

/* 4. CATALOG GRID */
.menu-catalog-section {
  padding: 40px 0 80px;
}

.filter-status-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: rgba(255, 205, 87, 0.1);
  border: 1px solid rgba(255, 205, 87, 0.25);
  border-radius: 6px;
  padding: 10px 18px;
  margin-bottom: 24px;
  font-size: 13px;
  color: #ffcd57;
}

.reset-filter-link {
  background: none;
  border: none;
  color: #ffffff;
  text-decoration: underline;
  cursor: pointer;
  font-size: 12px;
  text-transform: uppercase;
}

.no-results-box {
  text-align: center;
  padding: 60px 20px;
  background: #271911;
  border: 1px solid rgba(226, 196, 175, 0.15);
  border-radius: 8px;
  margin-bottom: 40px;
}

.no-results-icon {
  font-size: 48px;
  margin-bottom: 14px;
}

.no-results-box h3 {
  font-family: "Cinzel", serif;
  font-size: 24px;
  color: #ffffff;
  margin: 0 0 8px;
}

.no-results-box p {
  color: #b8aba2;
  max-width: 480px;
  margin: 0 auto 20px;
  font-size: 14px;
}

.btn-reset-filters {
  padding: 10px 24px;
  background: #ffcd57;
  border: none;
  border-radius: 4px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: #170d08;
  cursor: pointer;
}

.menu-category-block {
  margin-bottom: 60px;
}

.category-block-header {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  border-bottom: 1px solid rgba(226, 196, 175, 0.15);
  padding-bottom: 14px;
  margin-bottom: 28px;
}

.cat-kicker {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: #ffcd57;
  display: block;
  margin-bottom: 4px;
}

.cat-title {
  font-family: "Cinzel", Georgia, serif;
  font-size: 26px;
  font-weight: 400;
  color: #ffffff;
  margin: 0;
  letter-spacing: 0.04em;
}

.cat-item-count {
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #b8aba2;
  background: rgba(255, 255, 255, 0.05);
  padding: 4px 10px;
  border-radius: 12px;
  border: 1px solid rgba(226, 196, 175, 0.15);
}

.dishes-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.dish-card {
  background: #271911;
  border: 1px solid rgba(226, 196, 175, 0.15);
  border-radius: 8px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
}

.dish-card:hover {
  transform: translateY(-3px);
  border-color: rgba(255, 205, 87, 0.4);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
}

.dish-card-media {
  position: relative;
  height: 170px;
  overflow: hidden;
  background-color: #170d08;
}

.dish-card-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.dish-card:hover .dish-card-media img {
  transform: scale(1.05);
}

.dish-diet-pill {
  position: absolute;
  top: 10px;
  left: 10px;
  display: flex;
  align-items: center;
  gap: 5px;
  background: rgba(23, 13, 8, 0.85);
  backdrop-filter: blur(4px);
  padding: 3px 8px;
  border-radius: 4px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.06em;
}

.dish-diet-pill.is-veg {
  color: #4ade80;
  border: 1px solid rgba(74, 222, 128, 0.3);
}

.dish-diet-pill.is-veg .diet-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #4ade80;
}

.dish-diet-pill.is-nonveg {
  color: #f87171;
  border: 1px solid rgba(248, 113, 113, 0.3);
}

.dish-diet-pill.is-nonveg .diet-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #f87171;
}

.dish-spicy-pill {
  position: absolute;
  top: 10px;
  right: 10px;
  background: rgba(23, 13, 8, 0.85);
  backdrop-filter: blur(4px);
  padding: 3px 8px;
  border-radius: 4px;
  font-size: 10px;
  font-weight: 600;
  color: #fbbf24;
  border: 1px solid rgba(251, 191, 36, 0.3);
}

.dish-card-content {
  padding: 18px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.dish-title-price-row {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 12px;
  margin-bottom: 8px;
}

.dish-name {
  font-family: "Cinzel", Georgia, serif;
  font-size: 16px;
  font-weight: 600;
  color: #ffffff;
  margin: 0;
  line-height: 1.3;
}

.dish-price {
  font-size: 15px;
  font-weight: 700;
  color: #ffcd57;
  white-space: nowrap;
}

.dish-desc {
  font-size: 12.5px;
  color: #b8aba2;
  line-height: 1.45;
  margin: 0 0 16px;
  flex-grow: 1;
}

.dish-card-footer {
  margin-top: auto;
  border-top: 1px solid rgba(226, 196, 175, 0.15);
  padding-top: 12px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 11px;
}

.dish-locations-tag {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  color: #E2C4AF;
  font-size: 11px;
}

.dish-action-link {
  color: #ffcd57;
  text-decoration: none;
  font-weight: 600;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  transition: opacity 0.2s;
}

.dish-action-link:hover {
  opacity: 0.75;
  text-decoration: underline;
}

/* ==========================================================================
   RESPONSIVE DESIGN
   ========================================================================== */
@media (max-width: 1024px) {
  .kh-featured-inner {
    grid-template-columns: 1fr;
    row-gap: 30px;
    text-align: center;
    min-height: auto;
  }
  .kh-featured-copy {
    align-items: center;
  }
  .kh-featured-copy-inner {
    align-items: center;
    margin: 0 auto;
  }
  .kh-featured-title {
    text-align: center !important;
    font-size: 34px !important;
  }
  .kh-featured-title-line {
    text-align: center !important;
  }
  .kh-featured-meta {
    justify-content: center;
    margin: 12px auto 0;
  }
  .kh-featured-side {
    justify-content: center;
  }
  .kh-featured-side-inner {
    max-width: 450px;
    text-align: center;
  }
  .kh-featured-desc {
    text-align: center;
  }
  .kh-featured-more {
    justify-content: center;
  }
  .dishes-cards-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .elementor-element-0111a11 {
    padding: 80px 16px 40px;
  }
  .kh-featured-visual {
    width: 260px;
    height: 260px;
  }
  .kh-featured-label {
    font-size: 28px;
    top: -24px;
    right: -10px;
  }
  .dishes-cards-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<script>
/* ==========================================================================
   FEATURED SHOWCASE SLIDER CONTROLLER (NATIVE REPLICATION OF KHUFUS SLIDER)
   ========================================================================== */
(function () {
  const featuredData = <?= json_encode($featuredItems) ?>;
  let currentIdx = 0;
  let autoTimer = null;

  const titleEl = document.getElementById('khFeaturedTitle');
  const menuEl = document.getElementById('khFeaturedMenu');
  const dateEl = document.getElementById('khFeaturedDate');
  const labelEl = document.getElementById('khFeaturedLabel');
  const mobileLabelEl = document.getElementById('khFeaturedMobileLabel');
  const descEl = document.getElementById('khFeaturedDesc');
  const slides = document.querySelectorAll('.kh-featured-slide');
  const dots = document.querySelectorAll('.kh-featured-dot');
  const prevBtn = document.getElementById('khPrevSlide');
  const nextBtn = document.getElementById('khNextSlide');

  function goToSlide(idx) {
    if (idx < 0) idx = featuredData.length - 1;
    if (idx >= featuredData.length) idx = 0;
    currentIdx = idx;
    const item = featuredData[currentIdx];

    // Fade out text elements
    if (titleEl) titleEl.style.opacity = '0';
    if (descEl) descEl.style.opacity = '0';
    if (labelEl) labelEl.style.opacity = '0';

    setTimeout(() => {
      // Update Title
      if (titleEl && item.titleWords) {
        titleEl.innerHTML = `<span class="js-title-words">
          <span class="kh-featured-title-line">${item.titleWords[0] || ''}</span>
          <span class="kh-featured-title-line">${item.titleWords[1] || ''}</span>
          <span class="kh-featured-title-line">${item.titleWords[2] || ''}</span>
        </span>`;
      }
      if (menuEl) menuEl.textContent = item.menu;
      if (dateEl) dateEl.textContent = item.date;
      if (labelEl) labelEl.textContent = item.label;
      if (mobileLabelEl) mobileLabelEl.textContent = item.label;
      if (descEl) descEl.textContent = item.desc;

      // Fade back in
      if (titleEl) titleEl.style.opacity = '1';
      if (descEl) descEl.style.opacity = '1';
      if (labelEl) labelEl.style.opacity = '1';
    }, 200);

    // Update slides
    slides.forEach((slide, i) => {
      slide.classList.toggle('is-active', i === currentIdx);
    });

    // Update dots
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === currentIdx);
    });
  }

  function startAuto() {
    stopAuto();
    autoTimer = setInterval(() => {
      goToSlide(currentIdx + 1);
    }, 5500);
  }

  function stopAuto() {
    if (autoTimer) clearInterval(autoTimer);
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      goToSlide(currentIdx - 1);
      startAuto();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      goToSlide(currentIdx + 1);
      startAuto();
    });
  }

  dots.forEach(dot => {
    dot.addEventListener('click', function () {
      goToSlide(parseInt(this.dataset.dot, 10));
      startAuto();
    });
  });

  const widget = document.getElementById('tmenuFeatured9447');
  if (widget) {
    widget.addEventListener('mouseenter', stopAuto);
    widget.addEventListener('mouseleave', startAuto);
  }

  startAuto();
})();

/* ==========================================================================
   CLIENT-SIDE SEARCH & FILTER ENGINE
   ========================================================================== */
(function () {
  let activeLocation = 'all';
  let activeDietary = 'all';
  let activeCategoryGroup = 'all';
  let searchQuery = '';

  const searchInput = document.getElementById('menuSearchInput');
  const searchClear = document.getElementById('menuSearchClear');
  const locPills = document.querySelectorAll('.loc-pill');
  const dietaryBtns = document.querySelectorAll('.dietary-btn');
  const categoryTabBtns = document.querySelectorAll('.category-tab-btn');
  const categoryBlocks = document.querySelectorAll('.menu-category-block');
  const filterStatus = document.getElementById('filterStatus');
  const filterCount = document.getElementById('filterCount');
  const resetAllFiltersBtn = document.getElementById('resetAllFiltersBtn');
  const noResultsState = document.getElementById('noResultsState');

  function applyFilters() {
    let visibleCount = 0;
    const q = searchQuery.toLowerCase().trim();

    categoryBlocks.forEach(block => {
      const blockGroup = block.dataset.group;
      const blockCards = block.querySelectorAll('.dish-card');
      let blockVisibleCount = 0;

      blockCards.forEach(card => {
        const dishName = card.dataset.name || '';
        const dishDesc = (card.querySelector('.dish-desc') ? card.querySelector('.dish-desc').textContent : '').toLowerCase();
        const dishGroup = card.dataset.group || '';
        const isVeg = card.dataset.veg === 'true';
        const isSpicy = card.dataset.spicy === 'true';
        const locations = card.dataset.locations || '';

        // 1. Location match
        let matchesLoc = (activeLocation === 'all' || locations.includes(activeLocation.toLowerCase()));

        // 2. Dietary match
        let matchesDiet = true;
        if (activeDietary === 'veg') matchesDiet = isVeg;
        else if (activeDietary === 'nonveg') matchesDiet = !isVeg;
        else if (activeDietary === 'spicy') matchesDiet = isSpicy;

        // 3. Category group match
        let matchesGroup = (activeCategoryGroup === 'all' || blockGroup === activeCategoryGroup || dishGroup === activeCategoryGroup);

        // 4. Search query match
        let matchesSearch = true;
        if (q) {
          matchesSearch = dishName.includes(q) || dishDesc.includes(q) || block.dataset.category.includes(q);
        }

        if (matchesLoc && matchesDiet && matchesGroup && matchesSearch) {
          card.style.display = 'flex';
          blockVisibleCount++;
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      // Show/Hide category block if it has visible dishes
      if (blockVisibleCount > 0) {
        block.style.display = 'block';
      } else {
        block.style.display = 'none';
      }
    });

    // Update filter status bar
    const isFiltered = (activeLocation !== 'all' || activeDietary !== 'all' || activeCategoryGroup !== 'all' || q.length > 0);
    if (isFiltered) {
      filterStatus.style.display = 'flex';
      filterCount.textContent = `Showing ${visibleCount} dishes matching your filter`;
    } else {
      filterStatus.style.display = 'none';
    }

    // Show/Hide empty state
    if (visibleCount === 0) {
      noResultsState.style.display = 'block';
    } else {
      noResultsState.style.display = 'none';
    }
  }

  // Location selector
  locPills.forEach(pill => {
    pill.addEventListener('click', function () {
      locPills.forEach(p => p.classList.remove('active'));
      this.classList.add('active');
      activeLocation = this.dataset.loc;
      applyFilters();
    });
  });

  // Dietary filter buttons
  dietaryBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      dietaryBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      activeDietary = this.dataset.diet;
      applyFilters();
    });
  });

  // Category tab buttons
  categoryTabBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      categoryTabBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      activeCategoryGroup = this.dataset.group;
      applyFilters();
    });
  });

  // Instant Search with Debounce
  let searchTimer;
  if (searchInput) {
    searchInput.addEventListener('input', function () {
      clearTimeout(searchTimer);
      searchQuery = this.value;
      if (searchClear) {
        searchClear.style.display = searchQuery ? 'block' : 'none';
      }
      searchTimer = setTimeout(applyFilters, 150);
    });
  }

  if (searchClear) {
    searchClear.addEventListener('click', function () {
      if (searchInput) searchInput.value = '';
      searchQuery = '';
      this.style.display = 'none';
      applyFilters();
    });
  }

  window.resetMenuFilters = function () {
    activeLocation = 'all';
    activeDietary = 'all';
    activeCategoryGroup = 'all';
    searchQuery = '';

    if (searchInput) searchInput.value = '';
    if (searchClear) searchClear.style.display = 'none';

    locPills.forEach(p => p.classList.toggle('active', p.dataset.loc === 'all'));
    dietaryBtns.forEach(b => b.classList.toggle('active', b.dataset.diet === 'all'));
    categoryTabBtns.forEach(b => b.classList.toggle('active', b.dataset.group === 'all'));

    applyFilters();
  };

  if (resetAllFiltersBtn) {
    resetAllFiltersBtn.addEventListener('click', window.resetMenuFilters);
  }

})();
</script>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>