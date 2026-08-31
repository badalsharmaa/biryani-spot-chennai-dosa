<?php
$pageTitle = "Unified Menus | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";

$menuData = json_decode(file_get_contents(__DIR__ . "/../../../data/menu.json"), true);
$categories = $menuData["categories"] ?? [];
?>

<!-- Menu Hero Banner -->
<section style="padding: 180px 48px 80px; background: #241810; color: #fff; text-align: center; position: relative;">
  <div style="position: absolute; inset: 0; background: url('/assets/images/menu-platter.webp') center / cover no-repeat; opacity: 0.18;"></div>
  
  <div style="position: relative; z-index: 2; max-width: 960px; margin: 0 auto;">
    <div style="font-size: 11px; letter-spacing: 0.32em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 14px;">Culinary Expression</div>
    <h1 style="font-family: var(--font-serif); font-size: clamp(38px, 4.8vw, 68px); font-weight: 300; text-transform: uppercase; line-height: 1.05;">
      THE DINING MENU
      <span style="display: block; font-family: var(--font-script); font-size: clamp(26px, 2.8vw, 42px); color: var(--color-sand); text-transform: capitalize; margin-top: 6px;">contemporary South Asian craft</span>
    </h1>
    <p style="margin-top: 20px; font-size: 14px; color: rgba(255,255,255,0.8); line-height: 1.8; max-width: 680px; margin-left: auto; margin-right: auto;">
      Every creation is shaped by generational recipes, stone-ground whole spices, and slow Dum techniques prepared fresh across our California kitchens daily.
    </p>
  </div>
</section>

<!-- Featured Platter Frame -->
<section style="padding: 80px 48px 40px; background-color: var(--color-cream);">
  <div class="kh-menu-featured-frame">
    <div class="kh-menu-featured-img">
      <img src="/assets/images/menu-platter.webp" alt="Signature Royal Dining Platter" loading="lazy">
    </div>
    <div>
      <div style="font-size: 10px; letter-spacing: 0.28em; text-transform: uppercase; color: rgb(106,76,54); margin-bottom: 8px;">Signature Tasting Selection</div>
      <h2 style="font-family: var(--font-serif); font-size: 34px; font-weight: 300; text-transform: uppercase; color: var(--color-espresso); margin-bottom: 16px;">
        Royal Nizam Tasting Platter
      </h2>
      <p style="font-size: 13.5px; line-height: 1.85; color: rgba(61,41,28,0.8); margin-bottom: 24px;">
        A grand feast featuring slow-cooked Hyderabadi Dum Biryani, hand-pressed crisp mini dosas, smoked paneer tikka, cooling mirchi ka salan, and saffron-infused shahi tukda.
      </p>
      <div style="font-family: var(--font-serif); font-size: 26px; color: var(--color-sand); margin-bottom: 24px;">$48.00</div>
      <a href="/reservations" class="khf-btn-luxury khf-btn-gold">Reserve For This Tasting</a>
    </div>
  </div>

  <!-- Category Filter Tabs -->
  <div class="kh-menu-tabs">
    <button type="button" class="kh-menu-tab-btn is-active" data-target="all">All Selections</button>
    <button type="button" class="kh-menu-tab-btn" data-target="biryani">Dum Biryanis</button>
    <button type="button" class="kh-menu-tab-btn" data-target="dosa">Artisanal Dosas</button>
    <button type="button" class="kh-menu-tab-btn" data-target="tiffin">Tiffins &amp; Starters</button>
    <button type="button" class="kh-menu-tab-btn" data-target="dessert">Royal Sweets</button>
  </div>

  <!-- 426-Dish Explorer Grid -->
  <div style="max-width: 1360px; margin: 0 auto;">
    <?php foreach ($categories as $cat): 
      $catName = $cat["name"] ?? "Specialties";
      $catSlug = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $catName));
      $items = $cat["items"] ?? [];
      
      $type = "tiffin";
      if (stripos($catName, "biryani") !== false || stripos($catName, "pulao") !== false || stripos($catName, "rice") !== false) $type = "biryani";
      elseif (stripos($catName, "dosa") !== false || stripos($catName, "uthappam") !== false) $type = "dosa";
      elseif (stripos($catName, "dessert") !== false || stripos($catName, "sweet") !== false) $type = "dessert";
    ?>
      <div class="menu-category-section" data-type="<?= $type ?>" style="margin-bottom: 70px;">
        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px; border-bottom: 1px solid rgba(61,41,28,0.15); padding-bottom: 12px;">
          <h3 style="font-family: var(--font-serif); font-size: 28px; font-weight: 300; text-transform: uppercase; color: var(--color-espresso); margin: 0;">
            <?= htmlspecialchars($catName) ?>
          </h3>
          <span style="font-family: var(--font-script); font-size: 22px; color: var(--color-sand);"><?= count($items) ?> items</span>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 24px;">
          <?php foreach ($items as $item): ?>
            <div style="background: #fff; padding: 24px; border: 1px solid rgba(61,41,28,0.08); box-shadow: 0 8px 24px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <div style="display: flex; justify-content: space-between; align-items: baseline; gap: 12px; margin-bottom: 8px;">
                  <h4 style="font-family: var(--font-serif); font-size: 18px; font-weight: 400; text-transform: uppercase; color: var(--color-espresso); margin: 0;">
                    <?= htmlspecialchars($item["name"] ?? "") ?>
                  </h4>
                  <span style="font-family: var(--font-serif); font-size: 17px; font-weight: 600; color: var(--color-sand);">
                    $<?= number_format((float)($item["price"] ?? 14.99), 2) ?>
                  </span>
                </div>
                <p style="font-family: var(--font-sans); font-size: 12px; line-height: 1.6; color: rgba(61,41,28,0.7); margin: 0 0 14px 0;">
                  <?= htmlspecialchars($item["description"] ?? "Prepared using traditional spice infusions and authentic methods.") ?>
                </p>
              </div>
              <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(61,41,28,0.06); padding-top: 10px; font-size: 10px; letter-spacing: 0.15em; text-transform: uppercase; color: rgb(106,76,54);">
                <span><?= htmlspecialchars($item["dietary"] ?? "House Specialty") ?></span>
                <a href="/locations" style="color: var(--color-espresso); text-decoration: underline;">Order Online &rarr;</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
