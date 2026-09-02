<style>
html, body.page-template-default, body.page-inner, .site-content, #primary, #main, .elementor-911 {
  background-color: #F6F1EA !important;
}
.elementor-911 .e-parent {
  background-color: #F6F1EA !important;
  padding: 0 !important;
  margin: 0 !important;
}
.kh-curtain-mv {
  background: #F4EDE4 !important;
}
.kh-timeline-pin {
  background: #F4EDE4 !important;
}
.elementor-element-ce93b65 {
  background-color: #1e120c !important;
}
</style>
<?php
$pageTitle = "About | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";
?>

<div id="content" class="site-content">
		<div class="ast-container">
		

	<div id="primary" class="content-area primary">

		
					<main id="main" class="site-main">
				<article
class="post-911 page type-page status-publish ast-article-single" id="post-911" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
	
				<header class="entry-header ast-no-thumbnail ast-no-title ast-header-without-markup">
							</header> <!-- .entry-header -->
		
<div class="entry-content clear"
	itemprop="text">

	
			<div data-elementor-type="wp-page" data-elementor-id="911" class="elementor elementor-911" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-9b01661 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="9b01661" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-c701a8b elementor-widget elementor-widget-html" data-id="c701a8b" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<style>

/* =========================
KHUFU'S ABOUT HERO
========================= */

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

@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400&display=swap");


.kh-about-hero,
.kh-about-hero *{
  box-sizing:border-box;
}

.kh-about-hero{
  position:relative;
  width:100%;
  height:100svh;
  display:flex;
  align-items:flex-end;
  overflow:hidden;
  isolation:isolate;

  background:
  linear-gradient(
    180deg,
    rgba(20,10,5,.35) 0%,
    rgba(20,10,5,.55) 25%,
    rgba(30,15,10,.75) 50%,
    rgba(30,18,12,.90) 75%,
    rgba(30,18,12,1) 100%
  ),
  url("/assets/ai_ganerated/images/lagacy_page_hero_section.png")
  center center / cover no-repeat;
}


/* background monumental word */

.kh-about-hero::after{
  content:"HERITAGE";
  position:absolute;
  right:-10px;
  bottom:-10px;
  font-family:"IvyOraDisplay",serif;
  font-size:160px;
  line-height:.85;
  letter-spacing:.05em;
  color:rgba(247,243,238,.04);
  pointer-events:none;
}


/* =========================
LAYOUT
========================= */

.kh-about-inner{
  width:100%;
  padding:60px;
  display:grid;
  grid-template-columns:minmax(0,1fr) minmax(260px,340px);
  gap:40px;
  align-items:end;
  position:relative;
  z-index:2;
}


/* =========================
LEFT COLUMN
========================= */

.kh-about-copy{
  max-width:720px;
}

.kh-about-kicker{
  margin-bottom:16px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  letter-spacing:.26em;
  text-transform:uppercase;
  color:rgba(247,243,238,.65);
}

.kh-about-title{
  margin:0;
  font-family:"IvyOraDisplay",serif;
  font-weight:300;
  font-size:56px;
  line-height:1.05;
  letter-spacing:.01em;
  color:#F7F3EE;
  text-transform:uppercase;
  position:relative;
}


/* Golden Hopes script overlap */

.kh-about-script{
  position:absolute;
  left:0;
  bottom:-18px;
  font-family:"GoldenHopes",cursive;
  font-size:30px;
  color:#F2E4C7;
  letter-spacing:.04em;
  transform:rotate(-2deg);
  text-transform:capitalize;
  pointer-events:none;
}


/* paragraph */

.kh-about-lead{
  margin-top:36px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:14px;
  line-height:1.8;
  color:rgba(247,243,238,.75);
  font-weight:300;
  max-width:520px;
}


/* scroll */

.kh-scroll{
  margin-top:28px;
  display:flex;
  align-items:center;
  gap:10px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.26em;
  text-transform:uppercase;
  color:rgba(247,243,238,.62);
}

.kh-scroll-line{
  width:46px;
  height:1px;
  background:rgba(247,243,238,.35);
}


/* =========================
RIGHT COLUMN
========================= */

.kh-about-side{
  width:100%;
  max-width:300px;
  margin-left:auto;
  border-top:1px solid rgba(255,255,255,.14);
  padding-top:16px;
  text-align:right;
}

.kh-about-side p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.75;
  color:rgba(247,243,238,.65);
  font-weight:300;
}


/* =========================
ANIMATION
========================= */

.kh-reveal{
  opacity:0;
  transform:translateY(30px);
  transition:
    opacity .9s cubic-bezier(.22,1,.36,1),
    transform .9s cubic-bezier(.22,1,.36,1);
}

.kh-reveal.show{
  opacity:1;
  transform:translateY(0);
}


/* =========================
RESPONSIVE
========================= */

@media(max-width:900px){

  .kh-about-inner{
    grid-template-columns:1fr;
    padding:30px 30px;
    gap:24px;
  }

  .kh-about-side{
    display:none;
  }

  .kh-about-kicker{
    font-size:9px;
    letter-spacing:.22em;
  }

  .kh-about-title{
    font-size:30px;
    padding-bottom:10px;
  }

  .kh-about-script{
    bottom:-22px;
  }

  .kh-about-lead{
    font-size:12px;
    line-height:1.6;
  }

  .kh-about-hero::after{
    font-size:88px;
    right:-6px;
    bottom:-4px;
    display:none !important;
  }
}

</style>


<section class="kh-about-hero" id="khAboutHero">

  <div class="kh-about-inner">

    <div class="kh-about-copy">

      <div class="kh-about-kicker kh-reveal">
        About / Biryani Spot
      </div>

      <h1 class="kh-about-title kh-reveal">

        Shaped By Place,<br>
        Silence,<br>
        And Intention

        <span class="kh-about-script">
          Beyond Hospitality
        </span>

      </h1>

      <p class="kh-about-lead kh-reveal">

        Biryani Spot Chennai Dosa is founded on the timeless culinary traditions of Chettinad and Hyderabad, bringing authentic South Indian dining to the San Francisco Bay Area.

      </p>

      <div class="kh-scroll kh-reveal">

        <div class="kh-scroll-line"></div>

        <span>Scroll to discover</span>

      </div>

    </div>


    <div class="kh-about-side kh-reveal">

      <p>

        A journey into the craft and philosophy behind Biryani Spot Chennai Dosa, shaped by stone-ground spices, clay pot dum cooking, and genuine South Indian hospitality across Dublin, Milpitas, Livermore, and Concord.

      </p>

    </div>

  </div>

</section>


<script type="text/javascript">
(function(){

  const section = document.getElementById("khAboutHero");
  const items = section.querySelectorAll(".kh-reveal");

  const observer = new IntersectionObserver(entries=>{

    entries.forEach(entry=>{
      if(entry.isIntersecting){
        entry.target.classList.add("show");
      }
    });

  },{threshold:.2});

  items.forEach(el=>observer.observe(el));

})();
</script>				</div>
				</div>
		<div class="elementor-element elementor-element-6b76a06 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="6b76a06" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-97a5369 elementor-widget elementor-widget-html" data-id="97a5369" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
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

/* =========================
SHARED
========================= */

.kh-origin-desktop,
.kh-origin-desktop *,
.kh-origin-mobile,
.kh-origin-mobile *{
  box-sizing:border-box;
}

.kh-origin-desktop,
.kh-origin-mobile{
  --kh-bg:#F6F1EA;
  --kh-bg-soft:#F1E9DF;
  --kh-card:rgba(250,247,242,.90);
  --kh-card-soft:rgba(244,236,226,.82);
  --kh-text:#3F2C1F;
  --kh-text-soft:rgba(63,44,31,.76);
  --kh-text-muted:rgba(63,44,31,.60);
  --kh-brown:#3F2C1F;
  --kh-brown-soft:#6A4C36;
  --kh-line:rgba(63,44,31,.12);
  --kh-line-soft:rgba(63,44,31,.08);
}

/* =========================
DESKTOP
UNCHANGED
========================= */

.kh-origin-copy::before{
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

#khOriginDesktop.show .kh-origin-copy::before{
  opacity:.28;
  transform:none;
  filter:blur(0);
}

.kh-origin-desktop{
  --kh-origin-main-width:380px;
  --kh-origin-mini-width:188px;
  width:100%;
  height:100vh;
  min-height:100vh;
  padding:60px;
  position:relative;
  overflow:hidden;
  background:linear-gradient(180deg,#F6F1EA 0%,#F1E9DF 100%);
}

.kh-origin-desktop::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    radial-gradient(circle at 15% 20%, rgba(92,71,43,.05), transparent 28%),
    linear-gradient(90deg, rgba(255,255,255,.18), transparent 18%);
  pointer-events:none;
}

.kh-origin-wrap{
  width:100%;
  height:100%;
  position:relative;
  z-index:2;
}

.kh-origin-grid{
  display:grid;
  grid-template-columns:minmax(0,1fr) minmax(360px,520px);
  gap:80px;
  height:100%;
  align-items:stretch;
}

.kh-origin-copy{
  position:relative;
  max-width:560px;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  padding:56px 0 8px;
}

.kh-origin-copy-main{
  display:flex;
  flex-direction:column;
  justify-content:center;
  flex:1;
  transform:translateY(18px);
}

.kh-origin-copy-top{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
}

.kh-origin-copy-bottom{
  display:flex;
  flex-direction:column;
  align-items:flex-start;
  justify-content:flex-end;
  padding-bottom:0;
  margin-bottom:-30px;
}

.kh-origin-number{
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

.kh-origin-kicker{
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

.kh-origin-title{
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

.kh-origin-script{
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

.kh-origin-text{
  margin:14px 0 0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.78;
  color:rgba(63,44,31,.76);
  max-width:470px;
}

.kh-origin-divider{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 12px;
}

.kh-origin-note{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.72;
  color:rgba(63,44,31,.60);
  max-width:390px;
}

.kh-origin-visual{
  position:relative;
  height:100%;
}

.kh-origin-main{
  position:absolute;
  right:0;
  bottom:0;
  width:var(--kh-origin-main-width);
  height:100%;
  border-radius:0;
  overflow:hidden;
  background:
    linear-gradient(180deg,rgba(24,18,12,.58) 0%,rgba(24,18,12,.54) 100%),
    url("/assets/images/google_maps/South_Chennai.jpg") center/cover no-repeat;
  box-shadow:0 28px 60px rgba(0,0,0,.14);
}

.kh-origin-main::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(246,241,234,.03) 0%, rgba(246,241,234,.08) 100%),
    radial-gradient(circle at 70% 20%, rgba(255,255,255,.05), transparent 28%);
  pointer-events:none;
}

.kh-origin-mini{
  position:absolute;
  left:calc(100% - var(--kh-origin-main-width) - (var(--kh-origin-mini-width) / 2));
  top:0;
  width:var(--kh-origin-mini-width);
  height:240px;
  border-radius:140px 140px 0 0;
  overflow:hidden;
  background:linear-gradient(180deg, rgba(106,76,54,.16) 0%, rgba(106,76,54,.28) 100%);
  box-shadow:0 16px 40px rgba(0,0,0,.08);
}

.kh-origin-card{
  position:absolute;
  left:46px;
  bottom:0;
  width:320px;
  background:rgba(250,247,242,.84);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  padding:22px;
  border:1px solid rgba(63,44,31,.08);
  box-shadow:0 22px 44px rgba(0,0,0,.08);
}

.kh-origin-card-label{
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
  margin-bottom:10px;
}

.kh-origin-mini::before{
  content:"";
  position:absolute;
  inset:0;
  background-color:rgba(247,243,238,1);
  -webkit-mask:url("/assets/images/Vase.svg") no-repeat center calc(80% - 16px) / 38% auto;
  mask:url("/assets/images/Vase.svg") no-repeat center calc(80% - 16px) / 38% auto;
  pointer-events:none;
  z-index:2;
}

.kh-origin-card p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.76;
  color:rgba(63,44,31,.74);
  font-weight:300;
}

.kh-animate{
  opacity:0;
  transform:translateY(36px);
  transition:
    transform 1s cubic-bezier(.22,1,.36,1),
    opacity 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
  filter:blur(2px);
  will-change:transform, opacity, filter;
}

.kh-animate.show{
  opacity:1;
  transform:none;
  filter:blur(0);
}

.delay1{transition-delay:.10s}
.delay2{transition-delay:.18s}
.delay3{transition-delay:.26s}
.delay4{transition-delay:.34s}

@media(min-width:1400px){
  .kh-origin-desktop{
    --kh-origin-main-width:460px;
  }

  .kh-origin-grid{
    grid-template-columns:minmax(0,1.08fr) minmax(460px,640px);
    gap:64px;
  }

  .kh-origin-copy{
    max-width:680px;
  }

  .kh-origin-title{
    max-width:560px;
  }

  .kh-origin-text{
    max-width:600px;
  }

  .kh-origin-note{
    max-width:560px;
  }
}

@media(max-width:1100px){
  .kh-origin-desktop{
    height:auto;
    min-height:auto;
    padding:60px 28px;
  }

  .kh-origin-grid{
    grid-template-columns:1fr;
    gap:46px;
    height:auto;
  }

  .kh-origin-copy{
    height:auto;
    padding:0;
    justify-content:flex-start;
  }

  .kh-origin-copy-main{
    transform:none;
  }

  .kh-origin-copy-bottom{
    padding-top:18px;
  }

  .kh-origin-number{
    top:-22px;
    left:0;
  }

  .kh-origin-visual{
    height:600px;
  }

  .kh-origin-main{
    width:var(--kh-origin-main-width);
    height:100%;
  }

  .kh-origin-card{
    left:46px;
  }

  .kh-origin-script{
    margin-left:68px;
  }
}

/* =========================
MOBILE
STICKY SCROLL TRANSITION
========================= */

.kh-origin-mobile{
  display:none;
  position:relative;
  width:100%;
  height:180svh;
  min-height:180svh;
  overflow:clip;
  background:linear-gradient(180deg,#F6F1EA 0%,#F1E9DF 100%);
  --kh-progress:0;
}

.kh-origin-mobile::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    radial-gradient(circle at 18% 14%, rgba(92,71,43,.05), transparent 34%),
    linear-gradient(180deg, rgba(255,255,255,.16), transparent 34%);
  pointer-events:none;
}

.kh-origin-mobile-stage{
  position:sticky;
  top:0;
  width:100%;
  height:100svh;
  overflow:hidden;
}

.kh-origin-mobile-panel{
  position:absolute;
  inset:0;
  padding:30px;
  overflow:hidden;
}

/* PANEL 1 */

.kh-origin-mobile-panel--intro{
  z-index:2;
  opacity:calc(1 - (var(--kh-progress) * 1.25));
  transform:translate3d(calc(var(--kh-progress) * -5%),0,0);
  will-change:transform, opacity;
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
  transform-style:preserve-3d;
}

.kh-origin-mobile-panel--intro::before{
  content:"";
  position:absolute;
  top:30px;
  left:30px;
  width:90px;
  height:90px;
  background-color:#6A4C36;
  opacity:.22;
  -webkit-mask:url("/assets/images/Khufus-Pattern.svg") no-repeat left top / contain;
  mask:url("/assets/images/Khufus-Pattern.svg") no-repeat left top / contain;
  pointer-events:none;
  z-index:1;
}

.kh-origin-mobile-intro{
  position:relative;
  z-index:2;
  width:100%;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:flex-start;
}

.kh-origin-mobile-intro-inner{
  width:100%;
  max-width:320px;
  margin-top:auto;
  margin-bottom:auto;
}

.kh-origin-mobile-number{
  margin:0 0 -20px 0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:56px;
  line-height:.8;
  color:rgba(92,71,43,.12);
}

.kh-origin-mobile-kicker{
  margin:0 0 10px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:9px;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:#6A4C36;
}

.kh-origin-mobile-title{
  margin:0;
  max-width:320px;
  font-family:"IvyOraDisplay",serif;
  font-weight:300;
  font-size:30px;
  line-height:.96;
  text-transform:uppercase;
  color:var(--kh-brown);
}

.kh-origin-mobile-script{
  display:block;
  margin-top:4px;
  margin-left:0;
  font-family:"GoldenHopes",cursive;
  font-size:20px;
  line-height:1;
  color:var(--kh-brown-soft);
  transform:rotate(-2deg);
  text-transform:capitalize;
}

.kh-origin-mobile-lead{
  margin:16px 0 0;
  max-width:320px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.62;
  font-weight:300;
  color:var(--kh-text-soft);
}

.kh-origin-mobile-foot{
  position:absolute;
  left:30px;
  right:30px;
  bottom:23px;
  z-index:3;
  pointer-events:none;
}

.kh-origin-mobile-divider{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 12px;
}

.kh-origin-mobile-note{
  margin:0;
  max-width:320px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.70;
  color:rgba(63,44,31,.60);
}

/* PANEL 2 */

.kh-origin-mobile-panel--visual{
  z-index:3;
  opacity:clamp(0, calc((var(--kh-progress) - .10) * 1.35), 1);
  transform:translate3d(calc((1 - var(--kh-progress)) * 5%),0,0);
  pointer-events:none;
  will-change:transform, opacity;
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
  transform-style:preserve-3d;
}

.kh-origin-mobile-visual{
  position:relative;
  width:100%;
  height:100%;
}

.kh-origin-mobile-main{
  position:absolute;
  inset:0;
  overflow:hidden;
  background:
    linear-gradient(180deg,rgba(24,18,12,.08) 0%,rgba(24,18,12,.24) 100%),
    url("/assets/images/Food-at-the-Pyramids.webp") center/cover no-repeat;
  z-index:1;
  transform:translateZ(0) scale(calc(.985 + (var(--kh-progress) * .015)));
  transform-origin:center center;
  will-change:transform;
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
}

.kh-origin-mobile-main::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(246,241,234,.03) 0%, rgba(246,241,234,.08) 100%),
    radial-gradient(circle at 70% 20%, rgba(255,255,255,.05), transparent 28%);
  pointer-events:none;
}

/* SWITCH */

@media(max-width:767px){
  .kh-origin-desktop{ display:none; }
  .kh-origin-mobile{ display:block; }
  .kh-origin-mobile-foot{ display:none; }
}

@media(min-width:768px){
  .kh-origin-desktop{ display:block; }
  .kh-origin-mobile{ display:none; }
}

</style>

<!-- =========================
DESKTOP VERSION
========================= -->
<section class="kh-origin-desktop" id="khOriginDesktop">
  <div class="kh-origin-wrap">
    <div class="kh-origin-grid">

      <div class="kh-origin-copy">

        <div class="kh-origin-copy-main">
          <div class="kh-origin-copy-top">
            <div class="kh-origin-number kh-animate">02</div>

            <div class="kh-origin-kicker kh-animate delay1">
              The Origin
            </div>

            <h2 class="kh-origin-title kh-animate delay2">
              Conceived From<br>
              Context,<br>
              Not Convention
              <span class="kh-origin-script">An Authored Idea</span>
            </h2>

            <p class="kh-origin-text kh-animate delay3">
              Biryani Spot Chennai Dosa was created to preserve authentic regional Indian recipes, where fresh spice roasting, clay handi slow-cooking, and traditional tawa skills come together.
            </p>
          </div>
        </div>

        <div class="kh-origin-copy-bottom">
          <div class="kh-origin-divider kh-animate delay3"></div>
          <p class="kh-origin-note kh-animate delay4">
            The concept begins with place first, emotion second, and experience last.
          </p>
        </div>

      </div>

      <div class="kh-origin-visual">
        <div class="kh-origin-mini kh-animate delay2"></div>
        <div class="kh-origin-main kh-animate delay1"></div>

        <div class="kh-origin-card kh-animate delay3">
          <div class="kh-origin-card-label">Concept Note</div>
          <p>
            Rather than taking shortcuts, we honor centuries-old recipes with slow dum patience, pure ghee, and freshly ground masalas crafted daily.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
MOBILE VERSION
========================= -->
<section class="kh-origin-mobile" id="khOriginMobile">
  <div class="kh-origin-mobile-stage">
    
    <div class="kh-origin-mobile-panel kh-origin-mobile-panel--intro">
      <div class="kh-origin-mobile-intro">
        <div class="kh-origin-mobile-intro-inner">
          <div class="kh-origin-mobile-number">02</div>
          <div class="kh-origin-mobile-kicker">The Origin</div>

          <h2 class="kh-origin-mobile-title">
            Conceived From
            <br>Context,
            <br>Not Convention
            <span class="kh-origin-mobile-script">An Authored Idea</span>
          </h2>

          <p class="kh-origin-mobile-lead">
            Biryani Spot Chennai Dosa was created to preserve authentic regional Indian recipes, where fresh spice roasting, clay handi slow-cooking, and traditional tawa skills come together.
          </p>
        </div>
      </div>

      <div class="kh-origin-mobile-foot">
        <div class="kh-origin-mobile-divider"></div>
        <p class="kh-origin-mobile-note">
          The concept begins with place first, emotion second, and experience last.
        </p>
      </div>
    </div>

    <div class="kh-origin-mobile-panel kh-origin-mobile-panel--visual">
      <div class="kh-origin-mobile-visual">
        <div class="kh-origin-mobile-main"></div>
      </div>
    </div>

  </div>
</section>

<script type="text/javascript">
(function(){

  /* =========================
  DESKTOP REVEAL
  ========================= */
  const desktopSection = document.getElementById('khOriginDesktop');
  if(desktopSection){
    const elements = desktopSection.querySelectorAll('.kh-animate');
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

  /* =========================
  MOBILE STICKY TRANSITION
  ========================= */
  const mobileSection = document.getElementById('khOriginMobile');
  if(mobileSection){

    let ticking = false;
    let rafId = null;
    let currentProgress = 0;
    let targetProgress = 0;

    function easeInOutCubic(t){
      return t < 0.5
        ? 4 * t * t * t
        : 1 - Math.pow(-2 * t + 2, 3) / 2;
    }

    function measureTarget(){
      const rect = mobileSection.getBoundingClientRect();
      const viewportH = window.innerHeight || document.documentElement.clientHeight;
      const totalScrollable = Math.max(1, rect.height - viewportH);
      const passed = Math.min(Math.max(-rect.top, 0), totalScrollable);
      const raw = passed / totalScrollable;
      targetProgress = easeInOutCubic(Math.min(Math.max(raw, 0), 1));
      ticking = false;
    }

    function animateProgress(){
      currentProgress += (targetProgress - currentProgress) * 0.12;

      if(Math.abs(targetProgress - currentProgress) < 0.0005){
        currentProgress = targetProgress;
      }

      mobileSection.style.setProperty('--kh-progress', currentProgress.toFixed(4));

      if(Math.abs(targetProgress - currentProgress) > 0.0005){
        rafId = window.requestAnimationFrame(animateProgress);
      } else {
        rafId = null;
      }
    }

    function requestUpdate(){
      if(!ticking){
        window.requestAnimationFrame(measureTarget);
        ticking = true;
      }
      if(!rafId){
        rafId = window.requestAnimationFrame(animateProgress);
      }
    }

    window.addEventListener('scroll', requestUpdate, { passive:true });
    window.addEventListener('resize', requestUpdate, { passive:true });
    window.addEventListener('orientationchange', requestUpdate, { passive:true });
    requestUpdate();
  }

})();
</script>
				</div>
				</div>
		<div class="elementor-element elementor-element-5da5a72 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="5da5a72" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-408031a elementor-widget elementor-widget-html" data-id="408031a" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<style>
/* =========================
KHUFUS — MISSION / VISION
FINAL CLEANED CARDS ONLY
========================= */

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

@import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap');

/* =========================
CENTER LOGO (FIXED LAYERS)
========================= */

.kh-curtain-panel::after{
  content:"";
  position:absolute;
  top:50%;
  left:50%;
  width:50px;
  height:50px;
  transform:translate(-50%,-50%);
  background:url("/assets/images/Logo-in-White.svg") center / contain no-repeat;
  opacity:.7;
  pointer-events:none;
  z-index:5;
  filter:brightness(0) saturate(100%) invert(25%) sepia(18%) saturate(740%) hue-rotate(357deg) brightness(93%) contrast(92%);
  transition:opacity .5s cubic-bezier(.22,1,.36,1);
}

.kh-curtain-panel.is-open::after{
  opacity:0;
}

.kh-curtain-mv,
.kh-curtain-mv *{
  box-sizing:border-box;
}

.kh-curtain-mv{
  --kh-bg:#F4EDE4;
  --kh-card:#FAF7F2;
  --kh-card-soft:#F4ECE2;
  --kh-text:#3F2C1F;
  --kh-text-soft:rgba(63,44,31,.74);
  --kh-text-muted:rgba(63,44,31,.54);
  --kh-brown:#4A3424;
  --kh-brown-soft:#6A4C36;
  --kh-line:rgba(63,44,31,.10);
  --kh-shadow:0 28px 60px rgba(18,24,32,.08);

  position:relative;
  width:100%;
  padding:60px;
  overflow:hidden;
  background: #F4EDE4;
}

.kh-curtain-mv::before{
  display:none;
}

.kh-curtain-wrap{
  width:100%;
  margin:0 auto;
  position:relative;
  z-index:2;
}

/* =========================
PANELS
========================= */

.kh-curtain-stage{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:60px;
  align-items:stretch;
  min-height:83vh;
}

.kh-curtain-panel{
  position:relative;
  min-height:83vh;
  border:1px solid rgba(63,44,31,.08);
  overflow:hidden;
  background:linear-gradient(180deg, rgba(250,247,242,.88) 0%, rgba(244,236,226,.78) 100%);
  box-shadow:var(--kh-shadow);
  cursor:pointer;
  isolation:isolate;
  transition:
    transform .65s cubic-bezier(.22,1,.36,1),
    box-shadow .65s cubic-bezier(.22,1,.36,1),
    border-color .65s cubic-bezier(.22,1,.36,1);
}

.kh-curtain-panel:hover{
  transform:translateY(-4px);
  border-color:rgba(106,76,54,.16);
  box-shadow:0 34px 72px rgba(18,24,32,.10);
}

.kh-curtain-panel::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(255,255,255,.20), transparent 40%),
    radial-gradient(circle at 84% 18%, rgba(106,76,54,.04), transparent 22%);
  z-index:0;
  pointer-events:none;
}

/* =========================
TOP RIGHT STATE ICON
========================= */

.kh-curtain-state-icon{
  position:absolute;
  top:30px;
  right:30px;
  width:220px;
  height:220px;
  opacity:0;
  transform:translateY(-8px);
  z-index:20;
  pointer-events:none;
  transition:
    opacity .35s cubic-bezier(.22,1,.36,1),
    transform .35s cubic-bezier(.22,1,.36,1);
  background-color:#5C472B;
  -webkit-mask-repeat:no-repeat;
  mask-repeat:no-repeat;
  -webkit-mask-position:center;
  mask-position:center;
  -webkit-mask-size:contain;
  mask-size:contain;
}

/* ICON TYPE */
.kh-curtain-panel[data-panel="mission"] .kh-curtain-state-icon{
  width:150px;
  height:110px;
  -webkit-mask-image:url("/assets/images/Flying-State.svg");
  mask-image:url("/assets/images/Flying-State.svg");
  -webkit-mask-size:80% auto;
  mask-size:80% auto;
  -webkit-mask-position:center 52%;
  mask-position:center 52%;
}

.kh-curtain-panel[data-panel="vision"] .kh-curtain-state-icon{
  width:90px;
  height:90px;
  -webkit-mask-image:url("/assets/images/Standing-State.svg");
  mask-image:url("/assets/images/Standing-State.svg");
  -webkit-mask-size:95% auto;
  mask-size:95% auto;
  -webkit-mask-position:center 48%;
  mask-position:center 48%;
}

/* ONLY HERE control visibility */
.kh-curtain-panel.is-open .kh-curtain-state-icon{
  opacity:0;
  transform:translateY(0);
}

/* mobile */
@media (max-width:767px){
  .kh-curtain-state-icon{
    top:20px;
    right:20px;
    width:90px;
    height:90px;
  }

  .kh-curtain-panel[data-panel="mission"] .kh-curtain-state-icon{
    width:72px;
    height:72px;
  }

  .kh-curtain-panel[data-panel="vision"] .kh-curtain-state-icon{
    width:82px;
    height:82px;
  }
}

/* =========================
CURTAIN FLAP
========================= */

.kh-curtain-flap{
  position:absolute;
  inset:0;
  z-index:3;
  transform-origin:left center;
  transition:
    transform 1s cubic-bezier(.22,1,.36,1),
    opacity .9s cubic-bezier(.22,1,.36,1),
    box-shadow 1s cubic-bezier(.22,1,.36,1);
  background:
    linear-gradient(90deg, rgba(255,255,255,.32) 0%, rgba(255,255,255,.10) 14%, rgba(255,255,255,0) 26%),
    linear-gradient(180deg, rgba(250,247,242,.97) 0%, rgba(240,232,222,.95) 100%);
  border-right:1px solid rgba(63,44,31,.07);
  box-shadow:18px 0 42px rgba(18,24,32,.06);
}

.kh-curtain-flap::before{
  content:"";
  position:absolute;
  top:0;
  bottom:0;
  left:18px;
  width:1px;
  background:linear-gradient(180deg, transparent 0%, rgba(74,52,36,.12) 14%, rgba(74,52,36,.12) 86%, transparent 100%);
}

.kh-curtain-flap::after{
  content:"";
  position:absolute;
  top:0;
  bottom:0;
  left:34px;
  width:1px;
  background:linear-gradient(180deg, transparent 0%, rgba(106,76,54,.08) 18%, rgba(106,76,54,.08) 82%, transparent 100%);
}

.kh-curtain-panel.is-open .kh-curtain-flap{
  transform:perspective(1800px) rotateY(-88deg) translateX(-10%);
  opacity:.92;
  box-shadow:32px 0 58px rgba(18,24,32,.03);
}

/* =========================
FRONT / CLOSED STATE
========================= */

.kh-curtain-label{
  position:absolute;
  top:34px;
  left:34px;
  z-index:4;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  font-weight:500;
  color:var(--kh-brown-soft);
  transition:
    transform .8s cubic-bezier(.22,1,.36,1),
    opacity .5s cubic-bezier(.22,1,.36,1),
    visibility .5s cubic-bezier(.22,1,.36,1);
}

.kh-curtain-panel.is-open .kh-curtain-label{
  transform:translateX(12px);
  opacity:0;
  visibility:hidden;
}

.kh-curtain-front-title{
  position:absolute;
  left:34px;
  bottom:34px;
  right:34px;
  z-index:4;
  margin:0;
  font-family:"IvyOraDisplay",serif;
  font-weight:300;
  font-size:clamp(28px,2.6vw,42px);
  line-height:.98;
  letter-spacing:.015em;
  text-transform:uppercase;
  color:var(--kh-brown);
  transition:
    transform .6s cubic-bezier(.22,1,.36,1),
    opacity .45s cubic-bezier(.22,1,.36,1),
    visibility .45s cubic-bezier(.22,1,.36,1);
}

.kh-curtain-front-script{
  display:block;
  margin-top:8px;
  margin-left:4px;
  font-family:"GoldenHopes",cursive;
  font-size:clamp(22px,1.8vw,32px);
  line-height:.95;
  color:var(--kh-brown-soft);
  text-transform:capitalize;
  transform:rotate(-2deg);
  transform-origin:left center;
}

.kh-curtain-panel.is-open .kh-curtain-front-title{
  transform:translateX(20px);
  opacity:0;
  visibility:hidden;
}

/* =========================
REVEALED CONTENT
========================= */

.kh-curtain-content{
  position:relative;
  z-index:2;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:flex-end;
  padding:38px 38px 34px 68px;
}

.kh-curtain-body{
  max-width:420px;
  transform:translateY(18px);
  opacity:0;
  transition:
    transform .9s cubic-bezier(.22,1,.36,1) .18s,
    opacity .9s cubic-bezier(.22,1,.36,1) .18s;
}

.kh-curtain-panel.is-open .kh-curtain-body{
  transform:translateY(0);
  opacity:1;
}

.kh-curtain-inner-kicker{
  display:inline-block;
  margin:0 0 12px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.22em;
  text-transform:uppercase;
  font-weight:500;
  color:var(--kh-brown-soft);
}

.kh-curtain-inner-title{
  margin:0;
  font-family:"IvyOraDisplay",serif;
  font-weight:300;
  font-size:clamp(24px,2vw,34px);
  line-height:1;
  letter-spacing:.015em;
  text-transform:uppercase;
  color:var(--kh-brown);
}

.kh-curtain-inner-subheading{
  display:block;
  margin-top:8px;
  margin-left:4px;
  font-family:"GoldenHopes",cursive;
  font-size:clamp(22px,1.8vw,30px);
  line-height:.95;
  color:var(--kh-brown-soft);
  text-transform:capitalize;
  transform:rotate(-2deg);
  transform-origin:left center;
}

.kh-curtain-inner-text{
  margin:14px 0 0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.82;
  font-weight:300;
  color:var(--kh-text-soft);
}

.kh-curtain-detail{
  margin-top:18px;
  padding-top:12px;
  border-top:1px solid var(--kh-line);
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.20em;
  text-transform:uppercase;
  color:var(--kh-text-muted);
}

/* =========================
ETCH (REPLACED WITH NEW PATTERN)
========================= */

.kh-curtain-etch{
  position:absolute;
  inset:auto 0 0 auto;
  width:180px;
  height:180px;
  z-index:1;
  opacity:.1;
  pointer-events:none;
  background-color:#8A715A;
  -webkit-mask:url("/assets/images/BG-Pattern.svg") no-repeat center / contain;
  mask:url("/assets/images/BG-Pattern.svg") no-repeat center / contain;
}

/* =========================
ENTRANCE REVEAL
========================= */

.kh-curtain-reveal{
  opacity:0;
  transform:translateY(34px);
  filter:blur(2px);
  transition:
    opacity 1s cubic-bezier(.22,1,.36,1),
    transform 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
}

.kh-curtain-reveal.is-visible{
  opacity:1;
  transform:none;
  filter:blur(0);
}

.kh-curtain-delay-1{ transition-delay:.08s; }
.kh-curtain-delay-2{ transition-delay:.16s; }

/* =========================
RESPONSIVE
========================= */

@media (max-width:1180px){
  .kh-curtain-mv{
    padding:60px 28px;
  }

  .kh-curtain-stage{
    min-height:auto;
  }

  .kh-curtain-panel{
    min-height:560px;
  }

  .kh-curtain-content{
    padding:34px 28px 28px 54px;
  }
}

@media (max-width:860px){
  .kh-curtain-stage{
    grid-template-columns:1fr;
    gap:16px;
  }

  .kh-curtain-panel{
    min-height:500px;
  }
}

@media (max-width:767px){

  .kh-curtain-mv{
    padding:30px;
  }

  .kh-curtain-stage{
    grid-template-columns:1fr;
    gap:20px;
  }

  .kh-curtain-panel{
    min-height:460px;
  }

  .kh-curtain-label{
    top:30px;
    left:30px;
    font-size:9px;
    letter-spacing:.22em;
  }

  .kh-curtain-front-title{
    left:30px;
    right:30px;
    bottom:30px;
    font-size:28px;
    line-height:.98;
  }

  .kh-curtain-front-script{
    font-size:20px;
    margin-top:6px;
  }

  .kh-curtain-content{
    padding:30px;
  }

  .kh-curtain-inner-kicker{
    font-size:9px;
    letter-spacing:.20em;
    margin-bottom:10px;
  }

  .kh-curtain-inner-title{
    font-size:24px;
    line-height:1.02;
  }

  .kh-curtain-inner-subheading{
    font-size:20px;
    margin-top:6px;
  }

  .kh-curtain-inner-text{
    font-size:12.5px;
    line-height:1.7;
    margin-top:12px;
  }

  .kh-curtain-detail{
    font-size:9px;
    margin-top:16px;
    padding-top:10px;
  }

  .kh-curtain-flap::before{
    left:14px;
  }

  .kh-curtain-flap::after{
    left:26px;
  }

  .kh-curtain-etch{
    width:100px;
    height:100px;
    opacity:.08;
  }

  .kh-curtain-panel.is-open .kh-curtain-flap{
    transform:perspective(1400px) rotateY(-86deg) translateX(-6%);
  }
}
</style>

<section class="kh-curtain-mv" id="khCurtainMV">
  <div class="kh-curtain-wrap">

    <div class="kh-curtain-stage">

      <article class="kh-curtain-panel kh-curtain-reveal kh-curtain-delay-1 is-open" data-panel="mission" tabindex="0" role="button" aria-pressed="true">
        <div class="kh-curtain-flap"></div>
        <div class="kh-curtain-label">01 / Mission</div>

        <h3 class="kh-curtain-front-title">
          Mission
          <span class="kh-curtain-front-script">Crafted With Restraint</span>
        </h3>

        <div class="kh-curtain-content">
          <div class="kh-curtain-body">
            <div class="kh-curtain-inner-kicker">Present Purpose</div>
            <h4 class="kh-curtain-inner-title">
              To Create An Experience Defined By Atmosphere, Precision, And Emotional Weight.
              <span class="kh-curtain-inner-subheading">Presence Shaped With Intention</span>
            </h4>
            <p class="kh-curtain-inner-text">
              Biryani Spot Chennai Dosa exists to celebrate regional Indian cuisine with authentic ingredients, pure ghee, stone-ground masalas, and warm family dining.
            </p>
            <div class="kh-curtain-detail">Atmosphere / Restraint / Memory</div>
          </div>
        </div>

        <div class="kh-curtain-etch" aria-hidden="true"></div>
        <div class="kh-curtain-state-icon" aria-hidden="true"></div>
      </article>

      <article class="kh-curtain-panel kh-curtain-reveal kh-curtain-delay-2" data-panel="vision" tabindex="0" role="button" aria-pressed="false">
        <div class="kh-curtain-flap"></div>
        <div class="kh-curtain-label">02 / Vision</div>

        <h3 class="kh-curtain-front-title">
          Vision
          <span class="kh-curtain-front-script">Toward Timeless Relevance</span>
        </h3>

        <div class="kh-curtain-content">
          <div class="kh-curtain-body">
            <div class="kh-curtain-inner-kicker">Long Horizon</div>
            <h4 class="kh-curtain-inner-title">
              To Become A Defining Cultural Destination Where Place, Design, And Hospitality Move As One.
              <span class="kh-curtain-inner-subheading">A Destination With Gravity</span>
            </h4>
            <p class="kh-curtain-inner-text">
              Our vision is to share the rich culinary heritage of South India across Northern California, delivering authentic flavors and heartfelt hospitality that stay in your memory.
            </p>
            <div class="kh-curtain-detail">Destination / Identity / Legacy</div>
          </div>
        </div>

        <div class="kh-curtain-etch" aria-hidden="true"></div>
        <div class="kh-curtain-state-icon" aria-hidden="true"></div>
      </article>

    </div>

  </div>
</section>

<script type="text/javascript">
(function(){
  const section = document.getElementById('khCurtainMV');
  if(!section) return;

  const reveals = section.querySelectorAll('.kh-curtain-reveal');
  if(reveals.length){
    const observer = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('is-visible');
        }
      });
    }, {
      threshold:0.14,
      rootMargin:"0px 0px -8% 0px"
    });

    reveals.forEach((el)=>observer.observe(el));
  }

  const panels = Array.from(section.querySelectorAll('.kh-curtain-panel'));
  if(!panels.length) return;

  function openPanel(target){
    panels.forEach((panel)=>{
      const isActive = panel === target;
      panel.classList.toggle('is-open', isActive);
      panel.setAttribute('aria-pressed', isActive ? 'true' : 'false');
    });
  }

  panels.forEach((panel)=>{
    panel.addEventListener('mouseenter', ()=> openPanel(panel));
    panel.addEventListener('click', ()=> openPanel(panel));
    panel.addEventListener('focus', ()=> openPanel(panel));

    panel.addEventListener('keydown', (e)=>{
      if(e.key === 'Enter' || e.key === ' '){
        e.preventDefault();
        openPanel(panel);
      }
    });
  });
})();
</script>				</div>
				</div>
		<div class="elementor-element elementor-element-aae47e0 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="aae47e0" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-12f9800 elementor-widget elementor-widget-html" data-id="12f9800" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
					<style>
/* =========================
KHUFUS - ARTISTIC TIMELINE
DESKTOP UNTOUCHED
MOBILE = LOCKED INTRO, THEN INTERNAL TIMELINE SCROLL
========================= */

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

@import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500&display=swap');

.kh-timeline-pin,
.kh-timeline-pin *{
  box-sizing:border-box;
}

.kh-timeline-pin{
  position:relative;
  width:100%;
  height:220vh;
}

.kh-timeline-sec{
  --kh-bg:#F4EDE4;
  --kh-bg-soft:#EFE5D8;
  --kh-cream:#FAF7F2;
  --kh-text:#3F2C1F;
  --kh-text-soft:rgba(63,44,31,.74);
  --kh-text-muted:rgba(63,44,31,.56);
  --kh-brown:#4A3424;
  --kh-brown-soft:#6A4C36;
  --kh-line:rgba(63,44,31,.12);
  --kh-shadow:0 24px 60px rgba(18,24,32,.08);

  position:sticky;
  top:0;
  width:100%;
  height:100vh;
  min-height:100vh;
  padding:60px;
  overflow:hidden;
  background: #F4EDE4;
}

.kh-timeline-sec::before{
  display:none;
}

.kh-timeline-wrap{
  width:100%;
  max-width:none;
  height:100%;
  margin:0;
  position:relative;
  z-index:2;
}

/* =========================
SUBTLE BRANDING SKETCHES
========================= */

.kh-egypt-sketch{ display:none !important; }

.kh-egypt-sketch svg{
  width:100%;
  height:100%;
  display:block;
}

.kh-egypt-sketch path,
.kh-egypt-sketch circle,
.kh-egypt-sketch ellipse,
.kh-egypt-sketch line{
  stroke:#8C735C;
  stroke-width:1.15;
  fill:none;
  stroke-linecap:round;
  stroke-linejoin:round;
}

.kh-egypt-sketch--ankh{
  width:74px;
  height:102px;
  top:12px;
  left:8px;
  transform:rotate(-10deg);
}

.kh-egypt-sketch--eye{
  width:120px;
  height:70px;
  top:250px;
  right:24px;
  transform:rotate(7deg);
  opacity:.045;
}

.kh-egypt-sketch--scarab{
  width:94px;
  height:104px;
  bottom:120px;
  right:6px;
  transform:rotate(12deg);
  opacity:.045;
}

.kh-egypt-sketch--lotus{
  width:100px;
  height:108px;
  bottom:24px;
  left:18px;
  transform:rotate(-8deg);
  opacity:.045;
}

.kh-egypt-sketch--sun{
  width:70px;
  height:70px;
  top:18px;
  left:52%;
  transform:translateX(-50%);
  opacity:.04;
}

/* =========================
LAYOUT
========================= */

.kh-timeline-grid{
  display:grid;
  grid-template-columns:minmax(300px,390px) minmax(0,1fr);
  gap:64px;
  align-items:stretch;
  height:100%;
}

/* =========================
LEFT COLUMN
========================= */

.kh-timeline-intro{
  position:relative;
  max-width:360px;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  z-index:3;
}

.kh-timeline-intro-main{
  flex:1 1 auto;
  display:flex;
  flex-direction:column;
  justify-content:center;
}

.kh-timeline-top{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
}

.kh-timeline-bottom{
  display:flex;
  flex-direction:column;
  align-items:flex-start;
  justify-content:flex-end;
  margin-top:auto;
  padding-bottom:0;
}

.kh-timeline-number{
  position:absolute;
  top:-55px;
  left:0;
  z-index:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(78px,8vw,146px);
  color:rgba(92,71,43,.08);
  line-height:.8;
  letter-spacing:.02em;
  pointer-events:none;
  user-select:none;
}

.kh-timeline-kicker{
  display:inline-block;
  margin:0 0 12px;
  position:relative;
  z-index:2;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.28em;
  text-transform:uppercase;
  font-weight:400;
  color:#6A4C36;
}

.kh-timeline-title{
  margin:0;
  position:relative;
  z-index:2;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(28px,2.2vw,40px);
  line-height:.98;
  letter-spacing:.015em;
  text-transform:uppercase;
  color:#3F2C1F;
  max-width:460px;
}

.kh-timeline-script{
  display:inline-block;
  white-space:nowrap;
  margin-top:0px;
  margin-left:8px;
  font-family:"GoldenHopes", cursive;
  font-size:clamp(22px,1.7vw,30px);
  line-height:1;
  letter-spacing:.03em;
  text-transform:capitalize;
  color:#6A4C36;
  transform:rotate(-2deg);
  transform-origin:left center;
  opacity:.96;
}

.kh-timeline-lead{
  margin:14px 0 0;
  max-width:470px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.78;
  font-weight:300;
  color:rgba(63,44,31,.76);
}

.kh-timeline-meta{
  margin-top:0;
  padding-top:12px;
  border-top:1px solid var(--kh-line);
  max-width:390px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:rgba(63,44,31,.60);
}

/* =========================
RIGHT TIMELINE COLUMN
========================= */

.kh-timeline-column{
  position:relative;
  height:calc(100% + 120px);
  margin-top:-60px;
  margin-bottom:-60px;
  padding-top:60px;
  padding-bottom:60px;
  overflow-x:hidden;
  overflow-y:hidden;
}

.kh-timeline-line{
  position:absolute;
  top:0;
  bottom:0;
  left:50%;
  width:1px;
  transform:translateX(-50%);
  background:linear-gradient(180deg, rgba(63,44,31,.08) 0%, rgba(63,44,31,.12) 100%);
}

.kh-timeline-progress{
  position:absolute;
  top:0;
  left:50%;
  width:2px;
  height:0;
  transform:translateX(-50%);
  background:linear-gradient(180deg, rgba(106,76,54,.16) 0%, rgba(106,76,54,.72) 100%);
  box-shadow:0 0 16px rgba(106,76,54,.10);
  will-change:height;
}

.kh-timeline-list{
  position:relative;
  display:grid;
  gap:42px;
  padding:24px 28px 0 28px;
  margin:-24px -28px 0 -28px;
  will-change:transform;
  transform:translate3d(0,0,0);
}

.kh-timeline-list::after{
  content:"";
  display:block;
  height:60px;
}

.kh-timeline-list,
.kh-tl-item,
.kh-tl-card{
  overflow:visible;
}

/* =========================
TIMELINE ITEM
========================= */

.kh-tl-item{
  position:relative;
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:56px;
  align-items:center;
  min-height:220px;
}

.kh-tl-item:nth-child(odd) .kh-tl-card{
  grid-column:1;
}

.kh-tl-item:nth-child(even) .kh-tl-card{
  grid-column:2;
}

.kh-tl-item:nth-child(even) .kh-tl-card-inner{
  margin-left:auto;
}

.kh-tl-point{
  position:absolute;
  left:calc(50% + 1px);
  top:50%;
  transform:translate(-50%,-50%);
  width:100px;
  height:100px;
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:3;
}

.kh-tl-point::before{
  content:"";
  position:absolute;
  width:14px;
  height:14px;
  border-radius:50%;
  background:#D8C6AF;
  border:1px solid rgba(74,52,36,.14);
  box-shadow:0 0 0 10px rgba(250,247,242,.58);
  z-index:2;
}

.kh-tl-point::after{
  content:"";
  position:absolute;
  width:62px;
  height:62px;
  border-radius:50%;
  border:1px solid rgba(106,76,54,.10);
  background:radial-gradient(circle, rgba(250,247,242,.42) 0%, rgba(250,247,242,0) 72%);
}

.kh-tl-step{
  position:absolute;
  left:50%;
  top:35%;
  font-family:"IvyOraDisplay", serif;
  font-size:30px;
  line-height:1;
  color:rgba(106,76,54,.16);
  transform:translate(-50%,-30px);
  pointer-events:none;
}

.kh-tl-card{
  position:relative;
  z-index:2;
}

.kh-tl-card-inner{
  width:min(100%,470px);
  padding:28px 28px 24px;
  position:relative;
  overflow:hidden;
  background:#FAF7F2;
  border:1px solid rgba(63,44,31,.08);
  box-shadow:0 8px 24px rgba(63,44,31,.04);
}

.kh-tl-card-inner::before{
  display:none;
}

.kh-tl-label{
  display:inline-block;
  margin:0 0 12px;
  position:relative;
  z-index:2;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  font-weight:500;
  color:var(--kh-brown-soft);
}

.kh-tl-heading{
  margin:0;
  position:relative;
  z-index:2;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(24px,2vw,34px);
  line-height:1;
  text-transform:uppercase;
  letter-spacing:.015em;
  color:var(--kh-brown);
}

.kh-tl-script{
  display:block;
  margin-top:6px;
  margin-left:3px;
  font-family:"GoldenHopes", cursive;
  font-size:clamp(24px,1.8vw,32px);
  line-height:1;
  color:var(--kh-brown-soft);
  text-transform:capitalize;
  transform:rotate(-2deg);
  transform-origin:left center;
}

.kh-tl-text{
  margin:14px 0 0;
  max-width:360px;
  position:relative;
  z-index:2;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.82;
  font-weight:300;
  color:var(--kh-text-soft);
}

.kh-tl-meta{
  margin-top:18px;
  padding-top:12px;
  border-top:1px solid var(--kh-line);
  position:relative;
  z-index:2;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.20em;
  text-transform:uppercase;
  color:var(--kh-text-muted);
}

/* =========================
OPPOSITE SIDE ICON
========================= */

.kh-tl-opposite{ display: none !important; }

.kh-tl-item:nth-child(odd) .kh-tl-opposite{ display: none !important; }

.kh-tl-item:nth-child(even) .kh-tl-opposite{ display: none !important; }

.kh-tl-opposite-icon{ display: none !important; }

.kh-tl-opposite-icon--chapter-1{
  -webkit-mask-image:url("/assets/images/Flying-State.svg");
  mask-image:url("/assets/images/Flying-State.svg");
}

.kh-tl-opposite-icon--chapter-2{
  -webkit-mask-image:url("/assets/images/Plants-Icon.svg");
  mask-image:url("/assets/images/Plants-Icon.svg");
}

.kh-tl-opposite-icon--chapter-3{
  -webkit-mask-image:url("/assets/images/Fish-Icon.svg");
  mask-image:url("/assets/images/Fish-Icon.svg");
}

.kh-tl-opposite-icon--chapter-4{
  -webkit-mask-image:url("/assets/images/Pottery-Icon.svg");
  mask-image:url("/assets/images/Pottery-Icon.svg");
}

.kh-tl-opposite-icon--chapter-5{
  -webkit-mask-image:url("/assets/images/Standing-State.svg");
  mask-image:url("/assets/images/Standing-State.svg");
}

/* =========================
ANIMATION
========================= */

.kh-tl-animate{
  opacity:0;
  filter:blur(2px);
  transition:
    opacity 1s cubic-bezier(.22,1,.36,1),
    transform 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
  will-change:opacity, transform, filter;
}

.kh-tl-left{
  transform:translate3d(-34px,28px,0);
}

.kh-tl-right{
  transform:translate3d(34px,28px,0);
}

.kh-tl-center{
  transform:translate3d(-50%,-50%,0) scale(.96);
}

.kh-tl-icon-left{
  transform:translate3d(-24px,18px,0);
}

.kh-tl-icon-right{
  transform:translate3d(24px,18px,0);
}

.kh-tl-animate.is-visible{
  opacity:1;
  filter:blur(0);
}

.kh-tl-left.is-visible,
.kh-tl-right.is-visible,
.kh-tl-icon-left.is-visible,
.kh-tl-icon-right.is-visible{
  transform:none;
}

.kh-tl-center.is-visible{
  transform:translate(-50%,-50%);
}

.kh-delay-1{ transition-delay:.06s; }
.kh-delay-2{ transition-delay:.14s; }
.kh-delay-3{ transition-delay:.22s; }
.kh-delay-4{ transition-delay:.30s; }
.kh-delay-5{ transition-delay:.38s; }

/* =========================
MOBILE INTRO LAYER
========================= */

.kh-timeline-mobile-intro{
  display:none;
}

/* =========================
RESPONSIVE
========================= */

@media (max-width:1180px) and (min-width:768px){
  .kh-timeline-sec{
    padding:60px 28px;
  }

  .kh-timeline-wrap{
    height:auto;
  }

  .kh-timeline-grid{
    grid-template-columns:1fr;
    gap:44px;
    height:auto;
  }

  .kh-timeline-intro{
    position:relative;
    top:auto;
    height:auto;
    max-width:680px;
  }

  .kh-timeline-intro-main{
    display:block;
  }

  .kh-timeline-bottom{
    margin-top:18px;
  }

  .kh-timeline-number{
    top:-36px;
  }

  .kh-timeline-column{
    height:auto;
    margin-top:0;
    margin-bottom:0;
    padding-top:0;
    padding-bottom:0;
    overflow:visible;
  }

  .kh-timeline-list{
    padding:0;
    margin:0;
  }

  .kh-timeline-list::after{
    height:60px;
  }

  .kh-timeline-progress{
    display:none;
  }

  .kh-egypt-sketch--ankh{
    top:0;
    left:0;
  }

  .kh-egypt-sketch--eye{
    top:210px;
    right:0;
  }

  .kh-egypt-sketch--sun{
    top:8px;
    left:auto;
    right:12px;
    transform:none;
  }
}

@media (max-width:860px){
  .kh-timeline-column{
    padding-left:18px;
  }

  .kh-timeline-line{
    left:20px;
    transform:none;
  }

  .kh-timeline-list{
    gap:26px;
  }

  .kh-tl-item{
    grid-template-columns:52px 1fr;
    gap:16px;
    min-height:auto;
    align-items:start;
  }

  .kh-tl-card{
    grid-column:2 !important;
  }

  .kh-tl-opposite{ display: none !important; }

  .kh-tl-point{
    position:relative;
    left:auto;
    top:auto;
    transform:none !important;
    grid-column:1;
    width:44px;
    height:120px;
    justify-self:start;
    align-self:start;
  }

  .kh-tl-point::before{
    width:14px;
    height:14px;
    box-shadow:0 0 0 8px rgba(250,247,242,.56);
  }

  .kh-tl-point::after{
    width:44px;
    height:44px;
  }

  .kh-tl-step{
    left:auto;
    top:auto;
    font-size:24px;
    transform:translateY(-22px);
  }

  .kh-tl-card-inner{
    width:100%;
    padding:24px 22px 20px;
    margin-left:0 !important;
  }

  .kh-egypt-sketch--eye{
    display:none;
  }

  .kh-egypt-sketch--scarab{
    right:0;
    bottom:80px;
  }
}

/* =========================
MOBILE ONLY
REAL LOCK + INTRO FADE OUT + TIMELINE APPEARS AFTER
========================= */

@media (max-width:767px){
  .kh-timeline-pin{
    height:220vh !important;
  }

  .kh-timeline-sec{
    position:sticky !important;
    top:0;
    height:100vh !important;
    min-height:100vh !important;
    padding:0 !important;
    overflow:hidden !important;
    --kh-mobile-intro-opacity:1;
    --kh-mobile-intro-shift:0px;
    --kh-mobile-timeline-opacity:0;
  }

  .kh-timeline-wrap{
    height:100%;
  }

  .kh-timeline-grid{
    display:block;
    height:100%;
  }

  .kh-timeline-intro{
    display:none;
  }

  .kh-timeline-mobile-intro{
    display:flex;
    position:absolute;
    inset:30px;
    z-index:5;
    flex-direction:column;
    justify-content:space-between;
    opacity:var(--kh-mobile-intro-opacity);
    transform:translate3d(0,var(--kh-mobile-intro-shift),0);
    transition:opacity .18s linear, transform .18s linear;
    pointer-events:none;
  }

  .kh-timeline-mobile-icon{
    width:130px;
    height:100px;
    background-color:#6A4C36;
    opacity:.18;
    -webkit-mask:url("/assets/images/Flower-Pattern.svg") no-repeat left top / contain;
    mask:url("/assets/images/Flower-Pattern.svg") no-repeat left top / contain;
  }

  .kh-timeline-mobile-copy{
    width:100%;
    max-width:320px;
    margin-top:auto;
    margin-bottom:auto;
    position:relative;
  }

  .kh-timeline-mobile-number{
    position:absolute;
    top:-28px;
    left:0;
    font-family:"IvyOraDisplay", serif;
    font-weight:300;
    font-size:clamp(58px,18vw,92px);
    color:rgba(92,71,43,.08);
    line-height:.8;
    letter-spacing:.02em;
    pointer-events:none;
    user-select:none;
  }

  .kh-timeline-mobile-kicker{
    display:inline-block;
    margin:0 0 10px;
    position:relative;
    z-index:2;
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:9px;
    letter-spacing:.22em;
    text-transform:uppercase;
    font-weight:400;
    color:#6A4C36;
  }

  .kh-timeline-mobile-title{
    margin:0;
    position:relative;
    z-index:2;
    font-family:"IvyOraDisplay", serif;
    font-weight:300;
    font-size:clamp(25px,8vw,34px);
    line-height:1;
    letter-spacing:.015em;
    text-transform:uppercase;
    color:#3F2C1F;
    max-width:320px;
  }

  .kh-timeline-mobile-script{
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
    transform-origin:left center;
    opacity:.96;
  }

  .kh-timeline-mobile-lead{
    margin:14px 0 0;
    max-width:320px;
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:12.5px;
    line-height:1.7;
    font-weight:300;
    color:rgba(63,44,31,.76);
  }

  .kh-timeline-mobile-foot{
    width:100%;
    max-width:320px;
  }

  .kh-timeline-mobile-meta{
    margin:0;
    padding-top:10px;
    border-top:1px solid var(--kh-line);
    font-family:"Bricolage Grotesque",sans-serif;
    font-size:9px;
    letter-spacing:.18em;
    text-transform:uppercase;
    color:rgba(63,44,31,.60);
  }

  .kh-timeline-column{
    position:absolute;
    top:0;
    right:30px;
    bottom:0;
    left:30px;
    height:auto;
    margin:0;
    padding:0;
    overflow:hidden;
    opacity:var(--kh-mobile-timeline-opacity);
    transition:opacity .12s linear;
  }

  .kh-timeline-line{
    left:18px;
    transform:none;
    top:0;
    bottom:0;
  }

  .kh-timeline-progress{
    display:block;
    left:18px;
    transform:none;
    top:0;
  }

  .kh-timeline-list{
    gap:20px;
    padding:300px 0 30px 0px;
    margin:0;
    will-change:transform;
    transform:translate3d(0,0,0);
  }

  .kh-timeline-list::after{
    height:0;
  }

  .kh-tl-item{
    grid-template-columns:44px 1fr;
    gap:14px;
    min-height:auto;
    align-items:start;
  }

  .kh-tl-card{
    grid-column:2 !important;
  }

  .kh-tl-opposite{ display: none !important; }

  .kh-tl-point{
    position:relative;
    left:auto;
    top:auto;
    transform:none !important;
    grid-column:1;
    width:32px;
    height:108px;
    justify-self:start;
    align-self:start;
    margin-left:3px;
  }



  .kh-tl-point::before{
    width:12px;
    height:12px;
    box-shadow:0 0 0 7px rgba(250,247,242,.56);
  }

  .kh-tl-point::after{
    width:36px;
    height:36px;
  }

  .kh-tl-step{
    left:auto;
    top:auto;
    font-size:22px;
    transform:translateY(-20px);
    margin-left:0px;
  }

  .kh-tl-card-inner{
    width:100%;
    padding:22px 20px 18px;
    margin-left:0 !important;
  }

  .kh-tl-label{
    font-size:9px;
    letter-spacing:.20em;
    margin-bottom:10px;
  }

  .kh-tl-heading{
    font-size:24px;
    line-height:1.02;
  }

  .kh-tl-script{
    font-size:20px;
    margin-top:6px;
  }

  .kh-tl-text{
    font-size:12.5px;
    line-height:1.7;
    margin-top:12px;
  }

  .kh-tl-meta{
    font-size:9px;
    letter-spacing:.18em;
    margin-top:16px;
    padding-top:10px;
  }

  .kh-egypt-sketch--ankh{
    width:52px;
    height:72px;
    top:4px;
    left:-2px;
    opacity:.045;
  }

  .kh-egypt-sketch--sun{
    width:52px;
    height:52px;
    right:4px;
    top:0;
    left:auto;
    transform:none;
    opacity:.038;
  }

  .kh-egypt-sketch--scarab{
    width:64px;
    height:72px;
    right:-4px;
    bottom:66px;
    opacity:.04;
  }

  .kh-egypt-sketch--lotus{
    width:70px;
    height:76px;
    left:-4px;
    bottom:8px;
    opacity:.04;
  }
}
</style>

<div class="kh-timeline-pin" id="khTimelinePin">
  <section class="kh-timeline-sec" id="khTimelineSec">
    <div class="kh-timeline-wrap">

      <div class="kh-egypt-sketch kh-egypt-sketch--ankh" aria-hidden="true">
        <svg viewBox="0 0 80 110">
          <ellipse cx="40" cy="23" rx="17" ry="18"></ellipse>
          <line x1="40" y1="41" x2="40" y2="95"></line>
          <line x1="20" y1="58" x2="60" y2="58"></line>
        </svg>
      </div>

      <div class="kh-egypt-sketch kh-egypt-sketch--eye" aria-hidden="true">
        <svg viewBox="0 0 140 80">
          <path d="M8 40 C24 20, 44 12, 70 12 C96 12, 116 20, 132 40"></path>
          <path d="M8 40 C24 60, 44 68, 70 68 C96 68, 116 60, 132 40"></path>
          <circle cx="70" cy="40" r="10"></circle>
          <path d="M38 56 C42 64, 50 68, 58 68"></path>
          <path d="M92 56 C100 56, 108 60, 116 68"></path>
        </svg>
      </div>

      <div class="kh-egypt-sketch kh-egypt-sketch--scarab" aria-hidden="true">
        <svg viewBox="0 0 110 120">
          <ellipse cx="55" cy="62" rx="20" ry="28"></ellipse>
          <path d="M55 34 C44 28, 40 18, 40 10"></path>
          <path d="M55 34 C66 28, 70 18, 70 10"></path>
          <line x1="35" y1="58" x2="15" y2="48"></line>
          <line x1="35" y1="68" x2="12" y2="70"></line>
          <line x1="35" y1="78" x2="18" y2="92"></line>
          <line x1="75" y1="58" x2="95" y2="48"></line>
          <line x1="75" y1="68" x2="98" y2="70"></line>
          <line x1="75" y1="78" x2="92" y2="92"></line>
          <line x1="55" y1="34" x2="55" y2="90"></line>
        </svg>
      </div>

      <div class="kh-egypt-sketch kh-egypt-sketch--lotus" aria-hidden="true">
        <svg viewBox="0 0 110 120">
          <path d="M55 94 C55 74, 55 58, 55 40"></path>
          <path d="M55 42 C44 28, 40 16, 44 8 C54 14, 58 24, 55 42"></path>
          <path d="M55 42 C66 28, 70 16, 66 8 C56 14, 52 24, 55 42"></path>
          <path d="M55 46 C36 34, 22 30, 12 34 C22 48, 34 52, 55 46"></path>
          <path d="M55 46 C74 34, 88 30, 98 34 C88 48, 76 52, 55 46"></path>
          <path d="M55 50 C42 46, 30 48, 24 56 C34 62, 44 62, 55 50"></path>
          <path d="M55 50 C68 46, 80 48, 86 56 C76 62, 66 62, 55 50"></path>
        </svg>
      </div>

      <div class="kh-egypt-sketch kh-egypt-sketch--sun" aria-hidden="true">
        <svg viewBox="0 0 90 90">
          <circle cx="45" cy="45" r="16"></circle>
          <line x1="45" y1="8" x2="45" y2="20"></line>
          <line x1="45" y1="70" x2="45" y2="82"></line>
          <line x1="8" y1="45" x2="20" y2="45"></line>
          <line x1="70" y1="45" x2="82" y2="45"></line>
          <line x1="18" y1="18" x2="26" y2="26"></line>
          <line x1="64" y1="64" x2="72" y2="72"></line>
          <line x1="64" y1="26" x2="72" y2="18"></line>
          <line x1="18" y1="72" x2="26" y2="64"></line>
        </svg>
      </div>

      <!-- MOBILE INTRO ONLY -->
      <div class="kh-timeline-mobile-intro" id="khTimelineMobileIntro" aria-hidden="true">
        <div class="kh-timeline-mobile-icon"></div>

        <div class="kh-timeline-mobile-copy">
          <div class="kh-timeline-mobile-number">04</div>

          <div class="kh-timeline-mobile-kicker">Experience Timeline</div>

          <h2 class="kh-timeline-mobile-title">
            An Experience
            <br>That Unfolds
            <br>In Chapters
            <span class="kh-timeline-mobile-script">A Measured Sequence</span>
          </h2>

          <p class="kh-timeline-mobile-lead">
            Every meal should feel like a culinary journey, where the aroma of roasted spices and the sizzle of the tawa create lasting memories.
          </p>
        </div>

        <div class="kh-timeline-mobile-foot">
          <div class="kh-timeline-mobile-meta">
            Arrival / Threshold / Presence / Ritual / Recall
          </div>
        </div>
      </div>

      <div class="kh-timeline-grid">

        <div class="kh-timeline-intro">
          <div class="kh-timeline-intro-main">
            <div class="kh-timeline-top">
              <div class="kh-timeline-number kh-tl-animate">04</div>

              <div class="kh-timeline-kicker kh-tl-animate kh-tl-left">Experience Timeline</div>

              <h2 class="kh-timeline-title kh-tl-animate kh-tl-left kh-delay-1">
                An Experience
                <br>That Unfolds
                <br>In Chapters
                <span class="kh-timeline-script">A Measured Sequence</span>
              </h2>

              <p class="kh-timeline-lead kh-tl-animate kh-tl-left kh-delay-2">
                Every meal should feel like a culinary journey, where the aroma of roasted spices and the sizzle of the tawa create lasting memories.
              </p>
            </div>
          </div>

          <div class="kh-timeline-bottom">
            <div class="kh-timeline-meta kh-tl-animate kh-tl-left kh-delay-3">
              Arrival / Threshold / Presence / Ritual / Recall
            </div>
          </div>
        </div>

        <div class="kh-timeline-column" id="khTimelineColumn">
          <div class="kh-timeline-line"></div>
          <div class="kh-timeline-progress" id="khTimelineProgress"></div>

          <div class="kh-timeline-list" id="khTimelineList">

            <article class="kh-tl-item">
              <div class="kh-tl-card kh-tl-animate kh-tl-left">
                <div class="kh-tl-card-inner">
                  <div class="kh-tl-label">Chapter One</div>
                  <h3 class="kh-tl-heading">
                    The Approach
                    <span class="kh-tl-script">Anticipation Begins</span>
                  </h3>
                  <p class="kh-tl-text">
                    The experience starts before arrival, shaped by distance, silhouette, and the quiet tension of moving toward authentic heritage.
                  </p>
                  <div class="kh-tl-meta">Approach / Horizon / Expectation</div>
                </div>
              </div>

              <div class="kh-tl-opposite kh-tl-animate kh-tl-icon-right kh-delay-1">
                <div class="kh-tl-opposite-icon kh-tl-opposite-icon--chapter-1"></div>
              </div>

              <div class="kh-tl-point kh-tl-animate kh-tl-center kh-delay-1">
                <div class="kh-tl-step">01</div>
              </div>
            </article>

            <article class="kh-tl-item">
              <div class="kh-tl-opposite kh-tl-animate kh-tl-icon-left kh-delay-1">
                <div class="kh-tl-opposite-icon kh-tl-opposite-icon--chapter-2"></div>
              </div>

              <div class="kh-tl-card kh-tl-animate kh-tl-right">
                <div class="kh-tl-card-inner">
                  <div class="kh-tl-label">Chapter Two</div>
                  <h3 class="kh-tl-heading">
                    The Threshold
                    <span class="kh-tl-script">Entry Becomes Atmosphere</span>
                  </h3>
                  <p class="kh-tl-text">
                    The transition inward should feel deliberate. Materials, scale, and pacing begin to separate the guest from the ordinary world outside.
                  </p>
                  <div class="kh-tl-meta">Entrance / Texture / Stillness</div>
                </div>
              </div>

              <div class="kh-tl-point kh-tl-animate kh-tl-center kh-delay-1">
                <div class="kh-tl-step">02</div>
              </div>
            </article>

            <article class="kh-tl-item">
              <div class="kh-tl-card kh-tl-animate kh-tl-left">
                <div class="kh-tl-card-inner">
                  <div class="kh-tl-label">Chapter Three</div>
                  <h3 class="kh-tl-heading">
                    First Presence
                    <span class="kh-tl-script">Space Reveals Itself</span>
                  </h3>
                  <p class="kh-tl-text">
                    The guest does not consume the setting instantly. It reveals itself through framing, distance, and the measured choreography of the first impression.
                  </p>
                  <div class="kh-tl-meta">View / Scale / Orientation</div>
                </div>
              </div>

              <div class="kh-tl-opposite kh-tl-animate kh-tl-icon-right kh-delay-1">
                <div class="kh-tl-opposite-icon kh-tl-opposite-icon--chapter-3"></div>
              </div>

              <div class="kh-tl-point kh-tl-animate kh-tl-center kh-delay-1">
                <div class="kh-tl-step">03</div>
              </div>
            </article>

            <article class="kh-tl-item">
              <div class="kh-tl-opposite kh-tl-animate kh-tl-icon-left kh-delay-1">
                <div class="kh-tl-opposite-icon kh-tl-opposite-icon--chapter-4"></div>
              </div>

              <div class="kh-tl-card kh-tl-animate kh-tl-right">
                <div class="kh-tl-card-inner">
                  <div class="kh-tl-label">Chapter Four</div>
                  <h3 class="kh-tl-heading">
                    The Ritual
                    <span class="kh-tl-script">Dining Becomes Cadence</span>
                  </h3>
                  <p class="kh-tl-text">
                    Service, table rhythm, and atmosphere merge into something more composed than service alone, a ritual defined by restraint and care.
                  </p>
                  <div class="kh-tl-meta">Pacing / Service / Detail</div>
                </div>
              </div>

              <div class="kh-tl-point kh-tl-animate kh-tl-center kh-delay-1">
                <div class="kh-tl-step">04</div>
              </div>
            </article>

            <article class="kh-tl-item">
              <div class="kh-tl-card kh-tl-animate kh-tl-left">
                <div class="kh-tl-card-inner">
                  <div class="kh-tl-label">Chapter Five</div>
                  <h3 class="kh-tl-heading">
                    Afterglow
                    <span class="kh-tl-script">Memory Lingers Last</span>
                  </h3>
                  <p class="kh-tl-text">
                    The strongest luxury experiences do not end when the table clears. They remain through recall, atmosphere, and the feeling of having passed through something singular.
                  </p>
                  <div class="kh-tl-meta">Departure / Recall / Return</div>
                </div>
              </div>

              <div class="kh-tl-opposite kh-tl-animate kh-tl-icon-right kh-delay-1">
                <div class="kh-tl-opposite-icon kh-tl-opposite-icon--chapter-5"></div>
              </div>

              <div class="kh-tl-point kh-tl-animate kh-tl-center kh-delay-1">
                <div class="kh-tl-step">05</div>
              </div>
            </article>

          </div>
        </div>

      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
(function(){
  const pin = document.getElementById('khTimelinePin');
  const section = document.getElementById('khTimelineSec');
  const list = document.getElementById('khTimelineList');
  const column = document.getElementById('khTimelineColumn');
  const progress = document.getElementById('khTimelineProgress');

  if(!pin || !section || !list || !column || !progress) return;

  const animated = section.querySelectorAll('.kh-tl-animate');

  if(animated.length){
    const observer = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('is-visible');
        }
      });
    },{
      threshold: 0.1,
      rootMargin: "0px 0px -5% 0px"
    });
    animated.forEach((el)=>observer.observe(el));
  }

  const clamp01 = (n) => Math.max(0, Math.min(1, n));

  let maxTranslate = 0;
  let scrollTrackDistance = 0;
  let easedY = 0;
  let rafId = null;

  function measure(){
    const vh = window.innerHeight || 800;
    
    // Total list height
    const listH = list.scrollHeight;
    const colH = column.clientHeight || (vh - 120);

    // Max translation required to bring Chapter 5 comfortably into view
    maxTranslate = Math.max(listH - colH + 120, 0);

    // Dedicated scroll track distance: translation distance + generous reading hold buffer
    const holdBuffer = Math.round(vh * 0.85);
    scrollTrackDistance = maxTranslate + holdBuffer;

    // Set pin wrapper height to 1 viewport + total scroll track distance
    pin.style.setProperty('height', (vh + scrollTrackDistance) + 'px', 'important');
  }

  function tick(){
    rafId = requestAnimationFrame(tick);

    const rect = pin.getBoundingClientRect();
    const vh = window.innerHeight || 800;
    const colH = column.clientHeight || (vh - 120);

    const traveled = -rect.top;

    if (rect.top > 0) {
      // 1. Approaching: sits absolute at top of track
      section.style.position = 'absolute';
      section.style.top = '0px';
      section.style.bottom = 'auto';
      section.style.left = '0px';
      section.style.width = '100%';
      section.style.height = '100vh';
      easedY = 0;
      list.style.transform = 'translate3d(0, 0px, 0)';
      progress.style.height = '0px';
    } else if (rect.bottom < vh) {
      // 3. Completed: sits absolute at bottom of track
      section.style.position = 'absolute';
      section.style.top = 'auto';
      section.style.bottom = '0px';
      section.style.left = '0px';
      section.style.width = '100%';
      section.style.height = '100vh';
      list.style.transform = `translate3d(0, ${-maxTranslate}px, 0)`;
      progress.style.height = colH + 'px';
    } else {
      // 2. Active inside track: fixed in viewport
      section.style.position = 'fixed';
      section.style.top = '0px';
      section.style.bottom = 'auto';
      section.style.left = '0px';
      section.style.width = '100%';
      section.style.height = '100vh';

      const targetY = Math.min(Math.max(traveled, 0), maxTranslate);
      easedY += (targetY - easedY) * 0.18;
      list.style.transform = `translate3d(0, ${-easedY.toFixed(2)}px, 0)`;
      const p = maxTranslate > 0 ? clamp01(easedY / maxTranslate) : 0;
      progress.style.height = (p * colH).toFixed(1) + 'px';
    }
  }

  window.addEventListener('resize', measure, { passive: true });
  window.addEventListener('load', measure);

  measure();
  tick();

  window.addEventListener('beforeunload', function(){
    if(rafId) cancelAnimationFrame(rafId);
  });
})();
</script>				</div>
				</div>
		<div class="elementor-element elementor-element-02286b4 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="02286b4" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-bdb41e5 elementor-widget elementor-widget-html" data-id="bdb41e5" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
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

/* =========================
SHARED
========================= */

.kh-arch-desktop,
.kh-arch-desktop *,
.kh-arch-mobile,
.kh-arch-mobile *{
  box-sizing:border-box;
}

.kh-arch-desktop,
.kh-arch-mobile{
  --kh-bg:#F6F1EA;
  --kh-bg-soft:#F1E9DF;
  --kh-card:rgba(250,247,242,.90);
  --kh-card-soft:rgba(244,236,226,.82);
  --kh-text:#3F2C1F;
  --kh-text-soft:rgba(63,44,31,.76);
  --kh-text-muted:rgba(63,44,31,.60);
  --kh-brown:#3F2C1F;
  --kh-brown-soft:#6A4C36;
  --kh-line:rgba(63,44,31,.12);
  --kh-line-soft:rgba(63,44,31,.08);
}

/* =========================
DESKTOP
UNCHANGED
========================= */

.kh-arch-desktop{
  --kh-arch-main-width:380px;
  --kh-arch-mini-width:188px;
  width:100%;
  height:100vh;
  min-height:100vh;
  padding:60px;
  position:relative;
  overflow:hidden;
  background:linear-gradient(180deg,#F6F1EA 0%,#F1E9DF 100%);
}

.kh-arch-desktop::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    radial-gradient(circle at 15% 20%, rgba(92,71,43,.05), transparent 28%),
    linear-gradient(90deg, rgba(255,255,255,.18), transparent 18%);
  pointer-events:none;
}

.kh-arch-wrap{
  width:100%;
  height:100%;
  position:relative;
  z-index:2;
}

.kh-arch-grid{
  display:grid;
  grid-template-columns:minmax(360px,520px) minmax(0,1fr);
  gap:80px;
  height:100%;
  align-items:center;
}

/* =========================
LEFT VISUAL
========================= */

.kh-arch-visual{
  position:relative;
  height:100%;
}

.kh-arch-main{
  position:absolute;
  left:0;
  bottom:0;
  width:var(--kh-arch-main-width);
  height:100%;
  border-radius:220px 220px 0 0;
  overflow:hidden;
  background:
    linear-gradient(180deg,rgba(24,18,12,.08) 0%,rgba(24,18,12,.24) 100%),
    url("/assets/images/dishes/traditional_thali.webp") center/cover no-repeat;
  box-shadow:0 28px 60px rgba(0,0,0,.14);
}

.kh-arch-main::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(246,241,234,.03) 0%, rgba(246,241,234,.08) 100%),
    radial-gradient(circle at 70% 20%, rgba(255,255,255,.05), transparent 28%);
  pointer-events:none;
}

.kh-arch-mini{
  position:absolute;
  right:calc(100% - var(--kh-arch-main-width) - (var(--kh-arch-mini-width) / 2));
  bottom:0;
  width:var(--kh-arch-mini-width);
  height:240px;
  border-radius:140px 140px 0 0;
  overflow:hidden;
  background:
    linear-gradient(180deg, rgba(106,76,54,.14) 0%, rgba(106,76,54,.26) 100%),
    url("https://upload.wikimedia.org/wikipedia/commons/2/24/Giza_pyramid_complex_%28cropped%29.jpg") center/cover no-repeat;
  box-shadow:0 16px 40px rgba(0,0,0,.08);
}

.kh-arch-mini::before{
  content:"";
  position:absolute;
  inset:0;
  background-color:rgba(247,243,238,.82);
  -webkit-mask:url("/assets/images/Pillar-Icon.svg") no-repeat calc(50% + 6px) calc(50% + 2px) / 38% auto;
  mask:url("/assets/images/Pillar-Icon.svg") no-repeat calc(50% + 6px) calc(50% + 2px) / 38% auto;
  pointer-events:none;
  z-index:2;
}

.kh-arch-card{
  position:absolute;
  right:46px;
  top:54px;
  width:320px;
  background:rgba(250,247,242,.84);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  padding:22px;
  border:1px solid rgba(63,44,31,.08);
  box-shadow:0 22px 44px rgba(0,0,0,.08);
}

.kh-arch-card-label{
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
  margin-bottom:10px;
}

.kh-arch-card p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.76;
  color:rgba(63,44,31,.74);
  font-weight:300;
}

/* =========================
RIGHT COPY
========================= */

.kh-arch-copy{
  position:relative;
  height:100%;
  display:flex;
  align-items:center;
  justify-content:flex-end;
}

.kh-arch-copy-inner{
  position:relative;
  width:100%;
  max-width:560px;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
}

.kh-arch-number{
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

.kh-arch-kicker{
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

.kh-arch-title{
  position:relative;
  z-index:1;
  margin:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(30px,2.5vw,44px);
  line-height:.98;
  text-transform:uppercase;
  color:#3F2C1F;
  max-width:520px;
}

.kh-arch-script{
  display:block;
  margin-top:-2px;
  margin-left:108px;
  font-family:"GoldenHopes", cursive;
  font-size:clamp(22px,1.7vw,30px);
  line-height:1;
  letter-spacing:.03em;
  text-transform:capitalize;
  color:#6A4C36;
  transform:rotate(-2deg);
}

.kh-arch-text{
  margin:16px 0 0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.78;
  color:rgba(63,44,31,.76);
  max-width:500px;
}

.kh-arch-divider{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:24px 0 18px;
}

.kh-arch-details{
  width:100%;
  max-width:540px;
  display:grid;
  grid-template-columns:repeat(2,minmax(0,1fr));
  gap:18px 24px;
}

.kh-arch-detail{
  padding-top:14px;
  border-top:1px solid rgba(63,44,31,.12);
}

.kh-arch-detail h4{
  margin:0 0 8px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
}

.kh-arch-detail p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.72;
  color:rgba(63,44,31,.62);
  max-width:230px;
}

/* =========================
ANIMATION
========================= */

.kh-arch-animate{
  opacity:0;
  transform:translateY(36px);
  transition:
    transform 1s cubic-bezier(.22,1,.36,1),
    opacity 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
  filter:blur(2px);
  will-change:transform, opacity, filter;
}

.kh-arch-animate.show{
  opacity:1;
  transform:none;
  filter:blur(0);
}

.kh-arch-delay1{transition-delay:.10s}
.kh-arch-delay2{transition-delay:.18s}
.kh-arch-delay3{transition-delay:.26s}
.kh-arch-delay4{transition-delay:.34s}

@media(min-width:1400px){
  .kh-arch-desktop{
    --kh-arch-main-width:460px;
  }

  .kh-arch-grid{
    grid-template-columns:minmax(460px,640px) minmax(0,1.08fr);
    gap:64px;
  }

  .kh-arch-copy-inner{
    max-width:680px;
  }

  .kh-arch-title{
    max-width:600px;
  }

  .kh-arch-text{
    max-width:620px;
  }

  .kh-arch-details{
    max-width:620px;
  }

  .kh-arch-detail p{
    max-width:260px;
  }
}

@media(max-width:1100px){

  .kh-arch-desktop{
    height:auto;
    min-height:auto;
    padding:60px 28px;
  }

  .kh-arch-grid{
    grid-template-columns:1fr;
    gap:46px;
    height:auto;
  }

  .kh-arch-visual{
    order:1;
    height:600px;
  }

  .kh-arch-copy{
    order:2;
    height:auto;
    justify-content:flex-start;
  }

  .kh-arch-copy-inner{
    max-width:100%;
  }

  .kh-arch-number{
    top:-22px;
    left:0;
  }

  .kh-arch-main{
    width:var(--kh-arch-main-width);
    height:100%;
    border-radius:180px 180px 0 0;
  }

  .kh-arch-card{
    right:46px;
    top:34px;
  }

  .kh-arch-script{
    margin-left:82px;
  }
}

/* =========================
MOBILE
IMAGE FIRST, THEN CONTENT
FIRST PANEL LAYOUT MATCHES ORIGINAL
========================= */

.kh-arch-mobile{
  display:none;
  position:relative;
  width:100%;
  height:220vh;
  min-height:220vh;
  overflow:clip;
  background:linear-gradient(180deg,#F6F1EA 0%,#F1E9DF 100%);
  --kh-progress:0;
}

.kh-arch-mobile::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    radial-gradient(circle at 18% 14%, rgba(92,71,43,.05), transparent 34%),
    linear-gradient(180deg, rgba(255,255,255,.16), transparent 34%);
  pointer-events:none;
}

.kh-arch-mobile-stage{
  position:sticky;
  top:0;
  width:100%;
  height:100vh;
  overflow:hidden;
}

.kh-arch-mobile-panel{
  position:absolute;
  inset:0;
  padding:30px;
  overflow:hidden;
}

/* PANEL 1 — VISUAL FIRST */

.kh-arch-mobile-panel--visual{
  z-index:3;
  opacity:calc(1 - (var(--kh-progress) * 1.25));
  transform:translate3d(calc(var(--kh-progress) * -5%),0,0);
  will-change:transform, opacity;
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
  transform-style:preserve-3d;
}

.kh-arch-mobile-visual{
  position:relative;
  width:100%;
  height:100%;
}

.kh-arch-mobile-main{
  position:absolute;
  inset:100px 0 100px 0;
  border-radius:160px 160px 0 0;
  overflow:hidden;
  background:
    linear-gradient(180deg,rgba(24,18,12,.08) 0%,rgba(24,18,12,.24) 100%),
    url("/assets/images/dishes/traditional_thali.webp") center/cover no-repeat;
  box-shadow:none;
  z-index:2;
}

.kh-arch-mobile-main::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(246,241,234,.03) 0%, rgba(246,241,234,.08) 100%),
    radial-gradient(circle at 70% 20%, rgba(255,255,255,.05), transparent 28%);
  pointer-events:none;
}

.kh-arch-mobile-mini{
  position:absolute;
  left:9px;
  bottom:100px;
  width:112px;
  height:150px;
  border-radius:102px 102px 0 0;
  overflow:hidden;
  background:#ffffff; /* solid now */
  box-shadow:none;
  z-index:3; /* above image */
  opacity: 20%;
}

/* icon over arc */
.kh-arch-mobile-icon{
  position:absolute;
  left:36px;
  bottom:122px;
  width:58px;
  height:94px;
  background-color:rgba(247,243,238,.96);
  -webkit-mask:url("/assets/images/Pillar-Icon.svg") no-repeat center center / contain;
  mask:url("/assets/images/Pillar-Icon.svg") no-repeat center center / contain;
  pointer-events:none;
  z-index:4;
}

.kh-arch-mobile-card{
  position:absolute;
  width:calc(100% - 140px);
  min-width:220px;
  right:calc(28% - 66px);
  top:84px;
  background:rgba(250,247,242,.90);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  padding:20px 18px;
  border:2px solid rgba(63,44,31,.1);
  box-shadow:0 18px 34px rgba(0,0,0,.06);
  z-index:5;
}

.kh-arch-mobile-card-label{
  margin:0 0 10px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:9px;
  letter-spacing:.2em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
}

.kh-arch-mobile-card p{
  margin:0;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.74;
  color:var(--kh-text-soft);
  font-weight:300;
}

/* PANEL 2 — CONTENT SECOND */

.kh-arch-mobile-panel--content{
  z-index:2;
  opacity:clamp(0, calc((var(--kh-progress) - .10) * 1.35), 1);
  transform:translate3d(calc((1 - var(--kh-progress)) * 5%),0,0);
  pointer-events:none;
  will-change:transform, opacity;
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
  transform-style:preserve-3d;
}

.kh-arch-mobile-panel--content::before{
  content:"";
  position:absolute;
  top:30px;
  left:30px;
  width:90px;
  height:90px;
  background-color:#6A4C36;
  opacity:.22;
  -webkit-mask:url("/assets/images/Fish-Icon.svg") no-repeat left top / contain;
  mask:url("/assets/images/Fish-Icon.svg") no-repeat left top / contain;
  pointer-events:none;
  z-index:1;
}

.kh-arch-mobile-content{
  position:relative;
  z-index:2;
  width:100%;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:flex-start;
  transform:translateY(20px);
}

.kh-arch-mobile-content-inner{
  width:100%;
  max-width:320px;
  margin-top:auto;
  margin-bottom:auto;
  position:relative;
}

.kh-arch-mobile-number{
  margin:0 0 -20px 0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:56px;
  line-height:.8;
  color:rgba(92,71,43,.12);
}

.kh-arch-mobile-kicker{
  margin:0 0 10px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:9px;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:#6A4C36;
}

.kh-arch-mobile-title{
  margin:0;
  max-width:320px;
  font-family:"IvyOraDisplay",serif;
  font-weight:300;
  font-size:30px;
  line-height:.96;
  text-transform:uppercase;
  color:var(--kh-brown);
}

.kh-arch-mobile-script{
  display:block;
  margin-top:4px;
  margin-left:3px;
  font-family:"GoldenHopes",cursive;
  font-size:20px;
  line-height:1;
  color:var(--kh-brown-soft);
  transform:rotate(-2deg);
  text-transform:capitalize;
}

.kh-arch-mobile-text{
  margin:16px 0 0;
  max-width:320px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:12px;
  line-height:1.62;
  font-weight:300;
  color:var(--kh-text-soft);
}

.kh-arch-mobile-foot{
  width:100%;
  max-width:320px;
  display:block;
}

.kh-arch-mobile-divider{
  width:84px;
  height:1px;
  background:rgba(63,44,31,.14);
  margin:0 0 12px;
}

.kh-arch-mobile-note{
  margin:0;
  max-width:320px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.7;
  color:rgba(63,44,31,.60);
}

/* SWITCH */

@media(max-width:767px){
  .kh-arch-desktop{ display:none; }
  .kh-arch-mobile{ display:block; }
}

@media(min-width:768px){
  .kh-arch-desktop{ display:block; }
  .kh-arch-mobile{ display:none; }
}

</style>

<!-- =========================
DESKTOP VERSION
========================= -->
<section class="kh-arch-desktop" id="khArchDesktop">
  <div class="kh-arch-wrap">
    <div class="kh-arch-grid">

      <div class="kh-arch-visual">
        <div class="kh-arch-mini kh-arch-animate kh-arch-delay2"></div>
        <div class="kh-arch-main kh-arch-animate kh-arch-delay1"></div>

        <div class="kh-arch-card kh-arch-animate kh-arch-delay3">
          <div class="kh-arch-card-label">Spatial Note</div>
          <p>
            The experience is guided not by spectacle, but by rhythm. Moments of movement, pause, and quiet order give the space its composure before any single detail asks to be noticed.
          </p>
        </div>
      </div>

      <div class="kh-arch-copy">
        <div class="kh-arch-copy-inner">
          <div class="kh-arch-number kh-arch-animate">05</div>

          <div class="kh-arch-kicker kh-arch-animate kh-arch-delay1">
            Architecture of Emotion
          </div>

          <h2 class="kh-arch-title kh-arch-animate kh-arch-delay2">
            Space Designed To Be Felt<br>
            Before It Is Explained
            <span class="kh-arch-script">form shapes memory</span>
          </h2>

          <p class="kh-arch-text kh-arch-animate kh-arch-delay3">
            We treat authentic cooking not as routine, but as an art of devotion. Pure ghee, stone-ground masalas, whole spices, and slow clay pot simmering come together to create rich, unforgettable dining moments across the Bay Area.
          </p>

          <div class="kh-arch-divider kh-arch-animate kh-arch-delay3"></div>

          <div class="kh-arch-details">
            <div class="kh-arch-detail kh-arch-animate kh-arch-delay2">
              <h4>Proportion</h4>
              <p>Scale is used to create pause rather than spectacle, allowing space to hold presence with restraint.</p>
            </div>

            <div class="kh-arch-detail kh-arch-animate kh-arch-delay3">
              <h4>Light</h4>
              <p>Light behaves like material, shaping atmosphere through softness, shadow, and measured contrast.</p>
            </div>

            <div class="kh-arch-detail kh-arch-animate kh-arch-delay3">
              <h4>Thresholds</h4>
              <p>Each transition is composed to feel intentional, creating rhythm between approach, entry, and presence.</p>
            </div>

            <div class="kh-arch-detail kh-arch-animate kh-arch-delay4">
              <h4>Stillness</h4>
              <p>Restraint gives the experience its weight, allowing memory to form through calm instead of excess.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
MOBILE VERSION
========================= -->
<section class="kh-arch-mobile" id="khArchMobile">
  <div class="kh-arch-mobile-stage">

    <div class="kh-arch-mobile-panel kh-arch-mobile-panel--visual">
      <div class="kh-arch-mobile-visual">
        <div class="kh-arch-mobile-main"></div>
        <div class="kh-arch-mobile-mini"></div>
        <div class="kh-arch-mobile-icon"></div>

        <div class="kh-arch-mobile-card">
          <div class="kh-arch-mobile-card-label">Spatial Note</div>
          <p>
            The experience is guided not by spectacle, but by rhythm. Moments of movement, pause, and quiet order give the space its composure before any single detail asks to be noticed.
          </p>
        </div>
      </div>
    </div>

    <div class="kh-arch-mobile-panel kh-arch-mobile-panel--content">
      <div class="kh-arch-mobile-content">
        <div class="kh-arch-mobile-content-inner">
          <div class="kh-arch-mobile-number">05</div>
          <div class="kh-arch-mobile-kicker">Architecture of Emotion</div>

          <h2 class="kh-arch-mobile-title">
            Space Designed To Be Felt<br>
            Before It Is Explained
            <span class="kh-arch-mobile-script">form shapes memory</span>
          </h2>

          <p class="kh-arch-mobile-text">
            We treat authentic cooking not as routine, but as an art of devotion. Pure ghee, stone-ground masalas, whole spices, and slow clay pot simmering come together to create rich, unforgettable dining moments across the Bay Area.
          </p>
        </div>

        <div class="kh-arch-mobile-foot">
          <div class="kh-arch-mobile-divider"></div>
          <p class="kh-arch-mobile-note">
            Proportion, light, thresholds, and stillness are composed to slow the guest, soften the transition, and let the space hold emotional weight with restraint.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<script type="text/javascript">
(function(){

  /* =========================
  DESKTOP REVEAL
  ========================= */
  const desktopSection = document.getElementById('khArchDesktop');
  if(desktopSection){
    const elements = desktopSection.querySelectorAll('.kh-arch-animate');
    if(elements.length){
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if(entry.isIntersecting){
            entry.target.classList.add('show');
          }
        });
      }, {
        threshold:0.15,
        rootMargin:"0px 0px -8% 0px"
      });

      elements.forEach((el) => observer.observe(el));
    }
  }

  /* =========================
  MOBILE STICKY TRANSITION
  ========================= */
  const mobileSection = document.getElementById('khArchMobile');
  if(mobileSection){

    let ticking = false;
    let rafId = null;
    let currentProgress = 0;
    let targetProgress = 0;

    function easeInOutCubic(t){
      return t < 0.5
        ? 4 * t * t * t
        : 1 - Math.pow(-2 * t + 2, 3) / 2;
    }

    function measureTarget(){
      const rect = mobileSection.getBoundingClientRect();
      const viewportH = window.innerHeight || document.documentElement.clientHeight;
      const totalScrollable = Math.max(1, rect.height - viewportH);
      const passed = Math.min(Math.max(-rect.top, 0), totalScrollable);
      const raw = passed / totalScrollable;
      targetProgress = easeInOutCubic(Math.min(Math.max(raw, 0), 1));
      ticking = false;
    }

    function animateProgress(){
      currentProgress += (targetProgress - currentProgress) * 0.12;

      if(Math.abs(targetProgress - currentProgress) < 0.0005){
        currentProgress = targetProgress;
      }

      mobileSection.style.setProperty('--kh-progress', currentProgress.toFixed(4));

      if(Math.abs(targetProgress - currentProgress) > 0.0005){
        rafId = window.requestAnimationFrame(animateProgress);
      } else {
        rafId = null;
      }
    }

    function requestUpdate(){
      if(!ticking){
        window.requestAnimationFrame(measureTarget);
        ticking = true;
      }
      if(!rafId){
        rafId = window.requestAnimationFrame(animateProgress);
      }
    }

    window.addEventListener('scroll', requestUpdate, { passive:true });
    window.addEventListener('resize', requestUpdate, { passive:true });
    window.addEventListener('orientationchange', requestUpdate, { passive:true });
    requestUpdate();
  }

})();
</script>
				</div>
				</div>
		<div class="elementor-element elementor-element-ce93b65 e-con-full elementor-hidden-tablet e-flex e-con e-parent" data-id="ce93b65" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1bcbb6f elementor-widget elementor-widget-html" data-id="1bcbb6f" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
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

.kh-final-sec,
.kh-final-sec *{
  box-sizing:border-box;
}

.kh-final-sec{
  --kh-final-main-width:380px;
  --kh-final-mini-width:210px;
  width:100%;
  min-height:100vh;
  padding:60px;
  position:relative;
  overflow:hidden;
  isolation:isolate;
  background:#111;
}

.kh-final-sec::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(0,0,0,.42) 0%, rgba(0,0,0,.54) 34%, rgba(0,0,0,.76) 100%),
    linear-gradient(180deg, rgba(255,255,255,.03) 0%, rgba(0,0,0,.12) 100%),
    radial-gradient(circle at 14% 20%, rgba(255,255,255,.06), transparent 24%),
    radial-gradient(circle at 82% 18%, rgba(255,255,255,.04), transparent 22%),
    linear-gradient(90deg, rgba(255,255,255,.05), transparent 18%),
    url("/assets/images/About-Last-Section.webp") center center / cover no-repeat;
  filter:grayscale(1) saturate(.25);
  pointer-events:none;
  z-index:0;
}

.kh-final-sec::after{
  content:"HERITAGE";
  position:absolute;
  right:-12px;
  bottom:-14px;
  font-family:"IvyOraDisplay", serif;
  font-size:clamp(86px,13vw,220px);
  font-weight:300;
  line-height:.82;
  letter-spacing:.03em;
  text-transform:uppercase;
  color:rgba(250,247,242,.05);
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.kh-final-wrap{
  width:100%;
  min-height:calc(100vh - 120px);
  position:relative;
  z-index:2;
}

.kh-final-grid{
  display:grid;
  grid-template-columns:minmax(0,1fr) minmax(340px,520px);
  gap:80px;
  min-height:calc(100vh - 120px);
  align-items:stretch;
}

/* =========================
LEFT COPY
========================= */

.kh-final-copy{
  position:relative;
  max-width:620px;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  padding:56px 0 8px;
}

.kh-final-copy-main{
  display:flex;
  flex-direction:column;
  justify-content:center;
  flex:1;
  transform:translateY(10px);
}

.kh-final-copy-top{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
}

.kh-final-copy-bottom{
  display:flex;
  flex-direction:column;
  align-items:flex-start;
  justify-content:flex-end;
  padding-bottom:0;
  margin-bottom:-18px;
}

.kh-final-number{
  position:absolute;
  top:-55px;
  left:0;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(78px,8vw,146px);
  color:rgba(250,247,242,.12);
  line-height:.8;
  letter-spacing:.02em;
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.kh-final-kicker{
  position:relative;
  z-index:1;
  margin:0 0 12px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.28em;
  text-transform:uppercase;
  color:rgba(250,247,242,.82);
  font-weight:400;
}

.kh-final-title{
  position:relative;
  z-index:1;
  margin:0;
  max-width:700px;
  font-family:"IvyOraDisplay", serif;
  font-weight:300;
  font-size:clamp(34px,3.6vw,62px);
  line-height:.94;
  text-transform:uppercase;
  color:#FAF7F2;
}

.kh-final-script{
  display:block;
  margin-top:-2px;
  margin-left:110px;
  font-family:"GoldenHopes", cursive;
  font-size:clamp(24px,1.9vw,34px);
  line-height:1;
  letter-spacing:.03em;
  text-transform:capitalize;
  color:rgba(235,218,196,.96);
  transform:rotate(-2deg);
}

.kh-final-text{
  margin:18px 0 0;
  max-width:540px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:13px;
  line-height:1.82;
  color:rgba(250,247,242,.80);
}

.kh-final-divider{
  width:84px;
  height:1px;
  background:rgba(255,255,255,.18);
  margin:0 0 16px;
}

.kh-final-note{
  margin:0;
  max-width:420px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  line-height:1.72;
  color:rgba(250,247,242,.64);
}

.kh-final-actions{
  margin-top:28px;
  display:flex;
  flex-wrap:wrap;
  gap:12px;
}

.kh-final-btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  gap:12px;
  min-width:210px;
  padding:16px 24px;
  border:1px solid rgba(255,255,255,.16);
  background:rgba(255,255,255,.08);
  backdrop-filter:blur(10px);
  -webkit-backdrop-filter:blur(10px);
  text-decoration:none !important;
  text-transform:uppercase;
  letter-spacing:.22em;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:11px;
  font-weight:400;
  color:#FAF7F2;
  transition:
    transform .35s ease,
    background .35s ease,
    border-color .35s ease,
    color .35s ease;
}

.kh-final-btn:hover{
  transform:translateY(-2px);
  background:rgba(255,255,255,.14);
  border-color:rgba(255,255,255,.24);
  color:#FAF7F2;
}

.kh-final-btn svg{
  width:16px;
  height:16px;
  transition:transform .35s ease;
}

.kh-final-btn:hover svg{
  transform:translateX(4px);
}

.kh-final-btn--ghost{
  background:transparent;
  color:rgba(250,247,242,.88);
}

.kh-final-btn--ghost:hover{
  background:rgba(255,255,255,.06);
  color:#FAF7F2;
}

/* =========================
RIGHT VISUAL STACK
========================= */

.kh-final-visual{
  position:relative;
  height:100%;
}

.kh-final-main{
  position:absolute;
  right:0;
  bottom:0;
  width:var(--kh-final-main-width);
  height:100%;
  border-radius:220px 220px 0 0;
  overflow:hidden;
  background:
    linear-gradient(180deg, rgba(24,18,12,.10) 0%, rgba(24,18,12,.30) 100%),
    url("/assets/images/dishes/indian_thali_curries.webp") center/cover no-repeat;
  box-shadow:0 28px 60px rgba(0,0,0,.18);
}

.kh-final-main::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    linear-gradient(180deg, rgba(246,241,234,.02) 0%, rgba(246,241,234,.06) 100%),
    radial-gradient(circle at 72% 20%, rgba(255,255,255,.06), transparent 28%);
  pointer-events:none;
}

.kh-final-mini{
  position:absolute;
  left:calc(100% - var(--kh-final-main-width) - (var(--kh-final-mini-width) / 2));
  top:54px;
  width:var(--kh-final-mini-width);
  height:250px;
  border-radius:140px 140px 0 0;
  overflow:hidden;
  background:linear-gradient(180deg, rgba(250,247,242,.16) 0%, rgba(250,247,242,.06) 100%);
  backdrop-filter:blur(2px);
  -webkit-backdrop-filter:blur(2px);
  box-shadow:0 16px 40px rgba(0,0,0,.10);
  border:1px solid rgba(255,255,255,.10);
}

.kh-final-mini::before{
  content:"";
  position:absolute;
  inset:0;
  background-color:rgba(255,255,255,.5);
  -webkit-mask:url("/assets/images/Tree-Var-Icon.svg") 
    no-repeat calc(50% + 0px) calc(50% + 4px) / 70% auto;
  mask:url("/assets/images/Tree-Var-Icon.svg") 
    no-repeat calc(50% + 0px) calc(50% + 4px) / 70% auto;
  transform:scaleX(-1);
  pointer-events:none;
  z-index:2;
}

.kh-final-card{
  position:absolute;
  left:46px;
  bottom:0;
  width:320px;
  background:rgba(250,247,242,.84);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  padding:22px;
  border:1px solid rgba(63,44,31,.08);
  box-shadow:0 22px 44px rgba(0,0,0,.10);
}

.kh-final-card-label{
  margin-bottom:10px;
  font-family:"Bricolage Grotesque",sans-serif;
  font-size:10px;
  letter-spacing:.24em;
  text-transform:uppercase;
  color:#6A4C36;
  font-weight:500;
}

.kh-final-card p{
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

.kh-final-animate{
  opacity:0;
  transform:translateY(36px);
  transition:
    transform 1s cubic-bezier(.22,1,.36,1),
    opacity 1s cubic-bezier(.22,1,.36,1),
    filter 1s cubic-bezier(.22,1,.36,1);
  filter:blur(2px);
  will-change:transform, opacity, filter;
}

.kh-final-animate.show{
  opacity:1;
  transform:none;
  filter:blur(0);
}

.kh-final-delay1{transition-delay:.10s}
.kh-final-delay2{transition-delay:.18s}
.kh-final-delay3{transition-delay:.26s}
.kh-final-delay4{transition-delay:.34s}

@media(min-width:1400px){
  .kh-final-sec{
    --kh-final-main-width:460px;
  }

  .kh-final-grid{
    grid-template-columns:minmax(0,1.08fr) minmax(460px,640px);
    gap:64px;
  }

  .kh-final-copy{
    max-width:700px;
  }

  .kh-final-title{
    max-width:760px;
  }

  .kh-final-text{
    max-width:620px;
  }

  .kh-final-note{
    max-width:560px;
  }
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:1100px){

  .kh-final-sec{
    min-height:100vh;
    padding:60px 28px;
  }

  .kh-final-wrap,
  .kh-final-grid{
    min-height:auto;
  }

  .kh-final-grid{
    grid-template-columns:1fr;
    gap:46px;
  }

  .kh-final-copy{
    height:auto;
    padding:0;
    justify-content:flex-start;
  }

  .kh-final-copy-main{
    transform:none;
  }

  .kh-final-copy-bottom{
    padding-top:18px;
    margin-bottom:0;
  }

  .kh-final-number{
    top:-22px;
    left:0;
  }

  .kh-final-visual{
    height:620px;
  }

  .kh-final-main{
    width:var(--kh-final-main-width);
    height:100%;
  }

  .kh-final-card{
    left:46px;
  }

  .kh-final-script{
    margin-left:82px;
  }
}

@media(max-width:767px){

  .kh-final-sec{
    min-height:100vh;
    padding:30px;
  }

  .kh-final-sec::after{
    content:none;
  }

  .kh-final-grid{
    grid-template-columns:1fr !important;
    gap:0 !important;
    min-height:auto;
  }

  .kh-final-wrap{
    min-height:calc(100vh - 60px);
  }

  .kh-final-visual{
    display:none !important;
  }

  .kh-final-copy{
    max-width:100% !important;
    min-height:calc(100vh - 60px);
    padding:0;
    justify-content:center;
  }

  .kh-final-copy-main{
    transform:none;
    justify-content:center;
    flex:1 1 auto;
  }

  .kh-final-copy-top{
    width:100%;
    max-width:320px;
  }

  .kh-final-copy-bottom{
    width:100%;
    max-width:320px;
    margin-bottom:0;
    padding-top:33px;
  }

  .kh-final-number{
    top:-18px;
    left:0;
    font-size:clamp(58px,18vw,92px);
  }

  .kh-final-title{
    font-size:clamp(30px,9vw,42px);
    line-height:.98;
  }

  .kh-final-script{
    margin-top:-2px;
    margin-left:42px;
    font-size:clamp(20px,6vw,26px);
  }

  .kh-final-text{
    margin-top:14px;
    font-size:13px;
    line-height:1.76;
  }

  .kh-final-actions{
    margin-top:16px;
    gap:10px;
    width:100%;
  }

  .kh-final-btn{
    width:100%;
    min-width:100%;
    padding:16px 18px;
    font-size:11px;
  }

  .kh-final-divider{
    margin-bottom:12px;
  }

  .kh-final-note{
    font-size:11px;
    line-height:1.70;
  }

  .kh-final-card p{
    font-size:12px;
    line-height:1.74;
  }
}

</style>

<section class="kh-final-sec" id="khFinalSec">
  <div class="kh-final-wrap">
    <div class="kh-final-grid">

      <div class="kh-final-copy">

        <div class="kh-final-copy-main">
          <div class="kh-final-copy-top">
            <div class="kh-final-number kh-final-animate">06</div>

            <div class="kh-final-kicker kh-final-animate kh-final-delay1">
              Final Invitation
            </div>

            <h2 class="kh-final-title kh-final-animate kh-final-delay2">
              Some Places Are Visited.<br>
              Others Are Remembered.
              <span class="kh-final-script">Biryani Spot belongs to tradition</span>
            </h2>

            <p class="kh-final-text kh-final-animate kh-final-delay3">
              Biryani Spot Chennai Dosa is shaped as something that extends beyond the meal itself. The aroma of roasted spices, the sizzle of the tawa, and the warmth of family dining leave an impression that stays present long after your visit.
            </p>

            <div class="kh-final-actions kh-final-animate kh-final-delay4">
              <a href="/reservations" class="kh-final-btn">
                <span>Begin the Experience</span>
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M8 5l8 7-8 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>

              <a href="/menu" class="kh-final-btn kh-final-btn--ghost">
                <span>Enquire Privately</span>
              </a>
            </div>
          </div>
        </div>

        <div class="kh-final-copy-bottom">
          <div class="kh-final-divider kh-final-animate kh-final-delay3"></div>
          <p class="kh-final-note kh-final-animate kh-final-delay4">
            The closing gesture should feel less like an ending and more like a continuation, leaving the experience open, lingering, and quietly unresolved.
          </p>
        </div>

      </div>

      <div class="kh-final-visual">
        <div class="kh-final-mini kh-final-animate kh-final-delay2"></div>
        <div class="kh-final-main kh-final-animate kh-final-delay1"></div>

        <div class="kh-final-card kh-final-animate kh-final-delay3">
          <div class="kh-final-card-label">Closing Note</div>
          <p>
            What remains most clearly is not a single detail, but the sense of composition itself, where table, setting, and atmosphere settle into memory with unusual ease.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<script type="text/javascript">
(function(){
  const elements = document.querySelectorAll('#khFinalSec .kh-final-animate');
  if(!elements.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if(entry.isIntersecting){
        entry.target.classList.add('show');
      }
    });
  }, {
    threshold:0.15,
    rootMargin:"0px 0px -8% 0px"
  });

  elements.forEach((el) => observer.observe(el));
})();
</script>
				</div>
				</div>
		
				</div>
		
	
	
</div><!-- .entry-content .clear -->

	
	
</article><!-- #post-## -->

			</main><!-- #main -->
			
		
	</div><!-- #primary -->


	</div> <!-- ast-container -->
	</div><!-- #content -->
		

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>