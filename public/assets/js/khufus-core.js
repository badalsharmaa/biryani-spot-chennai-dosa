/* ==========================================================================
   KHUFU'S CORE INTERACTION & MOTION CONTROLLER
   High-performance Vanilla JS Engine for Animations, 3D Gallery & Slider
   ========================================================================== */

document.addEventListener("DOMContentLoaded", () => {
  initPreloader();
  initHeader();
  initMenuOverlay();
  initParallax();
  init3DGallery();
  initPolaroidSlider();
  initFooterAccordion();
  initBistroAccordion();
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

  setTimeout(dismissIntro, 2600);
}

/* --------------------------------------------------------------------------
   2. HEADER CONTROLLER
   -------------------------------------------------------------------------- */
function initHeader() {
  const header = document.querySelector(".khf-header");
  if (!header) return;

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  }, { passive: true });
}

/* --------------------------------------------------------------------------
   3. MENU OVERLAY CONTROLLER
   -------------------------------------------------------------------------- */
function initMenuOverlay() {
  const burgerBtn = document.getElementById("khfBurgerBtn");
  const overlay = document.getElementById("khufusMenuOverlay");
  const menuLinks = overlay ? overlay.querySelectorAll(".khf-menu-item") : [];

  if (!burgerBtn || !overlay) return;

  function toggleMenu() {
    const isOpen = overlay.classList.toggle("is-open");
    burgerBtn.classList.toggle("is-active", isOpen);
    document.body.style.overflow = isOpen ? "hidden" : "";
  }

  burgerBtn.addEventListener("click", toggleMenu);

  menuLinks.forEach(link => {
    link.addEventListener("click", () => {
      overlay.classList.remove("is-open");
      burgerBtn.classList.remove("is-active");
      document.body.style.overflow = "";
    });
  });
}

/* --------------------------------------------------------------------------
   4. PARALLAX & BIRD MOTION CONTROLLER
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
   5. 3D PERSPECTIVE CYLINDRICAL GALLERY
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
   6. POLAROID SLIDER V2 CONTROLLER
   -------------------------------------------------------------------------- */
function initPolaroidSlider() {
  const slider = document.getElementById("monarqPolaroidSliderV2");
  if (!slider) return;

  const slides = [
    {
      title: "Chef Mostafa Seif",
      kicker: "Meet The Master Chef",
      headline: "Meet Chef Mostafa Seif",
      script: "Innovation Meets Tradition",
      text: "Winner of Top Chef Middle East and recipient of Two Knives at The Best Chef Awards, Chef Mostafa crafts culinary mastery rooted in regional heritage.",
      note: "Every spice blend and slow-cooked creation is prepared with artisanal precision and generational passion.",
      image: "/assets/images/chef-mostafa.webp"
    },
    {
      title: "Signature Dum Biryani",
      kicker: "Dum Pukht Mastery",
      headline: "Artisanal Hyderabadi Biryani",
      script: "Sealed With Fragrance & Fire",
      text: "Slow-cooked in sealed handis over gentle embers, allowing basmati grains, tender meats, and whole spices to harmonize into perfection.",
      note: "Served with house-crafted cooling Mirchi Ka Salan and whipped onion raita.",
      image: "/assets/images/gallery-1.webp"
    },
    {
      title: "Chennai Crispy Dosa",
      kicker: "Fermented Perfection",
      headline: "Golden Heritage Dosas",
      script: "Crisped On Cast Iron",
      text: "Naturally fermented for 24 hours to achieve golden crispness and airy lace edges, filled with spiced masala potatoes and served with tri-color chutneys.",
      note: "Traditional South Indian tiffin elevated for an unforgettable dining experience.",
      image: "/assets/images/gallery-2.webp"
    }
  ];

  let currentIndex = 0;
  const photoLayer = document.getElementById("mps5ImageCurrent");
  const photoTitle = document.getElementById("mps5PhotoTitle");
  const titleEl = document.querySelector(".mps5-title");
  const kickerEl = document.querySelector(".mps5-kicker");
  const textEl = document.querySelector(".mps5-text");
  const noteEl = document.querySelector(".mps5-note");
  const indexBtns = document.querySelectorAll(".mps5-index");
  const prevBtn = document.querySelector(".mps5-prev");
  const nextBtn = document.querySelector(".mps5-next");

  function showSlide(index) {
    if (index < 0) index = slides.length - 1;
    if (index >= slides.length) index = 0;
    currentIndex = index;
    const slide = slides[currentIndex];

    if (photoLayer) photoLayer.style.backgroundImage = `url(${slide.image})`;
    if (photoTitle) photoTitle.textContent = slide.title;
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
}

/* --------------------------------------------------------------------------
   7. FOOTER ACCORDION CONTROLLER
   -------------------------------------------------------------------------- */
function initFooterAccordion() {
  const items = document.querySelectorAll(".khf-accordion-item");
  items.forEach(item => {
    const header = item.querySelector(".khf-accordion-header");
    if (!header) return;
    header.addEventListener("click", () => {
      const isOpen = item.classList.contains("is-open");
      items.forEach(i => i.classList.remove("is-open"));
      if (!isOpen) {
        item.classList.add("is-open");
      }
    });
  });
}

/* --------------------------------------------------------------------------
   8. BISTRO EXPANDING ACCORDION CONTROLLER
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
