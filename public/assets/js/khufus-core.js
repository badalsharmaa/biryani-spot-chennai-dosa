/* ==========================================================================
   KHUFU'S CORE INTERACTION & MOTION CONTROLLER
   High-performance Vanilla JS Engine for Animations, 3D Gallery & Slider
   ========================================================================== */

document.addEventListener("DOMContentLoaded", () => {
  initPreloader();
  initHeader();
  initLottieMenu();
  initReserveDropdown();
  initScrollReveals();
  initParallax();
  initRecognitionDeck();
  init3DGallery();
  initPolaroidSlider();
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
  if (!root) return;

  const slides = [
    {
      title: "MENA’S 50 BEST, NO. 1",
      text: "Best Restaurant for three consecutive years, rising in MENA’s 50 Best from No. 5 in 2024 to No. 4 in 2025 and No. 1 in 2026.",
      image: "/assets/images/award-1.webp"
    },
    {
      title: "RESY ONE TO WATCH, 2025",
      text: "Winner of the Resy One To Watch Award 2025, recognized by The World’s 50 Best for a destination experience with real momentum.",
      image: "/assets/images/award-2.webp"
    },
    {
      title: "LA LISTE, HIDDEN GEM",
      text: "Selected by La Liste as a Hidden Gem of the culinary world, spotlighting our kitchens for originality, craft, and a strong sense of place.",
      image: "/assets/images/award-3.webp"
    },
    {
      title: "LA LISTE, BEST IN AFRICA",
      text: "Named Best Restaurant in Africa by La Liste in 2025, recognizing our dining rooms as one of the continent’s most exceptional culinary destinations.",
      image: "/assets/images/award-4.webp"
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
   9. POLAROID SLIDER V2 CONTROLLER (EXACT 3 SLIDES)
   -------------------------------------------------------------------------- */
function initPolaroidSlider() {
  const slider = document.getElementById("monarqPolaroidSliderV2");
  if (!slider) return;

  const slides = [
    {
      number: "05",
      kicker: "Culinary Heritage",
      headline: "The Dum Pukht Tradition",
      script: "Slow-Steamed Perfection",
      text: "Every handi of our Hyderabadi Dum Biryani is layered with fragrant aged basmati, tender marinated halal meat, saffron-infused milk, and caramelized onions, slow-steamed under a sealed dough crust to lock in aroma and flavor.",
      note: "A celebrated royal recipe passed down through generations, crafted daily across Dublin, Milpitas, Livermore, and Concord.",
      image: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_creamy_butter_chicken_delight.jpg",
      photoTitle: "Hyderabadi Dum Biryani"
    },
    {
      number: "06",
      kicker: "Tiffin Artistry",
      headline: "Stone-Ground Dosa Craft",
      script: "Golden, Crisp & Pure Ghee",
      text: "Our authentic Chennai dosa batter is stone-ground from premium lentils and rice, then naturally fermented for 18 hours. Ladled paper-thin onto scorching cast-iron tawas and roasted with pure ghee for an unbeatable crunch.",
      note: "Served steaming hot with freshly ground coconut chutney, spicy tomato chutney, and rich vegetable sambar.",
      image: "/assets/images/google_maps/dublin/biryani_specials/dublin_hyderabadi_chicken_dum_biryani_pot.jpg",
      photoTitle: "Crispy Chennai Dosa"
    },
    {
      number: "07",
      kicker: "Our Story",
      headline: "Warmth, Spice & Family",
      script: "4 Bay Area Locations",
      text: "Founded on a passion for honest, authentic Indian flavors, Biryani Spot Chennai Dosa has become a beloved gathering place across the Bay Area for families, friends, and food enthusiasts.",
      note: "From daily comfort lunches to grand weekend celebrations, every guest is welcomed with heartfelt Indian hospitality.",
      image: "/assets/images/google_maps/milpitas/store_interior_and_vibe/milpitas_restaurant_main_dining_hall_booths.jpg",
      photoTitle: "Warm Dining Ambiance"
    }
  ];

  let currentIndex = 0;
  const photoLayer = document.getElementById("mps5ImageCurrent");
  const photoTitle = document.getElementById("mps5PhotoTitle");
  const numberEl = slider.querySelector(".mps5-number");
  const kickerEl = slider.querySelector(".mps5-kicker");
  const titleEl = slider.querySelector(".mps5-title");
  const textEl = slider.querySelector(".mps5-text");
  const noteEl = slider.querySelector(".mps5-note");
  const indexBtns = slider.querySelectorAll(".mps5-index");
  const prevBtn = slider.querySelector(".mps5-prev");
  const nextBtn = slider.querySelector(".mps5-next");

  function showSlide(index) {
    if (index < 0) index = slides.length - 1;
    if (index >= slides.length) index = 0;
    currentIndex = index;
    const slide = slides[currentIndex];

    if (photoLayer) photoLayer.style.backgroundImage = slide.image ? `url('${slide.image}')` : 'none';
    if (photoTitle) photoTitle.textContent = slide.photoTitle;
    if (numberEl) numberEl.textContent = slide.number;
    if (kickerEl) kickerEl.textContent = slide.kicker;
    if (titleEl) titleEl.innerHTML = `${slide.headline}<span class="mps5-script">${slide.script}</span>`;
    if (textEl) textEl.textContent = slide.text;
    if (noteEl) noteEl.textContent = slide.note;

    indexBtns.forEach((btn, idx) => {
      btn.classList.toggle("is-active", idx === currentIndex);
    });
  }

  if (prevBtn) prevBtn.addEventListener("click", () => showSlide(currentIndex - 1));
  if (nextBtn) nextBtn.addEventListener("click", () => showSlide(currentIndex + 1));

  indexBtns.forEach((btn, idx) => {
    btn.addEventListener("click", () => showSlide(idx));
  });

  showSlide(0);
}

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
