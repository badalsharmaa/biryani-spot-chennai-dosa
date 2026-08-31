<?php
$pageTitle = "Biryani Spot Chennai Dosa | Elevated Indian Dining";
require_once __DIR__ . "/../layouts/header.php";
?>

<!-- =========================================================================
     1. FULLSCREEN HERO VIDEO & STAGGERED TYPOGRAPHY
     ========================================================================= -->
<section class="khf-hero">
  <video class="khf-hero-video-bg" autoplay muted loop playsinline src="/assets/videos/hero-video.mp4"></video>
  <div class="khf-hero-overlay"></div>

  <div class="khf-hero-content">
    <div class="khf-hero-kicker">Elevated South Asian Gastronomy</div>

    <h1 class="khf-hero-title is-in">
      <span class="khf-line"><span class="khf-line-inner">WHERE THE SETTING</span></span>
      <span class="khf-line"><span class="khf-line-inner">BECOMES <em>PART OF THE TABLE</em></span></span>
    </h1>

    <p class="khf-hero-sub">
      Set across the Bay Area, interpreted through an artisanal culinary lens. A new standard in authentic Dum Biryanis and Cast Iron South Indian Dosas.
    </p>

    <div class="khf-hero-actions">
      <a href="/reservations" class="khf-btn-luxury khf-btn-gold">Reserve Your Table</a>
      <a href="/menu" class="khf-btn-luxury">Explore Unified Menu</a>
    </div>
  </div>
</section>

<!-- =========================================================================
     2. WHY SECTION: 3-COLUMN PARALLAX EDITORIAL PANELS
     ========================================================================= -->
<section class="khf-why-sec" id="khfWhySec">
  <div class="khf-why-grid">

    <!-- Panel 1: Setting -->
    <article class="khf-why-panel khf-why-panel--1" data-speed="0.25">
      <img src="/assets/images/pyramids-backdrop.webp" alt="Atmospheric Setting" loading="lazy">
      <div class="khf-why-overlay">
        <div class="khf-why-inner">
          <div class="khf-why-icon khf-why-icon--1"></div>
          <div class="khf-why-head">
            <h3 class="khf-why-title">
              Setting
              <span class="khf-why-script">Where Place Defines Presence</span>
            </h3>
          </div>
          <div class="khf-why-reveal">
            <p>
              Its legacy is felt less as history retold and more as presence carried forward. Warm hospitality, authentic aromas, and cultural gravity give the restaurant a sense of continuity.
            </p>
            <a href="/locations" class="khf-why-btn">Discover Locations</a>
          </div>
        </div>
      </div>
    </article>

    <!-- Panel 2: Composition -->
    <article class="khf-why-panel khf-why-panel--2" data-speed="0.35">
      <img src="/assets/images/why-card-2.webp" alt="Culinary Composition" loading="lazy">
      <div class="khf-why-overlay">
        <div class="khf-why-inner">
          <div class="khf-why-icon khf-why-icon--2"></div>
          <div class="khf-why-head">
            <h3 class="khf-why-title">
              Composition
              <span class="khf-why-script">Every Detail Holds Intention</span>
            </h3>
          </div>
          <div class="khf-why-reveal">
            <p>
              Behind every dish is a point of view shaped with restraint and discipline. Stone-ground spices, whole saffron threads, and age-old techniques harmonize into unmatched depth.
            </p>
            <a href="/about" class="khf-why-btn">Explore The Craft</a>
          </div>
        </div>
      </div>
    </article>

    <!-- Panel 3: Atmosphere -->
    <article class="khf-why-panel khf-why-panel--3" data-speed="0.28">
      <img src="/assets/images/why-card-3.webp" alt="Dining Atmosphere" loading="lazy">
      <div class="khf-why-overlay">
        <div class="khf-why-inner">
          <div class="khf-why-icon khf-why-icon--3"></div>
          <div class="khf-why-head">
            <h3 class="khf-why-title">
              Atmosphere
              <span class="khf-why-script">A Rhythm That Settles In</span>
            </h3>
          </div>
          <div class="khf-why-reveal">
            <p>
              The dining experience unfolds in measured layers rather than all at once. Aroma, texture, and spice arrive gradually, creating a lingering rhythm.
            </p>
            <a href="/experience" class="khf-why-btn">Feel The Experience</a>
          </div>
        </div>
      </div>
    </article>

  </div>
</section>

<!-- =========================================================================
     3. 3D PERSPECTIVE CYLINDRICAL GALLERY
     ========================================================================= -->
<section class="khx-gallery" id="khxGallery">
  <div class="khx-header-stage">
    <div class="khx-number">04</div>
    <div class="khx-kicker">Through The Lens</div>
    <h2 class="khx-title">
      The Biryani Spot Experience
      <span class="khx-script">moments held in frame</span>
    </h2>
  </div>

  <div class="khx-viewport" id="khxViewport">
    <div class="khx-track" id="khxTrack">
      <a class="khx-item" href="/gallery">
        <img src="/assets/images/gallery-1.webp" alt="Signature Dish 1">
      </a>
      <a class="khx-item" href="/gallery">
        <img src="/assets/images/gallery-2.webp" alt="Signature Dish 2">
      </a>
      <a class="khx-item" href="/gallery">
        <img src="/assets/images/gallery-3.webp" alt="Signature Dish 3">
      </a>
      <a class="khx-item" href="/gallery">
        <img src="/assets/images/why-card-2.webp" alt="Signature Dish 4">
      </a>
      <a class="khx-item" href="/gallery">
        <img src="/assets/images/why-card-3.webp" alt="Signature Dish 5">
      </a>
      <a class="khx-item" href="/gallery">
        <img src="/assets/images/gallery-1.webp" alt="Signature Dish 6">
      </a>
    </div>
  </div>
</section>

<!-- =========================================================================
     4. POLAROID SLIDER V2 (CHEF & GASTRONOMY)
     ========================================================================= -->
<section class="monarq-polaroid-slider-v2" id="monarqPolaroidSliderV2">
  <div class="mps5-shell">

    <!-- Left: Polaroid frame -->
    <div class="mps5-left">
      <div class="mps5-polaroid">
        <div class="mps5-polaroid-gloss"></div>
        <div class="mps5-photo-stage">
          <div class="mps5-photo-layer is-active" id="mps5ImageCurrent" style="background-image: url('/assets/images/chef-mostafa.webp');"></div>
        </div>
        <div class="mps5-meta-row">
          <div class="mps5-photo-title" id="mps5PhotoTitle">Chef Mostafa Seif</div>
          <div class="mps5-photo-mark" aria-hidden="true"></div>
        </div>
      </div>
    </div>

    <!-- Center: Content -->
    <div class="mps5-center">
      <div class="mps5-number">05</div>
      <div class="mps5-kicker">Meet The Master Chef</div>
      <h2 class="mps5-title">
        Meet Chef Mostafa Seif
        <span class="mps5-script">Innovation Meets Tradition</span>
      </h2>
      <p class="mps5-text">
        Winner of Top Chef Middle East and recipient of Two Knives at The Best Chef Awards, Chef Mostafa crafts culinary mastery rooted in regional heritage.
      </p>
      <div class="mps5-actions">
        <div class="mps5-arrow-nav">
          <button class="mps5-arrow mps5-prev" type="button" aria-label="Previous Slide">&larr;</button>
          <button class="mps5-arrow mps5-next" type="button" aria-label="Next Slide">&rarr;</button>
        </div>
      </div>
      <div class="mps5-divider"></div>
      <p class="mps5-note">
        Every spice blend and slow-cooked creation is prepared with artisanal precision and generational passion.
      </p>
    </div>

    <!-- Right: Index numbers -->
    <div class="mps5-right">
      <button class="mps5-index is-active" type="button">01</button>
      <button class="mps5-index" type="button">02</button>
      <button class="mps5-index" type="button">03</button>
    </div>

  </div>
</section>

<!-- =========================================================================
     5. STORY & AMBIENT PARALLAX COLLAGE
     ========================================================================= -->
<section class="kh-home-story-sec" id="khHomeStorySec">
  <div class="kh-home-story-wrap">
    <div class="kh-home-story-grid">

      <!-- Copy -->
      <div class="kh-home-story-copy">
        <div class="kh-home-story-number">08</div>
        <div class="kh-home-story-kicker">Experience It By Evening</div>
        <h2 class="kh-home-story-title">
          The Experience<br>
          Evolves With<br>
          The Light
          <span class="kh-home-story-script">a softer, deeper atmosphere</span>
        </h2>
        <p class="kh-home-story-text">
          As daylight begins to fade, the setting shifts into a more intimate expression. Light softens, the pace changes, and the aromas of simmering handis become even more immersive.
        </p>
        <a href="/experience" class="kh-home-story-cta">Continue To Dining Experience</a>
        <div class="kh-home-story-divider" style="width: 80px; height: 1px; background: rgba(61,41,28,0.15); margin: 24px 0 16px;"></div>
        <p style="font-size: 11px; color: rgba(61,41,28,0.6);">
          An evening celebration of elevated Indian dining across Dublin, Milpitas, Livermore, and Concord.
        </p>
      </div>

      <!-- Tilted 3-Col Visual -->
      <div class="kh-home-story-visual">
        <div class="kh-home-story-columns">
          <div class="kh-home-story-col kh-home-story-col--1" data-speed="0.18">
            <div class="kh-home-story-img" style="background-image: url('/assets/images/story-img-1.webp');"></div>
          </div>
          <div class="kh-home-story-col kh-home-story-col--2" data-speed="0.32">
            <div class="kh-home-story-img" style="background-image: url('/assets/images/story-img-2.webp');"></div>
          </div>
          <div class="kh-home-story-col kh-home-story-col--3" data-speed="0.22">
            <div class="kh-home-story-img" style="background-image: url('/assets/images/story-img-3.webp');"></div>
          </div>
          <div class="kh-home-story-card">
            <div class="kh-home-story-card-label">Evening Atmosphere</div>
            <p>
              As the sun sets, our hand-carved wood and warm amber lighting create a deeply intimate sanctuary for food lovers.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================================
     6. ARCHITECTURAL PILLAR CTA REVEAL
     ========================================================================= -->
<section class="kh-cta-reveal" id="khCtaReveal">
  <div class="kh-cta-inner">
    <div class="kh-cta-kicker">Final Invitation</div>
    <h2 class="kh-cta-title">
      Dine With <span class="kh-cta-hi">Heritage</span> In View,<br>
      In A Moment <span class="kh-cta-hi">Composed</span> For You
    </h2>
    <p class="kh-cta-body">
      From the first arrival to the final pause, every detail is deliberate, allowing authentic tradition to feel present rather than performed. Reserve your table and step into a dining journey where flavor leads, and everything else follows.
    </p>
    <a href="/reservations" class="kh-cta-btn">Reserve Your Table</a>
    <div class="kh-cta-ornament"></div>
  </div>
</section>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
