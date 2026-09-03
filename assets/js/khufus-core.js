/* ==========================================================================
   KHUFU'S CORE INTERACTION & MOTION CONTROLLER
   High-performance Vanilla JS Engine for Animations, 3D Gallery & Slider
   ========================================================================== */

document.addEventListener("DOMContentLoaded", () => {
  initPreloader();
  initHeader();
  initHeroVideoDeceleration();
  initLottieMenu();
  initReserveDropdown();
  initScrollReveals();
  initParallax();
  initRecognitionDeck();
  init3DGallery();
  initBistroAccordion();
  initFaqAccordion();
  initMenuTabs();
});

/* --------------------------------------------------------------------------
   1. PRELOADER CONTROLLER
   -------------------------------------------------------------------------- */
function initPreloader() {
  const intro = document.getElementById("khufusIntro");
  const skipBtn = document.getElementById("khfSkip");
  const heroTitle = document.querySelector(".khf-hero-title");

  if (!intro) return;

  const words = intro.querySelectorAll(".khf-word");
  words.forEach((w, idx) => {
    w.style.setProperty("--d", `${idx * 85}ms`);
  });

  function dismissIntro() {
    intro.classList.add("is-hidden");
    if (heroTitle) {
      heroTitle.classList.add("is-in");
    }
  }

  if (skipBtn) {
    skipBtn.addEventListener("click", dismissIntro);
  }

  setTimeout(dismissIntro, 2000);
}

/* --------------------------------------------------------------------------
   2. HEADER CONTROLLER (HERO TOP ONLY - NO SCROLL FOLLOWING)
   -------------------------------------------------------------------------- */
function initHeader() {
  // Header stays at the top of the hero section only and does not follow on scroll
}

/* --------------------------------------------------------------------------
   2B. HERO VIDEO SINGLE-PLAY & FINAL FRAME PAUSE CONTROLLER
   - Plays at 100% full original speed (no slow motion / no FPS stutter)
   - Freezes firmly on the final frame as a living background image
   -------------------------------------------------------------------------- */
function initHeroVideoDeceleration() {
  const videos = document.querySelectorAll(".elementor-background-video-hosted");
  if (!videos.length) return;

  videos.forEach(video => {
    video.loop = false;
    video.removeAttribute("loop");
    video.playbackRate = 1.0;
    let hasFinished = false;

    function checkVideoProgress() {
      if (hasFinished) return;

      const duration = video.duration;
      if (!duration || isNaN(duration)) {
        requestAnimationFrame(checkVideoProgress);
        return;
      }

      const timeLeft = duration - video.currentTime;

      // When reaching within 0.08s of the end, pause cleanly on the last frame
      if (timeLeft <= 0.08 || video.currentTime >= duration - 0.08) {
        video.pause();
        hasFinished = true;
        return;
      }

      requestAnimationFrame(checkVideoProgress);
    }

    video.addEventListener("play", () => {
      if (hasFinished) {
        video.pause();
        return;
      }
      video.playbackRate = 1.0;
      requestAnimationFrame(checkVideoProgress);
    });

    video.addEventListener("ended", () => {
      video.pause();
      hasFinished = true;
    });

    if (!video.paused) {
      requestAnimationFrame(checkVideoProgress);
    }
  });
}

/* --------------------------------------------------------------------------
   3. LOTTIE MENU CONTROLLER (EXACT KHUFUS POPUP ENGINE)
   -------------------------------------------------------------------------- */
function initLottieMenu() {
  // Handled cleanly and exclusively by BiryaniDrawer in layouts/drawer.php
}

/* --------------------------------------------------------------------------
   4. SCROLL REVEAL OBSERVER (PREVENTS ANY BLANK SECTIONS)
   -------------------------------------------------------------------------- */
function initScrollReveals() {
  const revealElements = document.querySelectorAll(".kh-animate, .kh-exp-reveal, .kh-home-story-animate, [data-reveal]");
  
  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-in", "show");
          observer.unobserve(entry.target);
        }
      });
    }, { rootMargin: "150px 0px" });

    revealElements.forEach(el => observer.observe(el));
  } else {
    revealElements.forEach(el => el.classList.add("is-in", "show"));
  }
}

/* --------------------------------------------------------------------------
   5. RESERVE YOUR TABLE GLASS DROPDOWN
   -------------------------------------------------------------------------- */
function initReserveDropdown() {
  const wrappers = document.querySelectorAll(".mnq-reserve-wrapper");
  wrappers.forEach(wrapper => {
    const btn = wrapper.querySelector(".mnq-landing-reserve-btn");
    if (!btn) return;

    btn.addEventListener("click", (e) => {
      e.stopPropagation();
      wrapper.classList.toggle("active");
    });
  });

  document.addEventListener("click", (e) => {
    if (!e.target.closest(".mnq-reserve-wrapper")) {
      wrappers.forEach(w => w.classList.remove("active"));
    }
  });
}

/* --------------------------------------------------------------------------
   6. GLOBAL RECOGNITION 3D CARD SHUFFLE DECK
   -------------------------------------------------------------------------- */
function initRecognitionDeck() {
  const root = document.getElementById("expRight");
  if (!root || root.dataset.initialized === "true") return;
  root.dataset.initialized = "true";

  const slides = [
    {
      title: "4.4★ ON GOOGLE REVIEWS",
      text: "Celebrated across Dublin, Milpitas, Livermore, and Concord with over 4,500+ verified ratings praising our authentic Dum Biryanis and crispy tiffins.",
      image: "/assets/images/google_maps/concord/curries_and_appetizers/concord_mutton_rogan_josh_slow_simmered.jpg"
    },
    {
      title: "TOP BAY AREA BIRYANI DESTINATION",
      text: "Recognized as a premier Silicon Valley hotspot for authentic Hyderabadi Dum cooking, slow-cooked in traditional dough-sealed handis.",
      image: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chettinad_crab_masala_roast.jpg"
    },
    {
      title: "AUTHENTIC CHENNAI DOSA CRAFT",
      text: "Naturally fermented stone-ground batter swirled paper-thin on smoking cast-iron tawas and roasted with pure golden ghee.",
      image: "/assets/images/google_maps/dublin/biryani_specials/dublin_hyderabadi_chicken_dum_biryani_pot.jpg"
    },
    {
      title: "PREMIER CATERING PARTNER",
      text: "Trusted for corporate events, tech campus catering, and grand family celebrations across the entire San Francisco Bay Area.",
      image: "/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_restaurant_main_dining_hall_booths.jpg"
    }
  ];

  const media = root.querySelector(".exp-media");
  const cards = Array.from(root.querySelectorAll(".exp-card"));
  const titleEl = root.querySelector("#expTitle");
  const textEl = root.querySelector("#expText");
  const copyEl = root.querySelector("#expCopy");
  const counterBtn = root.querySelector("#expCounter");
  const counterVal = root.querySelector("#expCounterVal");

  let order = [cards[0], cards[1], cards[2]];
  let index = 0;
  let locked = false;

  function getSlots() {
    return [
      { x: "0px", y: "0px", a: "1", z: "3" },
      { x: "-56px", y: "-22px", a: ".98", z: "2" },
      { x: "-112px", y: "-44px", a: ".92", z: "1" }
    ];
  }

  function applySlot(card, slot) {
    if (!card) return;
    card.style.setProperty("--x", slot.x);
    card.style.setProperty("--y", slot.y);
    card.style.setProperty("--a", slot.a);
    card.style.setProperty("--z", slot.z);
  }

  function applyOrder(o) {
    const slots = getSlots();
    applySlot(o[0], slots[0]);
    applySlot(o[1], slots[1]);
    applySlot(o[2], slots[2]);
  }

  function updateCounter(i) {
    if (counterVal) counterVal.textContent = `${i + 1}/${slides.length}`;
  }

  function goNext() {
    if (locked) return;
    locked = true;

    const nextIndex = (index + 1) % slides.length;
    updateCounter(nextIndex);

    const nextOrder = [order[1], order[2], order[0]];

    if (copyEl) {
      copyEl.classList.add("is-leaving");
      setTimeout(() => {
        if (titleEl) titleEl.textContent = slides[nextIndex].title;
        if (textEl) textEl.textContent = slides[nextIndex].text;
        copyEl.classList.remove("is-leaving");
        copyEl.classList.add("is-entering");
        requestAnimationFrame(() => copyEl.classList.remove("is-entering"));
      }, 210);
    }

    if (media) media.classList.add("is-animating");
    applyOrder(nextOrder);

    setTimeout(() => {
      if (media) media.classList.remove("is-animating");
      order = nextOrder;
      index = nextIndex;
      locked = false;
    }, 550);
  }

  if (counterBtn) counterBtn.addEventListener("click", goNext);
  if (media) media.addEventListener("click", goNext);

  applyOrder(order);
  updateCounter(0);
}

/* --------------------------------------------------------------------------
   7. PARALLAX & BIRD MOTION CONTROLLER
   -------------------------------------------------------------------------- */
function initParallax() {
  const whyPanels = document.querySelectorAll(".khf-why-panel");
  const storyCols = document.querySelectorAll(".kh-home-story-col");
  const ctaInner = document.querySelector(".kh-cta-inner");
  const birdLeft = document.querySelector(".kh-bird-left");
  const birdRight = document.querySelector(".kh-bird-right");
  const archWrap = document.querySelector(".kh-arch-wrap");

  function onScroll() {
    const windowH = window.innerHeight;

    whyPanels.forEach(panel => {
      const rect = panel.getBoundingClientRect();
      if (rect.top < windowH && rect.bottom > 0) {
        const speed = parseFloat(panel.dataset.speed || "0.2");
        const offset = (rect.top - windowH / 2) * speed;
        panel.style.transform = `translate3d(0, ${offset * 0.4}px, 0)`;
      }
    });

    storyCols.forEach(col => {
      const rect = col.getBoundingClientRect();
      if (rect.top < windowH && rect.bottom > 0) {
        const speed = parseFloat(col.dataset.speed || "0.2");
        const offset = (rect.top - windowH / 2) * speed;
        col.style.transform = `translate3d(0, ${offset * 0.3}px, 0)`;
      }
    });

    if (birdLeft || birdRight || archWrap) {
      const archSec = document.querySelector(".kh-arch-section");
      if (archSec) {
        const rect = archSec.getBoundingClientRect();
        if (rect.top < windowH && rect.bottom > 0) {
          const offset = (rect.top - windowH / 2);
          if (birdLeft) birdLeft.style.transform = `translate3d(0, ${offset * -0.15}px, 0)`;
          if (birdRight) birdRight.style.transform = `translate3d(0, ${offset * 0.18}px, 0)`;
          if (archWrap) archWrap.style.transform = `translate3d(0, ${offset * 0.08}px, 0)`;
        }
      }
    }

    if (ctaInner) {
      const rect = ctaInner.getBoundingClientRect();
      if (rect.top < windowH && rect.bottom > 0) {
        const progress = Math.min(Math.max((windowH - rect.top) / windowH, 0), 1);
        const scale = 0.94 + progress * 0.06;
        ctaInner.style.transform = `scale(${scale})`;
      }
    }
  }

  window.addEventListener("scroll", onScroll, { passive: true });
}

/* --------------------------------------------------------------------------
   8. 3D PERSPECTIVE CYLINDRICAL GALLERY
   -------------------------------------------------------------------------- */
function init3DGallery() {
  const viewport = document.getElementById("khxViewport");
  const track = document.getElementById("khxTrack");
  if (!viewport || !track) return;

  const items = Array.from(track.querySelectorAll(".khx-item"));
  let isDown = false;
  let startX = 0;
  let targetX = 0;
  let currentX = 0;

  function updateItems() {
    const viewportCenter = window.innerWidth / 2;

    items.forEach(item => {
      const rect = item.getBoundingClientRect();
      const itemCenter = rect.left + rect.width / 2;
      const dist = (itemCenter - viewportCenter) / (window.innerWidth / 2);
      const clampDist = Math.max(-1.5, Math.min(1.5, dist));

      const rotateY = clampDist * -14;
      const translateZ = Math.abs(clampDist) * -120;
      const scale = 1 - Math.abs(clampDist) * 0.08;
      const opacity = 1 - Math.abs(clampDist) * 0.25;

      item.style.transform = `translate3d(0, ${Math.abs(clampDist) * -8}px, ${translateZ}px) rotateY(${rotateY}deg) scale(${scale})`;
      item.style.opacity = Math.max(0.6, opacity);
    });
  }

  function render() {
    currentX += (targetX - currentX) * 0.08;
    track.style.transform = `translate3d(${currentX}px, 0, 0) rotateX(6deg)`;
    updateItems();
    requestAnimationFrame(render);
  }

  viewport.addEventListener("mousedown", e => {
    isDown = true;
    viewport.classList.add("is-dragging");
    startX = e.pageX - targetX;
  });

  window.addEventListener("mouseup", () => {
    isDown = false;
    viewport.classList.remove("is-dragging");
  });

  window.addEventListener("mousemove", e => {
    if (!isDown) return;
    e.preventDefault();
    targetX = e.pageX - startX;
  });

  viewport.addEventListener("touchstart", e => {
    isDown = true;
    startX = e.touches[0].pageX - targetX;
  }, { passive: true });

  window.addEventListener("touchend", () => {
    isDown = false;
  });

  window.addEventListener("touchmove", e => {
    if (!isDown) return;
    targetX = e.touches[0].pageX - startX;
  }, { passive: true });

  render();
}

/* --------------------------------------------------------------------------
   9. POLAROID SLIDER V2 (Handled via home/index.php native controller)
   -------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------
   10. BISTRO EXPANDING ACCORDION CONTROLLER
   -------------------------------------------------------------------------- */
function initBistroAccordion() {
  const accordionItems = document.querySelectorAll(".khufusbistro-accordion__item");
  if (!accordionItems.length) return;

  accordionItems.forEach(item => {
    item.addEventListener("mouseenter", () => {
      accordionItems.forEach(i => i.classList.remove("is-active"));
      item.classList.add("is-active");
    });

    item.addEventListener("click", () => {
      accordionItems.forEach(i => i.classList.remove("is-active"));
      item.classList.add("is-active");
    });
  });
}

/* --------------------------------------------------------------------------
   11. FAQ ACCORDION CONTROLLER (EXACT KHUFUS FAQ ENGINE)
   -------------------------------------------------------------------------- */
function initFaqAccordion() {
  const items = document.querySelectorAll(".kh-faq-item");
  if (!items.length) return;

  items.forEach(item => {
    const questionBtn = item.querySelector(".kh-faq-question");
    const answer = item.querySelector(".kh-faq-answer");
    if (!questionBtn || !answer) return;

    questionBtn.addEventListener("click", () => {
      const isOpen = item.classList.contains("is-open");
      
      items.forEach(i => {
        i.classList.remove("is-open");
        const a = i.querySelector(".kh-faq-answer");
        if (a) a.style.maxHeight = null;
      });

      if (!isOpen) {
        item.classList.add("is-open");
        answer.style.maxHeight = answer.scrollHeight + 30 + "px";
      }
    });
  });
}

/* --------------------------------------------------------------------------
   12. MENU TABS CONTROLLER
   -------------------------------------------------------------------------- */
function initMenuTabs() {
  const tabs = document.querySelectorAll(".kh-menu-tab-btn");
  const categories = document.querySelectorAll(".menu-category-section");
  if (!tabs.length) return;

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("is-active"));
      tab.classList.add("is-active");

      const target = tab.dataset.target;
      categories.forEach(cat => {
        if (!target || target === "all" || cat.dataset.type === target) {
          cat.style.display = "block";
        } else {
          cat.style.display = "none";
        }
      });
    });
  });
}
