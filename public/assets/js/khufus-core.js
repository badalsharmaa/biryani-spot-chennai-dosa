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
  initSequentialContactForm();
  initLocationTabs();
});

/* --------------------------------------------------------------------------
   1. PRELOADER CONTROLLER
   -------------------------------------------------------------------------- */
function initPreloader() {
  const intro = document.getElementById("khufusIntro");
  const skipBtn = document.getElementById("khfSkip");
  const heroTitle = document.querySelector(".khf-hero-title");

  let introShown = false;
  try {
    introShown = sessionStorage.getItem("khfIntroShown") === "true";
  } catch (e) {
    introShown = false;
  }

  // If not on homepage or already shown in this session, skip immediately:
  if (!intro || introShown || !document.body.classList.contains("home")) {
    if (intro) {
      intro.style.display = "none";
      try { intro.remove(); } catch (e) {}
    }
    document.body.classList.add("page-ready");
    if (heroTitle) heroTitle.classList.add("is-in");
    return;
  }

  // Distribute staggered word delays
  const words = intro.querySelectorAll(".khf-word");
  words.forEach((w, idx) => {
    w.style.setProperty("--d", `${idx * 65}ms`);
  });

  let dismissed = false;
  function dismissIntro() {
    if (dismissed) return;
    dismissed = true;
    try {
      sessionStorage.setItem("khfIntroShown", "true");
    } catch (e) {}

    intro.classList.add("is-hidden");
    document.body.classList.add("page-ready");

    setTimeout(() => {
      try { intro.remove(); } catch (e) {}
    }, 750);

    if (heroTitle) {
      heroTitle.classList.add("is-animating");
      requestAnimationFrame(() => {
        heroTitle.classList.add("is-in");
        setTimeout(() => {
          heroTitle.classList.remove("is-animating");
        }, 1200);
      });
    }

    const heroSection = document.querySelector(".elementor-element-78802e6");
    if (heroSection) {
      heroSection.classList.add("hero-reveal-active");
    }
  }

  if (skipBtn) {
    skipBtn.addEventListener("click", dismissIntro);
  }

  // Auto-dismiss when progress bar finishes (2.2s)
  setTimeout(dismissIntro, 2200);
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

/* --------------------------------------------------------------------------
   13. SEQUENTIAL MULTI-STEP CONTACT FORM CONTROLLER
   -------------------------------------------------------------------------- */
function initSequentialContactForm() {
  const container = document.getElementById("khSeqContact");
  const form = document.getElementById("khSeqForm");
  if (!container || !form) return;

  let currentStep = 1;
  const totalSteps = 4;
  let selectedMethod = "email";

  const progressText = document.getElementById("khSeqProgressText");
  const progressFill = document.getElementById("khSeqProgressFill");
  const steps = container.querySelectorAll(".kh-seq-step");
  const prevBtn = document.getElementById("khPrevBtn");
  const nextBtn = document.getElementById("khNextBtn");
  const methodInput = document.getElementById("khContactMethod");
  const choices = container.querySelectorAll(".kh-seq-choice");
  const dynamicQuestion = document.getElementById("khDynamicQuestion");
  const contactInput = document.getElementById("khContactValue");
  const messageInput = document.getElementById("khMessage");
  const messageCounter = document.getElementById("khMessageCounter");
  const successBox = document.getElementById("khSeqSuccess");
  const resetBtn = document.getElementById("khSeqReset");
  const nameInput = document.getElementById("khName");

  function updateUI() {
    steps.forEach(step => {
      const stepNum = parseInt(step.dataset.step, 10);
      step.classList.toggle("is-active", stepNum === currentStep);
    });

    if (progressText) {
      progressText.textContent = `0${currentStep} / 0${totalSteps}`;
    }
    if (progressFill) {
      progressFill.style.width = `${(currentStep / totalSteps) * 100}%`;
    }

    if (prevBtn) {
      prevBtn.disabled = (currentStep === 1);
    }
    if (nextBtn) {
      nextBtn.textContent = (currentStep === totalSteps) ? "Submit" : "Next";
    }

    setTimeout(() => {
      const activeStep = container.querySelector(".kh-seq-step.is-active");
      if (activeStep) {
        const input = activeStep.querySelector("input, textarea");
        if (input) input.focus();
      }
    }, 100);
  }

  choices.forEach(btn => {
    btn.addEventListener("click", () => {
      choices.forEach(c => c.classList.remove("is-selected"));
      btn.classList.add("is-selected");
      selectedMethod = btn.dataset.method || "email";
      if (methodInput) methodInput.value = selectedMethod;

      if (selectedMethod === "email") {
        if (dynamicQuestion) dynamicQuestion.textContent = "What is your email address?";
        if (contactInput) {
          contactInput.type = "email";
          contactInput.placeholder = "your@email.com";
          contactInput.inputMode = "email";
        }
      } else if (selectedMethod === "phone") {
        if (dynamicQuestion) dynamicQuestion.textContent = "What is your phone number?";
        if (contactInput) {
          contactInput.type = "tel";
          contactInput.placeholder = "(555) 000-0000";
          contactInput.inputMode = "tel";
        }
      } else if (selectedMethod === "whatsapp") {
        if (dynamicQuestion) dynamicQuestion.textContent = "What is your WhatsApp number?";
        if (contactInput) {
          contactInput.type = "tel";
          contactInput.placeholder = "+1 (555) 000-0000";
          contactInput.inputMode = "tel";
        }
      }

      setTimeout(() => {
        if (currentStep === 2) {
          currentStep = 3;
          updateUI();
        }
      }, 180);
    });
  });

  if (messageInput && messageCounter) {
    messageInput.addEventListener("input", () => {
      const len = messageInput.value.length;
      messageCounter.textContent = `${len} / 220`;
      messageCounter.classList.toggle("is-idle", len === 0);
    });
  }

  function validateCurrentStep() {
    if (currentStep === 1) {
      if (!nameInput || !nameInput.value.trim()) {
        if (nameInput) {
          nameInput.classList.add("is-invalid");
          nameInput.focus();
        }
        return false;
      }
      if (nameInput) nameInput.classList.remove("is-invalid");
      return true;
    }

    if (currentStep === 2) {
      return true;
    }

    if (currentStep === 3) {
      if (!contactInput || !contactInput.value.trim()) {
        if (contactInput) {
          contactInput.classList.add("is-invalid");
          contactInput.focus();
        }
        return false;
      }
      if (selectedMethod === "email") {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(contactInput.value.trim())) {
          contactInput.classList.add("is-invalid");
          contactInput.focus();
          return false;
        }
      } else {
        if (contactInput.value.trim().length < 7) {
          contactInput.classList.add("is-invalid");
          contactInput.focus();
          return false;
        }
      }
      if (contactInput) contactInput.classList.remove("is-invalid");
      return true;
    }

    if (currentStep === 4) {
      if (!messageInput || !messageInput.value.trim()) {
        if (messageInput) {
          messageInput.classList.add("is-invalid");
          messageInput.focus();
        }
        return false;
      }
      if (messageInput) messageInput.classList.remove("is-invalid");
      return true;
    }

    return true;
  }

  function goNext() {
    if (!validateCurrentStep()) return;

    if (currentStep < totalSteps) {
      currentStep++;
      updateUI();
    } else {
      submitForm();
    }
  }

  function goPrev() {
    if (currentStep > 1) {
      currentStep--;
      updateUI();
    }
  }

  if (nextBtn) {
    nextBtn.addEventListener("click", (e) => {
      e.preventDefault();
      goNext();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener("click", (e) => {
      e.preventDefault();
      goPrev();
    });
  }

  form.addEventListener("keydown", (e) => {
    if (e.key === "Enter" && e.target.tagName !== "TEXTAREA") {
      e.preventDefault();
      goNext();
    }
  });

  function submitForm() {
    if (nextBtn) {
      nextBtn.disabled = true;
      nextBtn.textContent = "Sending...";
    }

    const payload = {
      name: nameInput ? nameInput.value.trim() : "",
      contact_method: selectedMethod,
      contact_value: contactInput ? contactInput.value.trim() : "",
      message: messageInput ? messageInput.value.trim() : ""
    };

    fetch("/api/contact", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json"
      },
      body: JSON.stringify(payload)
    })
    .then(res => res.json())
    .then(data => {
      form.style.display = "none";
      if (successBox) {
        successBox.classList.add("is-visible");
      }
    })
    .catch(() => {
      form.style.display = "none";
      if (successBox) {
        successBox.classList.add("is-visible");
      }
    })
    .finally(() => {
      if (nextBtn) {
        nextBtn.disabled = false;
        nextBtn.textContent = "Submit";
      }
    });
  }

  if (resetBtn) {
    resetBtn.addEventListener("click", () => {
      form.reset();
      currentStep = 1;
      form.style.display = "block";
      if (successBox) successBox.classList.remove("is-visible");
      if (messageCounter) messageCounter.textContent = "0 / 220";
      choices.forEach((c, idx) => c.classList.toggle("is-selected", idx === 0));
      selectedMethod = "email";
      updateUI();
    });
  }

  updateUI();
}

/* --------------------------------------------------------------------------
   14. LOCATION SWITCHER TABS CONTROLLER
   -------------------------------------------------------------------------- */
function initLocationTabs() {
  const tabBtns = document.querySelectorAll(".kh-location-tab-btn");
  const panels = document.querySelectorAll(".kh-location-panel");
  if (!tabBtns.length) return;

  tabBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const target = btn.dataset.location;
      tabBtns.forEach(b => b.classList.remove("is-active"));
      btn.classList.add("is-active");

      panels.forEach(p => {
        p.classList.toggle("is-active", p.dataset.location === target);
      });
    });
  });
}
