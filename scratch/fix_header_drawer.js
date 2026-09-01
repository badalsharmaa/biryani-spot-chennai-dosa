const fs = require('fs');
const path = require('path');

const HEADER_VIEW = path.join(__dirname, '..', 'app', 'views', 'layouts', 'header.php');
let content = fs.readFileSync(HEADER_VIEW, 'utf8');

// Replace the old lottie toggle script and popup handling with a bulletproof, smooth standalone drawer controller
const lottieScriptRegex = /<script type="text\/javascript">\s*\(function\(\)\{\s*\/\/ --- Popup ID selection ---[\s\S]*?<\/script>/;

const newDrawerScript = `<script type="text/javascript">
(function(){
  const toggleEl = document.getElementById("lottie-toggle");
  const modal = document.getElementById("elementor-popup-modal-166");
  if (!toggleEl || !modal) return;

  let isOpen = false;
  let anim = null;

  // Initialize Lottie Animation
  if (window.lottie) {
    anim = lottie.loadAnimation({
      container: toggleEl,
      renderer: "svg",
      loop: false,
      autoplay: false,
      path: "/assets/images/Menu-Animation-Custom-8.json"
    });
    anim.setSpeed(1.5);
    anim.addEventListener('data_ready', () => {
      const total = anim.totalFrames;
      const start = Math.floor(total * 0.1);
      anim.goToAndStop(start, true);
    });
  }

  function openDrawer(){
    if (isOpen) return;
    isOpen = true;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.classList.add("menu-drawer-open");

    if (anim) {
      const total = anim.totalFrames;
      const start = Math.floor(total * 0.1);
      const end = Math.floor(total * 0.65);
      anim.playSegments([start, end], true);
    }
  }

  function closeDrawer(){
    if (!isOpen) return;
    isOpen = false;
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("menu-drawer-open");

    if (anim) {
      const total = anim.totalFrames;
      const start = Math.floor(total * 0.1);
      const end = Math.floor(total * 0.65);
      anim.playSegments([end, total], true);
      anim.addEventListener('complete', function onEnd(){
        anim.removeEventListener('complete', onEnd);
        anim.goToAndStop(start, true);
      }, { once: true });
    }
  }

  function toggleDrawer(e){
    if (e) {
      e.preventDefault();
      e.stopPropagation();
    }
    if (isOpen) {
      closeDrawer();
    } else {
      openDrawer();
    }
  }

  toggleEl.addEventListener("click", toggleDrawer);

  // Close on backdrop click (clicking outside the inner content)
  modal.addEventListener("click", function(e){
    if (e.target === modal || e.target.classList.contains("dialog-lightbox-widget") || e.target.classList.contains("dialog-widget-overlay")) {
      closeDrawer();
    }
  });

  // Close on ESC key
  window.addEventListener("keydown", function(e){
    if (e.key === "Escape" && isOpen) {
      closeDrawer();
    }
  });

  // Close when clicking any menu link inside drawer
  modal.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      closeDrawer();
    });
  });

  // Expose global controller
  window.BiryaniDrawer = {
    open: openDrawer,
    close: closeDrawer,
    toggle: toggleDrawer
  };
})();
</script>`;

content = content.replace(lottieScriptRegex, newDrawerScript);

// Wrap popup 166 in the proper modal dialog structure if not already wrapped
if (!content.includes('id="elementor-popup-modal-166"')) {
  content = content.replace(
    /<div data-elementor-type="popup" data-elementor-id="166" class="elementor elementor-166 elementor-location-popup"/,
    `<div id="elementor-popup-modal-166" class="dialog-type-lightbox elementor-popup-modal" aria-hidden="true">
      <div class="dialog-widget dialog-lightbox-widget dialog-type-buttons dialog-type-lightbox elementor-popup-modal">
        <div class="dialog-widget-content dialog-lightbox-widget-content">
          <div class="dialog-message dialog-lightbox-message">
            <div data-elementor-type="popup" data-elementor-id="166" class="elementor elementor-166 elementor-location-popup"`
  );
  
  // Close the wrapper tags at the end of popup 166
  content = content.replace(
    /<\/div>\s*<\/div>\s*<\/div>\s*<\/div>\s*<div class="elementor-element elementor-element-bd457c9/,
    `</div>\n          </div>\n        </div>\n      </div>\n    </div>\n    <div class="elementor-element elementor-element-bd457c9`
  );
}

// Add CSS for the drawer modal
const drawerCss = `
<style id="custom-menu-drawer-css">
  /* Standalone Header Menu Drawer */
  #elementor-popup-modal-166 {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    z-index: 99999999 !important;
    background: rgba(26, 16, 10, 0.94) !important;
    backdrop-filter: blur(16px) !important;
    -webkit-backdrop-filter: blur(16px) !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    align-items: center !important;
    opacity: 0 !important;
    pointer-events: none !important;
    transform: translateY(-100%) !important;
    transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.35s ease !important;
    overflow-y: auto !important;
    overflow-x: hidden !important;
  }

  #elementor-popup-modal-166.is-open {
    opacity: 1 !important;
    pointer-events: auto !important;
    transform: translateY(0) !important;
  }

  body.menu-drawer-open {
    overflow: hidden !important;
  }

  #elementor-popup-modal-166 .dialog-widget,
  #elementor-popup-modal-166 .dialog-widget-content,
  #elementor-popup-modal-166 .dialog-message {
    width: 100% !important;
    max-width: 1400px !important;
    margin: 0 auto !important;
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
  }

  #elementor-popup-modal-166 .elementor-166 {
    width: 100% !important;
    padding: 100px 40px 60px 40px !important;
  }

  #elementor-popup-modal-166 a {
    color: #FAF7F2 !important;
    text-decoration: none !important;
    transition: color 0.25s ease, transform 0.25s ease !important;
    display: inline-block !important;
  }

  #elementor-popup-modal-166 a:hover {
    color: #DAB79F !important;
    transform: translateX(6px) !important;
  }

  #elementor-popup-modal-166 .popup-stagger {
    display: flex !important;
    flex-direction: row !important;
    justify-content: space-between !important;
    width: 100% !important;
    gap: 30px !important;
  }

  #elementor-popup-modal-166 .stagger-item {
    flex: 1 !important;
  }

  #elementor-popup-modal-166 .stagger-item:first-child {
    flex: 1.2 !important;
  }

  #elementor-popup-modal-166 .elementor-widget-heading h2 {
    font-size: 26px !important;
    line-height: 1.6 !important;
    letter-spacing: 2px !important;
    margin: 8px 0 !important;
    font-weight: 300 !important;
  }

  #elementor-popup-modal-166 .elementor-widget-image img {
    border-radius: 8px !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5) !important;
    transition: transform 0.4s ease, filter 0.4s ease !important;
    width: 100% !important;
    height: 220px !important;
    object-fit: cover !important;
  }

  #elementor-popup-modal-166 .stagger-item:hover .elementor-widget-image img {
    transform: scale(1.03) !important;
  }

  @media (max-width: 900px) {
    #elementor-popup-modal-166 .popup-stagger {
      flex-direction: column !important;
      gap: 20px !important;
    }
    #elementor-popup-modal-166 .stagger-item:not(:first-child) {
      display: none !important;
    }
    #elementor-popup-modal-166 .elementor-166 {
      padding: 80px 24px 40px 24px !important;
    }
    #elementor-popup-modal-166 .elementor-widget-heading h2 {
      font-size: 20px !important;
    }
  }
</style>
`;

if (content.includes('id="custom-menu-drawer-css"')) {
  content = content.replace(/<style id="custom-menu-drawer-css">[\s\S]*?<\/style>/, drawerCss.trim());
} else {
  content = content.replace('</head>', `${drawerCss}\n</head>`);
}

fs.writeFileSync(HEADER_VIEW, content, 'utf8');
console.log('✅ Menu drawer modal controller and styles successfully applied!');
