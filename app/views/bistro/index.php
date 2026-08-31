<?php
$pageTitle = "The Bistro | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";
?>
<section class="khf-hero" style="min-height: 80vh;">
  <video class="khf-hero-video-bg" autoplay muted loop playsinline src="/assets/videos/hero-video.mp4"></video>
  <div class="khf-hero-overlay"></div>
  <div class="khf-hero-content">
    <div class="khf-hero-kicker">The Evening Bistro</div>
    <h1 class="khf-hero-title is-in">
      <span class="khf-line"><span class="khf-line-inner">A MORE <em>Intimate</em> TABLE</span></span>
      <span class="khf-line"><span class="khf-line-inner">BY THE HEARTH</span></span>
    </h1>
    <div class="khf-hero-actions">
      <a href="/reservations" class="khf-btn-luxury khf-btn-gold">Reserve Your Evening Table</a>
    </div>
  </div>
</section>

<section class="kh-bistro-intro-sec">
  <p class="kh-bistro-intro-text">
    AS NIGHT FALLS OVER <span class="kh-bistro-script">the heritage hearths</span><br>
    CANDLELIT TABLES AND <span class="kh-bistro-script">thoughtful plates</span><br>
    SET THE TONE FOR <span class="kh-bistro-script">lingering evenings</span>
  </p>
</section>

<!-- Parallax Arch -->
<section class="kh-arch-section">
  <div class="kh-semicircle"></div>
  <div class="kh-bird-left"><img src="/assets/images/birds-dark.webp" alt="Bird Left"></div>
  <div class="kh-bird-right"><img src="/assets/images/birds-light.webp" alt="Bird Right"></div>
  <div class="kh-arch-wrap">
    <div class="kh-arch"><img src="/assets/images/arch-photo.webp" alt="Bistro Arch"></div>
  </div>
</section>

<!-- 3 Horizontal Expanding Tabs -->
<section class="khufusbistro-accordion-sec">
  <div class="khufusbistro-accordion">
    <div class="khufusbistro-accordion__item is-active" data-index="1" style="background-image: url('/assets/images/bistro-team.webp');">
      <div class="khufusbistro-accordion__overlay"></div>
      <div class="khufusbistro-accordion__header">
        <span class="khufusbistro-accordion__side-title">The Bistro</span>
        <span class="khufusbistro-accordion__active-icon" aria-hidden="true"></span>
        <img class="khufusbistro-accordion__corner-icon" src="/assets/images/corner-ornament.svg" alt="Corner Ornament">
        <span class="khufusbistro-accordion__number">01</span>
        <div class="khufusbistro-accordion__content">
          <div class="khufusbistro-accordion__kicker">The Bistro</div>
          <h3 class="khufusbistro-accordion__title">WHERE HORIZON MEETS TABLE</h3>
          <p class="khufusbistro-accordion__description">An open-air setting shaped by desert warmth, where the view, the atmosphere, and the table come together with quiet intention.</p>
          <a href="/about" class="khufusbistro-accordion__button"><span>ABOUT THE BISTRO</span></a>
        </div>
      </div>
    </div>
    <div class="khufusbistro-accordion__item" data-index="2" style="background-image: url('/assets/images/why-card-2.webp');">
      <div class="khufusbistro-accordion__overlay"></div>
      <div class="khufusbistro-accordion__header">
        <span class="khufusbistro-accordion__side-title">The Evening</span>
        <span class="khufusbistro-accordion__active-icon" aria-hidden="true"></span>
        <img class="khufusbistro-accordion__corner-icon" src="/assets/images/corner-ornament.svg" alt="Corner Ornament">
        <span class="khufusbistro-accordion__number">02</span>
        <div class="khufusbistro-accordion__content">
          <div class="khufusbistro-accordion__kicker">The Evening</div>
          <h3 class="khufusbistro-accordion__title">A SLOWER RHYTHM</h3>
          <p class="khufusbistro-accordion__description">As night falls, intimate candlelit tables set the tone for lingering evenings with royal dum delicacies.</p>
          <a href="/reservations" class="khufusbistro-accordion__button"><span>RESERVE TABLE</span></a>
        </div>
      </div>
    </div>
    <div class="khufusbistro-accordion__item" data-index="3" style="background-image: url('/assets/images/why-card-3.webp');">
      <div class="khufusbistro-accordion__overlay"></div>
      <div class="khufusbistro-accordion__header">
        <span class="khufusbistro-accordion__side-title">The Craft</span>
        <span class="khufusbistro-accordion__active-icon" aria-hidden="true"></span>
        <img class="khufusbistro-accordion__corner-icon" src="/assets/images/corner-ornament.svg" alt="Corner Ornament">
        <span class="khufusbistro-accordion__number">03</span>
        <div class="khufusbistro-accordion__content">
          <div class="khufusbistro-accordion__kicker">The Craft</div>
          <h3 class="khufusbistro-accordion__title">REFINED SIMPLICITY</h3>
          <p class="khufusbistro-accordion__description">Generational recipes prepared with modern discipline and the purest cold-pressed oils and stone-ground spices.</p>
          <a href="/menu" class="khufusbistro-accordion__button"><span>EXPLORE MENU</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
