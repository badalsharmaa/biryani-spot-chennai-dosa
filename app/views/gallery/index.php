<?php
$pageTitle = "Culinary Gallery | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";
?>
<section style="padding: 160px 48px 80px; background: #241810; color: #fff; text-align: center;">
  <div style="max-width: 900px; margin: 0 auto;">
    <div style="font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 12px;">Through The Lens</div>
    <h1 style="font-family: var(--font-serif); font-size: clamp(38px, 4.5vw, 64px); font-weight: 300; text-transform: uppercase;">
      The Visual Gallery
      <span style="display: block; font-family: var(--font-script); font-size: clamp(26px, 2.5vw, 38px); color: var(--color-sand); text-transform: capitalize; margin-top: 4px;">moments held in frame</span>
    </h1>
  </div>
</section>

<section style="padding: 80px 48px 120px; background-color: var(--color-cream);">
  <div style="max-width: 1440px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 24px;">
    <?php 
    $galleryImages = [
      "/assets/images/gallery-1.webp",
      "/assets/images/gallery-2.webp",
      "/assets/images/gallery-3.webp",
      "/assets/images/gallery-4.webp",
      "/assets/images/gallery-5.webp",
      "/assets/images/gallery-6.webp",
      "/assets/images/gallery-7.webp",
      "/assets/images/gallery-8.webp",
      "/assets/images/gallery-9.webp",
      "/assets/images/arch-photo.webp",
      "/assets/images/why-card-2.webp",
      "/assets/images/why-card-3.webp"
    ];
    foreach ($galleryImages as $img): ?>
      <div style="aspect-ratio: 4/3; overflow: hidden; box-shadow: 0 16px 40px rgba(0,0,0,0.08); background: #241810;">
        <img src="<?= $img ?>" alt="Culinary Photography" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
