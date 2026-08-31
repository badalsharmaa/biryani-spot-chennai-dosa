<!DOCTYPE html>
<html lang="en" class="khf-loaded">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? "Biryani Spot Chennai Dosa | Elevated Indian Dining" ?></title>
  <meta name="description" content="An elevated dining experience celebrating authentic Hyderabadi Dum Biryanis and crisp South Indian Dosas across 4 premier California locations.">
  
  <!-- Favicon & Stylesheet -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/logo-white.svg">
  <link rel="stylesheet" href="/assets/css/khufus-theme.css">
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
       2. LUXURY ABSOLUTE HEADER
       ========================================================================= -->
  <header class="khf-header">
    <div class="khf-header-left">
      <a href="/reservations" class="khf-nav-link">Reservations</a>
      <a href="/menu" class="khf-nav-link">Unified Menu</a>
      <a href="/locations" class="khf-nav-link">Locations</a>
    </div>

    <a href="/" class="khf-header-logo" aria-label="Homepage">
      <img src="/assets/images/logo-white.svg" alt="Biryani Spot Chennai Dosa Logo">
    </a>

    <div class="khf-header-right">
      <a href="/reservations" class="khf-btn-luxury khf-btn-gold" style="padding: 10px 22px; font-size: 11px;">Book Table</a>
      <button id="khfBurgerBtn" class="khf-burger-btn" aria-label="Toggle navigation menu">
        <span class="khf-burger-line"></span>
        <span class="khf-burger-line"></span>
        <span class="khf-burger-line"></span>
      </button>
    </div>
  </header>

  <!-- =========================================================================
       3. FULLSCREEN NAVIGATION OVERLAY
       ========================================================================= -->
  <div id="khufusMenuOverlay" class="khf-menu-overlay" aria-modal="true" role="dialog">
    <nav class="khf-menu-container">
      <a href="/about" class="khf-menu-item">About & Heritage</a>
      <a href="/experience" class="khf-menu-item">The Experience</a>
      <a href="/menu" class="khf-menu-item">Explore Menu (426 Dishes)</a>
      <a href="/gallery" class="khf-menu-item">Culinary Gallery</a>
      <a href="/locations" class="khf-menu-item">4 California Locations</a>
      <a href="/reservations" class="khf-menu-item">Reservations & Catering</a>
      <a href="/contact" class="khf-menu-item">Contact & Hours</a>
    </nav>
  </div>

  <main id="main-content">
