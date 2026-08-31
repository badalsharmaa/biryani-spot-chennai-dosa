<?php
$pageTitle = "The Experience | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";
?>

<section style="padding: 180px 48px 90px; background: #241810; color: #fff; text-align: center; position: relative;">
  <div style="position: absolute; inset: 0; background: url('/assets/images/exp-landing.webp') center / cover no-repeat; opacity: 0.22;"></div>
  
  <div style="position: relative; z-index: 2; max-width: 960px; margin: 0 auto;">
    <div style="font-size: 11px; letter-spacing: 0.32em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 14px;">THE EXPERIENCE</div>
    <h1 style="font-family: var(--font-serif); font-size: clamp(38px, 4.8vw, 68px); font-weight: 300; text-transform: uppercase; line-height: 1.05;">
      EVERY JOURNEY BEGINS WITH<br>APPROACH
      <span style="display: block; font-family: var(--font-script); font-size: clamp(26px, 2.8vw, 42px); color: var(--color-sand); text-transform: capitalize; margin-top: 6px;">toward something monumental</span>
    </h1>
    <p style="margin-top: 24px; font-size: 14px; color: rgba(255,255,255,0.78); line-height: 1.85; max-width: 720px; margin-left: auto; margin-right: auto;">
      As you move away from the noise of the city, the atmosphere shifts and the pace slows. Biryani Spot is an elevated dining experience designed to be approached, not rushed. Each visit is by reservation, allowing for a calm and uninterrupted arrival.
    </p>
  </div>
</section>

<!-- 4 Sequential Moments Section -->
<section class="kh-exp-moments-sec">
  <div style="text-align: center; max-width: 900px; margin: 0 auto 60px;">
    <div style="font-size: 10px; letter-spacing: 0.28em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 8px;">Chapter Two / The Visit</div>
    <h2 style="font-family: var(--font-serif); font-size: clamp(30px, 3.5vw, 46px); font-weight: 300; text-transform: uppercase;">
      A Sequence of Moments That Define The Visit
      <span style="display: block; font-family: var(--font-script); font-size: clamp(22px, 2.2vw, 34px); color: var(--color-sand); text-transform: capitalize; margin-top: 4px;">from arrival to presence</span>
    </h2>
  </div>

  <div class="kh-exp-moments-grid">
    
    <div class="kh-exp-moment-card">
      <div>
        <div class="kh-exp-moment-num">01</div>
        <div class="kh-exp-moment-kicker">The Setting</div>
        <h3 class="kh-exp-moment-title">Where It Begins</h3>
        <p class="kh-exp-moment-text">
          Warm natural materials, subtle amber light, and architectural presence set the stage the moment you cross the threshold.
        </p>
      </div>
      <div style="margin-top: 24px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 14px; font-size: 11px; color: var(--color-sand);">
        Moments Held In Frame &rarr;
      </div>
    </div>

    <div class="kh-exp-moment-card">
      <div>
        <div class="kh-exp-moment-num">02</div>
        <div class="kh-exp-moment-kicker">The Arrival</div>
        <h3 class="kh-exp-moment-title">A Controlled Entry</h3>
        <p class="kh-exp-moment-text">
          Every table is spaced with discipline and intention. Dedicated concierge service ensures you are seated without queue or compromise.
        </p>
      </div>
      <div style="margin-top: 24px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 14px; font-size: 11px; color: var(--color-sand);">
        Dedicated Hospitality &rarr;
      </div>
    </div>

    <div class="kh-exp-moment-card">
      <div>
        <div class="kh-exp-moment-num">03</div>
        <div class="kh-exp-moment-kicker">The Table</div>
        <h3 class="kh-exp-moment-title">The Experience Unfolds</h3>
        <p class="kh-exp-moment-text">
          Freshly unsealed dough handis, crisp golden lace dosas straight from cast iron, and rich spice aromatics composed in delicate harmony.
        </p>
      </div>
      <div style="margin-top: 24px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 14px; font-size: 11px; color: var(--color-sand);">
        Authentic Gastronomy &rarr;
      </div>
    </div>

    <div class="kh-exp-moment-card">
      <div>
        <div class="kh-exp-moment-num">04</div>
        <div class="kh-exp-moment-kicker">The Atmosphere</div>
        <h3 class="kh-exp-moment-title">What Stays With You</h3>
        <p class="kh-exp-moment-text">
          Lingering conversations under twilight warmth, fragrant cardamom chai, and memories anchored in true South Asian hospitality.
        </p>
      </div>
      <div style="margin-top: 24px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 14px; font-size: 11px; color: var(--color-sand);">
        Enduring Memory &rarr;
      </div>
    </div>

  </div>
</section>

<!-- Arch section with floating birds -->
<section class="kh-arch-section">
  <div class="kh-semicircle"></div>
  <div class="kh-bird-left"><img src="/assets/images/birds-dark.webp" alt="Bird Left"></div>
  <div class="kh-bird-right"><img src="/assets/images/birds-light.webp" alt="Bird Right"></div>
  <div class="kh-arch-wrap">
    <div class="kh-arch"><img src="/assets/images/exp-moment-1.webp" alt="Experience Arch"></div>
  </div>
</section>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
