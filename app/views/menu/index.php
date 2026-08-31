<?php
$pageTitle = "Unified Menu | Biryani Spot Chennai Dosa";
$menuData = json_decode(file_get_contents(__DIR__ . "/../../../old_website_data/data/unified_menu.json"), true) ?? [];
require_once __DIR__ . "/../layouts/header.php";
?>

<section style="padding: 140px 48px 60px; background-color: var(--color-espresso-dark); color: #fff; text-align: center;">
  <div style="max-width: 900px; margin: 0 auto;">
    <div style="font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 12px;">Culinary Anthology</div>
    <h1 style="font-family: var(--font-serif); font-size: clamp(38px, 4.5vw, 64px); font-weight: 300; text-transform: uppercase;">
      The Unified Menu
      <span style="display: block; font-family: var(--font-script); font-size: clamp(26px, 2.5vw, 38px); color: var(--color-sand); text-transform: capitalize; margin-top: 4px;">426 curated dishes across 32 categories</span>
    </h1>
    <p style="margin-top: 20px; font-size: 14px; color: rgba(255,255,255,0.75); line-height: 1.8;">
      Each dish is crafted with generational heritage, freshly ground whole spices, and unmatched culinary discipline.
    </p>
  </div>
</section>

<section style="padding: 60px 48px 100px; background-color: var(--color-cream); min-height: 80vh;">
  <div style="max-width: 1380px; margin: 0 auto;">
    
    <!-- Dietary & Category Pills -->
    <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-bottom: 50px;">
      <?php foreach (array_slice($menuData, 0, 12) as $cat): ?>
        <a href="#cat-<?= md5($cat['category']) ?>" class="khf-btn-luxury" style="padding: 10px 20px; font-size: 11px; color: var(--color-espresso); border-color: rgba(61,41,28,0.2);">
          <?= htmlspecialchars($cat['category']) ?> (<?= count($cat['items']) ?>)
        </a>
      <?php endforeach; ?>
    </div>

    <!-- Category Sections -->
    <?php foreach (array_slice($menuData, 0, 8) as $cat): ?>
      <div id="cat-<?= md5($cat['category']) ?>" style="margin-bottom: 70px;">
        <div style="border-bottom: 1px solid rgba(61,41,28,0.15); padding-bottom: 16px; margin-bottom: 30px;">
          <h2 style="font-family: var(--font-serif); font-size: 28px; font-weight: 400; text-transform: uppercase; color: var(--color-espresso);">
            <?= htmlspecialchars($cat['category']) ?>
          </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 30px;">
          <?php foreach ($cat['items'] as $item): ?>
            <div style="background: #fff; padding: 26px; border: 1px solid rgba(61,41,28,0.08); box-shadow: 0 10px 30px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                  <h3 style="font-family: var(--font-serif); font-size: 20px; font-weight: 500; color: var(--color-espresso);">
                    <?= htmlspecialchars($item['name']) ?>
                  </h3>
                  <span style="font-family: var(--font-sans); font-weight: 600; color: var(--color-terracotta); font-size: 16px;">
                    <?= htmlspecialchars($item['price']) ?>
                  </span>
                </div>
                <p style="font-size: 13px; color: rgba(61,41,28,0.7); line-height: 1.6; margin-bottom: 16px;">
                  <?= htmlspecialchars($item['description'] ?: "Artisanal preparation with regional spices and traditional cooking methods.") ?>
                </p>
              </div>
              <a href="/reservations" style="font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-sand); font-weight: 500;">Order for Pickup &rarr;</a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
