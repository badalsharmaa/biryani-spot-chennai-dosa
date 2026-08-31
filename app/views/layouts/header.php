<!DOCTYPE html>
<html lang="en" class="khf-loaded">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? "Biryani Spot Chennai Dosa | Award-Winning Elevated Indian Dining" ?></title>
  <meta name="description" content="An elevated dining experience celebrating authentic Hyderabadi Dum Biryanis and crisp South Indian Dosas across 4 premier California locations.">
  
  <!-- Favicon & Stylesheet -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/logo-white.svg">
  <link rel="stylesheet" href="/assets/css/khufus-theme.css">
  
  <!-- Lottie web player -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.1/lottie.min.js"></script>
</head>
<body>

  <!-- =========================================================================
       1. PRELOADER INTRO OVERLAY
       ========================================================================= -->
  <div id="khufusIntro">
    <div class="khf-inner">
      <div class="khf-logo-wrapper">
        <img src="/assets/images/logo-white.svg" alt="Brand Logo">
        <div class="khf-logo-divider"></div>
      </div>
      <div class="khf-text">
        <div class="khf-line">
          <span class="khf-word khf-lead">At</span>
          <span class="khf-word khf-lead">Biryani</span>
          <span class="khf-word khf-lead">Spot,</span>
          <span class="khf-word">culinary</span>
          <span class="khf-word">tradition</span>
          <span class="khf-word">is</span>
          <span class="khf-word">treated</span>
          <span class="khf-word">as</span>
          <span class="khf-word">heritage,</span>
          <span class="khf-word">not</span>
          <span class="khf-word">performance.</span>
        </div>
      </div>
      <button id="khfSkip" class="khf-skip" type="button">Skip Intro</button>
    </div>
  </div>

  <!-- =========================================================================
       2. EXACT LUXURY HEADER (MATCHING KHUFUS.COM)
       ========================================================================= -->
  <header class="khf-header">
    <div class="khf-header-left">
      <a href="/reservations" class="khf-nav-link">RESERVATIONS</a>
      <a href="/bistro" class="khf-nav-link">BISTRO</a>
    </div>

    <a href="/" class="khf-header-logo" aria-label="Homepage">
      <img src="/assets/images/logo-white.svg" alt="Biryani Spot Chennai Dosa Logo">
    </a>

    <div class="khf-header-right">
      <!-- Lottie Toggle Animated Hamburger -->
      <div class="lottie-wrapper" style="position: relative; height: 50px; overflow: visible;">
        <div id="lottie-toggle" style="width: 80px; height: 50px; cursor: pointer;" aria-label="Open navigation menu"></div>
      </div>
    </div>
  </header>

  <!-- =========================================================================
       3. FULLSCREEN NAVIGATION OVERLAY MODAL (MATCHING POPUP-166)
       ========================================================================= -->
  <div id="khufusMenuOverlay" class="khf-menu-overlay" aria-modal="true" role="dialog">
    <nav class="khf-menu-container">
      <a href="/about" class="khf-menu-item">ABOUT</a>
      <a href="/experience" class="khf-menu-item">THE EXPERIENCE</a>
      <a href="/menu" class="khf-menu-item">MENUS</a>
      <a href="/gallery" class="khf-menu-item">GALLERY</a>
      <a href="/legacy" class="khf-menu-item">THE LEGACY</a>
      <a href="/reservations" class="khf-menu-item">RESERVATIONS</a>
      <a href="/locations" class="khf-menu-item">LOCATION &amp; HOURS</a>
    </nav>
  </div>

  <main id="main-content">
