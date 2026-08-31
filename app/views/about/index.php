<?php
$pageTitle = "About & The Craft | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";
?>

<!-- Header hero with painted backdrop -->
<section style="padding: 160px 48px 80px; background: linear-gradient(180deg, #241810 0%, #3D291C 100%); color: #fff; text-align: center; position: relative; overflow: hidden;">
  <div style="position: absolute; inset: 0; background: url('/assets/images/painted-landscape.webp') center / cover no-repeat; opacity: 0.18;"></div>
  
  <div style="position: relative; z-index: 2; max-width: 900px; margin: 0 auto;">
    <div style="font-size: 11px; letter-spacing: 0.32em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 14px;">The Heritage Story</div>
    <h1 style="font-family: var(--font-serif); font-size: clamp(40px, 4.8vw, 68px); font-weight: 300; text-transform: uppercase; line-height: 1.05;">
      Crafted With Restraint
      <span style="display: block; font-family: var(--font-script); font-size: clamp(28px, 3vw, 42px); color: var(--color-sand); text-transform: capitalize; margin-top: 6px;">generations of fire, stone & patience</span>
    </h1>
  </div>
</section>

<!-- Bistro Parallax Arch & Story Section -->
<section class="kh-arch-section" style="height: 80vh;">
  <div class="kh-semicircle"></div>

  <div class="kh-bird-left">
    <img src="/assets/images/birds-dark.webp" alt="Flying Bird Left" loading="lazy">
  </div>

  <div class="kh-bird-right">
    <img src="/assets/images/birds-light.webp" alt="Flying Bird Right" loading="lazy">
  </div>

  <div class="kh-arch-wrap">
    <div class="kh-arch">
      <img src="/assets/images/arch-photo.webp" alt="Artisanal Handi Culinary Craft" loading="lazy">
    </div>
  </div>
</section>

<!-- Editorial Story Chapters with Leaves Background Ornament -->
<section style="padding: 100px 48px; background-color: var(--color-cream); position: relative; overflow: hidden;">
  <div style="position: absolute; top: -60px; right: -80px; width: 400px; height: 400px; background: url('/assets/images/leaves-pattern.svg') center / contain no-repeat; opacity: 0.06; pointer-events: none;"></div>

  <div style="max-width: 980px; margin: 0 auto;">
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 60px; margin-bottom: 80px;">
      <div>
        <div style="font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 8px;">Chapter I</div>
        <h2 style="font-family: var(--font-serif); font-size: 32px; font-weight: 300; text-transform: uppercase; color: var(--color-espresso); margin-bottom: 18px;">
          The Dum Pukht Legacy
        </h2>
        <p style="font-size: 14px; line-height: 1.85; color: rgba(61,41,28,0.8);">
          Dum Pukht, literally translating to "breathe in the steam," originated in the royal kitchens of the Nawabs of Awadh and was perfected in Hyderabad. We seal our heavy handis with flour dough to ensure that no precious aromatic vapour escapes.
        </p>
      </div>

      <div>
        <div style="font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 8px;">Chapter II</div>
        <h2 style="font-family: var(--font-serif); font-size: 32px; font-weight: 300; text-transform: uppercase; color: var(--color-espresso); margin-bottom: 18px;">
          Cast-Iron Tiffin Traditions
        </h2>
        <p style="font-size: 14px; line-height: 1.85; color: rgba(61,41,28,0.8);">
          In Chennai and the coastal South, the morning begins with the sizzle of sourdough dosa batter hit against heavy seasoned cast-iron skillets. Fermented naturally for over 24 hours, our dosas achieve an airy lace texture with golden crispness.
        </p>
      </div>
    </div>

    <!-- Ornament Divider -->
    <div class="kh-ornament-divider">
      <div class="kh-ornament-line"></div>
      <div class="kh-ornament-mark"></div>
      <div class="kh-ornament-line"></div>
    </div>

    <div style="text-align: center; margin-top: 60px;">
      <h3 style="font-family: var(--font-serif); font-size: 28px; font-weight: 300; text-transform: uppercase; color: var(--color-espresso); margin-bottom: 16px;">
        Experience Our Craft Across 4 California Locations
      </h3>
      <p style="font-size: 14px; color: rgba(61,41,28,0.7); max-width: 600px; margin: 0 auto 30px; line-height: 1.8;">
        Visit us in Dublin, Milpitas, Livermore, or Concord to taste true culinary heritage.
      </p>
      <a href="/reservations" class="khf-btn-luxury khf-btn-gold">Reserve A Table &rarr;</a>
    </div>

  </div>
</section>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
