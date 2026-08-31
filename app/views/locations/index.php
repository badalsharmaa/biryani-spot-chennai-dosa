<?php
$pageTitle = "Locations & Hours | Biryani Spot Chennai Dosa";
$locationsData = json_decode(file_get_contents(__DIR__ . "/../../../old_website_data/data/locations.json"), true) ?? [];
require_once __DIR__ . "/../layouts/header.php";
?>

<section style="padding: 140px 48px 60px; background-color: var(--color-espresso-dark); color: #fff; text-align: center;">
  <div style="max-width: 900px; margin: 0 auto;">
    <div style="font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 12px;">Bay Area Presence</div>
    <h1 style="font-family: var(--font-serif); font-size: clamp(38px, 4.5vw, 64px); font-weight: 300; text-transform: uppercase;">
      Operating Locations
      <span style="display: block; font-family: var(--font-script); font-size: clamp(26px, 2.5vw, 38px); color: var(--color-sand); text-transform: capitalize; margin-top: 4px;">Dublin &bull; Milpitas &bull; Livermore &bull; Concord</span>
    </h1>
  </div>
</section>

<section style="padding: 80px 48px 120px; background-color: var(--color-cream);">
  <div style="max-width: 1380px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 36px;">
    <?php foreach ($locationsData as $loc): ?>
      <div style="background: #fff; padding: 36px; border: 1px solid rgba(61,41,28,0.1); box-shadow: 0 16px 40px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 8px;">Location</div>
          <h2 style="font-family: var(--font-serif); font-size: 26px; font-weight: 400; color: var(--color-espresso); margin-bottom: 12px;">
            <?= htmlspecialchars($loc['name']) ?>
          </h2>
          <p style="font-size: 13px; color: rgba(61,41,28,0.8); line-height: 1.8; margin-bottom: 16px;">
            <strong>Address:</strong><br><?= htmlspecialchars($loc['address']) ?>
          </p>
          <p style="font-size: 13px; color: rgba(61,41,28,0.8); line-height: 1.8; margin-bottom: 24px;">
            <strong>Phone:</strong><br><?= htmlspecialchars($loc['phone']) ?>
          </p>
        </div>
        <div>
          <a href="<?= htmlspecialchars($loc['order_url']) ?>" target="_blank" class="khf-btn-luxury" style="width: 100%; text-align: center; color: var(--color-espresso); border-color: var(--color-espresso); padding: 12px 18px;">
            Direct ToastTab Order &rarr;
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
