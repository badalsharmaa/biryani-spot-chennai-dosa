const fs = require('fs');
const path = require('path');

const HEADER_VIEW = path.join(__dirname, '..', 'app', 'views', 'layouts', 'header.php');
let content = fs.readFileSync(HEADER_VIEW, 'utf8');

const oldScriptRegex = /<script type="text\/javascript">\s*\(function\(\)\{\s*const toggleEl = document\.getElementById\("lottie-toggle"\);[\s\S]*?<\/script>/;

const newScript = `<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
  const toggleEl = document.getElementById("lottie-toggle");
  const modal = document.getElementById("elementor-popup-modal-166");
  if (!toggleEl || !modal) {
    console.warn('[Menu Drawer] toggle or modal not found', { toggleEl, modal });
    return;
  }

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
  console.log('✅ BiryaniDrawer initialized successfully');
});
</script>`;

content = content.replace(oldScriptRegex, newScript);
fs.writeFileSync(HEADER_VIEW, content, 'utf8');
console.log('✅ Updated header.php drawer initialization on DOMContentLoaded!');
