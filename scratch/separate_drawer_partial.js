const fs = require('fs');
const path = require('path');

const HEADER_PATH = path.join(__dirname, '..', 'app', 'views', 'layouts', 'header.php');
const FOOTER_PATH = path.join(__dirname, '..', 'app', 'views', 'layouts', 'footer.php');
const DRAWER_PATH = path.join(__dirname, '..', 'app', 'views', 'layouts', 'drawer.php');

// 1. Create the dedicated, perfectly closed drawer partial
const drawerContent = `<!-- Standalone Luxury Menu Drawer Modal -->
<div id="elementor-popup-modal-166" class="dialog-type-lightbox elementor-popup-modal" aria-hidden="true">
  <div class="dialog-widget dialog-lightbox-widget dialog-type-buttons dialog-type-lightbox elementor-popup-modal">
    <div class="dialog-widget-content dialog-lightbox-widget-content">
      <div class="dialog-message dialog-lightbox-message">
        <div data-elementor-type="popup" data-elementor-id="166" class="elementor elementor-166 elementor-location-popup">
          <div class="elementor-element elementor-element-a57fe6c e-con-full e-flex e-con e-parent" data-id="a57fe6c" data-element_type="container" data-e-type="container">
            <div class="elementor-element elementor-element-4ce0183 e-con-full popup-stagger e-flex e-con e-child" data-id="4ce0183" data-element_type="container" data-e-type="container">
              
              <!-- Navigation Column -->
              <div class="elementor-element elementor-element-e40b100 e-con-full stagger-item e-flex e-con e-child" data-id="e40b100" data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-4ad8b70 e-con-full menu-overlay e-flex e-con e-child" data-id="4ad8b70" data-element_type="container" data-e-type="container">
                  <div class="elementor-element elementor-element-b160004 elementor-widget elementor-widget-heading" data-id="b160004" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/about">ABOUT</a></h2>
                  </div>
                  <div class="elementor-element elementor-element-17045e6 elementor-widget elementor-widget-heading" data-id="17045e6" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/experience">THE EXPERIENCE</a></h2>
                  </div>
                  <div class="elementor-element elementor-element-c6fb75b elementor-widget elementor-widget-heading" data-id="c6fb75b" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/menu">MENUS</a></h2>
                  </div>
                  <div class="elementor-element elementor-element-447f271 elementor-widget elementor-widget-heading" data-id="447f271" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/gallery">GALLERY &amp; AMBIANCE</a></h2>
                  </div>
                  <div class="elementor-element elementor-element-098433b elementor-widget elementor-widget-heading" data-id="098433b" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/legacy">THE LEGACY</a></h2>
                  </div>
                  <div class="elementor-element elementor-element-730cc60 elementor-widget elementor-widget-heading" data-id="730cc60" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/reservations">RESERVATIONS</a></h2>
                  </div>
                  <div class="elementor-element elementor-element-edbba27 elementor-widget elementor-widget-heading" data-id="edbba27" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/contact">LOCATION &amp; HOURS</a></h2>
                  </div>
                  <div class="elementor-element elementor-element-e9b8b41 elementor-widget elementor-widget-heading" data-id="e9b8b41" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/locations">OUR 4 LOCATIONS</a></h2>
                  </div>
                  <div class="elementor-element elementor-element-39e8d07 elementor-widget elementor-widget-heading" data-id="39e8d07" data-element_type="widget" data-e-type="widget">
                    <h2 class="elementor-heading-title elementor-size-default"><a href="/contact">CONTACT</a></h2>
                  </div>
                </div>
              </div>

              <!-- Card 1: Reservations -->
              <div class="elementor-element elementor-element-1980e35 e-con-full stagger-item e-flex e-con e-child" data-id="1980e35" data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-b0721a6 elementor-widget elementor-widget-image" data-id="b0721a6" data-element_type="widget" data-e-type="widget">
                  <a href="/reservations">
                    <img width="1024" height="674" src="/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_interior_dining_01.jpg" alt="Dining Room Reservations" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;" />
                  </a>
                </div>
                <div class="elementor-element elementor-element-f6c66dc elementor-widget elementor-widget-heading" data-id="f6c66dc" data-element_type="widget" data-e-type="widget">
                  <h2 class="elementor-heading-title elementor-size-default"><a href="/reservations">RESERVATIONS</a></h2>
                </div>
              </div>

              <!-- Card 2: Lifestyle Shots -->
              <div class="elementor-element elementor-element-0700956 e-con-full stagger-item e-flex e-con e-child" data-id="0700956" data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-fc50da0 elementor-widget elementor-widget-image" data-id="fc50da0" data-element_type="widget" data-e-type="widget">
                  <a href="/gallery">
                    <img width="1024" height="683" src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_09.jpg" alt="South Indian Thali Feast" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;" />
                  </a>
                </div>
                <div class="elementor-element elementor-element-7a231cf elementor-widget elementor-widget-heading" data-id="7a231cf" data-element_type="widget" data-e-type="widget">
                  <h2 class="elementor-heading-title elementor-size-default"><a href="/gallery">LIFESTYLE SHOTS</a></h2>
                </div>
              </div>

              <!-- Card 3: Menus -->
              <div class="elementor-element elementor-element-a990b19 e-con-full stagger-item e-flex e-con e-child" data-id="a990b19" data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-8c53044 elementor-widget elementor-widget-image" data-id="8c53044" data-element_type="widget" data-e-type="widget">
                  <a href="/menu">
                    <img width="1024" height="684" src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_special_curry_platter_22.jpg" alt="Dum Biryani & Thali Platter" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;" />
                  </a>
                </div>
                <div class="elementor-element elementor-element-5c66350 elementor-widget elementor-widget-heading" data-id="5c66350" data-element_type="widget" data-e-type="widget">
                  <h2 class="elementor-heading-title elementor-size-default"><a href="/menu">MENUS</a></h2>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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

  #elementor-popup-modal-166.is-open .elementor-location-popup,
  #elementor-popup-modal-166.is-open [data-elementor-type="popup"],
  #elementor-popup-modal-166.is-open .elementor-166 {
    display: block !important;
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

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
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

  // Close on backdrop click
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
    toggle: toggleDrawer,
    isOpen: () => isOpen
  };
});
</script>
`;

fs.writeFileSync(DRAWER_PATH, drawerContent, 'utf8');

// 2. Clean header.php so it closes cleanly at </header>
let headerContent = fs.readFileSync(HEADER_PATH, 'utf8');
const headerEndIdx = headerContent.indexOf('</header>');
if (headerEndIdx !== -1) {
  headerContent = headerContent.slice(0, headerEndIdx + '</header>'.length) + '\n';
  fs.writeFileSync(HEADER_PATH, headerContent, 'utf8');
}

// 3. Update footer.php to include the drawer partial
let footerContent = fs.readFileSync(FOOTER_PATH, 'utf8');
if (!footerContent.includes("drawer.php")) {
  footerContent = footerContent.replace('</body>', `<?php require_once __DIR__ . '/drawer.php'; ?>\n</body>`);
  fs.writeFileSync(FOOTER_PATH, footerContent, 'utf8');
}

console.log('✅ Separated drawer into drawer.php, cleaned header.php, and wired into footer.php!');
