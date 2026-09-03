<?php
$pageTitle = "Biryani Spot Chennai Dosa | Authentic South Indian Heritage";
require_once __DIR__ . "/../layouts/header.php";
?>

<style>
/* Set text highlight color to #26AFAF */
::-moz-selection {
    background-color: #704B4170;
    color: #fff; /* Set the text color inside the selection for Firefox */
}
<style id="wp-custom-css">
/*Remove Highlight Color on Click */
* {
  -webkit-tap-highlight-color: transparent;
}

/* Set text highlight color to #26AFAF */
::-moz-selection {
    background-color: #704B4170;
    color: #fff; /* Set the text color inside the selection for Firefox */
}

::selection {
    background-color: #704B4170;
    color: #fff; /* Set the text color inside the selection for other browsers */
}

.scroll-offset {
    padding-top: 30vh; /* Adjust this value to suit your layout */
    margin-top: -30vh; /* Adjust this value to be the negative of padding-top */
}

html {
    scroll-behavior: smooth;
}

*:focus,
*:active {
    outline: none;
}

/* Remove default browser focus outline for all focusable elements */
:focus {
    outline: none;
}

/* Hide scrollbar for all browsers */
html {
    overflow: -moz-scrollbars-none; /* Firefox */
    -ms-overflow-style: none; /* Internet Explorer and Edge */
}

body {
    overflow-y: scroll; /* Always show vertical scrollbar */
}

/* Hide scrollbar for WebKit browsers (Chrome, Safari) */
body::-webkit-scrollbar {
    display: none; /* Hides scrollbar */
}

/* Allow scrolling */
body {
    overflow-y: scroll; /* Enable vertical scrolling */
}

html {
  max-width: 100%;
}

body {
  max-width: 100%;
  position: relative;
}

/* Safer horizontal containment without breaking scroll-lock / pin animations */
#page,
.site,
.elementor,
.elementor-location-body {
  width: 100%;
  max-width: 100%;
  overflow-x: clip;
}

@supports not (overflow: clip) {
  #page,
  .site,
  .elementor,
  .elementor-location-body {
    overflow-x: hidden;
  }
}

img,
video,
svg,
canvas {
  max-width: 100%;
}
</style>
<style>
@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

.khf-hero-title{
  font-family:"IvyOraDisplay", serif !important;
  font-weight:300 !important;
  font-style:normal !important;
  font-synthesis:weight style;
  color:#fff !important;
  text-align:center !important;
  line-height:1.03 !important;
  margin:0 !important;
  letter-spacing:0.01em;
  -webkit-font-smoothing: antialiased;
  text-rendering: geometricPrecision;
}

.khf-hero-title em{
  font-style:italic !important;
  font-weight:600 !important;
}

.khf-hero-title .khf-line{
  display:block;
  overflow:hidden;
}

.khf-hero-title .khf-line-inner{
  display:inline-block;
  opacity:0;
  transform: translate3d(0,115%,0) rotateZ(0.9deg);
  transform-origin:left bottom;
  backface-visibility:hidden;
}

.khf-hero-title.is-animating .khf-line-inner{
  will-change: transform, opacity;
}

.khf-hero-title.is-in .khf-line-inner{
  animation: khfLineIn 820ms cubic-bezier(.18,1,.25,1) forwards;
}

/* stagger */
.khf-hero-title.is-in .khf-line:nth-child(1) .khf-line-inner{ animation-delay:.07s; }
.khf-hero-title.is-in .khf-line:nth-child(2) .khf-line-inner{ animation-delay:.20s; }

@keyframes khfLineIn{
  0%{
    opacity:0;
    transform: translate3d(0,115%,0) rotateZ(0.9deg);
  }
  55%{
    opacity:.98;
    transform: translate3d(0,0,0) rotateZ(0deg);
  }
  100%{
    opacity:1;
    transform: translate3d(0,0,0) rotateZ(0deg);
  }
}

@media (prefers-reduced-motion: reduce){
  .khf-hero-title .khf-line-inner{
    opacity:1 !important;
    transform:none !important;
    animation:none !important;
  }
}

/* =========================
   Variant Logic
   ========================= */

.khf-mobile{ display:none; }

@media (max-width:768px){

  .khf-desktop{ display:none; }
  .khf-mobile{ display:block; }

  /* Bigger mobile size */
  .khf-hero-title{
    font-size: clamp(34px, 9vw, 48px) !important;
    line-height:1.06 !important;
    letter-spacing:0.02em;
  }
}

@media (max-width:420px){
  .khf-hero-title{
    font-size: clamp(30px, 10vw, 40px) !important;
  }
}
</style>
<style>
.mnq-reserve-wrapper,
.mnq-reserve-wrapper * {
  box-sizing: border-box;
}

.mnq-reserve-wrapper {
  position: relative;
  display: inline-block;
  z-index: 9999;
}

/* ===== Button ===== */
.mnq-landing-reserve-btn {
  appearance: none !important;
  -webkit-appearance: none !important;

  background: transparent !important;
  border: 0 !important;
  box-shadow: none !important;
  padding: 0 !important;

  font-family: "Bricolage Grotesque", sans-serif !important;
  font-size: 14px !important;
  font-weight: 300 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.08em !important;

  color: #ffffff !important;
  cursor: pointer !important;

  position: relative;
  transition: opacity 0.3s ease, transform 0.35s ease;
}

.mnq-landing-reserve-btn:hover,
.mnq-landing-reserve-btn:focus,
.mnq-landing-reserve-btn:active {
  background: transparent !important;
  color: #ffffff !important;
  outline: none !important;
}

/* underline */
.mnq-landing-reserve-btn::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -3px;
  width: 100%;
  height: 1px;
  background: rgba(255,255,255,0.8);
  transition: width 0.3s ease, opacity 0.3s ease;
}

.mnq-landing-reserve-btn:hover::after {
  width: 0;
  opacity: 0;
}

.mnq-landing-reserve-btn:hover {
  opacity: 0.35;
}

/* ===== GLASS DROPDOWN ===== */
.mnq-reserve-dropdown {
  position: absolute;
  top: calc(100% + 12px);
  left: 50%;

  min-width: 240px;
  padding: 18px 20px;

  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 14px;

  text-align: center;

  border-radius: 6px;

  /* MUCH lighter glass */
  background: rgba(255,255,255,0.04);

  border: 1px solid rgba(255,255,255,0.12);

  backdrop-filter: blur(8px) saturate(120%);
  -webkit-backdrop-filter: blur(8px) saturate(120%);

  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.12),
    0 12px 35px rgba(0,0,0,0.18);

  opacity: 0;
  visibility: hidden;
  transform: translate(-50%, 10px);
  pointer-events: none;

  transition:
    opacity 0.25s ease,
    transform 0.25s ease,
    visibility 0.25s ease;

  z-index: 99999;
}

/* subtle highlight */
.mnq-reserve-dropdown::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 6px;

  background: linear-gradient(
    120deg,
    rgba(255,255,255,0.12),
    rgba(255,255,255,0.01)
  );

  pointer-events: none;
}

/* active */
.mnq-reserve-wrapper.active .mnq-reserve-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translate(-50%, 0);
  pointer-events: auto;
}

/* ===== Options ===== */
.mnq-reserve-option {
  width: 100%;
  text-align: center;

  font-family: "Bricolage Grotesque", sans-serif !important;
  font-size: 13px !important;
  font-weight: 300 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.07em !important;

  color: #ffffff !important;
  text-decoration: none !important;

  opacity: 0.8;
  transition: opacity 0.25s ease, transform 0.25s ease;
}

.mnq-reserve-option:hover {
  opacity: 1;
  transform: translateY(-2px);
}

/* ===== MOBILE FIX ===== */
@media (max-width: 767px) {
  .mnq-reserve-dropdown {
    top: auto;
    bottom: calc(100% + 10px); /* move above button */
    transform: translate(-50%, -10px);
  }

  .mnq-reserve-wrapper.active .mnq-reserve-dropdown {
    transform: translate(-50%, 0);
  }
}

/* ===== Scroll behavior ===== */
.mnq-landing-reserve-btn.is-hidden-on-scroll {
  opacity: 0 !important;
  transform: translateY(-18px);
  pointer-events: none;
}
</style>
<style>
.khf-why-sec{
  width:100%;
  padding:80px 0;
  overflow:hidden;
}

.khf-why-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:6px;
}

.khf-why-panel{
  position:relative;
  height:80vh;
  overflow:hidden;
  will-change:transform;
}

.khf-why-panel img{
  width:100%;
  height:100%;
  object-fit:cover;
  transition:transform 1.2s cubic-bezier(.22,.61,.36,1);
}

.khf-why-panel--1 img{ filter:none; }

.khf-why-overlay{
  position:absolute;
  inset:0;
  display:flex;
  align-items:flex-end;
  background:linear-gradient(
    to top,
    rgba(61,41,28,0.65),
    rgba(61,41,28,0.25),
    transparent
  );
}

.khf-why-inner{
  position:absolute;
  left:30px;
  right:30px;
  bottom:30px;
}

.khf-why-head{
  transform:translateY(22px);
  transition:transform .4s ease;
  cursor:pointer;
}

.khf-why-panel:hover .khf-why-head{
  transform:translateY(0);
}

/* ICON */
.khf-why-icon{
  position:absolute;
  top:0;
  right:0;
  width:160px;
  height:160px;
  background-repeat:no-repeat;
  background-position:right top;
  background-size:contain;
  opacity:0;
  transform:translateY(-6px) scale(.94);
  transition:opacity .4s ease, transform .4s ease;
}

.khf-why-icon--1{
  background-image:url("/assets/images/Tree-Var-Icon.svg");
}

.khf-why-icon--2{
  background-image:url("/assets/images/Plants-Icon.svg");
}

.khf-why-icon--3{
  background-image:url("/assets/images/Pottery-Icon.svg");
}

.khf-why-panel:hover .khf-why-icon{
  opacity:.32;
  transform:translateY(0) scale(1);
}

.khf-why-title{
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-size:28px;
  font-weight:300;
  line-height:1.04;
  text-transform:uppercase;
  color:#fff;
}

.khf-why-script{
  display:block;
  margin-top:2px;
  font-family:"GoldenHopes", cursive;
  font-size:22px;
  line-height:1;
  text-transform:none !important;
  color:#EADFD4;
}

.khf-why-reveal{
  margin-top:12px;
  max-height:0;
  opacity:0;
  transform:translateY(8px);
  overflow:hidden;
  transition:.4s;
}

.khf-why-reveal p{
  margin:0 0 14px 0;
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:14px;
  line-height:1.8;
  color:rgba(255,255,255,.88);
  max-width:340px;
}

.khf-why-panel:hover .khf-why-reveal{
  max-height:240px;
  opacity:1;
  transform:translateY(0);
}

.khf-why-btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  min-width:180px;
  padding:14px 22px;
  border:1px solid rgba(255,255,255,.45);
  background:rgba(255,255,255,.08);
  backdrop-filter:blur(6px);
  -webkit-backdrop-filter:blur(6px);
  color:rgba(255,255,255,.85);
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:11px;
  letter-spacing:.24em;
  text-transform:uppercase;
  text-decoration:none !important;
  box-shadow:none !important;
  transition:.35s;
}

.khf-why-btn:hover{
  transform:translateY(-2px);
  background:rgba(255,255,255,.14);
  border-color:rgba(255,255,255,.65);
  color:#fff;
}

.khf-why-panel:hover img{
  transform:scale(1.05);
}

@media(max-width:1024px){
  .khf-why-grid{
    grid-template-columns:1fr;
  }

  .khf-why-panel{
    height:60vh;
    transform:none !important;
  }
}

@media(max-width:767px){
  .khf-why-sec{
    padding:30px;
  }

  .khf-why-grid{
    grid-template-columns:1fr;
    gap:30px;
  }

  .khf-why-panel{
    height:auto;
    min-height:460px;
    transform:none !important;
  }

  .khf-why-inner{
    left:20px;
    right:20px;
    bottom:20px;
  }

  .khf-why-icon{
    width:96px;
    height:96px;
    top:0;
    right:0;
    background-position:right top;
    background-size:contain;
    opacity:0;
    transform:translateY(-6px) scale(.94);
  }

  .khf-why-head{
    transform:none;
  }

  .khf-why-title{
    font-size:24px;
    line-height:1.02;
  }

  .khf-why-script{
    margin-top:4px;
    font-size:20px;
  }

  .khf-why-reveal{
    margin-top:0;
    max-height:0;
    opacity:1;
    transform:none;
    overflow:hidden;
    transition:
      max-height .45s ease,
      margin-top .35s ease;
  }

  .khf-why-reveal > *{
    opacity:0;
    transform:translateY(8px);
    transition:
      opacity .35s ease,
      transform .35s ease;
  }

  .khf-why-reveal p{
    margin:0 0 14px 0;
    font-size:13px;
    line-height:1.76;
    max-width:none;
  }

  .khf-why-btn{
    width:100%;
    min-width:100%;
    padding:16px 18px;
    font-size:11px;
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(6px);
    -webkit-backdrop-filter:blur(6px);
  }

  .khf-why-btn::before{
    content:none;
  }

  .khf-why-btn:hover{
    transform:translateY(-2px);
    background:rgba(255,255,255,.14);
    border-color:rgba(255,255,255,.65);
    color:#fff;
  }

  .khf-why-panel:hover img{
    transform:none;
  }

  .khf-why-panel:hover .khf-why-icon{
    opacity:0;
    transform:translateY(-6px) scale(.94);
  }

  .khf-why-panel:hover .khf-why-reveal{
    max-height:0;
    opacity:1;
    transform:none;
    margin-top:0;
  }

  .khf-why-panel:hover .khf-why-reveal > *{
    opacity:0;
    transform:translateY(8px);
  }

  .khf-why-panel.is-open .khf-why-icon{
    opacity:.24;
    transform:none;
  }

  .khf-why-panel.is-open .khf-why-reveal{
    margin-top:12px;
    max-height:260px;
  }

  .khf-why-panel.is-open .khf-why-reveal > *{
    opacity:1;
    transform:translateY(0);
  }

  .khf-why-panel.is-open img{
    transform:scale(1.03);
  }
}
</style>
<style>
@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

@font-face{
  font-family:"GoldenHopes";
  src:url("/assets/images/GoldenHopes.woff2") format("woff2");
  font-weight:400;
  font-style:normal;
  font-display:swap;
}

@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

.kh-rec-copy-only,
.kh-rec-copy-only *{
  box-sizing:border-box;
}

.kh-rec-copy-only{
  position:relative;
  width:100%;
  max-width:360px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
}

.kh-rec-copy-top-only{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
}

.kh-rec-copy-bottom-only{
  display:flex;
  flex-direction:column;
  align-items:flex-start;
  margin-top:110px;
}

.kh-rec-number-only{
  position:absolute;
  top:-34px;
  left:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:110px;
  line-height:.8;
  letter-spacing:.02em;
  color:rgba(92,71,43,.08);
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.kh-rec-kicker-only{
  position:relative;
  z-index:1;
  margin:0 0 14px;
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:10px;
  letter-spacing:.30em;
  text-transform:uppercase;
  color:#8B715C;
  font-weight:400;
}

.kh-rec-title-only{
  position:relative;
  z-index:1;
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:28px;
  line-height:.98;
  letter-spacing:0;
  text-transform:uppercase;
  color:#3F2C1F;
}

.kh-rec-script-only{
  display:block;
  margin-top:-2px;
  margin-left:118px;
  font-family:"GoldenHopes", cursive;
  font-size:21px;
  line-height:1;
  letter-spacing:.02em;
  text-transform:capitalize;
  color:#7B5E4A;
  transform:rotate(-2deg);
}

.kh-rec-text-only{
  margin:24px 0 0;
  max-width:355px;
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:13px;
  line-height:1.95;
  font-weight:300;
  color:rgba(63,44,31,.74);
}

.kh-rec-divider-only{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 14px;
}

.kh-rec-note-only{
  margin:0;
  max-width:355px;
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:11px;
  line-height:1.8;
  font-weight:300;
  color:rgba(63,44,31,.56);
}

@media(max-width:767px){
  .kh-rec-copy-only{
    width:100% !important;
    max-width:none !important;
    min-height:100vh;
    padding:30px;
    justify-content:space-between;
    align-items:center;
    position:relative;
    text-align:center;
  }

  .kh-rec-copy-top-only{
    width:100%;
    max-width:320px;
    margin-top:auto;
    margin-bottom:auto;
    position:relative;
    z-index:1;
    align-items:center;
    text-align:center;
  }

  .kh-rec-copy-bottom-only{
    width:100%;
    max-width:320px;
    margin-top:0;
    position:relative;
    z-index:1;
    align-items:center;
    text-align:center;
  }

  .kh-rec-number-only{
    top:-28px;
    left:50%;
    transform:translateX(-50%);
    font-size:clamp(58px,18vw,92px);
    line-height:.8;
    z-index:0;
  }

  .kh-rec-kicker-only{
    margin:0 0 10px;
    font-size:9px;
    letter-spacing:.22em;
    position:relative;
    z-index:2;
    color:#6A4C36;
  }

  .kh-rec-title-only{
    max-width:320px;
    font-size:clamp(25px,8vw,34px);
    line-height:1;
    position:relative;
    z-index:2;
    text-align:center;
  }

  .kh-rec-script-only{
    margin-top:-2px;
    margin-left:0;
    font-size:clamp(20px,6vw,26px);
    line-height:1;
    color:#6A4C36;
  }

  .kh-rec-text-only{
    margin:14px 0 0;
    max-width:320px;
    font-size:12.5px;
    line-height:1.7;
    position:relative;
    z-index:2;
    color:rgba(63,44,31,.76);
    text-align:center;
  }

  .kh-rec-divider-only{
    margin:0 0 12px;
    display:none;
  }

  .kh-rec-note-only{
    max-width:320px;
    font-size:11px;
    line-height:1.70;
    color:rgba(63,44,31,.60);
    text-align:center;
    display:none;
  }

  .kh-rec-copy-top-only .kh-home-story-cta{
    align-self:center;
  }
}
</style>
<style>
  :root{
    --panel-bg:#5C472B;
    --panel-pad:35px;
    --overlap:92px;
    --media-shadow: 0 18px 60px rgba(0,0,0,.14);
    --panel-shadow: 0 20px 70px rgba(0,0,0,.10);
  }

  .exp-right{
    position:relative;
    display:grid;
    grid-template-columns: 1.15fr 1fr;
    align-items:center;
    gap: 0;
  }

  .exp-media{
    position:relative;
    height: clamp(420px, 44vw, 640px);
    max-height: 680px;
    isolation:isolate;
    z-index: 3;
  }

  .exp-card{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    border-radius:0;
    overflow:hidden;
    background:#ddd;
    box-shadow: var(--media-shadow);

    --x: 0px;
    --y: 0px;
    --a: 1;
    --z: 3;

    transform: translate3d(var(--x), var(--y), 0);
    opacity: var(--a);
    z-index: var(--z);

    will-change: transform, opacity;
    backface-visibility:hidden;
    transform-style:preserve-3d;
  }

  .exp-card img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
  }

  .exp-media.is-animating .exp-card{
    transition: transform 520ms cubic-bezier(.2,.9,.2,1), opacity 520ms cubic-bezier(.2,.9,.2,1);
  }

  .exp-mobile-overlay{
    display:none;
  }

  .exp-panel{
    position:relative;
    justify-self:end;
    width: min(560px, 100%);
    background: var(--panel-bg);
    color:#fff;
    border-radius:0;
    padding: var(--panel-pad);
    box-shadow: var(--panel-shadow);
    z-index: 2;

    height: 320px;
    display:flex;
    flex-direction:column;

    padding-bottom: calc(var(--panel-pad) + 44px);
  }

  .exp-panel::before{
    content:"";
    position:absolute;
    left: calc(-1 * var(--overlap));
    top:0;
    width: var(--overlap);
    height:100%;
    background: var(--panel-bg);
    z-index:-1;
  }

  .exp-panel > *{ position:relative; z-index:1; }

  .exp-copy{
    will-change: opacity, filter, transform;
    transition: opacity 240ms ease, filter 240ms ease, transform 240ms ease;
  }
  .exp-copy.is-leaving{ opacity:0; filter: blur(10px); transform: translateY(6px); }
  .exp-copy.is-entering{ opacity:0; filter: blur(10px); transform: translateY(-6px); }

  .exp-title{
    margin:0 0 12px 0;
    font-family: "IvyOra Display", "IvyOra", serif;
    font-size: 25px;
    font-weight: 400;
    line-height: 1.12;
    letter-spacing: .8px;
    text-transform: uppercase;
    color:#fff;
  }

  .exp-text{
    margin:0;
    font-family: "Bricolage Grotesque", "Bricolage", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    font-size: 12px;
    font-weight: 300;
    line-height: 1.75;
    letter-spacing: .2px;
    color: rgba(255,255,255,.86);
    max-width: 60ch;
  }

  .exp-counter{
    position:absolute;
    left: var(--panel-pad);
    bottom: var(--panel-pad);

    padding: 0;
    border: 0;
    background: transparent !important;
    color:#fff !important;

    cursor:pointer;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:12px;

    font-family: "IvyOra Display", "IvyOra", serif;
    font-size: 25px;
    font-weight: 400;
    line-height: 1;
    letter-spacing: .8px;
    text-transform: uppercase;

    opacity: 1 !important;
    -webkit-tap-highlight-color: transparent;
    outline: none;
    box-shadow: none !important;
  }

  .exp-counter:hover,
  .exp-counter:active,
  .exp-counter:focus,
  .exp-counter:focus-visible{
    background: transparent !important;
    color:#fff !important;
    outline: none !important;
    box-shadow: none !important;
  }

  .exp-counter span{
    position:relative;
    display:inline-block;
    color:#fff !important;
  }

  .exp-counter #expCounterVal::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px;
    width:100%;
    height:1px;
    background: rgba(255,255,255,.35);
    transform: scaleX(0);
    transform-origin:left;
    transition: transform 220ms ease;
  }

  .exp-counter:hover #expCounterVal::after{
    transform: scaleX(1);
  }

  .exp-counter-chevron{
    flex:0 0 auto;
    width:10px;
    height:10px;
    margin-top:1px;
    border-right:1.5px solid rgba(255,255,255,.9);
    border-bottom:1.5px solid rgba(255,255,255,.9);
    transform:rotate(-45deg);
  }

  .exp-footnote-mobile{
    display:none;
  }

  .exp-footnote-line{
    width:84px;
    height:1px;
    background:rgba(63,44,31,.14);
    margin:0 auto 12px;
  }

  .exp-footnote-text{
    margin:0;
    max-width:320px;
    font-family:"Bricolage Grotesque","Bricolage",system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
    font-size:11px;
    line-height:1.7;
    font-weight:300;
    color:rgba(63,44,31,.60);
    text-align:center;
  }

  @media (max-width: 900px){
    .exp-right{
      grid-template-columns: 1fr;
      gap:0;
    }

    .exp-media{
      height: clamp(320px, 72vw, 420px);
      max-height:none;
      background: var(--panel-bg);
    }

    .exp-panel{
      justify-self:stretch;
      width:100%;
      margin-top:0;
      min-height:300px;
      height:auto;
    }

    .exp-panel::before{
      display:none;
    }
  }

  @media (max-width: 767px){
    .exp-right{
      width:100%;
      padding:30px;
      grid-template-columns:1fr;
      gap:0;
    }

    .exp-media{
      height: clamp(430px, 118vw, 620px);
      max-height:none;
      background:transparent;
      cursor:pointer;
    }

    .exp-card{
      box-shadow: 0 14px 40px rgba(0,0,0,.12);
      border-radius:2000px 2000px 0 0;
    }

    .exp-card::after{
      content:"";
      position:absolute;
      inset:0;
      background:linear-gradient(
        180deg,
        rgba(10,10,10,0) 0%,
        rgba(10,10,10,.18) 24%,
        rgba(10,10,10,.42) 50%,
        rgba(10,10,10,.68) 72%,
        rgba(10,10,10,.88) 100%
      );
      pointer-events:none;
      z-index:1;
    }

    .exp-mobile-overlay{
      display:flex;
      position:absolute;
      inset:0;
      z-index:5;
      align-items:flex-end;
      justify-content:center;
      padding:26px 22px 28px;
      pointer-events:none;
    }

    .exp-mobile-overlay-inner{
      width:100%;
      max-width:320px;
      text-align:center;
      color:#fff;
    }

    .exp-mobile-title{
      margin:0;
      font-family:"IvyOra Display","IvyOra",serif;
      font-size:24px;
      font-weight:400;
      line-height:1.02;
      letter-spacing:.03em;
      text-transform:uppercase;
      color:#fff;
      text-wrap:balance;
    }

    .exp-mobile-body-wrap{
      max-height:none;
      opacity:1;
      overflow:visible;
      transform:none;
      transition:none;
      margin-top:12px;
    }

    .exp-mobile-text{
      margin:0;
      font-family:"Bricolage Grotesque","Bricolage",system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
      font-size:13px;
      line-height:1.72;
      font-weight:300;
      color:rgba(255,255,255,.88);
    }

    .exp-panel{
      width:100%;
      min-height:auto;
      height:auto;
      padding:0;
      margin-top:23px;
      box-shadow:none;
      background:transparent;
      justify-self:center;
    }

    .exp-copy{
      display:none;
    }

    .exp-counter{
      position:relative;
      left:auto;
      bottom:auto;
      margin:0 auto;
      font-size:24px;
      line-height:1;
      gap:10px;
      color:#3F2C1F !important;
    }

    .exp-counter span{
      color:#3F2C1F !important;
    }

    .exp-counter:hover #expCounterVal::after{
      transform: scaleX(0);
    }

    .exp-counter #expCounterVal::after{
      background: rgba(63,44,31,.34);
    }

    .exp-counter-chevron{
      width:9px;
      height:9px;
      border-right:1.5px solid rgba(63,44,31,.9);
      border-bottom:1.5px solid rgba(63,44,31,.9);
    }

    .exp-footnote-mobile{
      display:block;
      width:100%;
      margin-top:40px;
      text-align:center;
    }
  }

  @media (prefers-reduced-motion: reduce){
    .exp-media.is-animating .exp-card,
    .exp-copy{
      transition:none !important;
    }

    .exp-counter #expCounterVal::after{
      transition:none !important;
    }
  }
</style>
<style>
  @font-face{
    font-family:"IvyOraDisplay";
    src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
    font-weight:300;
    font-style:normal;
    font-display:swap;
  }

  @font-face{
    font-family:"GoldenHopes";
    src:url("/assets/images/GoldenHopes.woff2") format("woff2");
    font-weight:400;
    font-style:normal;
    font-display:swap;
  }

  @import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

  .khx-gallery,
  .khx-gallery *{
    box-sizing:border-box;
  }

  .khx-gallery{
    position:relative;
    width:100%;
    padding:70px 0;
    overflow:hidden;
  }

  .khx-viewport{
    width:100%;
    overflow:hidden;
    perspective:1400px;
    cursor:pointer;
  }

  .khx-track{
    display:flex;
    gap:46px;
    align-items:center;
    width:max-content;
    will-change:transform;
    transform-style:preserve-3d;
  }

  .khx-item{
    flex:0 0 auto;
    width:clamp(420px, 36vw, 760px);
    aspect-ratio:4 / 3;
    background:transparent;
    border-radius:0;
    box-shadow:none;
    overflow:hidden;
    transform-style:preserve-3d;
    will-change:transform, opacity;
    display:block;
    text-decoration:none !important;
    cursor:pointer;
  }

  .khx-item img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    user-select:none;
    -webkit-user-drag:none;
    -webkit-touch-callout:none;
    pointer-events:none;
  }

  .khx-mobile-copy{
    display:none;
  }

  @media (max-width: 900px){
    .khx-track{ gap:22px; }
    .khx-item{ width:min(92vw, 760px); }
  }

  @media (max-width: 767px){
    .khx-gallery{
      padding:60px 0 0;
    }

    .khx-mobile-copy{
      display:flex;
      position:relative;
      flex-direction:column;
      align-items:center;
      text-align:center;
      width:100%;
      max-width:320px;
      margin:0 auto 40px;
      padding:0 0;
    }

    .khx-mobile-number{
      position:absolute;
      top:-28px;
      left:50%;
      transform:translateX(-50%);
      font-family:"IvyOraDisplay", serif;
      font-weight:300;
      font-size:clamp(58px,18vw,92px);
      line-height:.8;
      letter-spacing:.02em;
      color:rgba(92,71,43,.08);
      pointer-events:none;
      user-select:none;
      z-index:0;
    }

    .khx-mobile-kicker{
      position:relative;
      z-index:1;
      margin:0 0 10px;
      font-family:"Bricolage Grotesque",sans-serif;
      font-size:9px;
      letter-spacing:.22em;
      text-transform:uppercase;
      color:#6A4C36;
      font-weight:400;
    }

    .khx-mobile-title{
      position:relative;
      z-index:1;
      margin:0;
      max-width:320px;
      font-family:"IvyOraDisplay", serif;
      font-weight:300;
      font-size:clamp(25px,8vw,34px);
      line-height:1;
      text-transform:uppercase;
      color:#3F2C1F;
    }

    .khx-mobile-script{
      display:block;
      margin-top:-2px;
      margin-left:0;
      font-family:"GoldenHopes", cursive;
      font-size:clamp(20px,6vw,26px);
      line-height:1;
      letter-spacing:.03em;
      text-transform:capitalize;
      color:#6A4C36;
      transform:rotate(-2deg);
    }

    .khx-mobile-text{
      margin:14px 0 0;
      max-width:320px;
      font-family:"Bricolage Grotesque",sans-serif;
      font-size:12.5px;
      line-height:1.7;
      font-weight:300;
      color:rgba(63,44,31,.76);
    }

    .khx-viewport{
      padding:0;
      touch-action:pan-y;
      cursor:grab;
    }

    .khx-viewport.is-dragging{
      cursor:grabbing;
    }

    .khx-track{
      gap:18px;
    }

    .khx-item{
      width:min(88vw, 520px);
    }
  }

  @media (prefers-reduced-motion: reduce){
    .khx-track{ transition:none !important; }
    .khx-item{ transition:none !important; }
  }
</style>
<style>
.kh-icon-center{
  display:flex;
  justify-content:center;
  align-items:center;
  padding:0px 0; /* reduced from 60 → 24 */
  margin-top: -20px !important;
}

.kh-icon-shape{
  width:270px;
  height:120px;

  background-color:#3D291C;

  -webkit-mask:url("/assets/images/Flat-Rose-Icon.svg") center center / contain no-repeat;
  mask:url("/assets/images/Flat-Rose-Icon.svg") center center / contain no-repeat;

  opacity:.3;
}

@media (max-width: 767px){

  .kh-icon-center{
    padding: 70px 0 0 0;
    margin-top:-10px !important;
  }

  .kh-icon-shape{
    width:180px;
    height:80px;
    opacity:.25;
  }

}
</style>
<style>
  @font-face{
    font-family:"IvyOraDisplay";
    src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
    font-weight:300;
    font-style:normal;
    font-display:swap;
  }

  @font-face{
    font-family:"GoldenHopes";
    src:url("/assets/images/GoldenHopes.woff2") format("woff2");
    font-weight:400;
    font-style:normal;
    font-display:swap;
  }

  @import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

  .monarq-polaroid-slider-v2{
    width:100vw !important;
    max-width:100vw !important;
    margin-left:calc(50% - 50vw) !important;
    margin-right:calc(50% - 50vw) !important;
    position:relative;
    overflow:hidden;
  }

  .monarq-polaroid-slider-v2 *{
    box-sizing:border-box;
    -webkit-tap-highlight-color:transparent;
  }

  .mps5-shell{
    width:100%;
    max-width:none !important;
    min-height:80vh;
    display:grid;
    grid-template-columns:clamp(460px, calc(100vw - 880px), 720px) 560px 88px;
    align-items:center;
    justify-content:center;
    column-gap:56px;
    padding:60px;
    position:relative;
    z-index:2;
  }

  .mps5-left,
  .mps5-center,
  .mps5-right{
    min-width:0;
  }

  .mps5-left{
    display:flex;
    align-items:center;
    justify-content:center;
  }

  .mps5-center{
    display:flex;
    align-items:center;
    justify-content:center;
    min-width:0;
    transform:translateY(-12px);
  }

  .mps5-right{
    display:flex;
    align-items:center;
    justify-content:center;
    width:88px;
    transform:translateY(-12px);
  }

  .mps5-polaroid{
    width:100%;
    max-width:720px;
    background:linear-gradient(180deg, #e3e1de 0%, #d8d6d3 100%);
    border-radius:0;
    padding:16px 16px 22px 16px;
    position:relative;
    box-shadow:
      0 18px 55px rgba(0,0,0,0.05),
      0 2px 8px rgba(0,0,0,0.03),
      inset 0 1px 0 rgba(255,255,255,0.72),
      inset 0 -1px 0 rgba(110,110,110,0.10);
    overflow:hidden;
    transform-origin:center center;
  }

  .mps5-polaroid::before{
    content:"";
    position:absolute;
    inset:0;
    background:
      linear-gradient(135deg, rgba(255,255,255,0.30) 0%, rgba(255,255,255,0.05) 34%, rgba(255,255,255,0) 52%),
      radial-gradient(circle at 18% 12%, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0.06) 18%, rgba(255,255,255,0) 38%);
    mix-blend-mode:screen;
    pointer-events:none;
    z-index:4;
  }

  .mps5-polaroid-gloss{
    position:absolute;
    top:0;
    left:-18%;
    width:58%;
    height:100%;
    background:linear-gradient(100deg, rgba(255,255,255,0.00) 0%, rgba(255,255,255,0.14) 46%, rgba(255,255,255,0.04) 74%, rgba(255,255,255,0.00) 100%);
    transform:skewX(-14deg);
    opacity:0.38;
    pointer-events:none;
    z-index:5;
  }

  .mps5-photo-stage{
    position:relative;
    width:100%;
    aspect-ratio:46 / 43;
    height:auto;
    background:#15120f;
    overflow:hidden;
    border-radius:0;
    box-shadow:inset 0 0 0 1px rgba(52,40,24,0.05);
    z-index:1;
  }

  .mps5-photo-layer{
    position:absolute;
    inset:0;
    background-size:cover;
    background-position:center center;
    transform:translateX(100%);
    will-change:transform;
    z-index:1;
  }

  .mps5-photo-layer.is-active{
    transform:translateX(0);
    z-index:1;
  }

  .mps5-photo-layer.from-right{
    transform:translateX(100%);
    z-index:2;
  }

  .mps5-photo-layer.from-left{
    transform:translateX(-100%);
    z-index:2;
  }

  .mps5-photo-layer.to-left{
    transform:translateX(-100%);
    transition:transform 0.85s cubic-bezier(.77,0,.18,1);
    z-index:1;
  }

  .mps5-photo-layer.to-right{
    transform:translateX(100%);
    transition:transform 0.85s cubic-bezier(.77,0,.18,1);
    z-index:1;
  }

  .mps5-photo-layer.animate-in{
    transform:translateX(0);
    transition:transform 0.85s cubic-bezier(.77,0,.18,1);
  }

  .mps5-meta-row{
    position:relative;
    z-index:6;
    margin-top:16px;
    display:flex;
    align-items:flex-end;
    justify-content:space-between;
    gap:18px;
  }

  .mps5-photo-title{
    font-family:"GoldenHopes", cursive;
    font-size:clamp(32px, 2.15vw, 38px);
    line-height:1;
    color:#342818;
    max-width:68%;
    transform:translateY(4px);
  }

  .mps5-photo-mark{
    flex:0 0 auto;
    width:42px;
    height:42px;
    align-self:flex-end;
    margin-bottom:-2px;
    background:url("/assets/images/ornaments/logo.webp") no-repeat center center / contain;
    opacity:.9;
  }

  .mps5-inner{
    width:100%;
    max-width:560px;
    min-width:0;
    display:flex;
    align-items:center;
    justify-content:center;
    min-height:500px;
    padding-right:0;
  }

  .mps5-content-stage{
    position:relative;
    width:100%;
    min-height:500px;
    overflow:hidden;
  }

  .mps5-content{
    position:absolute;
    inset:0;
    opacity:0;
    transform:translateY(18px);
    pointer-events:none;
    display:flex;
    flex-direction:column;
    min-height:500px;
    visibility:hidden;
    will-change:opacity, transform;
  }

  .mps5-content.is-active{
    visibility:visible;
    pointer-events:auto;
  }

  .mps5-content.is-current{
    z-index:2;
    opacity:1;
    transform:translateY(0);
  }

  .mps5-content.is-next{
    z-index:3;
    opacity:0;
    transform:translateY(18px);
  }

  .mps5-content.fade-out{
    opacity:0;
    transform:translateY(-10px);
    transition:opacity .24s ease, transform .24s ease;
  }

  .mps5-content.fade-in{
    opacity:1;
    transform:translateY(0);
    transition:opacity .44s ease .08s, transform .44s ease .08s;
  }

  .mps5-copy{
    position:relative;
    max-width:560px;
    min-height:500px;
    height:100%;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    padding:56px 0 8px;
  }

  .mps5-copy-main{
    display:flex;
    flex-direction:column;
    justify-content:center;
    flex:1;
    transform:translateY(18px);
  }

  .mps5-copy-top{
    position:relative;
    display:flex;
    flex-direction:column;
    align-items:flex-start;
  }

  .mps5-copy-bottom{
    display:flex;
    flex-direction:column;
    align-items:flex-start;
    justify-content:flex-end;
    padding-bottom:0;
    margin-bottom:-30px;
  }

  .mps5-number{
    position:absolute;
    top:-55px;
    left:0;
    font-family:"IvyOraDisplay", serif;
    font-weight:300;
    font-size:clamp(78px,8vw,146px);
    color:rgba(92,71,43,.08);
    line-height:.8;
    letter-spacing:.02em;
    pointer-events:none;
    user-select:none;
    z-index:0;
  }

  .mps5-kicker{
    position:relative;
    z-index:1;
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:10px;
    letter-spacing:.28em;
    text-transform:uppercase;
    color:#6A4C36;
    font-weight:400;
    margin:0 0 12px;
    line-height:1.4;
  }

  .mps5-title{
    position:relative;
    z-index:1;
    margin:0;
    font-family:"IvyOraDisplay", serif;
    font-weight:300;
    font-size:clamp(28px,2.2vw,40px);
    line-height:.98;
    text-transform:uppercase;
    color:#3F2C1F;
    max-width:460px;
  }

  .mps5-script{
    display:block;
    margin-top:-4px;
    margin-left:88px;
    font-family:"GoldenHopes", cursive;
    font-size:clamp(22px,1.7vw,30px);
    line-height:1;
    letter-spacing:.03em;
    text-transform:capitalize;
    color:#6A4C36;
    transform:rotate(-2deg);
  }

  .mps5-text{
    margin:14px 0 0;
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:13px;
    line-height:1.78;
    color:rgba(63,44,31,.76);
    max-width:470px;
    font-weight:300;
  }

  .mps5-divider{
    width:84px;
    height:1px;
    background:rgba(63,44,31,.14);
    margin:0 0 12px;
  }

  .mps5-note{
    margin:0;
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:11px;
    line-height:1.72;
    color:rgba(63,44,31,.60);
    max-width:390px;
  }

  .mps5-actions{
    margin-top:28px;
    padding-top:0;
  }

  .mps5-arrow-nav{
    display:flex;
    align-items:center;
    gap:12px;
    margin-top:0;
  }

  .mps5-arrow{
    appearance:none;
    width:44px;
    height:44px;
    border:1px solid rgba(52,40,24,0.24);
    background:transparent !important;
    box-shadow:none !important;
    color:#342818 !important;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:0;
    cursor:pointer;
    border-radius:0;
    transition:border-color .3s ease, color .3s ease, opacity .3s ease, background-color .3s ease, transform .3s ease;
  }

  .mps5-arrow svg{
    width:16px;
    height:16px;
    display:block;
  }

  .mps5-arrow:hover,
  .mps5-arrow:focus,
  .mps5-arrow:active{
    background:transparent !important;
    color:#7d6954 !important;
    border-color:#7d6954 !important;
    opacity:1;
    transform:translateY(-1px);
    outline:none;
    box-shadow:none !important;
  }

  .mps5-arrow:focus-visible{
    outline:none;
    box-shadow:none !important;
  }

  .mps5-remote{
    width:100%;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    gap:18px;
  }

  .mps5-index{
    appearance:none;
    border:none !important;
    background:transparent !important;
    box-shadow:none !important;
    padding:0;
    margin:0;
    cursor:pointer;
    font-family:"IvyOraDisplay", serif;
    font-size:18px;
    font-weight:400;
    font-style:normal;
    line-height:1;
    min-width:34px;
    text-align:center;
    color:rgba(52,40,24,0.28) !important;
    transition:opacity .3s ease, color .3s ease, transform .3s ease;
  }

  .mps5-index:hover,
  .mps5-index:focus,
  .mps5-index:active{
    background:transparent !important;
    color:#7d6954 !important;
    outline:none;
    box-shadow:none !important;
  }

  .mps5-index.is-active{
    color:#342818 !important;
    font-weight:700;
    font-style:italic;
    transform:translateX(-4px);
  }

  .mps5-index:not(.is-active):hover,
  .mps5-index:not(.is-active):focus{
    transform:translateX(-4px);
  }

  .mps5-index:focus-visible{
    outline:none;
    box-shadow:none !important;
  }

  .mps5-mobile-shell{
    display:none;
  }

  .mps5-mobile-copy-stage{
    position:relative;
    width:100%;
    max-width:320px;
    min-height:0;
    height:auto;
    margin:0 auto;
    overflow:visible;
    padding-top:18px;
    transition:height .32s ease;
  }

  .mps5-mobile-copy{
    position:absolute;
    inset:0;
    opacity:0;
    transform:translateY(18px);
    pointer-events:none;
    visibility:hidden;
    will-change:opacity, transform;
  }

  .mps5-mobile-copy.is-active{
    visibility:visible;
    pointer-events:auto;
  }

  .mps5-mobile-copy.is-current{
    z-index:2;
    opacity:1;
    transform:translateY(0);
  }

  .mps5-mobile-copy.is-next{
    z-index:3;
    opacity:0;
    transform:translateY(18px);
  }

  .mps5-mobile-copy.fade-out{
    opacity:0;
    transform:translateY(-10px);
    transition:opacity .24s ease, transform .24s ease;
  }

  .mps5-mobile-copy.fade-in{
    opacity:1;
    transform:translateY(0);
    transition:opacity .44s ease .08s, transform .44s ease .08s;
  }

  .mps5-mobile-polaroid-wrap{
    width:100%;
    display:flex;
    justify-content:center;
  }

  .mps5-mobile-remote{
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
  }

  .mps5-mobile-index{
    appearance:none;
    border:none !important;
    background:transparent !important;
    box-shadow:none !important;
    padding:0;
    margin:0;
    cursor:pointer;
    font-family:"IvyOraDisplay", serif;
    font-size:16px;
    font-weight:400;
    font-style:normal;
    line-height:1;
    color:rgba(52,40,24,0.28) !important;
    transition:opacity .3s ease, color .3s ease;
  }

  .mps5-mobile-index:hover,
  .mps5-mobile-index:focus,
  .mps5-mobile-index:active{
    background:transparent !important;
    color:#7d6954 !important;
    outline:none;
    box-shadow:none !important;
  }

  .mps5-mobile-index.is-active{
    color:#342818 !important;
    font-weight:700;
    font-style:italic;
  }

  @media (max-width: 1360px){
    .mps5-shell{
      grid-template-columns:420px minmax(360px, 1fr) 72px;
      column-gap:38px;
    }

    .mps5-polaroid{
      max-width:420px;
    }

    .mps5-photo-title{
      font-size:28px;
    }

    .mps5-right{
      width:72px;
    }

    .mps5-inner,
    .mps5-content-stage,
    .mps5-content,
    .mps5-copy{
      min-height:490px;
    }

    .mps5-script{
      margin-left:68px;
    }
  }

  @media (max-width: 1024px){
    .mps5-shell{
      grid-template-columns:1fr;
      row-gap:34px;
      min-height:auto;
      padding:60px 40px;
    }

    .mps5-left,
    .mps5-center,
    .mps5-right{
      width:100%;
      justify-content:center;
      transform:none;
    }

    .mps5-polaroid{
      width:420px;
      max-width:100%;
      margin:0 auto;
    }

    .mps5-right{
      order:3;
    }

    .mps5-center{
      order:2;
    }

    .mps5-left{
      order:1;
    }

    .mps5-inner{
      min-height:unset;
      padding-right:0;
    }

    .mps5-content-stage{
      min-height:unset;
      overflow:visible;
    }

    .mps5-content{
      min-height:unset;
    }

    .mps5-copy{
      height:auto;
      min-height:unset;
      padding:0;
      justify-content:flex-start;
    }

    .mps5-copy-main{
      transform:none;
    }

    .mps5-copy-bottom{
      padding-top:18px;
      margin-bottom:0;
    }

    .mps5-number{
      top:-22px;
      left:0;
    }

    .mps5-actions{
      margin-top:26px;
    }

    .mps5-remote{
      flex-direction:row;
      justify-content:center;
      align-items:center;
      gap:20px;
    }

    .mps5-index{
      min-width:auto;
    }

    .mps5-index.is-active,
    .mps5-index:not(.is-active):hover,
    .mps5-index:not(.is-active):focus{
      transform:none;
    }
  }

  @media (max-width: 767px){
    .monarq-polaroid-slider-v2{
      width:100% !important;
      max-width:100% !important;
      margin-left:0 !important;
      margin-right:0 !important;
    }

    .mps5-shell{
      display:none;
    }

    .mps5-mobile-shell{
      display:flex;
      flex-direction:column;
      width:100%;
      padding:44px 30px 32px;
      row-gap:18px;
      touch-action:pan-y;
    }

    .mps5-mobile-copy-stage{
      display:block;
    }

    .mps5-mobile-copy .mps5-copy{
      width:100%;
      max-width:320px;
      min-height:auto;
      padding:0;
      display:flex;
      flex-direction:column;
      justify-content:flex-start;
      align-items:center;
      text-align:center;
      margin:0 auto;
    }

    .mps5-mobile-copy .mps5-copy-main{
      width:100%;
      flex:none;
      transform:none;
      display:flex;
      flex-direction:column;
      justify-content:flex-start;
      align-items:center;
    }

    .mps5-mobile-copy .mps5-copy-top{
      width:100%;
      align-items:center;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-copy-bottom{
      width:100%;
      margin-top:18px;
      margin-bottom:0;
      padding-top:0;
      align-items:center;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-number{
      top:-18px;
      left:50%;
      transform:translateX(-50%);
      font-size:clamp(58px,18vw,92px);
      line-height:.8;
    }

    .mps5-mobile-copy .mps5-kicker{
      margin:0 0 10px;
      font-size:9px;
      letter-spacing:.22em;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-title{
      max-width:320px;
      font-size:clamp(25px,8vw,34px);
      line-height:1;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-script{
      margin-top:-2px;
      margin-left:0;
      font-size:clamp(20px,6vw,26px);
      line-height:1;
      transform:rotate(-2deg);
      text-align:center;
    }

    .mps5-mobile-copy .mps5-text{
      margin:12px 0 0;
      max-width:320px;
      font-size:12px;
      line-height:1.66;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-actions{
      display:none;
    }

    .mps5-mobile-copy .mps5-copy-bottom{
      display:none;
    }

    .mps5-mobile-polaroid-wrap .mps5-polaroid{
      width:100%;
      max-width:390px;
      padding:14px 14px 18px 14px;
      margin:0 auto;
    }

    .mps5-mobile-polaroid-wrap .mps5-photo-stage{
      height:340px;
      aspect-ratio:auto;
    }

    .mps5-mobile-polaroid-wrap .mps5-photo-title{
      font-size:24px;
      max-width:62%;
      transform:translateY(3px);
    }

    .mps5-mobile-polaroid-wrap .mps5-photo-mark{
      width:30px;
      height:30px;
      margin-bottom:-2px;
      opacity:.72;
    }

    .mps5-mobile-remote{
      margin-top:0;
    }
  }
</style>
<style>

/* ===== Khufu Story CTA ===== */
.kh-home-story-cta{
  position:relative;
  display:inline-block;
  margin-top:0px;

  font-family:"Bricolage Grotesque", sans-serif;
  font-size:13px;
  font-weight:300;
  text-transform:uppercase;
  letter-spacing:.08em;

  color:#3F2C1F;
  text-decoration:none !important;

  cursor:pointer;
  transition:opacity .3s ease-in-out;
}

/* underline */
.kh-home-story-cta::after{
  content:'';
  position:absolute;
  left:0;
  bottom:-3px;
  width:100%;
  height:1px;
  background-color:rgba(63,44,31,.6);
  transition:width .3s ease-in-out, opacity .3s ease-in-out;
}

/* hover */
.kh-home-story-cta:hover::after,
.kh-home-story-cta:focus::after{
  width:0;
  opacity:0;
}

.kh-home-story-cta:hover,
.kh-home-story-cta:focus{
  opacity:.4;
  color:#3F2C1F;
}

.kh-home-story-cta:focus{
  outline:none;
}

@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

@font-face{
  font-family:"GoldenHopes";
  src:url("/assets/images/GoldenHopes.woff2") format("woff2");
  font-weight:400;
  font-style:normal;
  font-display:swap;
}

@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

.kh-home-story-copy::before{
  content:"";
  position:absolute;
  top:0;
  left:0;
  width:100px;
  height:100px;
  background-color:#6A4C36;
  opacity:0;
  -webkit-mask:url("/assets/images/Khufus-Pattern.svg") no-repeat left top / contain;
  mask:url("/assets/images/Khufus-Pattern.svg") no-repeat left top / contain;
  pointer-events:none;
  z-index:3;
  transform:translateY(36px);
  filter:blur(2px);
  transition:
    transform 1s cubic-bezier(.22,1,.36,1),
    opacity 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
  will-change:transform, opacity, filter;
}

#khHomeStorySec.show .kh-home-story-copy::before{
  opacity:.28;
  transform:none;
  filter:blur(0);
}

.kh-home-story-sec,
.kh-home-story-sec *{
  box-sizing:border-box;
}

.kh-home-story-sec{
  width:100%;
  height:100vh;
  padding:60px;
  position:relative;
  overflow:hidden;
}

.kh-home-story-wrap{
  width:100%;
  height:100%;
  position:relative;
  z-index:2;
}

.kh-home-story-grid{
  display:grid;
  grid-template-columns:minmax(320px,500px) minmax(0,1fr);
  gap:80px;
  height:100%;
  align-items:stretch;
}

/* =========================
LEFT COLUMN
========================= */

.kh-home-story-copy{
  position:relative;
  max-width:560px;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  padding:56px 0 8px;
}

.kh-home-story-copy-main{
  display:flex;
  flex-direction:column;
  justify-content:center;
  flex:1;
  transform:translateY(18px);
}

.kh-home-story-copy-top{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
}

.kh-home-story-copy-bottom{
  display:flex;
  flex-direction:column;
  align-items:flex-start;
  justify-content:flex-end;
  padding-bottom:0;
  margin-bottom:-20px;
}

.kh-home-story-number{
  position:absolute;
  top:-55px;
  left:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(78px,8vw,146px);
  color:rgba(92,71,43,.08);
  line-height:.8;
  letter-spacing:.02em;
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.kh-home-story-kicker{
  position:relative;
  z-index:1;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.28em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:400;
  margin:0 0 12px;
}

.kh-home-story-title{
  position:relative;
  z-index:1;
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(30px,2.5vw,44px);
  line-height:.98;
  text-transform:uppercase;
  color:#3F2C1F;
  max-width:500px;
}

.kh-home-story-script{
  display:block;
  margin-top:-4px;
  margin-left:98px;
  font-family:"GoldenHopes", cursive;
  font-size:clamp(22px,1.7vw,30px);
  line-height:1;
  letter-spacing:.03em;
  text-transform:capitalize;
  color:#6A4C36;
  transform:rotate(-2deg);
}

.kh-home-story-text{
  margin:14px 0 0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.78;
  color:rgba(63,44,31,.76);
  max-width:470px;
}

.kh-home-story-divider{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 12px;
}

.kh-home-story-note{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.72;
  color:rgba(63,44,31,.60);
  max-width:390px;
}

/* =========================
RIGHT VISUAL
========================= */

.kh-home-story-visual{
  position:relative;
  height:100%;
  display:flex;
  align-items:center;
  justify-content:flex-end;
  overflow:hidden;
}

.kh-home-story-columns{
  position:relative;
  width:min(100%, 620px);
  height:100%;
  max-height:760px;
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:18px;
  align-items:end;
}

.kh-home-story-col{
  position:relative;
  overflow:hidden;
  background:#EADFD3;
  will-change:transform;
}

.kh-home-story-col::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(24,18,12,.08) 0%, rgba(24,18,12,.18) 100%),
    radial-gradient(circle at 72% 18%, rgba(255,255,255,.05), transparent 28%);
  pointer-events:none;
  z-index:2;
}

.kh-home-story-col--1{
  height:72%;
  margin-bottom:8%;
}

.kh-home-story-col--2{
  height:100%;
  margin-bottom:0;
}

.kh-home-story-col--3{
  height:62%;
  margin-bottom:14%;
}

.kh-home-story-img{
  position:absolute;
  inset:0;
  background-size:cover;
  background-position:center;
  transform:scale(1.02);
}

.kh-home-story-img--1{
  background-image:url("/assets/images/google_maps/concord/curries_and_appetizers/concord_mutton_rogan_josh_slow_simmered.jpg");
}

.kh-home-story-img--2{
  background-image:url("/assets/images/google_maps/concord/curries_and_appetizers/concord_creamy_butter_chicken_delight.jpg");
}

.kh-home-story-img--3{
  background-image:url("/assets/images/google_maps/concord/curries_and_appetizers/concord_tandoori_mixed_grill_platter.jpg");
}

.kh-home-story-float{
  position:absolute;
  left:-26px;
  bottom:42px;
  width:160px;
  height:200px;
  border-radius:120px 120px 0 0;
  overflow:hidden;
  background:transparent;
  z-index:4;
}

.kh-home-story-float::before{
  content:"";
  position:absolute;
  inset:0;
  background-color:rgba(247,243,238,.92);
  -webkit-mask:url("/assets/images/ornaments/heritage-brass-seal.svg") no-repeat center calc(50% + 10px) / 42% auto;
  mask:url("/assets/images/ornaments/heritage-brass-seal.svg") no-repeat center calc(50% + 10px) / 42% auto;
  pointer-events:none;
  z-index:2;
}

.kh-home-story-card{
  position:absolute;
  right:-10px;
  bottom:80px;
  width:300px;
  background:rgba(250,247,242,.86);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  padding:22px;
  border:1px solid rgba(63,44,31,.08);
  box-shadow:0 22px 44px rgba(0,0,0,.08);
  z-index:5;
}

.kh-home-story-card-label{
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
  margin-bottom:10px;
}

.kh-home-story-card p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.76;
  color:rgba(63,44,31,.74);
  font-weight:300;
}

/* =========================
ANIMATION
========================= */

.kh-home-story-animate{
  opacity:0;
  transform:translateY(36px);
  transition:
    transform 1s cubic-bezier(.22,1,.36,1),
    opacity 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
  filter:blur(2px);
  will-change:transform, opacity, filter;
}

.kh-home-story-animate.show{
  opacity:1;
  transform:none;
  filter:blur(0);
}

.kh-home-story-delay1{transition-delay:.10s}
.kh-home-story-delay2{transition-delay:.18s}
.kh-home-story-delay3{transition-delay:.26s}
.kh-home-story-delay4{transition-delay:.34s}

/* =========================
MOBILE VERSION
========================= */

.kh-home-story-mobile{
  display:none;
}

.kh-home-story-mobile,
.kh-home-story-mobile *{
  box-sizing:border-box;
}

.kh-home-story-mobile{
  width:100%;
  padding:60px 30px 30px;
  position:relative;
  overflow:hidden;
}

.kh-home-story-mobile-wrap{
  width:100%;
  position:relative;
}

.kh-home-story-mobile-top{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
}

.kh-home-story-mobile-number{
  position:absolute;
  top:-18px;
  left:50%;
  transform:translateX(-50%);
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(58px,18vw,92px);
  color:rgba(92,71,43,.08);
  line-height:.8;
  letter-spacing:.02em;
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.kh-home-story-mobile-kicker{
  position:relative;
  z-index:1;
  margin:0 0 12px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:400;
}

.kh-home-story-mobile-title{
  position:relative;
  z-index:1;
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(25px,8vw,34px);
  line-height:1;
  text-transform:uppercase;
  color:#3F2C1F;
  max-width:320px;
}

.kh-home-story-mobile-script{
  display:block;
  margin-top:-2px;
  margin-left:42px;
  font-family:"GoldenHopes", cursive;
  font-size:clamp(20px,6vw,26px);
  line-height:1;
  letter-spacing:.03em;
  text-transform:capitalize;
  color:#6A4C36;
  transform:rotate(-2deg);
}

.kh-home-story-mobile-text{
  margin:14px 0 0;
  max-width:320px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.76;
  color:rgba(63,44,31,.76);
}

.kh-home-story-mobile-cta{
  margin-top:-4px;
}

.kh-home-story-mobile-visual{
  position:relative;
  margin-top:44px;
}

.kh-home-story-mobile-columns{
  position:relative;
  width:100%;
  height:480px;
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:10px;
  align-items:end;
}

.kh-home-story-mobile-col{
  position:relative;
  overflow:hidden;
  background:#EADFD3;
  will-change:transform;
}

.kh-home-story-mobile-col::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(24,18,12,.08) 0%, rgba(24,18,12,.18) 100%),
    radial-gradient(circle at 72% 18%, rgba(255,255,255,.05), transparent 28%);
  pointer-events:none;
  z-index:2;
}

.kh-home-story-mobile-col--1{
  height:68%;
  margin-bottom:8%;
}

.kh-home-story-mobile-col--2{
  height:100%;
  margin-bottom:0;
}

.kh-home-story-mobile-col--3{
  height:58%;
  margin-bottom:14%;
}

.kh-home-story-mobile-img{
  position:absolute;
  inset:0;
  background-size:cover;
  background-position:center;
  transform:scale(1.02);
}

.kh-home-story-mobile-img--1{
  background-image:url("/assets/images/IMG1.webp");
}

.kh-home-story-mobile-img--2{
  background-image:url("/assets/images/IMG2.webp");
}

.kh-home-story-mobile-img--3{
  background-image:url("/assets/images/IMG3.webp");
}

.kh-home-story-mobile-float{
  position:absolute;
  width:108px;
  height:138px;
  left:-10px;
  bottom:82px;
  border-radius:80px 80px 0 0;
  overflow:hidden;
  background:transparent;
  z-index:4;
}

.kh-home-story-mobile-float::before{
  content:"";
  position:absolute;
  inset:0;
  background-color:rgba(247,243,238,.92);
  -webkit-mask:url("/assets/images/ornaments/heritage-brass-seal.svg") no-repeat center calc(50% + 8px) / 42% auto;
  mask:url("/assets/images/ornaments/heritage-brass-seal.svg") no-repeat center calc(50% + 8px) / 42% auto;
  pointer-events:none;
  z-index:2;
}

.kh-home-story-mobile-card{
  position:absolute;
  width:calc(100% - 80px);
  right:0;
  bottom:10px;
  background:rgba(250,247,242,.86);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  padding:18px;
  border:1px solid rgba(63,44,31,.08);
  box-shadow:0 22px 44px rgba(0,0,0,.08);
  z-index:5;
}

.kh-home-story-mobile-card-label{
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
  margin-bottom:10px;
}

.kh-home-story-mobile-card p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.72;
  color:rgba(63,44,31,.74);
  font-weight:300;
}

.kh-home-story-mobile-bottom{
  margin-top:36px;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
}

.kh-home-story-mobile-divider{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 12px;
}

.kh-home-story-mobile-note{
  margin:0;
  max-width:320px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.70;
  color:rgba(63,44,31,.60);
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:1100px){

  .kh-home-story-sec{
    height:auto;
    min-height:auto;
    padding:60px 28px;
  }

  .kh-home-story-grid{
    grid-template-columns:1fr;
    gap:46px;
    height:auto;
  }

  .kh-home-story-copy{
    height:auto;
    min-height:auto;
    padding:0;
    justify-content:flex-start;
  }

  .kh-home-story-copy-main{
    transform:none;
  }

  .kh-home-story-copy-bottom{
    padding-top:18px;
    margin-bottom:0;
  }

  .kh-home-story-number{
    top:-22px;
    left:0;
  }

  .kh-home-story-visual{
    height:auto;
    min-height:auto;
  }

  .kh-home-story-columns{
    width:100%;
    height:620px;
    max-height:none;
  }

  .kh-home-story-script{
    margin-left:74px;
  }
}

@media(max-width:767px){

  .kh-home-story-sec{
    display:none;
  }

  .kh-home-story-mobile{
    display:block;
  }
}

</style>
<style>
@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

@font-face{
  font-family:"GoldenHopes";
  src:url("/assets/images/GoldenHopes.woff2") format("woff2");
  font-weight:400;
  font-style:normal;
  font-display:swap;
}

@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

:root{
  --kh-start-bg:#ffffff;
  --kh-end-bg:#1e120c;
  --kh-brown-rgb:92, 71, 43;
  --kh-pre-white-shift:#3D291C;
}

.kh-cta-reveal,
.kh-cta-reveal *{
  box-sizing:border-box;
}

.kh-cta-reveal{
  position:relative;
  height:240vh;
}

.kh-cta-sticky{
  position:sticky;
  top:0;
  height:100vh;
  overflow:hidden;
  background:var(--kh-start-bg);
  display:flex;
  align-items:center;
  justify-content:center;
  will-change:background-color;
}

.kh-cta-pillar{
  position:absolute;
  top:50%;
  width:90px;
  height:70vh;
  transform:translateY(-50%);
  pointer-events:none;
  z-index:1;
  background-color:rgba(61,41,28,.08);
  -webkit-mask:url("/assets/images/Pillar.svg") center center / contain no-repeat;
  mask:url("/assets/images/Pillar.svg") center center / contain no-repeat;
  opacity:.16;
  will-change:transform, opacity, background-color;
}

.kh-cta-pillar--left{
  left:40px;
}

.kh-cta-pillar--right{
  right:40px;
}

.kh-cta-inner{
  width:min(980px, 88vw);
  margin:0 auto;
  padding:72px 0 48px;
  position:relative;
  z-index:2;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  text-align:center;
  min-height:100vh;
  transform:translate3d(0,0,0) scale(0.94);
  transform-origin:center center;
  will-change:transform;
}

.kh-cta-kicker{
  margin:0 0 16px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  letter-spacing:.34em;
  text-transform:uppercase;
  font-weight:500;
  color:var(--kh-pre-white-shift);
  will-change:color;
}

.kh-cta-title{
  margin:0;
  font-family:"IvyOraDisplay",serif;
  font-size:clamp(28px, 3vw, 46px);
  font-weight:300;
  line-height:.98;
  letter-spacing:.018em;
  text-transform:uppercase;
  color:var(--kh-pre-white-shift);
  will-change:color;
}

.kh-cta-hi{
  font-style:italic;
  font-weight:700;
  letter-spacing:.03em;
}

.kh-cta-body{
  margin:18px 0 0;
  max-width:72ch;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:14px;
  font-weight:300;
  line-height:1.85;
  letter-spacing:.01em;
  color:var(--kh-pre-white-shift);
  will-change:color;
}

.kh-cta-meta{
  margin:18px auto 0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  color:var(--kh-pre-white-shift);
  will-change:color;
}

.kh-cta-actions{
  margin-top:34px;
  display:flex;
  justify-content:center;
  gap:14px;
  flex-wrap:wrap;
  opacity:0;
  transform:translate3d(0,26px,0);
  transition:
    opacity .55s cubic-bezier(.22,1,.36,1),
    transform .55s cubic-bezier(.22,1,.36,1);
  will-change:opacity, transform;
}

.kh-cta-actions.is-visible{
  opacity:1;
  transform:translate3d(0,0,0);
}

.kh-cta-btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  min-width:240px;
  padding:16px 24px;
  border:1px solid rgba(61,41,28,.5);
  border-radius:0 !important;
  background:rgba(250,247,242,.68);
  color:rgba(61,41,28,.5);
  text-decoration:none !important;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  font-weight:500;
  letter-spacing:.24em;
  text-transform:uppercase;
  box-shadow:none !important;
  transition:
    transform .35s ease,
    border-color .35s ease,
    background-color .35s ease,
    color .35s ease,
    opacity .35s ease;
  will-change:color, border-color, background-color, transform;
}

.kh-cta-btn:hover{
  transform:translateY(-2px);
}

.kh-cta-btn::before,
.kh-cta-btn::after{
  content:none !important;
  display:none !important;
}

.kh-cta-ornament{
  width:160px;
  height:25px;
  margin:50px auto 0;
  background-color:rgba(61,41,28,.5);
  -webkit-mask:url("/assets/images/Khufus-Hieroglyphics.svg") center center / contain no-repeat;
  mask:url("/assets/images/Khufus-Hieroglyphics.svg") center center / contain no-repeat;
  opacity:0;
  transform:translate3d(0,12px,0);
  transition:
    opacity .55s cubic-bezier(.22,1,.36,1),
    transform .55s cubic-bezier(.22,1,.36,1),
    background-color .35s ease;
  will-change:opacity, transform, background-color;
}

.kh-cta-actions.is-visible + .kh-cta-ornament{
  opacity:1;
  transform:translate3d(0,0,0);
}

@media (max-width:900px){
  .kh-cta-reveal{
    height:220vh;
  }

  .kh-cta-inner{
    padding:64px 0 40px;
  }

  .kh-cta-title{
    font-size:clamp(26px, 6.5vw, 38px);
    line-height:1;
  }

  .kh-cta-body{
    font-size:13px;
    max-width:66ch;
  }

  .kh-cta-pillar{
    width:60px;
    height:60vh;
    opacity:.10;
  }

  .kh-cta-pillar--left{
    left:16px;
  }

  .kh-cta-pillar--right{
    right:16px;
  }

  .kh-cta-ornament{
    width:76px;
    height:18px;
    margin-top:16px;
  }
}

@media (max-width:767px){
  .kh-cta-inner{
    width:calc(100% - 60px);
    max-width:calc(100% - 60px);
    padding:30px 0;
    min-height:100vh;
  }

  .kh-cta-kicker{
    margin:0 0 16px;
    font-size:11px;
    letter-spacing:.34em;
  }

  .kh-cta-title{
    margin:0;
    font-family:"IvyOraDisplay",serif;
    font-size:clamp(26px, 6.5vw, 38px);
    font-weight:300;
    line-height:1;
    letter-spacing:.018em;
    text-transform:uppercase;
    color:var(--kh-pre-white-shift);
    max-width:320px;
  }

  .kh-cta-title br,
  .kh-cta-title .kh-cta-hi{
    display:none;
  }

  .kh-cta-body{
    margin:18px 0 0;
    max-width:320px;
    font-size:13px;
    line-height:1.76;
  }

  .kh-cta-meta{
    margin:18px auto 0;
    max-width:none;
    font-size:10px;
    letter-spacing:.24em;
  }

  .kh-cta-actions{
    width:100%;
    gap:10px;
    margin-top:34px;
  }

  .kh-cta-btn{
    width:100%;
    min-width:100%;
    font-size:11px;
  }

  .kh-cta-pillar{
    display:block;
    width:72px;
    height:52vh;
    top:50%;
    left:50%;
    right:auto;
    opacity:.09;
    z-index:1;
    transform:translate(-50%,-50%);
  }

  .kh-cta-pillar--left{
    left:50%;
  }

  .kh-cta-pillar--right{
    display:none;
  }

  .kh-cta-ornament{
    width:64px;
    height:16px;
    margin-top:40px;
  }
}

@media (prefers-reduced-motion:reduce){
  .kh-cta-reveal{
    height:120vh;
  }

  .kh-cta-actions,
  .kh-cta-btn,
  .kh-cta-ornament{
    transition:none !important;
  }
}
</style>
<style>
@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

.khx-hero-title{
  font-family:"IvyOraDisplay", serif !important;
  font-weight:300 !important;
  font-style:normal !important;
  font-synthesis:weight style;
  color:#fff !important;
  text-align:center !important;
  line-height:1.03 !important;
  margin:0 !important;
  letter-spacing:0.01em;
  -webkit-font-smoothing: antialiased;
  text-rendering: geometricPrecision;
}

.khx-hero-title em{
  font-style:italic !important;
  font-weight:600 !important;
}

.khx-hero-title .khx-line{
  display:block;
  overflow:hidden;
}

.khx-hero-title .khx-line-inner{
  display:inline-block;
  opacity:0;
  transform: translate3d(0,115%,0) rotateZ(0.9deg);
  transform-origin:left bottom;
  backface-visibility:hidden;
}

.khx-hero-title.is-animating .khx-line-inner{
  will-change: transform, opacity;
}

.khx-hero-title.is-in .khx-line-inner{
  animation: khxLineIn 820ms cubic-bezier(.18,1,.25,1) forwards;
}

/* stagger */
.khx-hero-title.is-in .khx-line:nth-child(1) .khx-line-inner{ animation-delay:.07s; }
.khx-hero-title.is-in .khx-line:nth-child(2) .khx-line-inner{ animation-delay:.20s; }

@keyframes khxLineIn{
  0%{
    opacity:0;
    transform: translate3d(0,115%,0) rotateZ(0.9deg);
  }
  55%{
    opacity:.98;
    transform: translate3d(0,0,0) rotateZ(0deg);
  }
  100%{
    opacity:1;
    transform: translate3d(0,0,0) rotateZ(0deg);
  }
}

@media (prefers-reduced-motion: reduce){
  .khx-hero-title .khx-line-inner{
    opacity:1 !important;
    transform:none !important;
    animation:none !important;
  }
}

/* =========================
   Variant Logic
   ========================= */

.khx-mobile{ display:none; }

@media (max-width:768px){

  .khx-desktop{ display:none; }
  .khx-mobile{ display:block; }

  .khx-hero-title{
    font-size: clamp(34px, 9vw, 48px) !important;
    line-height:1.06 !important;
    letter-spacing:0.02em;
  }
}

@media (max-width:420px){
  .khx-hero-title{
    font-size: clamp(30px, 10vw, 40px) !important;
  }
}
</style>
<style>
/* ===== Standalone Bricolage Button ===== */
.mnq-landing-reserve-btn {
    position: relative;
    display: inline-block;

    font-family: "Bricolage Grotesque", sans-serif;
    font-size: 14px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.08em;

    color: #ffffff;
    text-decoration: none !important;

    cursor: pointer;
    transition:
      opacity 0.3s ease-in-out,
      transform 0.35s ease-in-out;

    will-change: opacity, transform;
}

/* Underline */
.mnq-landing-reserve-btn::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 100%;
    height: 1px;
    background-color: rgba(255,255,255,0.8);
    transition: width 0.3s ease-in-out, opacity 0.3s ease-in-out;
}

/* Hover */
.mnq-landing-reserve-btn:hover::after,
.mnq-landing-reserve-btn:focus::after {
    width: 0;
    opacity: 0;
}

.mnq-landing-reserve-btn:hover,
.mnq-landing-reserve-btn:focus {
    opacity: 0.3;
    color: #ffffff;
}

.mnq-landing-reserve-btn:focus {
    outline: none;
}

/* Scroll state */
.mnq-landing-reserve-btn.is-hidden-on-scroll {
    opacity: 0;
    transform: translateY(-18px);
    pointer-events: none;
}

@media (prefers-reduced-motion: reduce) {
    .mnq-landing-reserve-btn {
        transition: opacity 0.3s ease-in-out;
    }

    .mnq-landing-reserve-btn.is-hidden-on-scroll {
        transform: none;
    }
}
</style>
<style>
/* ===== Standalone Bricolage Button ===== */
.khf-bricolage-btn {
    position: relative;
    display: inline-block;

    font-family: "Bricolage Grotesque", sans-serif;
    font-size: 14px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.08em;

    color: #ffffff;
    text-decoration: none !important;

    cursor: pointer;
    transition: opacity 0.3s ease-in-out;
}

/* Underline */
.khf-bricolage-btn::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 100%;
    height: 1px;
    background-color: rgba(255,255,255,0.8);
    transition: width 0.3s ease-in-out, opacity 0.3s ease-in-out;
}

/* Hover */
.khf-bricolage-btn:hover::after,
.khf-bricolage-btn:focus::after {
    width: 0;
    opacity: 0;
}

.khf-bricolage-btn:hover,
.khf-bricolage-btn:focus {
    opacity: 0.3;
    color: #ffffff;
}

.khf-bricolage-btn:focus {
    outline: none;
}
</style>
<style>
/* =========================
P88G KHUFUS FOOTER ACCORDION
========================= */

.p88g-footer-dropdown-menu,
.p88g-footer-dropdown-menu *{
  box-sizing:border-box;
}

.p88g-footer-dropdown-menu{
  width:100%;
}

.p88g-footer-menu{
  list-style:none;
  margin:0;
  padding:0;
}

.p88g-footer-menu-item{
  margin:0;
  padding:0;
  border-bottom:1px solid rgba(255,255,255,0.28);
}

/* kill default anchor states */
.p88g-footer-menu-link-mobile,
.p88g-footer-menu-link-mobile:link,
.p88g-footer-menu-link-mobile:visited,
.p88g-footer-menu-link-mobile:hover,
.p88g-footer-menu-link-mobile:focus,
.p88g-footer-menu-link-mobile:active{
  color:#ffffff !important;
  text-decoration:none !important;
}

.p88g-footer-menu-link-mobile{
  display:flex;
  justify-content:space-between;
  align-items:center;
  gap:16px;
  width:100%;
  padding:18px 0 16px;
  cursor:pointer;
  font-family:"IvyOra Display","IvyOraDisplay",serif;
  font-size:18px;
  line-height:1.1;
  font-weight:400;
  text-transform:uppercase;
  letter-spacing:0.06em;
  transition:opacity 0.3s ease;
}

.p88g-footer-menu-link-mobile:hover,
.p88g-footer-menu-link-mobile:focus{
  opacity:0.82;
}

.p88g-footer-menu-link-mobile span{
  display:block;
}

.p88g-footer-menu-icon{
  flex:0 0 auto;
  width:10px;
  height:10px;
  margin-left:10px;
  transition:transform 0.3s ease;
}

.p88g-footer-menu-link-mobile.active .p88g-footer-menu-icon{
  transform:rotate(90deg);
}

.p88g-footer-submenu-content{
  max-height:0;
  overflow:hidden;
  opacity:0;
  padding:0;
  transition:max-height 0.35s ease, opacity 0.35s ease, padding 0.35s ease;
}

.p88g-footer-submenu-content.show{
  opacity:1;
  padding:0 0 44px 0;
}

.p88g-footer-submenu-copy{
  padding-top:0;
}

.p88g-footer-subtitle{
  margin:-2px 0 10px 0;
  font-family:"IvyOra Display","IvyOraDisplay",serif;
  font-size:14px;
  line-height:1.2;
  font-weight:400;
  color:#ffffff !important;
  letter-spacing:0;
}

.p88g-footer-subtitle strong{
  font-weight:700;
}

.p88g-footer-subtitle em{
  font-style:italic;
}

.p88g-footer-submenu-paragraph{
  margin:0 0 12px 0 !important;
  max-width:680px;
  font-family:"Bricolage Grotesque","BricolageGrotesque",sans-serif;
  font-size:12px;
  line-height:1.6;
  font-weight:300;
  color:rgba(255,255,255,0.82) !important;
}

.p88g-footer-submenu-copy .khf-bricolage-btn{
  margin-bottom:26px !important;
}

.p88g-footer-submenu-content > *:last-child{
  margin-bottom:0 !important;
}
</style>
<style>
@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300&display=swap");

/* ================== Scoped: pnav-*-9cf2 ================== */
.pnav-dropdown-9cf2{
  font-family:"Bricolage Grotesque", sans-serif;
  width:100%;
}

.pnav-list-9cf2{
  list-style:none;
  padding:0;
  margin:0;
}

.pnav-item-9cf2{
  position:relative;
  margin:0;
  --pnav-delay:0ms;
}

.pnav-item-9cf2:nth-child(1){ --pnav-delay:40ms; }
.pnav-item-9cf2:nth-child(2){ --pnav-delay:80ms; }
.pnav-item-9cf2:nth-child(3){ --pnav-delay:120ms; }
.pnav-item-9cf2:nth-child(4){ --pnav-delay:160ms; }
.pnav-item-9cf2:nth-child(5){ --pnav-delay:200ms; }
.pnav-item-9cf2:nth-child(6){ --pnav-delay:240ms; }
.pnav-item-9cf2:nth-child(7){ --pnav-delay:280ms; }
.pnav-item-9cf2:nth-child(8){ --pnav-delay:320ms; }
.pnav-item-9cf2:nth-child(9){ --pnav-delay:360ms; }

.pnav-item-9cf2::after{
  content:"";
  position:absolute;
  left:0;
  right:0;
  bottom:0;
  height:1px;
  background:rgba(255,255,255,0.26);
  opacity:0;
  transform:scaleX(0);
  transform-origin:left center;
  transition:transform .35s ease, opacity .35s ease;
}

.pnav-dropdown-9cf2.pnav-root-reveal-9cf2 .pnav-item-9cf2::after{
  opacity:1;
  transform:scaleX(1);
  transition-delay:var(--pnav-delay);
}

.pnav-dropdown-9cf2 a,
.pnav-dropdown-9cf2 button{
  outline:none !important;
  box-shadow:none !important;
  -webkit-tap-highlight-color:transparent;
  background:none;
  border:none;
  appearance:none;
  width:100%;
  cursor:pointer;
  color:#fff;
  text-decoration:none;
}

.pnav-link-9cf2{
  display:flex;
  justify-content:space-between;
  align-items:center;
  gap:20px;
  padding:18px 0 16px 0;
  font-family:"Bricolage Grotesque", sans-serif !important;
  font-size:16px;
  font-weight:300 !important;
  line-height:1.15;
  letter-spacing:.04em;
  text-transform:uppercase;
  text-align:left;
  color:rgba(255,255,255,.96);

  opacity:0;
  transform:translateY(10px);
  transition:
    color .3s ease,
    transform .35s ease,
    opacity .35s ease;
}

.pnav-dropdown-9cf2.pnav-root-reveal-9cf2 .pnav-link-9cf2{
  opacity:1;
  transform:translateY(0);
  transition-delay:var(--pnav-delay);
}

.pnav-icon-9cf2{
  flex:0 0 auto;
  width:10px;
  height:10px;
  opacity:.95;
  transition:transform .3s ease, opacity .3s ease;
}

.pnav-link-9cf2:hover,
.pnav-link-9cf2:focus{
  color:rgba(255,255,255,.72) !important;
}

.pnav-link-9cf2:hover .pnav-icon-9cf2,
.pnav-link-9cf2:focus .pnav-icon-9cf2{
  transform:translateX(3px);
  opacity:1;
}

.pnav-dropdown-9cf2 a:focus,
.pnav-dropdown-9cf2 button:focus,
.pnav-dropdown-9cf2 a:active,
.pnav-dropdown-9cf2 button:active{
  outline:none !important;
  color:#fff !important;
  background:none !important;
}

@keyframes pnav-line-out-9cf2{
  to{ transform:scaleX(0); }
}

@keyframes pnav-line-in-9cf2{
  from{ transform:scaleX(0); }
  to{ transform:scaleX(1); }
}

.pnav-item-9cf2.pnav-line-anim-out-9cf2::after{
  transform-origin:right center !important;
  animation:pnav-line-out-9cf2 .45s ease both;
}

.pnav-item-9cf2.pnav-line-anim-in-9cf2::after{
  transform-origin:left center !important;
  animation:pnav-line-in-9cf2 .45s ease both;
}

@media (max-width:767px){
  .pnav-link-9cf2{
    font-size:16px;
    font-weight:300 !important;
    padding:20px 0 19px 0;
    letter-spacing:.04em;
    text-transform:uppercase;
    font-family:"Bricolage Grotesque", sans-serif !important;
  }

  .pnav-icon-9cf2{
    width:8px;
    height:8px;
  }

  .pnav-item-9cf2::after{
    background:rgba(255,255,255,0.22);
  }
}
</style>
<style>
/* Pre-hide: keep this subtle so it doesn't feel like it “jumps” from far away */
.elementor-popup-modal[aria-hidden="false"] .popup-stagger .elementor-widget-image,
.elementor-popup-modal[aria-hidden="false"] .popup-stagger .elementor-widget-heading,
.elementor-popup-modal:not([aria-hidden="true"]) .popup-stagger .elementor-widget-image,
.elementor-popup-modal:not([aria-hidden="true"]) .popup-stagger .elementor-widget-heading{
  opacity: 0;
  transform: translate3d(0, 28px, 0);
}

/* Hover underline only */
.elementor-popup-modal .popup-stagger .elementor-widget-heading a{
  position: relative;
  color: #fff !important;
  text-decoration: none !important;
  display: inline-block;
}

.elementor-popup-modal .popup-stagger .elementor-widget-heading a::after{
  content:"";
  position:absolute;
  left:0;
  bottom:1px;
  height:1.5px;
  width:100%;
  background:#fff;
  transform:scaleX(0);
  transform-origin:left center;
  transition:transform .42s cubic-bezier(.14, .85, .2, 1);
  will-change:transform;
}

.elementor-popup-modal .popup-stagger .elementor-widget-heading a:hover::after{
  transform:scaleX(1);
}
</style>


			<div id="content" class="site-content">
		<div class="ast-container">
		

	<div id="primary" class="content-area primary">

		
					<main id="main" class="site-main">
				<article
class="post-1536 page type-page status-publish ast-article-single" id="post-1536" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
	
				<header class="entry-header ast-no-thumbnail ast-no-title ast-header-without-markup">
							</header> <!-- .entry-header -->
		
<div class="entry-content clear"
	itemprop="text">

	
			<div data-elementor-type="wp-page" data-elementor-id="1536" class="elementor elementor-1536" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-78802e6 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="78802e6" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;\/assets\/ai_ganerated\/video\/video1.mp4&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
		<div class="elementor-background-video-container">
							<video class="elementor-background-video-hosted" role="presentation" autoplay muted playsinline loop preload="auto" poster="/assets/ai_ganerated/video/video1_poster.webp" src="/assets/ai_ganerated/video/video1.mp4">
								<source src="/assets/ai_ganerated/video/video1.mp4" type="video/mp4">
							</video>
					</div>		<div class="elementor-element elementor-element-665773d elementor-widget elementor-widget-spacer" data-id="665773d" data-element_type="widget" data-e-type="widget" data-widget_type="spacer.default">
							<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
						</div>
				<div class="elementor-element elementor-element-15a8ed2 elementor-widget elementor-widget-html" data-id="15a8ed2" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<style>
@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

.khf-hero-title{
  font-family:"IvyOraDisplay", serif !important;
  font-weight:300 !important;
  font-style:normal !important;
  font-synthesis:weight style;
  color:#fff !important;
  text-align:center !important;
  line-height:1.03 !important;
  margin:0 !important;
  letter-spacing:0.01em;
  -webkit-font-smoothing: antialiased;
  text-rendering: geometricPrecision;
}

.khf-hero-title em{
  font-style:italic !important;
  font-weight:600 !important;
}

.khf-hero-title .khf-line{
  display:block;
  overflow:hidden;
}

.khf-hero-title .khf-line-inner{
  display:inline-block;
  opacity:0;
  transform: translate3d(0,115%,0) rotateZ(0.9deg);
  transform-origin:left bottom;
  backface-visibility:hidden;
}

.khf-hero-title.is-animating .khf-line-inner{
  will-change: transform, opacity;
}

.khf-hero-title.is-in .khf-line-inner{
  animation: khfLineIn 820ms cubic-bezier(.18,1,.25,1) forwards;
}

/* stagger */
.khf-hero-title.is-in .khf-line:nth-child(1) .khf-line-inner{ animation-delay:.07s; }
.khf-hero-title.is-in .khf-line:nth-child(2) .khf-line-inner{ animation-delay:.20s; }

@keyframes khfLineIn{
  0%{
    opacity:0;
    transform: translate3d(0,115%,0) rotateZ(0.9deg);
  }
  55%{
    opacity:.98;
    transform: translate3d(0,0,0) rotateZ(0deg);
  }
  100%{
    opacity:1;
    transform: translate3d(0,0,0) rotateZ(0deg);
  }
}

@media (prefers-reduced-motion: reduce){
  .khf-hero-title .khf-line-inner{
    opacity:1 !important;
    transform:none !important;
    animation:none !important;
  }
}

/* =========================
   Variant Logic
   ========================= */

.khf-mobile{ display:none; }

@media (max-width:768px){

  .khf-desktop{ display:none; }
  .khf-mobile{ display:block; }

  /* Bigger mobile size */
  .khf-hero-title{
    font-size: clamp(34px, 9vw, 48px) !important;
    line-height:1.06 !important;
    letter-spacing:0.02em;
  }
}

@media (max-width:420px){
  .khf-hero-title{
    font-size: clamp(30px, 10vw, 40px) !important;
  }
}
</style>

<h1 class="khf-hero-title" id="khfHeroTitle" aria-label="The Royal Art of Dum Biryani & Crispy Dosas">

  <!-- Desktop -->
  <span class="khf-desktop" aria-hidden="true">
    <span class="khf-line">
      <span class="khf-line-inner">
        THE ROYAL ART OF
      </span>
    </span>
    <span class="khf-line">
      <span class="khf-line-inner">
        DUM BIRYANI & <em>CRISPY DOSAS</em>
      </span>
    </span>
  </span>

  <!-- Mobile -->
  <span class="khf-mobile" aria-hidden="true">
    <span class="khf-line">
      <span class="khf-line-inner">
        THE ROYAL ART
      </span>
    </span>
    <span class="khf-line">
      <span class="khf-line-inner">
        OF <em>DUM BIRYANI</em>
      </span>
    </span>
  </span>

</h1>

<script type="text/javascript">
(function(){
  var title=document.getElementById("khfHeroTitle");
  if(!title) return;

  function animateNow(){
    if(title.classList.contains("is-in")) return;
    title.classList.add("is-animating");
    requestAnimationFrame(function(){
      title.classList.add("is-in");
      setTimeout(function(){
        title.classList.remove("is-animating");
      },1200);
    });
  }

  function waitForFont(){
    if(!document.fonts||!document.fonts.load){
      setTimeout(animateNow,80);
      return;
    }
    document.fonts.load('300 1em "IvyOraDisplay"').then(function(){
      requestAnimationFrame(function(){
        setTimeout(animateNow,60);
      });
    }).catch(function(){
      setTimeout(animateNow,80);
    });
  }

  waitForFont();
})();
</script>
				</div>
				<div class="elementor-element elementor-element-44a1166 elementor-widget elementor-widget-html" data-id="44a1166" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<div class="mnq-reserve-wrapper">
  <button type="button" class="mnq-landing-reserve-btn">
    Reserve Your Table
  </button>

  <div class="mnq-reserve-dropdown">
    <a href="/menu" class="mnq-reserve-option">Breakfast & Lunch</a>
    <a href="/menu" class="mnq-reserve-option" target="_blank" rel="noopener">Dinner - Bistro</a>
  </div>
</div>

<style>
.mnq-reserve-wrapper,
.mnq-reserve-wrapper * {
  box-sizing: border-box;
}

.mnq-reserve-wrapper {
  position: relative;
  display: inline-block;
  z-index: 9999;
}

/* ===== Button ===== */
.mnq-landing-reserve-btn {
  appearance: none !important;
  -webkit-appearance: none !important;

  background: transparent !important;
  border: 0 !important;
  box-shadow: none !important;
  padding: 0 !important;

  font-family: "Bricolage Grotesque", sans-serif !important;
  font-size: 14px !important;
  font-weight: 300 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.08em !important;

  color: #ffffff !important;
  cursor: pointer !important;

  position: relative;
  transition: opacity 0.3s ease, transform 0.35s ease;
}

.mnq-landing-reserve-btn:hover,
.mnq-landing-reserve-btn:focus,
.mnq-landing-reserve-btn:active {
  background: transparent !important;
  color: #ffffff !important;
  outline: none !important;
}

/* underline */
.mnq-landing-reserve-btn::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -3px;
  width: 100%;
  height: 1px;
  background: rgba(255,255,255,0.8);
  transition: width 0.3s ease, opacity 0.3s ease;
}

.mnq-landing-reserve-btn:hover::after {
  width: 0;
  opacity: 0;
}

.mnq-landing-reserve-btn:hover {
  opacity: 0.35;
}

/* ===== GLASS DROPDOWN ===== */
.mnq-reserve-dropdown {
  position: absolute;
  top: calc(100% + 12px);
  left: 50%;

  min-width: 240px;
  padding: 18px 20px;

  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 14px;

  text-align: center;

  border-radius: 6px;

  /* MUCH lighter glass */
  background: rgba(255,255,255,0.04);

  border: 1px solid rgba(255,255,255,0.12);

  backdrop-filter: blur(8px) saturate(120%);
  -webkit-backdrop-filter: blur(8px) saturate(120%);

  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.12),
    0 12px 35px rgba(0,0,0,0.18);

  opacity: 0;
  visibility: hidden;
  transform: translate(-50%, 10px);
  pointer-events: none;

  transition:
    opacity 0.25s ease,
    transform 0.25s ease,
    visibility 0.25s ease;

  z-index: 99999;
}

/* subtle highlight */
.mnq-reserve-dropdown::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 6px;

  background: linear-gradient(
    120deg,
    rgba(255,255,255,0.12),
    rgba(255,255,255,0.01)
  );

  pointer-events: none;
}

/* active */
.mnq-reserve-wrapper.active .mnq-reserve-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translate(-50%, 0);
  pointer-events: auto;
}

/* ===== Options ===== */
.mnq-reserve-option {
  width: 100%;
  text-align: center;

  font-family: "Bricolage Grotesque", sans-serif !important;
  font-size: 13px !important;
  font-weight: 300 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.07em !important;

  color: #ffffff !important;
  text-decoration: none !important;

  opacity: 0.8;
  transition: opacity 0.25s ease, transform 0.25s ease;
}

.mnq-reserve-option:hover {
  opacity: 1;
  transform: translateY(-2px);
}

/* ===== MOBILE FIX ===== */
@media (max-width: 767px) {
  .mnq-reserve-dropdown {
    top: auto;
    bottom: calc(100% + 10px); /* move above button */
    transform: translate(-50%, -10px);
  }

  .mnq-reserve-wrapper.active .mnq-reserve-dropdown {
    transform: translate(-50%, 0);
  }
}

/* ===== Scroll behavior ===== */
.mnq-landing-reserve-btn.is-hidden-on-scroll {
  opacity: 0 !important;
  transform: translateY(-18px);
  pointer-events: none;
}
</style>

<script type="text/javascript">
(function () {
  function initMnqReserveButton() {
    document.querySelectorAll('.mnq-reserve-wrapper').forEach(function (wrapper) {
      if (wrapper.dataset.mnqInit === 'true') return;
      wrapper.dataset.mnqInit = 'true';

      var btn = wrapper.querySelector('.mnq-landing-reserve-btn');
      if (!btn) return;

      btn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        document.querySelectorAll('.mnq-reserve-wrapper.active').forEach(function (openWrapper) {
          if (openWrapper !== wrapper) {
            openWrapper.classList.remove('active');
          }
        });

        wrapper.classList.toggle('active');
      });
    });
  }

  function toggleReserveButtonOnScroll() {
    document.querySelectorAll('.mnq-landing-reserve-btn').forEach(function (btn) {
      if (window.innerWidth > 767) {
        btn.classList.remove('is-hidden-on-scroll');
        return;
      }

      if (window.scrollY > 10) {
        btn.classList.add('is-hidden-on-scroll');
      } else {
        btn.classList.remove('is-hidden-on-scroll');
      }
    });
  }

  document.addEventListener('click', function (e) {
    if (!e.target.closest('.mnq-reserve-wrapper')) {
      document.querySelectorAll('.mnq-reserve-wrapper.active').forEach(function (wrapper) {
        wrapper.classList.remove('active');
      });
    }
  });

  document.addEventListener('DOMContentLoaded', function () {
    initMnqReserveButton();
    toggleReserveButtonOnScroll();
  });

  window.addEventListener('load', function () {
    initMnqReserveButton();
    toggleReserveButtonOnScroll();
  });

  window.addEventListener('elementor/frontend/init', function () {
    setTimeout(initMnqReserveButton, 300);
    setTimeout(toggleReserveButtonOnScroll, 300);
  });

  window.addEventListener('scroll', toggleReserveButtonOnScroll, { passive: true });
  window.addEventListener('resize', toggleReserveButtonOnScroll);
})();
</script>				</div>
				</div>
		<div class="elementor-element elementor-element-a38dd6e e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="a38dd6e" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-6fd8933 e-con-full e-flex e-con e-child" data-id="6fd8933" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-3809ef2 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-heading" data-id="3809ef2" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default"><b><i>Dining</i></b> at the Edge of History</h2>				</div>
				<div class="elementor-element elementor-element-f43e364 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-heading" data-id="f43e364" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default"><b><i>Dining</i></b> at the<br> Edge of History</h2>				</div>
				<div class="elementor-element elementor-element-1880893 elementor-widget elementor-widget-text-editor" data-id="1880893" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="text-editor.default">
									<p>Rooted in centuries of royal South Indian culinary heritage, crafted for the modern table across the Bay Area.</p>								</div>
				</div>
		<div class="elementor-element elementor-element-a3f25bc e-con-full e-flex e-con e-child" data-id="a3f25bc" data-element_type="container" data-e-type="container" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
				<div class="elementor-element elementor-element-c99d141 elementor-widget elementor-widget-html" data-id="c99d141" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					
<style id="custom-why-sec-gradient">
  /* Section 2 & 3: Why Cards Container - Solid #E2C4AF */
  div.elementor-element-a38dd6e,
  .elementor-element.elementor-element-a38dd6e,
  [data-id="a38dd6e"] {
    background-color: #E2C4AF !important;
    background: #E2C4AF !important;
  }
  .khf-why-sec {
    background: transparent !important;
    background-color: transparent !important;
    box-shadow: none !important;
    border: none !important;
  }
  .khf-why-panel--1 img {
    filter: none !important;
  }

  /* Section 03: Recognition Section - starts with #E2C4AF above, transitions to white #FFFFFF from half section */
  div.elementor-element-e58559a,
  .elementor-element.elementor-element-e58559a,
  [data-id="e58559a"] {
    background: linear-gradient(180deg, #E2C4AF 0%, #E2C4AF 35%, #FFFFFF 75%, #FFFFFF 100%) !important;
    background-color: transparent !important;
  }

  /* Polaroid Slider & 3D Gallery Sections below: White canvas */
  div.elementor-element-69bf7a3,
  div.elementor-element-b408a9f,
  div.elementor-element-cf05877,
  div.elementor-element-c6d4a00,
  [data-id="69bf7a3"],
  [data-id="b408a9f"],
  [data-id="cf05877"],
  [data-id="c6d4a00"] {
    background-color: #FFFFFF !important;
    background: #FFFFFF !important;
  }

  /* Remove 80px empty brown gap above Grand Feasts & Catering */
  div.elementor-element-b408a9f,
  .elementor-element.elementor-element-b408a9f,
  [data-id="b408a9f"] {
    margin-bottom: 0 !important;
    --margin-bottom: 0px !important;
  }

  div.elementor-element-cf05877,
  .elementor-element.elementor-element-cf05877,
  [data-id="cf05877"] {
    margin-top: 0 !important;
    --margin-top: 0px !important;
  }
</style>

<section class="khf-why-sec" id="khfWhySec">
  <div class="khf-why-grid">

    <article class="khf-why-panel khf-why-panel--1" data-speed="0.25">
      <img decoding="async" src="/assets/images/google_maps/concord/curries_and_appetizers/concord_hyderabadi_apollo_fish_fry.jpg" alt="Royal Dum Biryani">

      <div class="khf-why-overlay">
        <div class="khf-why-inner">
          <div class="khf-why-icon khf-why-icon--1"></div>

          <div class="khf-why-head">
            <h3 class="khf-why-title">
              Dum Pukht
              <span class="khf-why-script">Slow-Steamed Royal Heritage</span>
            </h3>
          </div>

          <div class="khf-why-reveal">
            <p>
              Fragrant aged basmati rice layered with whole roasted spices, sealed with whole wheat dough in traditional clay handis to lock in rich aroma and authentic flavor.
            </p>
            <a href="/legacy" class="khf-why-btn">Discover More</a>
          </div>
        </div>
      </div>
    </article>

    <article class="khf-why-panel khf-why-panel--2" data-speed="0.35">
      <img decoding="async" src="/assets/images/google_maps/concord/curries_and_appetizers/concord_creamy_butter_chicken_delight.jpg" alt="Crispy Paper Roast Dosa">

      <div class="khf-why-overlay">
        <div class="khf-why-inner">
          <div class="khf-why-icon khf-why-icon--2"></div>

          <div class="khf-why-head">
            <h3 class="khf-why-title">
              Dosa Craft
              <span class="khf-why-script">The Cast-Iron Tawa Mastery</span>
            </h3>
          </div>

          <div class="khf-why-reveal">
            <p>
              Naturally fermented stone-ground rice and lentil batter swirled paper-thin on smoking cast-iron griddles and roasted with pure golden ghee, served with our fresh chutney trio.
            </p>
            <a href="/about" class="khf-why-btn">Explore The Craft</a>
          </div>
        </div>
      </div>
    </article>

    <article class="khf-why-panel khf-why-panel--3" data-speed="0.28">
      <img decoding="async" src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_tandoori_mixed_grill_platter.jpg" alt="Chettinad Spices & Sizzlers">

      <div class="khf-why-overlay">
        <div class="khf-why-inner">
          <div class="khf-why-icon khf-why-icon--3"></div>

          <div class="khf-why-head">
            <h3 class="khf-why-title">
              Chettinad Spices
              <span class="khf-why-script">Freshly Ground Spice Alchemy</span>
            </h3>
          </div>

          <div class="khf-why-reveal">
            <p>
              Hand-pounded coriander seeds, black peppercorns, star anise, and fiery Guntur red chillies roasted daily to produce authentic South Indian curries and sizzling appetizers.
            </p>
            <a href="/experience" class="khf-why-btn">Feel The Experience</a>
          </div>
        </div>
      </div>
    </article>

  </div>
</section>

<style>
.khf-why-sec{
  width:100%;
  padding:80px 0;
  overflow:hidden;
}

.khf-why-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:6px;
}

.khf-why-panel{
  position:relative;
  height:80vh;
  overflow:hidden;
  will-change:transform;
}

.khf-why-panel img{
  width:100%;
  height:100%;
  object-fit:cover;
  transition:transform 1.2s cubic-bezier(.22,.61,.36,1);
}

.khf-why-panel--1 img{ filter:none; }

.khf-why-overlay{
  position:absolute;
  inset:0;
  display:flex;
  align-items:flex-end;
  background:linear-gradient(
    to top,
    rgba(61,41,28,0.65),
    rgba(61,41,28,0.25),
    transparent
  );
}

.khf-why-inner{
  position:absolute;
  left:30px;
  right:30px;
  bottom:30px;
}

.khf-why-head{
  transform:translateY(22px);
  transition:transform .4s ease;
  cursor:pointer;
}

.khf-why-panel:hover .khf-why-head{
  transform:translateY(0);
}

/* ICON */
.khf-why-icon{
  position:absolute;
  top:0;
  right:0;
  width:160px;
  height:160px;
  background-repeat:no-repeat;
  background-position:right top;
  background-size:contain;
  opacity:0;
  transform:translateY(-6px) scale(.94);
  transition:opacity .4s ease, transform .4s ease;
}

.khf-why-icon--1{
  background-image:url("/assets/images/Tree-Var-Icon.svg");
}

.khf-why-icon--2{
  background-image:url("/assets/images/Plants-Icon.svg");
}

.khf-why-icon--3{
  background-image:url("/assets/images/Pottery-Icon.svg");
}

.khf-why-panel:hover .khf-why-icon{
  opacity:.32;
  transform:translateY(0) scale(1);
}

.khf-why-title{
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-size:28px;
  font-weight:300;
  line-height:1.04;
  text-transform:uppercase;
  color:#fff;
}

.khf-why-script{
  display:block;
  margin-top:2px;
  font-family:"GoldenHopes", cursive;
  font-size:22px;
  line-height:1;
  text-transform:none !important;
  color:#EADFD4;
}

.khf-why-reveal{
  margin-top:12px;
  max-height:0;
  opacity:0;
  transform:translateY(8px);
  overflow:hidden;
  transition:.4s;
}

.khf-why-reveal p{
  margin:0 0 14px 0;
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:14px;
  line-height:1.8;
  color:rgba(255,255,255,.88);
  max-width:340px;
}

.khf-why-panel:hover .khf-why-reveal{
  max-height:240px;
  opacity:1;
  transform:translateY(0);
}

.khf-why-btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  min-width:180px;
  padding:14px 22px;
  border:1px solid rgba(255,255,255,.45);
  background:rgba(255,255,255,.08);
  backdrop-filter:blur(6px);
  -webkit-backdrop-filter:blur(6px);
  color:rgba(255,255,255,.85);
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:11px;
  letter-spacing:.24em;
  text-transform:uppercase;
  text-decoration:none !important;
  box-shadow:none !important;
  transition:.35s;
}

.khf-why-btn:hover{
  transform:translateY(-2px);
  background:rgba(255,255,255,.14);
  border-color:rgba(255,255,255,.65);
  color:#fff;
}

.khf-why-panel:hover img{
  transform:scale(1.05);
}

@media(max-width:1024px){
  .khf-why-grid{
    grid-template-columns:1fr;
  }

  .khf-why-panel{
    height:60vh;
    transform:none !important;
  }
}

@media(max-width:767px){
  .khf-why-sec{
    padding:30px;
  }

  .khf-why-grid{
    grid-template-columns:1fr;
    gap:30px;
  }

  .khf-why-panel{
    height:auto;
    min-height:460px;
    transform:none !important;
  }

  .khf-why-inner{
    left:20px;
    right:20px;
    bottom:20px;
  }

  .khf-why-icon{
    width:96px;
    height:96px;
    top:0;
    right:0;
    background-position:right top;
    background-size:contain;
    opacity:0;
    transform:translateY(-6px) scale(.94);
  }

  .khf-why-head{
    transform:none;
  }

  .khf-why-title{
    font-size:24px;
    line-height:1.02;
  }

  .khf-why-script{
    margin-top:4px;
    font-size:20px;
  }

  .khf-why-reveal{
    margin-top:0;
    max-height:0;
    opacity:1;
    transform:none;
    overflow:hidden;
    transition:
      max-height .45s ease,
      margin-top .35s ease;
  }

  .khf-why-reveal > *{
    opacity:0;
    transform:translateY(8px);
    transition:
      opacity .35s ease,
      transform .35s ease;
  }

  .khf-why-reveal p{
    margin:0 0 14px 0;
    font-size:13px;
    line-height:1.76;
    max-width:none;
  }

  .khf-why-btn{
    width:100%;
    min-width:100%;
    padding:16px 18px;
    font-size:11px;
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(6px);
    -webkit-backdrop-filter:blur(6px);
  }

  .khf-why-btn::before{
    content:none;
  }

  .khf-why-btn:hover{
    transform:translateY(-2px);
    background:rgba(255,255,255,.14);
    border-color:rgba(255,255,255,.65);
    color:#fff;
  }

  .khf-why-panel:hover img{
    transform:none;
  }

  .khf-why-panel:hover .khf-why-icon{
    opacity:0;
    transform:translateY(-6px) scale(.94);
  }

  .khf-why-panel:hover .khf-why-reveal{
    max-height:0;
    opacity:1;
    transform:none;
    margin-top:0;
  }

  .khf-why-panel:hover .khf-why-reveal > *{
    opacity:0;
    transform:translateY(8px);
  }

  .khf-why-panel.is-open .khf-why-icon{
    opacity:.24;
    transform:none;
  }

  .khf-why-panel.is-open .khf-why-reveal{
    margin-top:12px;
    max-height:260px;
  }

  .khf-why-panel.is-open .khf-why-reveal > *{
    opacity:1;
    transform:translateY(0);
  }

  .khf-why-panel.is-open img{
    transform:scale(1.03);
  }
}
</style>

<script type="text/javascript">
(function(){
  const section = document.getElementById('khfWhySec');
  if(!section) return;

  const panels = Array.from(section.querySelectorAll('.khf-why-panel'));
  let ticking = false;

  function clamp(min,val,max){
    return Math.max(min,Math.min(val,max));
  }

  function ease(t){
    return t*t*(3-2*t);
  }

  function update(){
    if(window.innerWidth <= 1024){
      panels.forEach(panel => {
        panel.style.transform = 'none';
      });
      ticking = false;
      return;
    }

    const rect = section.getBoundingClientRect();
    const vh = window.innerHeight || 800;

    const centerOffset = (rect.top + rect.height / 2) - vh / 2;
    const normalized = clamp(-1, centerOffset / vh, 1);
    const deadZone = 0.2;

    panels.forEach((panel, i) => {
      const speed = parseFloat(panel.dataset.speed) || 0.25;
      const dir = i === 0 ? -1 : i === 2 ? 1 : 0;

      let y = 0;

      if (Math.abs(normalized) > deadZone) {
        const t = ease((Math.abs(normalized) - deadZone) / (1 - deadZone));
        const sign = normalized > 0 ? 1 : -1;
        y = dir * 220 * speed * t * sign;
      }

      panel.style.transform = `translate3d(0, ${y}px, 0)`;
    });

    ticking = false;
  }

  function onScroll(){
    if(!ticking){
      requestAnimationFrame(update);
      ticking = true;
    }
  }

  function bindMobileAccordion(){
    panels.forEach((panel) => {
      if(panel.dataset.bound === 'true') return;

      panel.dataset.bound = 'true';
      panel.addEventListener('click', (e) => {
        if(window.innerWidth > 767) return;

        if(e.target.closest('.khf-why-btn')) return;

        const isOpen = panel.classList.contains('is-open');
        panels.forEach(p => p.classList.remove('is-open'));

        if(!isOpen){
          panel.classList.add('is-open');
        }
      });
    });
  }

  function syncMobileState(){
    if(window.innerWidth > 767){
      panels.forEach(panel => panel.classList.remove('is-open'));
    }
  }

  update();
  bindMobileAccordion();
  syncMobileState();

  window.addEventListener('scroll', onScroll, { passive:true });
  window.addEventListener('resize', () => {
    update();
    syncMobileState();
    bindMobileAccordion();
  });
})();
</script>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-e58559a e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="e58559a" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}" style="background: linear-gradient(180deg, #E2C4AF 0%, #E2C4AF 35%, #FFFFFF 75%, #FFFFFF 100%) !important;">
		<div class="elementor-element elementor-element-887c4e8 e-con-full e-flex e-con e-child" data-id="887c4e8" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-0b8b6a2 elementor-widget elementor-widget-html" data-id="0b8b6a2" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="html.default">
					<div class="kh-rec-copy-only">
  <div class="kh-rec-copy-top-only">
    <div class="kh-rec-number-only">03</div>

    <div class="kh-rec-kicker-only">
      BAY AREA RECOGNITION
    </div>

    <h2 class="kh-rec-title-only">
      A TASTE THE BAY AREA<br>
      FELL IN LOVE WITH
      <span class="kh-rec-script-only">Celebrated Across 4 Locations</span>
    </h2>

    <p class="kh-rec-text-only">
      From Dublin and Livermore to Milpitas and Concord, Biryani Spot &amp; Chennai Dosa has earned acclaim as the Bay Area's premier destination for authentic Hyderabadi Dum Biryanis and crispy Chennai Dosas—crafted with traditional stone-ground masalas, fragrant basmati, and 100% halal meats.
    </p>
    
    <a href="/menu" class="kh-home-story-cta">
      Reserve Your Table
    </a>
  </div>

  <div class="kh-rec-copy-bottom-only">
    <div class="kh-rec-divider-only"></div>

    <p class="kh-rec-note-only">
      Over 4,500+ five-star guest reviews across Silicon Valley and the East Bay celebrating authentic spice, warmth, and culinary heritage.
    </p>
  </div>
</div>

<style>
@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

@font-face{
  font-family:"GoldenHopes";
  src:url("/assets/images/GoldenHopes.woff2") format("woff2");
  font-weight:400;
  font-style:normal;
  font-display:swap;
}

@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

.kh-rec-copy-only,
.kh-rec-copy-only *{
  box-sizing:border-box;
}

.kh-rec-copy-only{
  position:relative;
  width:100%;
  max-width:360px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
}

.kh-rec-copy-top-only{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
}

.kh-rec-copy-bottom-only{
  display:flex;
  flex-direction:column;
  align-items:flex-start;
  margin-top:110px;
}

.kh-rec-number-only{
  position:absolute;
  top:-34px;
  left:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:110px;
  line-height:.8;
  letter-spacing:.02em;
  color:rgba(92,71,43,.08);
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.kh-rec-kicker-only{
  position:relative;
  z-index:1;
  margin:0 0 14px;
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:10px;
  letter-spacing:.30em;
  text-transform:uppercase;
  color:#8B715C;
  font-weight:400;
}

.kh-rec-title-only{
  position:relative;
  z-index:1;
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:28px;
  line-height:.98;
  letter-spacing:0;
  text-transform:uppercase;
  color:#3F2C1F;
}

.kh-rec-script-only{
  display:block;
  margin-top:-2px;
  margin-left:118px;
  font-family:"GoldenHopes", cursive;
  font-size:21px;
  line-height:1;
  letter-spacing:.02em;
  text-transform:capitalize;
  color:#7B5E4A;
  transform:rotate(-2deg);
}

.kh-rec-text-only{
  margin:24px 0 0;
  max-width:355px;
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:13px;
  line-height:1.95;
  font-weight:300;
  color:rgba(63,44,31,.74);
}

.kh-rec-divider-only{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 14px;
}

.kh-rec-note-only{
  margin:0;
  max-width:355px;
  font-family:"Bricolage Grotesque", sans-serif;
  font-size:11px;
  line-height:1.8;
  font-weight:300;
  color:rgba(63,44,31,.56);
}

@media(max-width:767px){
  .kh-rec-copy-only{
    width:100% !important;
    max-width:none !important;
    min-height:100vh;
    padding:30px;
    justify-content:space-between;
    align-items:center;
    position:relative;
    text-align:center;
  }

  .kh-rec-copy-top-only{
    width:100%;
    max-width:320px;
    margin-top:auto;
    margin-bottom:auto;
    position:relative;
    z-index:1;
    align-items:center;
    text-align:center;
  }

  .kh-rec-copy-bottom-only{
    width:100%;
    max-width:320px;
    margin-top:0;
    position:relative;
    z-index:1;
    align-items:center;
    text-align:center;
  }

  .kh-rec-number-only{
    top:-28px;
    left:50%;
    transform:translateX(-50%);
    font-size:clamp(58px,18vw,92px);
    line-height:.8;
    z-index:0;
  }

  .kh-rec-kicker-only{
    margin:0 0 10px;
    font-size:9px;
    letter-spacing:.22em;
    position:relative;
    z-index:2;
    color:#6A4C36;
  }

  .kh-rec-title-only{
    max-width:320px;
    font-size:clamp(25px,8vw,34px);
    line-height:1;
    position:relative;
    z-index:2;
    text-align:center;
  }

  .kh-rec-script-only{
    margin-top:-2px;
    margin-left:0;
    font-size:clamp(20px,6vw,26px);
    line-height:1;
    color:#6A4C36;
  }

  .kh-rec-text-only{
    margin:14px 0 0;
    max-width:320px;
    font-size:12.5px;
    line-height:1.7;
    position:relative;
    z-index:2;
    color:rgba(63,44,31,.76);
    text-align:center;
  }

  .kh-rec-divider-only{
    margin:0 0 12px;
    display:none;
  }

  .kh-rec-note-only{
    max-width:320px;
    font-size:11px;
    line-height:1.70;
    color:rgba(63,44,31,.60);
    text-align:center;
    display:none;
  }

  .kh-rec-copy-top-only .kh-home-story-cta{
    align-self:center;
  }
}
</style>				</div>
				</div>
		<div class="elementor-element elementor-element-1654c94 e-con-full e-flex e-con e-child" data-id="1654c94" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-482fc7c elementor-widget elementor-widget-html" data-id="482fc7c" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="html.default">
					<div class="exp-right" id="expRight">
  <div class="exp-media" aria-label="Experience images">
    <figure class="exp-card"><img src="" alt="" decoding="async" loading="lazy"></figure>
    <figure class="exp-card"><img src="" alt="" decoding="async" loading="lazy"></figure>
    <figure class="exp-card"><img src="" alt="" decoding="async" loading="eager"></figure>

    <div class="exp-mobile-overlay" aria-hidden="true">
      <div class="exp-mobile-overlay-inner">
        <h3 class="exp-mobile-title" id="expMobileTitle"></h3>
        <div class="exp-mobile-body-wrap" id="expMobileBodyWrap">
          <p class="exp-mobile-text" id="expMobileText"></p>
        </div>
      </div>
    </div>
  </div>

  <div class="exp-panel" aria-live="polite">
    <div class="exp-copy" id="expCopy">
      <h3 class="exp-title" id="expTitle"></h3>
      <p class="exp-text" id="expText"></p>
    </div>

    <button class="exp-counter" type="button" id="expCounter" aria-label="Next slide">
      <span id="expCounterVal">1/4</span>
      <span class="exp-counter-chevron" aria-hidden="true"></span>
    </button>
  </div>

  <div class="exp-footnote-mobile" aria-hidden="true">
    <div class="exp-footnote-line"></div>
    <p class="exp-footnote-text">
      Across the Bay Area, Biryani Spot Chennai Dosa carries authentic South Indian culinary tradition into every dining experience.
    </p>
  </div>
</div>

<style>
  :root{
    --panel-bg:#5C472B;
    --panel-pad:35px;
    --overlap:92px;
    --media-shadow: 0 18px 60px rgba(0,0,0,.14);
    --panel-shadow: 0 20px 70px rgba(0,0,0,.10);
  }

  .exp-right{
    position:relative;
    display:grid;
    grid-template-columns: 1.15fr 1fr;
    align-items:center;
    gap: 0;
  }

  .exp-media{
    position:relative;
    height: clamp(420px, 44vw, 640px);
    max-height: 680px;
    isolation:isolate;
    z-index: 3;
  }

  .exp-card{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    border-radius:0;
    overflow:hidden;
    background:#ddd;
    box-shadow: var(--media-shadow);

    --x: 0px;
    --y: 0px;
    --a: 1;
    --z: 3;

    transform: translate3d(var(--x), var(--y), 0);
    opacity: var(--a);
    z-index: var(--z);

    will-change: transform, opacity;
    backface-visibility:hidden;
    transform-style:preserve-3d;
  }

  .exp-card img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
  }

  .exp-media.is-animating .exp-card{
    transition: transform 520ms cubic-bezier(.2,.9,.2,1), opacity 520ms cubic-bezier(.2,.9,.2,1);
  }

  .exp-mobile-overlay{
    display:none;
  }

  .exp-panel{
    position:relative;
    justify-self:end;
    width: min(560px, 100%);
    background: var(--panel-bg);
    color:#fff;
    border-radius:0;
    padding: var(--panel-pad);
    box-shadow: var(--panel-shadow);
    z-index: 2;

    height: 320px;
    display:flex;
    flex-direction:column;

    padding-bottom: calc(var(--panel-pad) + 44px);
  }

  .exp-panel::before{
    content:"";
    position:absolute;
    left: calc(-1 * var(--overlap));
    top:0;
    width: var(--overlap);
    height:100%;
    background: var(--panel-bg);
    z-index:-1;
  }

  .exp-panel > *{ position:relative; z-index:1; }

  .exp-copy{
    will-change: opacity, filter, transform;
    transition: opacity 240ms ease, filter 240ms ease, transform 240ms ease;
  }
  .exp-copy.is-leaving{ opacity:0; filter: blur(10px); transform: translateY(6px); }
  .exp-copy.is-entering{ opacity:0; filter: blur(10px); transform: translateY(-6px); }

  .exp-title{
    margin:0 0 12px 0;
    font-family: "IvyOra Display", "IvyOra", serif;
    font-size: 25px;
    font-weight: 400;
    line-height: 1.12;
    letter-spacing: .8px;
    text-transform: uppercase;
    color:#fff;
  }

  .exp-text{
    margin:0;
    font-family: "Bricolage Grotesque", "Bricolage", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    font-size: 12px;
    font-weight: 300;
    line-height: 1.75;
    letter-spacing: .2px;
    color: rgba(255,255,255,.86);
    max-width: 60ch;
  }

  .exp-counter{
    position:absolute;
    left: var(--panel-pad);
    bottom: var(--panel-pad);

    padding: 0;
    border: 0;
    background: transparent !important;
    color:#fff !important;

    cursor:pointer;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:12px;

    font-family: "IvyOra Display", "IvyOra", serif;
    font-size: 25px;
    font-weight: 400;
    line-height: 1;
    letter-spacing: .8px;
    text-transform: uppercase;

    opacity: 1 !important;
    -webkit-tap-highlight-color: transparent;
    outline: none;
    box-shadow: none !important;
  }

  .exp-counter:hover,
  .exp-counter:active,
  .exp-counter:focus,
  .exp-counter:focus-visible{
    background: transparent !important;
    color:#fff !important;
    outline: none !important;
    box-shadow: none !important;
  }

  .exp-counter span{
    position:relative;
    display:inline-block;
    color:#fff !important;
  }

  .exp-counter #expCounterVal::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px;
    width:100%;
    height:1px;
    background: rgba(255,255,255,.35);
    transform: scaleX(0);
    transform-origin:left;
    transition: transform 220ms ease;
  }

  .exp-counter:hover #expCounterVal::after{
    transform: scaleX(1);
  }

  .exp-counter-chevron{
    flex:0 0 auto;
    width:10px;
    height:10px;
    margin-top:1px;
    border-right:1.5px solid rgba(255,255,255,.9);
    border-bottom:1.5px solid rgba(255,255,255,.9);
    transform:rotate(-45deg);
  }

  .exp-footnote-mobile{
    display:none;
  }

  .exp-footnote-line{
    width:84px;
    height:1px;
    background:rgba(63,44,31,.14);
    margin:0 auto 12px;
  }

  .exp-footnote-text{
    margin:0;
    max-width:320px;
    font-family:"Bricolage Grotesque","Bricolage",system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
    font-size:11px;
    line-height:1.7;
    font-weight:300;
    color:rgba(63,44,31,.60);
    text-align:center;
  }

  @media (max-width: 900px){
    .exp-right{
      grid-template-columns: 1fr;
      gap:0;
    }

    .exp-media{
      height: clamp(320px, 72vw, 420px);
      max-height:none;
      background: var(--panel-bg);
    }

    .exp-panel{
      justify-self:stretch;
      width:100%;
      margin-top:0;
      min-height:300px;
      height:auto;
    }

    .exp-panel::before{
      display:none;
    }
  }

  @media (max-width: 767px){
    .exp-right{
      width:100%;
      padding:30px;
      grid-template-columns:1fr;
      gap:0;
    }

    .exp-media{
      height: clamp(430px, 118vw, 620px);
      max-height:none;
      background:transparent;
      cursor:pointer;
    }

    .exp-card{
      box-shadow: 0 14px 40px rgba(0,0,0,.12);
      border-radius:2000px 2000px 0 0;
    }

    .exp-card::after{
      content:"";
      position:absolute;
      inset:0;
      background:linear-gradient(
        180deg,
        rgba(10,10,10,0) 0%,
        rgba(10,10,10,.18) 24%,
        rgba(10,10,10,.42) 50%,
        rgba(10,10,10,.68) 72%,
        rgba(10,10,10,.88) 100%
      );
      pointer-events:none;
      z-index:1;
    }

    .exp-mobile-overlay{
      display:flex;
      position:absolute;
      inset:0;
      z-index:5;
      align-items:flex-end;
      justify-content:center;
      padding:26px 22px 28px;
      pointer-events:none;
    }

    .exp-mobile-overlay-inner{
      width:100%;
      max-width:320px;
      text-align:center;
      color:#fff;
    }

    .exp-mobile-title{
      margin:0;
      font-family:"IvyOra Display","IvyOra",serif;
      font-size:24px;
      font-weight:400;
      line-height:1.02;
      letter-spacing:.03em;
      text-transform:uppercase;
      color:#fff;
      text-wrap:balance;
    }

    .exp-mobile-body-wrap{
      max-height:none;
      opacity:1;
      overflow:visible;
      transform:none;
      transition:none;
      margin-top:12px;
    }

    .exp-mobile-text{
      margin:0;
      font-family:"Bricolage Grotesque","Bricolage",system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
      font-size:13px;
      line-height:1.72;
      font-weight:300;
      color:rgba(255,255,255,.88);
    }

    .exp-panel{
      width:100%;
      min-height:auto;
      height:auto;
      padding:0;
      margin-top:23px;
      box-shadow:none;
      background:transparent;
      justify-self:center;
    }

    .exp-copy{
      display:none;
    }

    .exp-counter{
      position:relative;
      left:auto;
      bottom:auto;
      margin:0 auto;
      font-size:24px;
      line-height:1;
      gap:10px;
      color:#3F2C1F !important;
    }

    .exp-counter span{
      color:#3F2C1F !important;
    }

    .exp-counter:hover #expCounterVal::after{
      transform: scaleX(0);
    }

    .exp-counter #expCounterVal::after{
      background: rgba(63,44,31,.34);
    }

    .exp-counter-chevron{
      width:9px;
      height:9px;
      border-right:1.5px solid rgba(63,44,31,.9);
      border-bottom:1.5px solid rgba(63,44,31,.9);
    }

    .exp-footnote-mobile{
      display:block;
      width:100%;
      margin-top:40px;
      text-align:center;
    }
  }

  @media (prefers-reduced-motion: reduce){
    .exp-media.is-animating .exp-card,
    .exp-copy{
      transition:none !important;
    }

    .exp-counter #expCounterVal::after{
      transition:none !important;
    }
  }
</style>

<script type="text/javascript">
(function(){
  const root = document.getElementById('expRight');
  if(!root) return;

  const slideImages = {
    mena50Best: "/assets/images/google_maps/concord/curries_and_appetizers/concord_mutton_rogan_josh_slow_simmered.jpg",
    resyOneToWatch: "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chettinad_crab_masala_roast.jpg",
    laListeHiddenGem: "/assets/images/google_maps/dublin/biryani_specials/dublin_hyderabadi_chicken_dum_biryani_pot.jpg",
    laListeBestAfrica: "/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_restaurant_main_dining_hall_booths.jpg"
  };

  const slides = [
    {
      title: "4.4★ ON GOOGLE REVIEWS",
      text: "Celebrated across Dublin, Milpitas, Livermore, and Concord with over 4,500+ verified ratings praising our authentic Dum Biryanis and crispy tiffins.",
      imageKey: "mena50Best"
    },
    {
      title: "TOP BAY AREA BIRYANI DESTINATION",
      text: "Recognized as a premier Silicon Valley hotspot for authentic Hyderabadi Dum cooking, slow-cooked in traditional dough-sealed handis.",
      imageKey: "resyOneToWatch"
    },
    {
      title: "AUTHENTIC CHENNAI DOSA CRAFT",
      text: "Naturally fermented stone-ground batter swirled paper-thin on smoking cast-iron tawas and roasted with pure golden ghee.",
      imageKey: "laListeHiddenGem"
    },
    {
      title: "PREMIER CATERING PARTNER",
      text: "Trusted for corporate events, tech campus catering, and grand family celebrations across the entire San Francisco Bay Area.",
      imageKey: "laListeBestAfrica"
    }
  ];

  const media = root.querySelector('.exp-media');
  const cards = Array.from(root.querySelectorAll('.exp-card'));

  const titleEl = root.querySelector('#expTitle');
  const textEl  = root.querySelector('#expText');
  const copyEl  = root.querySelector('#expCopy');

  const mobileTitleEl = root.querySelector('#expMobileTitle');
  const mobileTextEl  = root.querySelector('#expMobileText');

  const counterBtn = root.querySelector('#expCounter');
  const counterVal = root.querySelector('#expCounterVal');

  let order = [cards[0], cards[1], cards[2]];
  let index = 0;
  let locked = false;

  function isMobile(){
    return window.innerWidth <= 767;
  }

  function getSlots(){
    if(isMobile()){
      return [
        { x:"0px", y:"0px",   a:"1",   z:"3" },
        { x:"0px", y:"-18px", a:".97", z:"2" },
        { x:"0px", y:"-36px", a:".92", z:"1" }
      ];
    }
    return [
      { x:"0px",    y:"0px",    a:"1",   z:"3" },
      { x:"-56px",  y:"-22px",  a:".98", z:"2" },
      { x:"-112px", y:"-44px",  a:".92", z:"1" }
    ];
  }

  function setImg(card, url){
    const img = card && card.querySelector('img');
    if(img && img.src !== url) img.src = url;
  }

  function applySlot(card, slot){
    card.style.setProperty('--x', slot.x);
    card.style.setProperty('--y', slot.y);
    card.style.setProperty('--a', slot.a);
    card.style.setProperty('--z', slot.z);
  }

  function applyOrder(o){
    const slots = getSlots();
    applySlot(o[0], slots[0]);
    applySlot(o[1], slots[1]);
    applySlot(o[2], slots[2]);
  }

  function updateCounter(i){
    counterVal.textContent = (i + 1) + "/" + slides.length;
    counterBtn.setAttribute("aria-label", "Next slide (" + counterVal.textContent + ")");
  }

  function blurSwap(newIndex){
    copyEl.classList.add('is-leaving');
    setTimeout(() => {
      titleEl.textContent = slides[newIndex].title;
      textEl.textContent  = slides[newIndex].text;

      copyEl.classList.remove('is-leaving');
      copyEl.classList.add('is-entering');
      requestAnimationFrame(() => requestAnimationFrame(() => copyEl.classList.remove('is-entering')));
    }, 210);
  }

  function updateMobileCopy(i){
    if(mobileTitleEl) mobileTitleEl.textContent = slides[i].title;
    if(mobileTextEl) mobileTextEl.textContent = slides[i].text;
  }

  function getSlideImage(slide){
    return slideImages[slide.imageKey];
  }

  function getVisibleImages(slideIndex){
    return cards.map((_, offset) => getSlideImage(slides[(slideIndex + offset) % slides.length]));
  }

  function setSlideImagesToOrder(slideIndex, targetOrder){
    const visibleImages = getVisibleImages(slideIndex);
    visibleImages.forEach((url, idx) => setImg(targetOrder[idx], url));
  }

  function render(i){
    titleEl.textContent = slides[i].title;
    textEl.textContent  = slides[i].text;
    updateMobileCopy(i);
    setSlideImagesToOrder(i, order);
    applyOrder(order);
    updateCounter(i);
  }

  function goNext(){
    if(locked) return;
    locked = true;

    const nextIndex = (index + 1) % slides.length;
    updateCounter(nextIndex);

    const nextOrder = [order[1], order[2], order[0]];

    blurSwap(nextIndex);
    updateMobileCopy(nextIndex);
    setSlideImagesToOrder(nextIndex, nextOrder);

    media.classList.add('is-animating');

    requestAnimationFrame(() => {
      applyOrder(nextOrder);
    });

    const done = new Set();
    const onEnd = (e) => {
      if(!e || e.propertyName !== 'transform') return;
      if(!e.target || !e.target.classList || !e.target.classList.contains('exp-card')) return;

      done.add(e.target);
      if(done.size < 3) return;

      media.removeEventListener('transitionend', onEnd);
      media.classList.remove('is-animating');

      order = nextOrder;
      index = nextIndex;
      locked = false;
    };

    media.addEventListener('transitionend', onEnd);

    setTimeout(() => {
      if(!locked) return;
      media.removeEventListener('transitionend', onEnd);
      media.classList.remove('is-animating');
      order = nextOrder;
      index = nextIndex;
      locked = false;
    }, 900);
  }

  counterBtn.addEventListener('click', goNext);
  counterBtn.addEventListener('keydown', (e) => {
    if(e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      goNext();
    }
  });

  media.addEventListener('click', () => {
    if(!isMobile()) return;
    goNext();
  });

  window.addEventListener('resize', () => {
    applyOrder(order);
    updateMobileCopy(index);
  });

  Object.values(slideImages).forEach((url) => {
    const i = new Image();
    i.src = url;
  });

  render(index);
})();
</script>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-69bf7a3 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="69bf7a3" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-5598d27 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child" data-id="5598d27" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-4b64694 elementor-widget elementor-widget-heading" data-id="4b64694" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="heading.default">
					<h2 class="elementor-heading-title elementor-size-default">THE <i><b>BIRYANI SPOT</i></b> EXPERIENCE</h2>				</div>
				<div class="elementor-element elementor-element-cf1e2a3 elementor-widget elementor-widget-text-editor" data-id="cf1e2a3" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="text-editor.default">
									<p>Across Dublin, Livermore, Milpitas, and Concord, Biryani Spot Chennai Dosa brings the authentic warmth of South Indian hospitality to life. Every steaming handi of dum biryani and golden, paper-thin dosa is crafted with time-honored techniques, freshly roasted spices, and the finest halal meats.</p>								</div>
				</div>
		<div class="elementor-element elementor-element-ff2153c e-con-full e-flex e-con e-child" data-id="ff2153c" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-a5f6430 elementor-widget elementor-widget-html" data-id="a5f6430" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="html.default">
					<section class="khx-gallery" id="khxGallery">

  <!-- MOBILE COPY -->
  <div class="khx-mobile-copy">
    <div class="khx-mobile-number">04</div>

    <div class="khx-mobile-kicker">
      Through The Lens
    </div>

    <h2 class="khx-mobile-title">
      The Culinary
      <br>Experience
      <span class="khx-mobile-script">moments held in frame</span>
    </h2>

    <p class="khx-mobile-text">
      A visual passage through Biryani Spot Chennai Dosa, where atmosphere, craft, and royal flavors come together in moments shared around the table.
    </p>
  </div>

  <div class="khx-viewport" id="khxViewport">
    <div class="khx-track" id="khxTrack"></div>
  </div>
</section>

<style>
  @font-face{
    font-family:"IvyOraDisplay";
    src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
    font-weight:300;
    font-style:normal;
    font-display:swap;
  }

  @font-face{
    font-family:"GoldenHopes";
    src:url("/assets/images/GoldenHopes.woff2") format("woff2");
    font-weight:400;
    font-style:normal;
    font-display:swap;
  }

  @import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

  .khx-gallery,
  .khx-gallery *{
    box-sizing:border-box;
  }

  .khx-gallery{
    position:relative;
    width:100%;
    padding:70px 0;
    overflow:hidden;
  }

  .khx-viewport{
    width:100%;
    overflow:hidden;
    perspective:1400px;
    cursor:pointer;
  }

  .khx-track{
    display:flex;
    gap:46px;
    align-items:center;
    width:max-content;
    will-change:transform;
    transform-style:preserve-3d;
  }

  .khx-item{
    flex:0 0 auto;
    width:clamp(420px, 36vw, 760px);
    aspect-ratio:4 / 3;
    background:transparent;
    border-radius:0;
    box-shadow:none;
    overflow:hidden;
    transform-style:preserve-3d;
    will-change:transform, opacity;
    display:block;
    text-decoration:none !important;
    cursor:pointer;
  }

  .khx-item img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    user-select:none;
    -webkit-user-drag:none;
    -webkit-touch-callout:none;
    pointer-events:none;
  }

  .khx-mobile-copy{
    display:none;
  }

  @media (max-width: 900px){
    .khx-track{ gap:22px; }
    .khx-item{ width:min(92vw, 760px); }
  }

  @media (max-width: 767px){
    .khx-gallery{
      padding:60px 0 0;
    }

    .khx-mobile-copy{
      display:flex;
      position:relative;
      flex-direction:column;
      align-items:center;
      text-align:center;
      width:100%;
      max-width:320px;
      margin:0 auto 40px;
      padding:0 0;
    }

    .khx-mobile-number{
      position:absolute;
      top:-28px;
      left:50%;
      transform:translateX(-50%);
      font-family:"IvyOraDisplay", serif;
      font-weight:300;
      font-size:clamp(58px,18vw,92px);
      line-height:.8;
      letter-spacing:.02em;
      color:rgba(92,71,43,.08);
      pointer-events:none;
      user-select:none;
      z-index:0;
    }

    .khx-mobile-kicker{
      position:relative;
      z-index:1;
      margin:0 0 10px;
      font-family:"Bricolage Grotesque",sans-serif;
      font-size:9px;
      letter-spacing:.22em;
      text-transform:uppercase;
      color:#6A4C36;
      font-weight:400;
    }

    .khx-mobile-title{
      position:relative;
      z-index:1;
      margin:0;
      max-width:320px;
      font-family:"IvyOraDisplay", serif;
      font-weight:300;
      font-size:clamp(25px,8vw,34px);
      line-height:1;
      text-transform:uppercase;
      color:#3F2C1F;
    }

    .khx-mobile-script{
      display:block;
      margin-top:-2px;
      margin-left:0;
      font-family:"GoldenHopes", cursive;
      font-size:clamp(20px,6vw,26px);
      line-height:1;
      letter-spacing:.03em;
      text-transform:capitalize;
      color:#6A4C36;
      transform:rotate(-2deg);
    }

    .khx-mobile-text{
      margin:14px 0 0;
      max-width:320px;
      font-family:"Bricolage Grotesque",sans-serif;
      font-size:12.5px;
      line-height:1.7;
      font-weight:300;
      color:rgba(63,44,31,.76);
    }

    .khx-viewport{
      padding:0;
      touch-action:pan-y;
      cursor:grab;
    }

    .khx-viewport.is-dragging{
      cursor:grabbing;
    }

    .khx-track{
      gap:18px;
    }

    .khx-item{
      width:min(88vw, 520px);
    }
  }

  @media (prefers-reduced-motion: reduce){
    .khx-track{ transition:none !important; }
    .khx-item{ transition:none !important; }
  }
</style>

<script type="text/javascript">
(function(){
  const root = document.getElementById('khxGallery');
  const track = document.getElementById('khxTrack');
  const viewport = document.getElementById('khxViewport');
  if(!root || !track || !viewport) return;

  const TARGET_URL = '/gallery';

  const IMAGES = [
    "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_dal_makhani_slow_cooked.jpg",
    "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_south_indian_curry_feast_spread.jpg",
    "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_spicy_paneer_65_crispy_starter.jpg",
    "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_paneer_bhurji_gravy.jpg",
    "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_royal_maharaja_thali_platter.jpg",
    "/assets/images/google_maps/dublin/biryani_specials/dublin_hyderabadi_chicken_dum_biryani_pot.jpg",
    "/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_medu_vada_sambar_chutney_combo.jpg",
    "/assets/images/google_maps/dublin/curries_and_appetizers/dublin_tandoori_mixed_grill_platter.jpg",
    "/assets/images/google_maps/concord/curries_and_appetizers/concord_chettinad_mutton_sukka_masala.jpg",
    "/assets/images/google_maps/livermore/curries_and_appetizers/livermore_kashmiri_mutton_curry_pot.jpg"
  ];

  function buildSet(){
    const frag = document.createDocumentFragment();

    IMAGES.forEach(src => {
      const a = document.createElement('a');
      a.className = 'khx-item';
      a.href = TARGET_URL;
      a.setAttribute('aria-label', 'Open gallery');

      const img = document.createElement('img');
      img.src = src;
      img.alt = '';
      img.decoding = 'async';
      img.loading = 'lazy';

      a.appendChild(img);
      frag.appendChild(a);
    });

    return frag;
  }

  track.innerHTML = '';
  track.appendChild(buildSet());
  track.appendChild(buildSet());
  track.appendChild(buildSet());

  IMAGES.forEach(u => {
    const i = new Image();
    i.src = u;
  });

  let setWidth = 0;
  let offset = 0;

  let lastScrollY = window.scrollY;
  let lastDir = 1;
  let baseSpeed = 0.62;
  let currentVel = baseSpeed;
  let targetVel = baseSpeed;

  const impulseFactor = 0.22;
  const velLerp = 0.08;
  const idleLerp = 0.04;

  let itemCenters = [];
  let items = [];

  let isDragging = false;
  let pointerActive = false;
  let lastPointerX = 0;
  let dragVelocity = 0;
  let dragReleaseTimer = null;
  let currentPointerId = null;

  let startX = 0;
  let startY = 0;
  let moved = false;
  let downInsideViewport = false;

  const MOBILE_TAP_THRESHOLD_X = 28;
  const MOBILE_TAP_THRESHOLD_Y = 22;
  const DESKTOP_TAP_THRESHOLD_X = 10;
  const DESKTOP_TAP_THRESHOLD_Y = 10;

  function mod(n, m){
    return ((n % m) + m) % m;
  }

  function isMobile(){
    return window.innerWidth <= 767;
  }

  function measure(){
    items = Array.from(track.children);
    if(items.length < IMAGES.length * 2) return;

    const gap = parseFloat(getComputedStyle(track).gap || "0") || 0;

    let w = 0;
    for(let i = 0; i < IMAGES.length; i++){
      w += items[i].offsetWidth;
      if(i < IMAGES.length - 1) w += gap;
    }
    setWidth = w;

    itemCenters = items.map((el) => el.offsetLeft + (el.offsetWidth / 2));
  }

  function inActiveZone(){
    const r = root.getBoundingClientRect();
    const vh = window.innerHeight || 800;
    const center = r.top + r.height / 2;
    return center > -vh * 0.35 && center < vh * 1.35;
  }

  function updateDepth(){
    const vw = window.innerWidth || 1200;
    const viewportCenter = vw / 2;

    for(let i = 0; i < items.length; i++){
      const el = items[i];

      let x = itemCenters[i] - offset;

      if(setWidth){
        const k = Math.round((x - viewportCenter) / setWidth);
        x -= k * setWidth;
      }

      const dist = (x - viewportCenter) / viewportCenter;
      const clamped = Math.max(-1, Math.min(1, dist));

      const rotY = -clamped * 14;
      const scale = 1 - Math.abs(clamped) * 0.08;
      const z = -Math.abs(clamped) * 140;
      const lift = Math.abs(clamped) * -10;

      el.style.transform = `translate3d(0, ${lift}px, ${z}px) rotateY(${rotY}deg) scale(${scale})`;
      el.style.opacity = String(1 - Math.abs(clamped) * 0.28);
    }
  }

  function setDirectionFromScroll(dy){
    if(Math.abs(dy) > 0.1){
      lastDir = dy > 0 ? 1 : -1;
    }
  }

  function onPointerDown(e){
    pointerActive = true;
    currentPointerId = e.pointerId;
    lastPointerX = e.clientX;
    dragVelocity = 0;

    startX = e.clientX;
    startY = e.clientY;
    moved = false;
    downInsideViewport = viewport.contains(e.target);

    if(isMobile()){
      isDragging = true;
      viewport.classList.add('is-dragging');
    }

    if(dragReleaseTimer) clearTimeout(dragReleaseTimer);
  }

  function onPointerMove(e){
    if(!pointerActive || e.pointerId !== currentPointerId) return;

    const totalDx = e.clientX - startX;
    const totalDy = e.clientY - startY;

    const thresholdX = isMobile() ? MOBILE_TAP_THRESHOLD_X : DESKTOP_TAP_THRESHOLD_X;
    const thresholdY = isMobile() ? MOBILE_TAP_THRESHOLD_Y : DESKTOP_TAP_THRESHOLD_Y;

    if(Math.abs(totalDx) > thresholdX || Math.abs(totalDy) > thresholdY){
      moved = true;
    }

    if(!isMobile()) return;

    const dx = e.clientX - lastPointerX;
    lastPointerX = e.clientX;

    offset -= dx;
    dragVelocity = -dx * 0.35;

    if(Math.abs(dx) > 0.2){
      lastDir = dragVelocity >= 0 ? 1 : -1;
    }
  }

  function onPointerEnd(e){
    if(currentPointerId !== null && e.pointerId !== currentPointerId) return;

    const pointEl = document.elementFromPoint(e.clientX, e.clientY);
    const upInsideViewport = !!(pointEl && viewport.contains(pointEl));

    pointerActive = false;

    if(isMobile()){
      isDragging = false;
      viewport.classList.remove('is-dragging');
      currentVel = dragVelocity;
      targetVel = baseSpeed * (lastDir || 1);

      if(dragReleaseTimer) clearTimeout(dragReleaseTimer);
      dragReleaseTimer = setTimeout(() => {
        dragVelocity = 0;
      }, 120);
    }

    currentPointerId = null;

    if(!moved && downInsideViewport && upInsideViewport){
      window.location.href = TARGET_URL;
    }

    downInsideViewport = false;
  }

  function onTrackClick(e){
    const link = e.target.closest('.khx-item');
    if(!link) return;
    e.preventDefault();
  }

  function tick(){
    requestAnimationFrame(tick);

    if(!setWidth || !itemCenters.length) measure();

    const active = inActiveZone();

    const y = window.scrollY;
    const dy = y - lastScrollY;
    lastScrollY = y;

    setDirectionFromScroll(dy);

    if(isMobile() && isDragging){
      currentVel = dragVelocity;
    }else if(active && Math.abs(dy) > 0.1){
      targetVel = (dy * impulseFactor) + (baseSpeed * lastDir);
      currentVel += (targetVel - currentVel) * velLerp;
    }else{
      targetVel = baseSpeed * lastDir;
      currentVel += (targetVel - currentVel) * idleLerp;
    }

    offset += currentVel;

    if(setWidth > 0){
      offset = mod(offset, setWidth);
    }

    track.style.transform = `translate3d(${-offset}px,0,0) rotateX(9deg)`;
    updateDepth();
  }

  const onResize = () => {
    setWidth = 0;
    itemCenters = [];
    requestAnimationFrame(() => requestAnimationFrame(measure));
  };

  viewport.addEventListener('pointerdown', onPointerDown, { passive:true });
  window.addEventListener('pointermove', onPointerMove, { passive:true });
  window.addEventListener('pointerup', onPointerEnd, { passive:true });
  window.addEventListener('pointercancel', onPointerEnd, { passive:true });
  track.addEventListener('click', onTrackClick);
  window.addEventListener('resize', onResize, { passive:true });

  requestAnimationFrame(() => {
    measure();
    tick();
  });
})();
</script>				</div>
				<div class="elementor-element elementor-element-b76d220 elementor-widget elementor-widget-html" data-id="b76d220" data-element_type="widget" data-e-type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="html.default">
					<div class="kh-icon-center">
  <div class="kh-icon-shape"></div>
</div>

<style>
.kh-icon-center{
  display:flex;
  justify-content:center;
  align-items:center;
  padding:0px 0; /* reduced from 60 → 24 */
  margin-top: -20px !important;
}

.kh-icon-shape{
  width:270px;
  height:120px;

  background-color:#3D291C;

  -webkit-mask:url("/assets/images/Flat-Rose-Icon.svg") center center / contain no-repeat;
  mask:url("/assets/images/Flat-Rose-Icon.svg") center center / contain no-repeat;

  opacity:.3;
}

@media (max-width: 767px){

  .kh-icon-center{
    padding: 70px 0 0 0;
    margin-top:-10px !important;
  }

  .kh-icon-shape{
    width:180px;
    height:80px;
    opacity:.25;
  }

}
</style>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-b408a9f e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="b408a9f" data-element_type="container" data-e-type="container" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5.5,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
				<div class="elementor-element elementor-element-5f81f2d elementor-widget elementor-widget-html" data-id="5f81f2d" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<section class="monarq-polaroid-slider-v2" id="monarqPolaroidSliderV2">

  <!-- DESKTOP / TABLET VERSION -->
  <div class="mps5-shell">

    <div class="mps5-left">
      <div class="mps5-polaroid">
        <div class="mps5-polaroid-gloss"></div>

        <div class="mps5-photo-stage">
          <div class="mps5-photo-layer is-active" id="mps5ImageCurrent"></div>
          <div class="mps5-photo-layer" id="mps5ImageNext"></div>
        </div>

        <div class="mps5-meta-row">
          <div class="mps5-photo-title" id="mps5PhotoTitle">Hyderabadi Dum Biryani</div>
          <div class="mps5-photo-mark" aria-hidden="true"></div>
        </div>
      </div>
    </div>

    <div class="mps5-center">
      <div class="mps5-inner">
        <div class="mps5-content-stage">
          <div class="mps5-content is-active" id="mps5ContentCurrent"></div>
          <div class="mps5-content" id="mps5ContentNext"></div>
        </div>
      </div>
    </div>

    <div class="mps5-right">
      <div class="mps5-remote" aria-label="Slide navigation">
        <button class="mps5-index is-active" data-index="0">01</button>
        <button class="mps5-index" data-index="1">02</button>
        <button class="mps5-index" data-index="2">03</button>
      </div>
    </div>

  </div>

  <!-- MOBILE VERSION -->
  <div class="mps5-mobile-shell">

    <div class="mps5-mobile-copy-stage">
      <div class="mps5-mobile-copy is-active" id="mps5MobileContentCurrent"></div>
      <div class="mps5-mobile-copy" id="mps5MobileContentNext"></div>
    </div>

    <div class="mps5-mobile-polaroid-wrap">
      <div class="mps5-polaroid">
        <div class="mps5-polaroid-gloss"></div>

        <div class="mps5-photo-stage">
          <div class="mps5-photo-layer is-active" id="mps5MobileImageCurrent"></div>
          <div class="mps5-photo-layer" id="mps5MobileImageNext"></div>
        </div>

        <div class="mps5-meta-row">
          <div class="mps5-photo-title" id="mps5MobilePhotoTitle">Hyderabadi Dum Biryani</div>
          <div class="mps5-photo-mark" aria-hidden="true"></div>
        </div>
      </div>
    </div>

    <div class="mps5-mobile-remote" aria-label="Slide navigation">
      <button class="mps5-mobile-index is-active" data-index="0">01</button>
      <button class="mps5-mobile-index" data-index="1">02</button>
      <button class="mps5-mobile-index" data-index="2">03</button>
    </div>

  </div>

</section>

<style>
  @font-face{
    font-family:"IvyOraDisplay";
    src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
    font-weight:300;
    font-style:normal;
    font-display:swap;
  }

  @font-face{
    font-family:"GoldenHopes";
    src:url("/assets/images/GoldenHopes.woff2") format("woff2");
    font-weight:400;
    font-style:normal;
    font-display:swap;
  }

  @import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

  .monarq-polaroid-slider-v2{
    width:100vw !important;
    max-width:100vw !important;
    margin-left:calc(50% - 50vw) !important;
    margin-right:calc(50% - 50vw) !important;
    position:relative;
    overflow:hidden;
  }

  .monarq-polaroid-slider-v2 *{
    box-sizing:border-box;
    -webkit-tap-highlight-color:transparent;
  }

  .mps5-shell{
    width:100%;
    max-width:none !important;
    min-height:80vh;
    display:grid;
    grid-template-columns:clamp(460px, calc(100vw - 880px), 720px) 560px 88px;
    align-items:center;
    justify-content:center;
    column-gap:56px;
    padding:60px;
    position:relative;
    z-index:2;
  }

  .mps5-left,
  .mps5-center,
  .mps5-right{
    min-width:0;
  }

  .mps5-left{
    display:flex;
    align-items:center;
    justify-content:center;
  }

  .mps5-center{
    display:flex;
    align-items:center;
    justify-content:center;
    min-width:0;
    transform:translateY(-12px);
  }

  .mps5-right{
    display:flex;
    align-items:center;
    justify-content:center;
    width:88px;
    transform:translateY(-12px);
  }

  .mps5-polaroid{
    width:100%;
    max-width:720px;
    background:linear-gradient(180deg, #e3e1de 0%, #d8d6d3 100%);
    border-radius:0;
    padding:16px 16px 22px 16px;
    position:relative;
    box-shadow:
      0 18px 55px rgba(0,0,0,0.05),
      0 2px 8px rgba(0,0,0,0.03),
      inset 0 1px 0 rgba(255,255,255,0.72),
      inset 0 -1px 0 rgba(110,110,110,0.10);
    overflow:hidden;
    transform-origin:center center;
  }

  .mps5-polaroid::before{
    content:"";
    position:absolute;
    inset:0;
    background:
      linear-gradient(135deg, rgba(255,255,255,0.30) 0%, rgba(255,255,255,0.05) 34%, rgba(255,255,255,0) 52%),
      radial-gradient(circle at 18% 12%, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0.06) 18%, rgba(255,255,255,0) 38%);
    mix-blend-mode:screen;
    pointer-events:none;
    z-index:4;
  }

  .mps5-polaroid-gloss{
    position:absolute;
    top:0;
    left:-18%;
    width:58%;
    height:100%;
    background:linear-gradient(100deg, rgba(255,255,255,0.00) 0%, rgba(255,255,255,0.14) 46%, rgba(255,255,255,0.04) 74%, rgba(255,255,255,0.00) 100%);
    transform:skewX(-14deg);
    opacity:0.38;
    pointer-events:none;
    z-index:5;
  }

  .mps5-photo-stage{
    position:relative;
    width:100%;
    aspect-ratio:46 / 43;
    height:auto;
    background:#15120f;
    overflow:hidden;
    border-radius:0;
    box-shadow:inset 0 0 0 1px rgba(52,40,24,0.05);
    z-index:1;
  }

  .mps5-photo-layer{
    position:absolute;
    inset:0;
    background-size:cover;
    background-position:center center;
    opacity:0;
    transform:scale(1.04);
    transition:opacity 0.65s cubic-bezier(.16,1,.3,1), transform 0.65s cubic-bezier(.16,1,.3,1);
    will-change:opacity, transform;
    z-index:1;
  }

  .mps5-photo-layer.is-active{
    opacity:1;
    transform:scale(1);
    z-index:2;
  }

  .mps5-meta-row{
    position:relative;
    z-index:6;
    margin-top:16px;
    display:flex;
    align-items:flex-end;
    justify-content:space-between;
    gap:18px;
  }

  .mps5-photo-title{
    font-family:"GoldenHopes", cursive;
    font-size:clamp(32px, 2.15vw, 38px);
    line-height:1;
    color:#342818;
    max-width:68%;
    transform:translateY(4px);
  }

  .mps5-photo-mark{
    flex:0 0 auto;
    width:42px;
    height:42px;
    align-self:flex-end;
    margin-bottom:-2px;
    background:url("/assets/images/ornaments/logo.webp") no-repeat center center / contain;
    opacity:.9;
  }

  .mps5-inner{
    width:100%;
    max-width:560px;
    min-width:0;
    display:flex;
    align-items:center;
    justify-content:center;
    min-height:500px;
    padding-right:0;
  }

  .mps5-content-stage{
    position:relative;
    width:100%;
    min-height:500px;
    overflow:hidden;
  }

  .mps5-content{
    position:absolute;
    inset:0;
    opacity:0;
    transform:translateY(18px);
    pointer-events:none;
    display:flex;
    flex-direction:column;
    min-height:500px;
    visibility:hidden;
    will-change:opacity, transform;
  }

  .mps5-content.is-active{
    visibility:visible;
    pointer-events:auto;
  }

  .mps5-content.is-current{
    z-index:2;
    opacity:1;
    transform:translateY(0);
  }

  .mps5-content.is-next{
    z-index:3;
    opacity:0;
    transform:translateY(18px);
  }

  .mps5-content.fade-out{
    opacity:0;
    transform:translateY(-10px);
    transition:opacity .24s ease, transform .24s ease;
  }

  .mps5-content.fade-in{
    opacity:1;
    transform:translateY(0);
    transition:opacity .44s ease .08s, transform .44s ease .08s;
  }

  .mps5-copy{
    position:relative;
    max-width:560px;
    min-height:500px;
    height:100%;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    padding:56px 0 8px;
  }

  .mps5-copy-main{
    display:flex;
    flex-direction:column;
    justify-content:center;
    flex:1;
    transform:translateY(18px);
  }

  .mps5-copy-top{
    position:relative;
    display:flex;
    flex-direction:column;
    align-items:flex-start;
  }

  .mps5-copy-bottom{
    display:flex;
    flex-direction:column;
    align-items:flex-start;
    justify-content:flex-end;
    padding-bottom:0;
    margin-bottom:-30px;
  }

  .mps5-number{
    position:absolute;
    top:-55px;
    left:0;
    font-family:"IvyOraDisplay", serif;
    font-weight:300;
    font-size:clamp(78px,8vw,146px);
    color:rgba(92,71,43,.08);
    line-height:.8;
    letter-spacing:.02em;
    pointer-events:none;
    user-select:none;
    z-index:0;
  }

  .mps5-kicker{
    position:relative;
    z-index:1;
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:10px;
    letter-spacing:.28em;
    text-transform:uppercase;
    color:#6A4C36;
    font-weight:400;
    margin:0 0 12px;
    line-height:1.4;
  }

  .mps5-title{
    position:relative;
    z-index:1;
    margin:0;
    font-family:"IvyOraDisplay", serif;
    font-weight:300;
    font-size:clamp(28px,2.2vw,40px);
    line-height:.98;
    text-transform:uppercase;
    color:#3F2C1F;
    max-width:460px;
  }

  .mps5-script{
    display:block;
    margin-top:-4px;
    margin-left:88px;
    font-family:"GoldenHopes", cursive;
    font-size:clamp(22px,1.7vw,30px);
    line-height:1;
    letter-spacing:.03em;
    text-transform:capitalize;
    color:#6A4C36;
    transform:rotate(-2deg);
  }

  .mps5-text{
    margin:14px 0 0;
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:13px;
    line-height:1.78;
    color:rgba(63,44,31,.76);
    max-width:470px;
    font-weight:300;
  }

  .mps5-divider{
    width:84px;
    height:1px;
    background:rgba(63,44,31,.14);
    margin:0 0 12px;
  }

  .mps5-note{
    margin:0;
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:11px;
    line-height:1.72;
    color:rgba(63,44,31,.60);
    max-width:390px;
  }

  .mps5-actions{
    margin-top:28px;
    padding-top:0;
  }

  .mps5-arrow-nav{
    display:flex;
    align-items:center;
    gap:12px;
    margin-top:0;
  }

  .mps5-arrow{
    appearance:none;
    width:44px;
    height:44px;
    border:1px solid rgba(52,40,24,0.24);
    background:transparent !important;
    box-shadow:none !important;
    color:#342818 !important;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:0;
    cursor:pointer;
    border-radius:0;
    transition:border-color .3s ease, color .3s ease, opacity .3s ease, background-color .3s ease, transform .3s ease;
  }

  .mps5-arrow svg{
    width:16px;
    height:16px;
    display:block;
  }

  .mps5-arrow:hover,
  .mps5-arrow:focus,
  .mps5-arrow:active{
    background:transparent !important;
    color:#7d6954 !important;
    border-color:#7d6954 !important;
    opacity:1;
    transform:translateY(-1px);
    outline:none;
    box-shadow:none !important;
  }

  .mps5-arrow:focus-visible{
    outline:none;
    box-shadow:none !important;
  }

  .mps5-remote{
    width:100%;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    gap:18px;
  }

  .mps5-index{
    appearance:none;
    border:none !important;
    background:transparent !important;
    box-shadow:none !important;
    padding:0;
    margin:0;
    cursor:pointer;
    font-family:"IvyOraDisplay", serif;
    font-size:18px;
    font-weight:400;
    font-style:normal;
    line-height:1;
    min-width:34px;
    text-align:center;
    color:rgba(52,40,24,0.28) !important;
    transition:opacity .3s ease, color .3s ease, transform .3s ease;
  }

  .mps5-index:hover,
  .mps5-index:focus,
  .mps5-index:active{
    background:transparent !important;
    color:#7d6954 !important;
    outline:none;
    box-shadow:none !important;
  }

  .mps5-index.is-active{
    color:#342818 !important;
    font-weight:700;
    font-style:italic;
    transform:translateX(-4px);
  }

  .mps5-index:not(.is-active):hover,
  .mps5-index:not(.is-active):focus{
    transform:translateX(-4px);
  }

  .mps5-index:focus-visible{
    outline:none;
    box-shadow:none !important;
  }

  .mps5-mobile-shell{
    display:none;
  }

  .mps5-mobile-copy-stage{
    position:relative;
    width:100%;
    max-width:320px;
    min-height:0;
    height:auto;
    margin:0 auto;
    overflow:visible;
    padding-top:18px;
    transition:height .32s ease;
  }

  .mps5-mobile-copy{
    position:absolute;
    inset:0;
    opacity:0;
    transform:translateY(18px);
    pointer-events:none;
    visibility:hidden;
    will-change:opacity, transform;
  }

  .mps5-mobile-copy.is-active{
    visibility:visible;
    pointer-events:auto;
  }

  .mps5-mobile-copy.is-current{
    z-index:2;
    opacity:1;
    transform:translateY(0);
  }

  .mps5-mobile-copy.is-next{
    z-index:3;
    opacity:0;
    transform:translateY(18px);
  }

  .mps5-mobile-copy.fade-out{
    opacity:0;
    transform:translateY(-10px);
    transition:opacity .24s ease, transform .24s ease;
  }

  .mps5-mobile-copy.fade-in{
    opacity:1;
    transform:translateY(0);
    transition:opacity .44s ease .08s, transform .44s ease .08s;
  }

  .mps5-mobile-polaroid-wrap{
    width:100%;
    display:flex;
    justify-content:center;
  }

  .mps5-mobile-remote{
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
  }

  .mps5-mobile-index{
    appearance:none;
    border:none !important;
    background:transparent !important;
    box-shadow:none !important;
    padding:0;
    margin:0;
    cursor:pointer;
    font-family:"IvyOraDisplay", serif;
    font-size:16px;
    font-weight:400;
    font-style:normal;
    line-height:1;
    color:rgba(52,40,24,0.28) !important;
    transition:opacity .3s ease, color .3s ease;
  }

  .mps5-mobile-index:hover,
  .mps5-mobile-index:focus,
  .mps5-mobile-index:active{
    background:transparent !important;
    color:#7d6954 !important;
    outline:none;
    box-shadow:none !important;
  }

  .mps5-mobile-index.is-active{
    color:#342818 !important;
    font-weight:700;
    font-style:italic;
  }

  @media (max-width: 1360px){
    .mps5-shell{
      grid-template-columns:420px minmax(360px, 1fr) 72px;
      column-gap:38px;
    }

    .mps5-polaroid{
      max-width:420px;
    }

    .mps5-photo-title{
      font-size:28px;
    }

    .mps5-right{
      width:72px;
    }

    .mps5-inner,
    .mps5-content-stage,
    .mps5-content,
    .mps5-copy{
      min-height:490px;
    }

    .mps5-script{
      margin-left:68px;
    }
  }

  @media (max-width: 1024px){
    .mps5-shell{
      grid-template-columns:1fr;
      row-gap:34px;
      min-height:auto;
      padding:60px 40px;
    }

    .mps5-left,
    .mps5-center,
    .mps5-right{
      width:100%;
      justify-content:center;
      transform:none;
    }

    .mps5-polaroid{
      width:420px;
      max-width:100%;
      margin:0 auto;
    }

    .mps5-right{
      order:3;
    }

    .mps5-center{
      order:2;
    }

    .mps5-left{
      order:1;
    }

    .mps5-inner{
      min-height:unset;
      padding-right:0;
    }

    .mps5-content-stage{
      min-height:unset;
      overflow:visible;
    }

    .mps5-content{
      min-height:unset;
    }

    .mps5-copy{
      height:auto;
      min-height:unset;
      padding:0;
      justify-content:flex-start;
    }

    .mps5-copy-main{
      transform:none;
    }

    .mps5-copy-bottom{
      padding-top:18px;
      margin-bottom:0;
    }

    .mps5-number{
      top:-22px;
      left:0;
    }

    .mps5-actions{
      margin-top:26px;
    }

    .mps5-remote{
      flex-direction:row;
      justify-content:center;
      align-items:center;
      gap:20px;
    }

    .mps5-index{
      min-width:auto;
    }

    .mps5-index.is-active,
    .mps5-index:not(.is-active):hover,
    .mps5-index:not(.is-active):focus{
      transform:none;
    }
  }

  @media (max-width: 767px){
    .monarq-polaroid-slider-v2{
      width:100% !important;
      max-width:100% !important;
      margin-left:0 !important;
      margin-right:0 !important;
    }

    .mps5-shell{
      display:none;
    }

    .mps5-mobile-shell{
      display:flex;
      flex-direction:column;
      width:100%;
      padding:44px 30px 32px;
      row-gap:18px;
      touch-action:pan-y;
    }

    .mps5-mobile-copy-stage{
      display:block;
    }

    .mps5-mobile-copy .mps5-copy{
      width:100%;
      max-width:320px;
      min-height:auto;
      padding:0;
      display:flex;
      flex-direction:column;
      justify-content:flex-start;
      align-items:center;
      text-align:center;
      margin:0 auto;
    }

    .mps5-mobile-copy .mps5-copy-main{
      width:100%;
      flex:none;
      transform:none;
      display:flex;
      flex-direction:column;
      justify-content:flex-start;
      align-items:center;
    }

    .mps5-mobile-copy .mps5-copy-top{
      width:100%;
      align-items:center;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-copy-bottom{
      width:100%;
      margin-top:18px;
      margin-bottom:0;
      padding-top:0;
      align-items:center;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-number{
      top:-18px;
      left:50%;
      transform:translateX(-50%);
      font-size:clamp(58px,18vw,92px);
      line-height:.8;
    }

    .mps5-mobile-copy .mps5-kicker{
      margin:0 0 10px;
      font-size:9px;
      letter-spacing:.22em;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-title{
      max-width:320px;
      font-size:clamp(25px,8vw,34px);
      line-height:1;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-script{
      margin-top:-2px;
      margin-left:0;
      font-size:clamp(20px,6vw,26px);
      line-height:1;
      transform:rotate(-2deg);
      text-align:center;
    }

    .mps5-mobile-copy .mps5-text{
      margin:12px 0 0;
      max-width:320px;
      font-size:12px;
      line-height:1.66;
      text-align:center;
    }

    .mps5-mobile-copy .mps5-actions{
      display:none;
    }

    .mps5-mobile-copy .mps5-copy-bottom{
      display:none;
    }

    .mps5-mobile-polaroid-wrap .mps5-polaroid{
      width:100%;
      max-width:390px;
      padding:14px 14px 18px 14px;
      margin:0 auto;
    }

    .mps5-mobile-polaroid-wrap .mps5-photo-stage{
      height:340px;
      aspect-ratio:auto;
    }

    .mps5-mobile-polaroid-wrap .mps5-photo-title{
      font-size:24px;
      max-width:62%;
      transform:translateY(3px);
    }

    .mps5-mobile-polaroid-wrap .mps5-photo-mark{
      width:30px;
      height:30px;
      margin-bottom:-2px;
      opacity:.72;
    }

    .mps5-mobile-remote{
      margin-top:0;
    }
  }
</style>

<script type="text/javascript">
(function(){
  const slider = document.getElementById('monarqPolaroidSliderV2');
  if (!slider) return;

  const slides = [
    {
      number: '05',
      kicker: 'Culinary Heritage',
      title: 'The Dum Pukht<br>Tradition',
      mobileTitle: 'The Dum Pukht<br>Tradition',
      script: 'Slow-Steamed Perfection',
      text: 'Every handi of our Hyderabadi Dum Biryani is layered with fragrant aged basmati, tender marinated halal meat, saffron-infused milk, and caramelized onions, slow-steamed under a sealed dough crust to lock in aroma and flavor.',
      mobileText: 'Layered with aged basmati, marinated halal meat, saffron, and roasted spices, slow-steamed in sealed handis.',
      note: 'A celebrated royal recipe passed down through generations, crafted daily across Dublin, Milpitas, Livermore, and Concord.',
      image: '/assets/images/google_maps/livermore/curries_and_appetizers/livermore_kashmiri_mutton_curry_pot.jpg',
      photoTitle: 'Hyderabadi Dum Biryani'
    },
    {
      number: '06',
      kicker: 'Tiffin Artistry',
      title: 'Stone-Ground<br>Dosa Craft',
      mobileTitle: 'Stone-Ground<br>Dosa Craft',
      script: 'Golden, Crisp & Pure Ghee',
      text: 'Our authentic Chennai dosa batter is stone-ground from premium lentils and rice, then naturally fermented for 18 hours. Ladled paper-thin onto scorching cast-iron tawas and roasted with pure ghee for an unbeatable crunch.',
      mobileText: 'Naturally fermented 18-hour batter, stone-ground and roasted on scorching cast-iron tawas with pure ghee.',
      note: 'Served steaming hot with freshly ground coconut chutney, spicy tomato chutney, and rich vegetable sambar.',
      image: '/assets/images/google_maps/dublin/biryani_specials/dublin_hyderabadi_chicken_dum_biryani_pot.jpg',
      photoTitle: 'Crispy Chennai Dosa'
    },
    {
      number: '07',
      kicker: 'Our Story',
      title: 'Warmth,<br>Spice & Family',
      mobileTitle: 'Warmth,<br>Spice & Family',
      script: '4 Bay Area Locations',
      text: 'Founded on a passion for honest, authentic Indian flavors, Biryani Spot Chennai Dosa has become a beloved gathering place across the Bay Area for families, friends, and food enthusiasts.',
      mobileText: 'A beloved gathering place across the Bay Area for families and food enthusiasts celebrating South Indian flavors.',
      note: 'From daily comfort lunches to grand weekend celebrations, every guest is welcomed with heartfelt Indian hospitality.',
      image: '/assets/images/google_maps/milpitas/store_interior_and_vibe/milpitas_restaurant_main_dining_hall_booths.jpg',
      photoTitle: 'Warm Dining Ambiance'
    }
  ];

  let current = 0;
  let animating = false;
  let autoRotate;

  const currentImage = document.getElementById('mps5ImageCurrent');
  const nextImage = document.getElementById('mps5ImageNext');
  const currentContent = document.getElementById('mps5ContentCurrent');
  const nextContent = document.getElementById('mps5ContentNext');
  const navButtons = slider.querySelectorAll('.mps5-index');
  const photoTitle = document.getElementById('mps5PhotoTitle');

  const mobileCurrentImage = document.getElementById('mps5MobileImageCurrent');
  const mobileNextImage = document.getElementById('mps5MobileImageNext');
  const mobileCurrentContent = document.getElementById('mps5MobileContentCurrent');
  const mobileNextContent = document.getElementById('mps5MobileContentNext');
  const mobileNavButtons = slider.querySelectorAll('.mps5-mobile-index');
  const mobilePhotoTitle = document.getElementById('mps5MobilePhotoTitle');
  const mobileShell = slider.querySelector('.mps5-mobile-shell');
  const mobileCopyStage = slider.querySelector('.mps5-mobile-copy-stage');

  let touchStartX = 0;
  let touchStartY = 0;
  let touchTracking = false;

  function markup(slide, isMobileVersion){
    const titleMarkup = isMobileVersion && slide.mobileTitle ? slide.mobileTitle : slide.title;
    const textMarkup = isMobileVersion && slide.mobileText ? slide.mobileText : slide.text;

    return `
      <div class="mps5-copy">
        <div class="mps5-copy-main">
          <div class="mps5-copy-top">
            <div class="mps5-number">${slide.number}</div>

            <div class="mps5-kicker">
              ${slide.kicker}
            </div>

            <h2 class="mps5-title">
              ${titleMarkup}
              <span class="mps5-script">${slide.script}</span>
            </h2>

            <p class="mps5-text">
              ${textMarkup}
            </p>

            <div class="mps5-actions">
              <div class="mps5-arrow-nav" aria-label="Previous and next slide controls">
                <button class="mps5-arrow mps5-prev" type="button" aria-label="Previous slide">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M14.5 5L7.5 12L14.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
                <button class="mps5-arrow mps5-next" type="button" aria-label="Next slide">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M9.5 5L16.5 12L9.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="mps5-copy-bottom">
          <div class="mps5-divider"></div>
          <p class="mps5-note">
            ${slide.note}
          </p>
        </div>
      </div>
    `;
  }

  function setPolaroidMeta(slide){
    photoTitle.textContent = slide.photoTitle;
    mobilePhotoTitle.textContent = slide.photoTitle;
  }

  function syncMobileStageHeight(){
    if(!mobileCopyStage) return;

    let tallest = 0;
    const probe = document.createElement('div');
    probe.className = 'mps5-mobile-copy is-active is-current';
    probe.style.position = 'absolute';
    probe.style.inset = '0';
    probe.style.height = 'auto';
    probe.style.opacity = '1';
    probe.style.transform = 'none';
    probe.style.pointerEvents = 'none';
    probe.style.visibility = 'hidden';
    probe.innerHTML = markup(slides[current], true);

    mobileCopyStage.appendChild(probe);
    slides.forEach((slide) => {
      probe.innerHTML = markup(slide, true);
      tallest = Math.max(tallest, probe.scrollHeight);
    });

    probe.remove();
    mobileCopyStage.style.height = tallest + 'px';
  }

  function bindInnerArrows(){
    const prevBtn = currentContent.querySelector('.mps5-prev');
    const nextBtn = currentContent.querySelector('.mps5-next');

    if(prevBtn){
      prevBtn.onclick = function(){
        prev();
        startAuto();
      };
    }

    if(nextBtn){
      nextBtn.onclick = function(){
        next();
        startAuto();
      };
    }
  }

  function setInitial(){
    const slide = slides[current];

    currentImage.style.backgroundImage = slide.image ? `url('${slide.image}')` : 'none';
    currentContent.innerHTML = markup(slide, false);
    currentContent.className = 'mps5-content is-active is-current';
    nextContent.className = 'mps5-content';
    nextContent.innerHTML = '';

    mobileCurrentImage.style.backgroundImage = slide.image ? `url('${slide.image}')` : 'none';
    mobileCurrentContent.innerHTML = markup(slide, true);
    mobileCurrentContent.className = 'mps5-mobile-copy is-active is-current';
    mobileNextContent.className = 'mps5-mobile-copy';
    mobileNextContent.innerHTML = '';

    setPolaroidMeta(slide);

    navButtons.forEach((btn, i) => btn.classList.toggle('is-active', i === current));
    mobileNavButtons.forEach((btn, i) => btn.classList.toggle('is-active', i === current));

    syncMobileStageHeight();
    bindInnerArrows();
  }

  function goTo(index, direction){
    if (animating || index === current) return;
    animating = true;

    const newSlide = slides[index];

    nextContent.innerHTML = markup(newSlide, false);
    nextContent.className = 'mps5-content is-active is-next';

    currentContent.className = 'mps5-content is-active is-current';
    void nextContent.offsetWidth;
    void currentContent.offsetWidth;

    currentContent.classList.add('fade-out');
    nextContent.classList.add('fade-in');

    mobileNextContent.innerHTML = markup(newSlide, true);
    mobileNextContent.className = 'mps5-mobile-copy is-active is-next';

    mobileCurrentContent.className = 'mps5-mobile-copy is-active is-current';
    void mobileNextContent.offsetWidth;
    void mobileCurrentContent.offsetWidth;

    mobileCurrentContent.classList.add('fade-out');
    mobileNextContent.classList.add('fade-in');

    nextImage.style.backgroundImage = newSlide.image ? `url('${newSlide.image}')` : 'none';
    nextImage.classList.add('is-active');
    currentImage.classList.remove('is-active');

    mobileNextImage.style.backgroundImage = newSlide.image ? `url('${newSlide.image}')` : 'none';
    mobileNextImage.classList.add('is-active');
    mobileCurrentImage.classList.remove('is-active');

    setPolaroidMeta(newSlide);
    navButtons.forEach((btn, i) => btn.classList.toggle('is-active', i === index));
    mobileNavButtons.forEach((btn, i) => btn.classList.toggle('is-active', i === index));

    setTimeout(() => {
      currentImage.style.backgroundImage = newSlide.image ? `url('${newSlide.image}')` : 'none';
      currentImage.classList.add('is-active');
      nextImage.classList.remove('is-active');
      nextImage.style.backgroundImage = 'none';

      mobileCurrentImage.style.backgroundImage = newSlide.image ? `url('${newSlide.image}')` : 'none';
      mobileCurrentImage.classList.add('is-active');
      mobileNextImage.classList.remove('is-active');
      mobileNextImage.style.backgroundImage = 'none';

      currentContent.innerHTML = nextContent.innerHTML;
      currentContent.className = 'mps5-content is-active is-current';
      nextContent.innerHTML = '';
      nextContent.className = 'mps5-content';

      mobileCurrentContent.innerHTML = mobileNextContent.innerHTML;
      mobileCurrentContent.className = 'mps5-mobile-copy is-active is-current';
      mobileNextContent.innerHTML = '';
      mobileNextContent.className = 'mps5-mobile-copy';

      current = index;
      animating = false;
      bindInnerArrows();
    }, 650);
  }

  function next(){
    goTo((current + 1) % slides.length, 'next');
  }

  function prev(){
    goTo((current - 1 + slides.length) % slides.length, 'prev');
  }

  function startAuto(){
    clearInterval(autoRotate);
    autoRotate = setInterval(next, 5500);
  }

  function stopAuto(){
    clearInterval(autoRotate);
  }

  navButtons.forEach((btn) => {
    btn.addEventListener('click', function(){
      const target = parseInt(this.getAttribute('data-index'), 10);
      const direction = target < current ? 'prev' : 'next';
      goTo(target, direction);
      startAuto();
    });
  });

  mobileNavButtons.forEach((btn) => {
    btn.addEventListener('click', function(){
      const target = parseInt(this.getAttribute('data-index'), 10);
      const direction = target < current ? 'prev' : 'next';
      goTo(target, direction);
      startAuto();
    });
  });

  if(mobileShell){
    mobileShell.addEventListener('touchstart', function(e){
      if(window.innerWidth > 767 || animating) return;
      const touch = e.changedTouches[0];
      touchStartX = touch.clientX;
      touchStartY = touch.clientY;
      touchTracking = true;
    }, { passive:true });

    mobileShell.addEventListener('touchmove', function(e){
      if(!touchTracking || window.innerWidth > 767 || animating) return;
      const touch = e.changedTouches[0];
      const deltaX = touch.clientX - touchStartX;
      const deltaY = touch.clientY - touchStartY;

      if(Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 8){
        e.preventDefault();
      }
    }, { passive:false });

    mobileShell.addEventListener('touchend', function(e){
      if(!touchTracking || window.innerWidth > 767 || animating) return;
      const touch = e.changedTouches[0];
      const deltaX = touch.clientX - touchStartX;
      const deltaY = touch.clientY - touchStartY;

      touchTracking = false;

      if(Math.abs(deltaX) > 40 && Math.abs(deltaX) > Math.abs(deltaY)){
        if(deltaX < 0){
          next();
        } else {
          prev();
        }
        startAuto();
      }
    }, { passive:true });

    mobileShell.addEventListener('touchcancel', function(){
      touchTracking = false;
    }, { passive:true });
  }

  slider.addEventListener('mouseenter', stopAuto);
  slider.addEventListener('mouseleave', startAuto);
  window.addEventListener('resize', syncMobileStageHeight);

  setInitial();
  startAuto();
})();
</script>
				</div>
				</div>
		<div class="elementor-element elementor-element-cf05877 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="cf05877" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-f42aa1c elementor-widget elementor-widget-html" data-id="f42aa1c" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<style>

/* ===== Khufu Story CTA ===== */
.kh-home-story-cta{
  position:relative;
  display:inline-block;
  margin-top:0px;

  font-family:"Bricolage Grotesque", sans-serif;
  font-size:13px;
  font-weight:300;
  text-transform:uppercase;
  letter-spacing:.08em;

  color:#3F2C1F;
  text-decoration:none !important;

  cursor:pointer;
  transition:opacity .3s ease-in-out;
}

/* underline */
.kh-home-story-cta::after{
  content:'';
  position:absolute;
  left:0;
  bottom:-3px;
  width:100%;
  height:1px;
  background-color:rgba(63,44,31,.6);
  transition:width .3s ease-in-out, opacity .3s ease-in-out;
}

/* hover */
.kh-home-story-cta:hover::after,
.kh-home-story-cta:focus::after{
  width:0;
  opacity:0;
}

.kh-home-story-cta:hover,
.kh-home-story-cta:focus{
  opacity:.4;
  color:#3F2C1F;
}

.kh-home-story-cta:focus{
  outline:none;
}

@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

@font-face{
  font-family:"GoldenHopes";
  src:url("/assets/images/GoldenHopes.woff2") format("woff2");
  font-weight:400;
  font-style:normal;
  font-display:swap;
}

@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

.kh-home-story-copy::before{
  content:"";
  position:absolute;
  top:0;
  left:0;
  width:100px;
  height:100px;
  background-color:#6A4C36;
  opacity:0;
  -webkit-mask:url("/assets/images/ornaments/pattern-spice-kolam.svg") no-repeat left top / contain;
  mask:url("/assets/images/ornaments/pattern-spice-kolam.svg") no-repeat left top / contain;
  pointer-events:none;
  z-index:3;
  transform:translateY(36px);
  filter:blur(2px);
  transition:
    transform 1s cubic-bezier(.22,1,.36,1),
    opacity 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
  will-change:transform, opacity, filter;
}

#khHomeStorySec.show .kh-home-story-copy::before{
  opacity:.28;
  transform:none;
  filter:blur(0);
}

.kh-home-story-sec,
.kh-home-story-sec *{
  box-sizing:border-box;
}

.kh-home-story-sec{
  width:100%;
  height:100vh;
  padding:60px;
  position:relative;
  overflow:hidden;
}

.kh-home-story-wrap{
  width:100%;
  height:100%;
  position:relative;
  z-index:2;
}

.kh-home-story-grid{
  display:grid;
  grid-template-columns:minmax(320px,500px) minmax(0,1fr);
  gap:80px;
  height:100%;
  align-items:stretch;
}

/* =========================
LEFT COLUMN
========================= */

.kh-home-story-copy{
  position:relative;
  max-width:560px;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  padding:56px 0 8px;
}

.kh-home-story-copy-main{
  display:flex;
  flex-direction:column;
  justify-content:center;
  flex:1;
  transform:translateY(18px);
}

.kh-home-story-copy-top{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
}

.kh-home-story-copy-bottom{
  display:flex;
  flex-direction:column;
  align-items:flex-start;
  justify-content:flex-end;
  padding-bottom:0;
  margin-bottom:-20px;
}

.kh-home-story-number{
  position:absolute;
  top:-55px;
  left:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(78px,8vw,146px);
  color:rgba(92,71,43,.08);
  line-height:.8;
  letter-spacing:.02em;
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.kh-home-story-kicker{
  position:relative;
  z-index:1;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.28em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:400;
  margin:0 0 12px;
}

.kh-home-story-title{
  position:relative;
  z-index:1;
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(30px,2.5vw,44px);
  line-height:.98;
  text-transform:uppercase;
  color:#3F2C1F;
  max-width:500px;
}

.kh-home-story-script{
  display:block;
  margin-top:-4px;
  margin-left:98px;
  font-family:"GoldenHopes", cursive;
  font-size:clamp(22px,1.7vw,30px);
  line-height:1;
  letter-spacing:.03em;
  text-transform:capitalize;
  color:#6A4C36;
  transform:rotate(-2deg);
}

.kh-home-story-text{
  margin:14px 0 0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.78;
  color:rgba(63,44,31,.76);
  max-width:470px;
}

.kh-home-story-divider{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 12px;
}

.kh-home-story-note{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.72;
  color:rgba(63,44,31,.60);
  max-width:390px;
}

/* =========================
RIGHT VISUAL
========================= */

.kh-home-story-visual{
  position:relative;
  height:100%;
  display:flex;
  align-items:center;
  justify-content:flex-end;
  overflow:hidden;
}

.kh-home-story-columns{
  position:relative;
  width:min(100%, 620px);
  height:100%;
  max-height:760px;
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:18px;
  align-items:end;
}

.kh-home-story-col{
  position:relative;
  overflow:hidden;
  background:#EADFD3;
  will-change:transform;
}

.kh-home-story-col::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(24,18,12,.08) 0%, rgba(24,18,12,.18) 100%),
    radial-gradient(circle at 72% 18%, rgba(255,255,255,.05), transparent 28%);
  pointer-events:none;
  z-index:2;
}

.kh-home-story-col--1{
  height:72%;
  margin-bottom:8%;
}

.kh-home-story-col--2{
  height:100%;
  margin-bottom:0;
}

.kh-home-story-col--3{
  height:62%;
  margin-bottom:14%;
}

.kh-home-story-img{
  width:100% !important;
  height:100% !important;
  object-fit:cover !important;
  display:block !important;
  transform:scale(1.02);
  transition:transform .6s ease;
}

.kh-home-story-col:hover .kh-home-story-img{
  transform:scale(1.06);
}

.kh-home-story-float{
  position:absolute;
  left:-26px;
  bottom:42px;
  width:160px;
  height:200px;
  border-radius:120px 120px 0 0;
  overflow:hidden;
  background:transparent;
  z-index:4;
  box-shadow:0 18px 36px rgba(0,0,0,0.16);
  border:3px solid rgba(255,255,255,0.7);
}

.kh-home-story-float-img{
  width:100% !important;
  height:100% !important;
  object-fit:cover !important;
  display:block !important;
}

.kh-home-story-card{
  position:absolute;
  right:-10px;
  bottom:80px;
  width:300px;
  background:rgba(250,247,242,.86);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  padding:22px;
  border:1px solid rgba(63,44,31,.08);
  box-shadow:0 22px 44px rgba(0,0,0,.08);
  z-index:5;
}

.kh-home-story-card-label{
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
  margin-bottom:10px;
}

.kh-home-story-card p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.76;
  color:rgba(63,44,31,.74);
  font-weight:300;
}

/* =========================
ANIMATION
========================= */

.kh-home-story-animate{
  opacity:0;
  transform:translateY(36px);
  transition:
    transform 1s cubic-bezier(.22,1,.36,1),
    opacity 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
  filter:blur(2px);
  will-change:transform, opacity, filter;
}

.kh-home-story-animate.show{
  opacity:1;
  transform:none;
  filter:blur(0);
}

.kh-home-story-delay1{transition-delay:.10s}
.kh-home-story-delay2{transition-delay:.18s}
.kh-home-story-delay3{transition-delay:.26s}
.kh-home-story-delay4{transition-delay:.34s}

/* =========================
MOBILE VERSION
========================= */

.kh-home-story-mobile{
  display:none;
}

.kh-home-story-mobile,
.kh-home-story-mobile *{
  box-sizing:border-box;
}

.kh-home-story-mobile{
  width:100%;
  padding:60px 30px 30px;
  position:relative;
  overflow:hidden;
}

.kh-home-story-mobile-wrap{
  width:100%;
  position:relative;
}

.kh-home-story-mobile-top{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
}

.kh-home-story-mobile-number{
  position:absolute;
  top:-18px;
  left:50%;
  transform:translateX(-50%);
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(58px,18vw,92px);
  color:rgba(92,71,43,.08);
  line-height:.8;
  letter-spacing:.02em;
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.kh-home-story-mobile-kicker{
  position:relative;
  z-index:1;
  margin:0 0 12px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:400;
}

.kh-home-story-mobile-title{
  position:relative;
  z-index:1;
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(25px,8vw,34px);
  line-height:1;
  text-transform:uppercase;
  color:#3F2C1F;
  max-width:320px;
}

.kh-home-story-mobile-script{
  display:block;
  margin-top:-2px;
  margin-left:42px;
  font-family:"GoldenHopes", cursive;
  font-size:clamp(20px,6vw,26px);
  line-height:1;
  letter-spacing:.03em;
  text-transform:capitalize;
  color:#6A4C36;
  transform:rotate(-2deg);
}

.kh-home-story-mobile-text{
  margin:14px 0 0;
  max-width:320px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.76;
  color:rgba(63,44,31,.76);
}

.kh-home-story-mobile-cta{
  margin-top:-4px;
}

.kh-home-story-mobile-visual{
  position:relative;
  margin-top:44px;
}

.kh-home-story-mobile-columns{
  position:relative;
  width:100%;
  height:480px;
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:10px;
  align-items:end;
}

.kh-home-story-mobile-col{
  position:relative;
  overflow:hidden;
  background:#EADFD3;
  will-change:transform;
}

.kh-home-story-mobile-col::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(24,18,12,.08) 0%, rgba(24,18,12,.18) 100%),
    radial-gradient(circle at 72% 18%, rgba(255,255,255,.05), transparent 28%);
  pointer-events:none;
  z-index:2;
}

.kh-home-story-mobile-col--1{
  height:68%;
  margin-bottom:8%;
}

.kh-home-story-mobile-col--2{
  height:100%;
  margin-bottom:0;
}

.kh-home-story-mobile-col--3{
  height:58%;
  margin-bottom:14%;
}

.kh-home-story-mobile-img{
  width:100% !important;
  height:100% !important;
  object-fit:cover !important;
  display:block !important;
  transform:scale(1.02);
}

.kh-home-story-mobile-float{
  position:absolute;
  width:108px;
  height:138px;
  left:-10px;
  bottom:82px;
  border-radius:80px 80px 0 0;
  overflow:hidden;
  background:transparent;
  z-index:4;
  box-shadow:0 12px 24px rgba(0,0,0,0.16);
  border:2px solid rgba(255,255,255,0.7);
}

.kh-home-story-mobile-float-img{
  width:100% !important;
  height:100% !important;
  object-fit:cover !important;
  display:block !important;
}

.kh-home-story-mobile-card{
  position:absolute;
  width:calc(100% - 80px);
  right:0;
  bottom:10px;
  background:rgba(250,247,242,.86);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  padding:18px;
  border:1px solid rgba(63,44,31,.08);
  box-shadow:0 22px 44px rgba(0,0,0,.08);
  z-index:5;
}

.kh-home-story-mobile-card-label{
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
  margin-bottom:10px;
}

.kh-home-story-mobile-card p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.72;
  color:rgba(63,44,31,.74);
  font-weight:300;
}

.kh-home-story-mobile-bottom{
  margin-top:36px;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
}

.kh-home-story-mobile-divider{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 12px;
}

.kh-home-story-mobile-note{
  margin:0;
  max-width:320px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.70;
  color:rgba(63,44,31,.60);
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:1100px){

  .kh-home-story-sec{
    height:auto;
    min-height:auto;
    padding:60px 28px;
  }

  .kh-home-story-grid{
    grid-template-columns:1fr;
    gap:46px;
    height:auto;
  }

  .kh-home-story-copy{
    height:auto;
    min-height:auto;
    padding:0;
    justify-content:flex-start;
  }

  .kh-home-story-copy-main{
    transform:none;
  }

  .kh-home-story-copy-bottom{
    padding-top:18px;
    margin-bottom:0;
  }

  .kh-home-story-number{
    top:-22px;
    left:0;
  }

  .kh-home-story-visual{
    height:auto;
    min-height:auto;
  }

  .kh-home-story-columns{
    width:100%;
    height:620px;
    max-height:none;
  }

  .kh-home-story-script{
    margin-left:74px;
  }
}

@media(max-width:767px){

  .kh-home-story-sec{
    display:none;
  }

  .kh-home-story-mobile{
    display:block;
  }
}

</style>

<section class="kh-home-story-sec" id="khHomeStorySec">
  <div class="kh-home-story-wrap">
    <div class="kh-home-story-grid">

      <!-- LEFT COPY -->
      <div class="kh-home-story-copy">

        <div class="kh-home-story-copy-main">
          <div class="kh-home-story-copy-top">

            <div class="kh-home-story-number kh-home-story-animate">08</div>

            <div class="kh-home-story-kicker kh-home-story-animate kh-home-story-delay1">
              Grand Feasts &amp; Catering
            </div>

            <h2 class="kh-home-story-title kh-home-story-animate kh-home-story-delay2">
              The Feast<br>
              Brought To<br>
              Your Table
              <span class="kh-home-story-script">authentic south indian hospitality</span>
            </h2>

            <p class="kh-home-story-text kh-home-story-animate kh-home-story-delay3">
              Whether dining in our warm, welcoming restaurants or catering private celebrations, weddings, and corporate gatherings across the Bay Area, our chefs bring the full banquet experience to life.
            </p>
            
            <a href="/menu" class="kh-home-story-cta kh-home-story-animate kh-home-story-delay3">
              Explore Menus &amp; Locations
            </a>

          </div>
        </div>

        <div class="kh-home-story-copy-bottom">

          <div class="kh-home-story-divider kh-home-story-animate kh-home-story-delay3"></div>

          <p class="kh-home-story-note kh-home-story-animate kh-home-story-delay4">
            Custom catering packages, live dosa stations, and royal dum biryani handis crafted for all special gatherings.
          </p>

        </div>

      </div>

      <!-- RIGHT VISUAL -->
      <div class="kh-home-story-visual kh-home-story-animate kh-home-story-delay2">

        <div class="kh-home-story-columns" id="khHomeStoryColumns">

          <div class="kh-home-story-col kh-home-story-col--1" data-speed="0.18">
            <img src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_garlic_naan_tandoori_bread.jpg" class="kh-home-story-img" alt="Royal Kashmiri Mutton Curry" loading="lazy">
          </div>

          <div class="kh-home-story-col kh-home-story-col--2" data-speed="0.32">
            <img src="/assets/images/google_maps/livermore/curries_and_appetizers/livermore_mutton_rogan_josh_slow_simmered.jpg" class="kh-home-story-img" alt="Creamy Butter Chicken Masala" loading="lazy">
          </div>

          <div class="kh-home-story-col kh-home-story-col--3" data-speed="0.22">
            <img src="/assets/images/google_maps/livermore/curries_and_appetizers/livermore_crispy_andhra_chicken_65.jpg" class="kh-home-story-img" alt="Tandoori Sizzler Platter" loading="lazy">
          </div>

          <div class="kh-home-story-float kh-home-story-animate kh-home-story-delay3">
            <img src="/assets/images/google_maps/milpitas/biryani_specials/milpitas_hyderabadi_chicken_dum_biryani_pot.jpg"  class="kh-home-story-float-img" alt="Crispy Andhra Chicken 65" loading="lazy">
          </div>

          <div class="kh-home-story-card kh-home-story-animate kh-home-story-delay4">
            <div class="kh-home-story-card-label">Evening Dining &amp; Catering</div>
            <p>
              Freshly prepared to order across all 4 locations in Dublin, Milpitas, Livermore, and Concord.
            </p>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

<!-- MOBILE VERSION -->
<section class="kh-home-story-mobile" id="khHomeStoryMobile">
  <div class="kh-home-story-mobile-wrap">

    <div class="kh-home-story-mobile-top">
      <div class="kh-home-story-mobile-number">08</div>

      <div class="kh-home-story-mobile-kicker">
        Experience It By Evening
      </div>

      <h2 class="kh-home-story-mobile-title">
        The Feast
        <br>Brought To
        <br>Your Table
        <span class="kh-home-story-mobile-script">authentic south indian hospitality</span>
      </h2>

      <p class="kh-home-story-mobile-text">
        Whether dining in our warm, welcoming restaurants or catering private celebrations across the Bay Area, our chefs bring the full banquet experience to life.
      </p>

      <a href="/menu" class="kh-home-story-cta kh-home-story-mobile-cta">
        Explore Menus &amp; Locations
      </a>
    </div>

    <div class="kh-home-story-mobile-visual">

      <div class="kh-home-story-mobile-columns" id="khHomeStoryMobileColumns">

        <div class="kh-home-story-mobile-col kh-home-story-mobile-col--1" data-speed="0.18">
          <img src="/assets/images/google_maps/livermore/curries_and_appetizers/livermore_kashmiri_mutton_curry_pot.jpg" class="kh-home-story-mobile-img" alt="Royal Kashmiri Mutton Curry" loading="lazy">
        </div>

        <div class="kh-home-story-mobile-col kh-home-story-mobile-col--2" data-speed="0.32">
          <img src="/assets/images/google_maps/concord/curries_and_appetizers/concord_creamy_butter_chicken_delight.jpg" class="kh-home-story-mobile-img" alt="Creamy Butter Chicken Masala" loading="lazy">
        </div>

        <div class="kh-home-story-mobile-col kh-home-story-mobile-col--3" data-speed="0.22">
          <img src="/assets/images/google_maps/dublin/curries_and_appetizers/dublin_tandoori_chicken_leg_sizzler.jpg" class="kh-home-story-mobile-img" alt="Tandoori Sizzler Platter" loading="lazy">
        </div>

        <div class="kh-home-story-mobile-float">
          <img src="/assets/images/google_maps/concord/curries_and_appetizers/concord_crispy_andhra_chicken_65.jpg" class="kh-home-story-mobile-float-img" alt="Crispy Andhra Chicken 65" loading="lazy">
        </div>

        <div class="kh-home-story-mobile-card">
          <div class="kh-home-story-mobile-card-label">Evening Dining &amp; Catering</div>
          <p>
            Freshly prepared to order across all 4 locations in Dublin, Milpitas, Livermore, and Concord.
          </p>
        </div>

      </div>

    </div>

    <div class="kh-home-story-mobile-bottom">
      <div class="kh-home-story-mobile-divider"></div>
      <p class="kh-home-story-mobile-note">
        Custom catering packages, live dosa stations, and royal dum biryani handis crafted for all special occasions.
      </p>
    </div>

  </div>
</section>

<script type="text/javascript">
(function(){
  const desktopSection = document.getElementById('khHomeStorySec');
  const mobileSection = document.getElementById('khHomeStoryMobile');

  if(desktopSection){
    const elements = desktopSection.querySelectorAll('.kh-home-story-animate');
    if(elements.length){
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if(entry.isIntersecting){
            entry.target.classList.add('show');
            desktopSection.classList.add('show');
          }
        });
      }, {
        threshold:0.15,
        rootMargin:"0px 0px -8% 0px"
      });

      elements.forEach((el) => observer.observe(el));
    }
  }

  const desktopCols = desktopSection ? desktopSection.querySelectorAll('.kh-home-story-col') : [];
  const mobileCols = mobileSection ? mobileSection.querySelectorAll('.kh-home-story-mobile-col') : [];

  let ticking = false;

  function applyColumnMotion(cols, multiplier){
    cols.forEach((col, index) => {
      const speed = parseFloat(col.getAttribute('data-speed')) || 0.2;
      const direction = index === 2 ? -1 : 1;

      const y = (multiplier - 0.5) * 120 * speed * direction;
      const x = (multiplier - 0.5) * 20 * (index === 1 ? -1 : 1);
      const scale = 1 + (index === 1 ? 0.06 : 0.03) * (1 - Math.abs(multiplier - 0.5) * 2);
      const rotate = (multiplier - 0.5) * 6 * (index === 0 ? -1 : index === 2 ? 1 : 0);

      col.style.transform = `
        translate3d(${x}px, ${y}px, 0)
        scale(${scale})
        rotate(${rotate}deg)
      `;
    });
  }

  function updateColumns(){
    if(desktopSection){
      const rect = desktopSection.getBoundingClientRect();
      const vh = window.innerHeight || 800;
      const progress = Math.max(0, Math.min(1, (vh - rect.top) / (vh + rect.height)));
      const ease = (t) => t * t * (3 - 2 * t);
      applyColumnMotion(desktopCols, ease(progress));
    }

    if(mobileSection && window.innerWidth <= 767){
      const rect = mobileSection.getBoundingClientRect();
      const vh = window.innerHeight || 800;
      const progress = Math.max(0, Math.min(1, (vh - rect.top) / (vh + rect.height)));
      const ease = (t) => t * t * (3 - 2 * t);
      applyColumnMotion(mobileCols, ease(progress));
    }else{
      mobileCols.forEach((col) => {
        col.style.transform = '';
      });
    }

    ticking = false;
  }

  function onScroll(){
    if(!ticking){
      requestAnimationFrame(updateColumns);
      ticking = true;
    }
  }

  updateColumns();
  window.addEventListener('scroll', onScroll, { passive:true });
  window.addEventListener('resize', updateColumns);
})();
</script>
				</div>
				</div>
		<div class="elementor-element elementor-element-c6d4a00 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="c6d4a00" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-3a174c9 elementor-widget elementor-widget-html" data-id="3a174c9" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<section class="kh-cta-reveal" id="khCtaReveal">
  <div class="kh-cta-sticky">

    <div class="kh-cta-pillar kh-cta-pillar--left" aria-hidden="true"></div>
    <div class="kh-cta-pillar kh-cta-pillar--right" aria-hidden="true"></div>

    <div class="kh-cta-inner">

      <div class="kh-cta-kicker">
        Final Invitation
      </div>

      <h2 class="kh-cta-title">
        Dine With <span class="kh-cta-hi">Authentic Flavor</span> In Mind,<br>
        In A Moment <span class="kh-cta-hi">Crafted</span> For You
      </h2>

      <p class="kh-cta-body">
        Across Dublin, Milpitas, Livermore, and Concord, Biryani Spot Chennai Dosa is an experience shaped by authenticity, spice mastery, and heartfelt warmth.
        From our slow-steamed Hyderabadi Dum Biryanis to our golden crispy Chennai Dosas, every dish is an homage to South Indian tradition.
        Reserve your table or order online to experience royal Indian dining.
      </p>

      <div class="kh-cta-meta">
        Heritage / Spice Mastery / Royal Feasts
      </div>

      <div class="kh-cta-actions" id="khCtaActions">
        <a href="/reservations" class="kh-cta-btn" aria-label="Reserve your table">Reserve Your Table</a>
      </div>

      <div class="kh-cta-ornament" aria-hidden="true"></div>

    </div>
  </div>
</section>

<style>
@font-face{
  font-family:"IvyOraDisplay";
  src:url("/assets/images/IvyOraDisplay-Light.woff2") format("woff2");
  font-weight:300;
  font-style:normal;
  font-display:swap;
}

@font-face{
  font-family:"GoldenHopes";
  src:url("/assets/images/GoldenHopes.woff2") format("woff2");
  font-weight:400;
  font-style:normal;
  font-display:swap;
}

@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap");

:root{
  --kh-start-bg:#ffffff;
  --kh-end-bg:#1e120c;
  --kh-brown-rgb:92, 71, 43;
  --kh-pre-white-shift:#3D291C;
}

.kh-cta-reveal,
.kh-cta-reveal *{
  box-sizing:border-box;
}

.kh-cta-reveal{
  position:relative !important;
  width:100% !important;
  max-width:100% !important;
  margin:0 !important;
  padding:0 !important;
  height:220vh !important;
  min-height:220vh !important;
  background:#ffffff !important;
}

.kh-cta-sticky{
  position:absolute;
  top:0;
  left:0;
  width:100% !important;
  max-width:100% !important;
  height:100vh !important;
  min-height:100vh !important;
  margin:0 !important;
  padding:60px 0 !important;
  overflow:hidden;
  background:var(--kh-start-bg);
  display:flex;
  align-items:center;
  justify-content:center;
  will-change:background-color, transform;
}

.kh-cta-pillar{
  position:absolute;
  top:50%;
  width:90px;
  height:70vh;
  transform:translateY(-50%);
  pointer-events:none;
  z-index:1;
  background-color:rgba(61,41,28,.08);
  -webkit-mask:url("/assets/images/Pillar.svg") center center / contain no-repeat;
  mask:url("/assets/images/Pillar.svg") center center / contain no-repeat;
  opacity:.16;
  will-change:transform, opacity, background-color;
}

.kh-cta-pillar--left{
  left:40px;
}

.kh-cta-pillar--right{
  right:40px;
}

.kh-cta-inner{
  width:100% !important;
  max-width:1200px !important;
  margin:0 auto !important;
  padding:0 40px !important;
  position:relative;
  z-index:2;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  text-align:center;
  min-height:auto !important;
  box-sizing:border-box !important;
  transform:translate3d(0,0,0);
  transform-origin:center center;
}

.kh-cta-kicker{
  margin:0 0 16px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  letter-spacing:.34em;
  text-transform:uppercase;
  font-weight:500;
  color:var(--kh-pre-white-shift);
  will-change:color;
}

.kh-cta-title{
  margin:0 auto;
  width:100% !important;
  max-width:1100px !important;
  font-family:"IvyOraDisplay",serif;
  font-size:clamp(36px, 4.4vw, 68px);
  font-weight:300;
  line-height:1.06;
  letter-spacing:.02em;
  text-transform:uppercase;
  color:var(--kh-pre-white-shift);
  will-change:color;
}

.kh-cta-hi{
  font-style:italic;
  font-weight:700;
  letter-spacing:.03em;
}

.kh-cta-body{
  margin:24px auto 0;
  width:100% !important;
  max-width:880px !important;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:clamp(15px, 1.15vw, 18px);
  font-weight:300;
  line-height:1.8;
  letter-spacing:.01em;
  color:var(--kh-pre-white-shift);
  will-change:color;
}

.kh-cta-meta{
  margin:24px auto 0;
  width:100% !important;
  max-width:880px !important;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  letter-spacing:.3em;
  text-transform:uppercase;
  color:var(--kh-pre-white-shift);
  will-change:color;
}

.kh-cta-actions{
  margin-top:28px;
  display:flex;
  justify-content:center;
  gap:14px;
  flex-wrap:wrap;
  opacity:1;
  transform:none;
}

.kh-cta-actions.is-visible{
  opacity:1;
  transform:translate3d(0,0,0);
}

.kh-cta-btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  min-width:240px;
  padding:16px 24px;
  border:1px solid rgba(61,41,28,.5);
  border-radius:0 !important;
  background:rgba(250,247,242,.68);
  color:rgba(61,41,28,.5);
  text-decoration:none !important;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  font-weight:500;
  letter-spacing:.24em;
  text-transform:uppercase;
  box-shadow:none !important;
  transition:
    transform .35s ease,
    border-color .35s ease,
    background-color .35s ease,
    color .35s ease,
    opacity .35s ease;
  will-change:color, border-color, background-color, transform;
}

.kh-cta-btn:hover{
  transform:translateY(-2px);
}

.kh-cta-btn::before,
.kh-cta-btn::after{
  content:none !important;
  display:none !important;
}

.kh-cta-ornament{
  width:160px;
  height:25px;
  margin:50px auto 0;
  background-color:rgba(61,41,28,.5);
  -webkit-mask:url("/assets/images/ornaments/divider-spice-flourish.svg") center center / contain no-repeat;
  mask:url("/assets/images/ornaments/divider-spice-flourish.svg") center center / contain no-repeat;
  opacity:0;
  transform:translate3d(0,12px,0);
  transition:
    opacity .55s cubic-bezier(.22,1,.36,1),
    transform .55s cubic-bezier(.22,1,.36,1),
    background-color .35s ease;
  will-change:opacity, transform, background-color;
}

.kh-cta-actions.is-visible + .kh-cta-ornament{
  opacity:1;
  transform:translate3d(0,0,0);
}

@media (max-width:900px){
  .kh-cta-reveal{
    height:200vh !important;
    min-height:200vh !important;
  }

  .kh-cta-inner{
    padding:64px 0 40px;
  }

  .kh-cta-title{
    font-size:clamp(26px, 6.5vw, 38px);
    line-height:1;
  }

  .kh-cta-body{
    font-size:13px;
    max-width:66ch;
  }

  .kh-cta-pillar{
    width:60px;
    height:60vh;
    opacity:.10;
  }

  .kh-cta-pillar--left{
    left:16px;
  }

  .kh-cta-pillar--right{
    right:16px;
  }

  .kh-cta-ornament{
    width:76px;
    height:18px;
    margin-top:16px;
  }
}

@media (max-width:767px){
  .kh-cta-reveal{
    height:180vh !important;
    min-height:180vh !important;
  }

  .kh-cta-inner{
    width:calc(100% - 60px);
    max-width:calc(100% - 60px);
    padding:30px 0;
    min-height:100vh;
  }

  .kh-cta-kicker{
    margin:0 0 16px;
    font-size:11px;
    letter-spacing:.34em;
  }

  .kh-cta-title{
    margin:0;
    font-family:"IvyOraDisplay",serif;
    font-size:clamp(26px, 6.5vw, 38px);
    font-weight:300;
    line-height:1;
    letter-spacing:.018em;
    text-transform:uppercase;
    color:var(--kh-pre-white-shift);
    max-width:320px;
  }

  .kh-cta-title br,
  .kh-cta-title .kh-cta-hi{
    display:none;
  }

  .kh-cta-body{
    margin:18px 0 0;
    max-width:320px;
    font-size:13px;
    line-height:1.76;
  }

  .kh-cta-meta{
    margin:18px auto 0;
    max-width:none;
    font-size:10px;
    letter-spacing:.24em;
  }

  .kh-cta-actions{
    width:100%;
    gap:10px;
    margin-top:34px;
  }

  .kh-cta-btn{
    width:100%;
    min-width:100%;
    font-size:11px;
  }

  .kh-cta-pillar{
    display:block;
    width:72px;
    height:52vh;
    top:50%;
    left:50%;
    right:auto;
    opacity:.09;
    z-index:1;
    transform:translate(-50%,-50%);
  }

  .kh-cta-pillar--left{
    left:50%;
  }

  .kh-cta-pillar--right{
    display:none;
  }

  .kh-cta-ornament{
    width:64px;
    height:16px;
    margin-top:40px;
  }
}

@media (prefers-reduced-motion:reduce){
  .kh-cta-reveal{
    height:120vh !important;
  }

  .kh-cta-actions,
  .kh-cta-btn,
  .kh-cta-ornament{
    transition:none !important;
  }
}
</style>

<script type="text/javascript">
(function(){
  const section = document.getElementById('khCtaReveal');
  if(!section) return;

  const sticky   = section.querySelector('.kh-cta-sticky');
  const inner    = section.querySelector('.kh-cta-inner');
  const kicker   = section.querySelector('.kh-cta-kicker');
  const title    = section.querySelector('.kh-cta-title');
  const body     = section.querySelector('.kh-cta-body');
  const meta     = section.querySelector('.kh-cta-meta');
  const actions  = section.querySelector('#khCtaActions');
  const ornament = section.querySelector('.kh-cta-ornament');
  const buttons  = section.querySelectorAll('.kh-cta-btn');
  const pillars  = section.querySelectorAll('.kh-cta-pillar');

  if(!sticky || !inner || !kicker || !title || !body || !meta || !actions || !ornament || !buttons.length) return;

  const clamp01 = (n) => Math.max(0, Math.min(1, n));
  const lerp = (a,b,t) => a + (b-a)*t;

  function hexToRgb(hex){
    const h = (hex || "").replace('#','').trim();
    const full = h.length === 3 ? h.split('').map(x=>x+x).join('') : h;
    const num = parseInt(full, 16);
    return { r:(num>>16)&255, g:(num>>8)&255, b:num&255 };
  }

  const rootStyles = getComputedStyle(document.documentElement);
  const startBg = rootStyles.getPropertyValue('--kh-start-bg').trim() || '#ffffff';
  const endBg   = rootStyles.getPropertyValue('--kh-end-bg').trim() || '#1e120c';

  const startRGB = hexToRgb(startBg);
  const endRGB   = hexToRgb(endBg);

  let eased = 0;
  let rafId = 0;

  const desktopBodyText = `Across Dublin, Milpitas, Livermore, and Concord, Biryani Spot Chennai Dosa is an experience shaped by authenticity, spice mastery, and heartfelt warmth.
        From our slow-steamed Hyderabadi Dum Biryanis to our golden crispy Chennai Dosas, every dish is an homage to South Indian tradition.
        Reserve your table or order online to experience royal Indian dining.`;

  const mobileBodyText = `Reserve your table for an authentic South Indian dining experience across our 4 Bay Area locations.`;

  function syncMobileCopy(){
    if(window.innerWidth <= 767){
      title.innerHTML = `Dine In A Moment Crafted For You`;
      body.textContent = mobileBodyText;
    }else{
      title.innerHTML = `Dine With <span class="kh-cta-hi">Authentic Flavor</span> In Mind,<br>
        In A Moment <span class="kh-cta-hi">Crafted</span> For You`;
      body.textContent = desktopBodyText;
    }
  }

  function tick(){
    rafId = requestAnimationFrame(tick);

    const rect = section.getBoundingClientRect();
    const vh = window.innerHeight || 800;
    const maxScroll = rect.height - vh;

    let p = 0;
    if (rect.top > 0) {
      // 1. Approaching: Sits at the top of its track, Pure White background
      p = 0;
      sticky.style.position = 'absolute';
      sticky.style.top = '0px';
      sticky.style.bottom = 'auto';
      sticky.style.left = '0px';
      sticky.style.width = '100%';
      sticky.style.height = '100vh';
      sticky.style.zIndex = '2';
    } else if (rect.bottom < vh) {
      // 3. Finished Track: Sits at bottom of track, 100% Brown, scrolls up to reveal footer
      p = 1;
      sticky.style.position = 'absolute';
      sticky.style.top = 'auto';
      sticky.style.bottom = '0px';
      sticky.style.left = '0px';
      sticky.style.width = '100%';
      sticky.style.height = '100vh';
      sticky.style.zIndex = '2';
    } else {
      // 2. HELD / PINNED IN VIEWPORT: Scroll drives transition from White to Brown!
      p = clamp01(-rect.top / (maxScroll > 0 ? maxScroll : 1));
      sticky.style.position = 'fixed';
      sticky.style.top = '0px';
      sticky.style.bottom = 'auto';
      sticky.style.left = '0px';
      sticky.style.width = '100%';
      sticky.style.height = '100vh';
      sticky.style.zIndex = '99';
    }

    // Smooth responsive interpolation
    eased += (p - eased) * 0.12;
    const curve = eased;

    // Background color interpolation from White (#ffffff) to Brown (#1e120c)
    const rbg = Math.round(lerp(startRGB.r, endRGB.r, curve));
    const gbg = Math.round(lerp(startRGB.g, endRGB.g, curve));
    const bbg = Math.round(lerp(startRGB.b, endRGB.b, curve));
    const currentBg = `rgb(${rbg}, ${gbg}, ${bbg})`;
    sticky.style.setProperty('background-color', currentBg, 'important');
    section.style.setProperty('background-color', currentBg, 'important');

    // Text color interpolation from Dark Heritage Brown (#3D291C) to Crisp White (#ffffff)
    const textProgress = clamp01((curve - 0.05) / 0.45);
    const startTextRGB = { r:61, g:41, b:28 };
    const endTextRGB   = { r:255, g:255, b:255 };

    const rt = Math.round(lerp(startTextRGB.r, endTextRGB.r, textProgress));
    const gt = Math.round(lerp(startTextRGB.g, endTextRGB.g, textProgress));
    const bt = Math.round(lerp(startTextRGB.b, endTextRGB.b, textProgress));
    const textColor = `rgb(${rt},${gt},${bt})`;

    kicker.style.color = textColor;
    title.style.color = textColor;
    body.style.color = textColor;
    meta.style.color = textColor;

    pillars.forEach((pillar, index) => {
      pillar.style.backgroundColor = textColor;
      const isMobile = window.innerWidth <= 767;

      if(isMobile){
        const mobileY = (curve - 0.5) * 8;
        pillar.style.transform = `translate3d(-50%, calc(-50% + ${mobileY}px), 0)`;
        pillar.style.opacity = textProgress > 0.4 ? '0.07' : '0.09';
      }else{
        const drift = (curve - 0.5) * 14;
        const x = index === 0 ? drift * -0.55 : drift * 0.55;
        const y = drift * 0.25;
        pillar.style.transform = `translate3d(${x}px, calc(-50% + ${y}px), 0)`;
        pillar.style.opacity = textProgress > 0.4 ? '0.10' : '0.16';
      }
    });

    const actionProgress = clamp01((curve - 0.2) / 0.5);
    actions.classList.toggle('is-visible', actionProgress > 0.02);

    ornament.style.backgroundColor = textProgress > 0.4 ? 'rgb(255,255,255)' : 'rgba(61,41,28,.5)';

    buttons.forEach(btn => {
      btn.style.color = textProgress > 0.4 ? 'rgb(255,255,255)' : 'rgba(61,41,28,.5)';
      btn.style.borderColor = textProgress > 0.4
        ? `rgba(255,255,255,${lerp(0.55, 0.28, actionProgress)})`
        : 'rgba(61,41,28,.5)';
      btn.style.backgroundColor = textProgress > 0.4
        ? `rgba(255,255,255,${lerp(0.08, 0.12, actionProgress)})`
        : 'rgba(250,247,242,.68)';
    });

    const isMobile = window.innerWidth <= 767;
    const scale = isMobile ? lerp(0.96, 1.0, curve) : lerp(0.96, 1.02, curve);
    inner.style.transform = `translate3d(0,0,0) scale(${scale})`;
  }

  syncMobileCopy();
  window.addEventListener('resize', syncMobileCopy);

  tick();
  window.addEventListener('beforeunload', () => cancelAnimationFrame(rafId));
})();
</script>				</div>
				</div>
		
	
	
</div><!-- .entry-content .clear -->

	
	
</article><!-- #post-## -->

			</main><!-- #main -->
			
		
	</div><!-- #primary -->


	</div> <!-- ast-container -->
	</div><!-- #content -->
		

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>