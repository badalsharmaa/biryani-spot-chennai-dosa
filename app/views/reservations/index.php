<?php
$pageTitle = "Table Reservations & Concierge | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";
?>

<style id="kh-reservations-styles">
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

@import url("https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500;600&family=Montserrat:wght@300;400;500;600&display=swap");

/* ==========================================================================
   PAGE ROOT & BASE THEME
   ========================================================================== */
.kh-res-page-wrapper {
  background-color: #111111;
  color: #F7F3EE;
  font-family: "Bricolage Grotesque", "Montserrat", sans-serif;
  position: relative;
  overflow: hidden;
  width: 100%;
}

/* ==========================================================================
   HERO SECTION
   ========================================================================== */
.kh-res-hero {
  position: relative;
  width: 100%;
  padding: 130px 40px 70px;
  background: radial-gradient(ellipse at center top, rgba(92, 71, 43, 0.45) 0%, rgba(17, 17, 17, 0.95) 75%), #111111;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  box-sizing: border-box;
}

.kh-res-hero::before {
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  opacity: 0.035;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='240' height='240' viewBox='0 0 240 240'><g fill='none' stroke='white' stroke-width='0.8'><path d='M120 32 L145 80 L120 128 L95 80 Z'/><path d='M120 112 L145 160 L120 208 L95 160 Z'/><path d='M120 72 L160 120 L120 168 L80 120 Z' opacity='0.7'/></g></svg>");
  background-repeat: repeat;
  background-position: center;
  background-size: 180px 180px;
}

.kh-res-hero-inner {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: minmax(0, 1.4fr) minmax(0, 1fr);
  gap: 60px;
  align-items: flex-end;
  position: relative;
  z-index: 2;
}

.kh-res-hero-kicker {
  font-family: "Bricolage Grotesque", sans-serif;
  font-size: 11px;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: #F2E4C7;
  margin-bottom: 16px;
  display: inline-block;
  opacity: 0;
  transform: translateY(16px);
  animation: khResFadeUp 0.8s ease forwards 0.1s;
}

.kh-res-hero-title {
  font-family: "IvyOraDisplay", serif;
  font-size: clamp(38px, 4.5vw, 68px);
  font-weight: 300;
  line-height: 0.95;
  text-transform: uppercase;
  color: #FFFFFF;
  margin: 0 0 18px 0;
  position: relative;
  opacity: 0;
  transform: translateY(16px);
  animation: khResFadeUp 0.8s ease forwards 0.25s;
}

.kh-res-hero-script {
  display: block;
  font-family: "GoldenHopes", cursive;
  font-size: clamp(24px, 2.4vw, 36px);
  line-height: 1.1;
  color: #F2E4C7;
  transform: rotate(-2deg);
  text-transform: capitalize;
  margin-top: 8px;
}

.kh-res-hero-lead {
  font-family: "Bricolage Grotesque", sans-serif;
  font-size: 14px;
  line-height: 1.85;
  font-weight: 300;
  color: rgba(247, 243, 238, 0.78);
  max-width: 580px;
  margin: 0 0 28px 0;
  opacity: 0;
  transform: translateY(16px);
  animation: khResFadeUp 0.8s ease forwards 0.4s;
}

.kh-res-hero-scroll {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  font-family: "Bricolage Grotesque", sans-serif;
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.65);
  text-decoration: none;
  opacity: 0;
  transform: translateY(16px);
  animation: khResFadeUp 0.8s ease forwards 0.55s;
  cursor: pointer;
  transition: color 0.3s ease;
}

.kh-res-hero-scroll:hover {
  color: #FFFFFF;
}

.kh-res-hero-scroll-line {
  width: 32px;
  height: 1px;
  background: #F2E4C7;
  transition: width 0.3s ease;
}

.kh-res-hero-scroll:hover .kh-res-hero-scroll-line {
  width: 48px;
}

.kh-res-hero-side {
  padding-left: 20px;
  border-left: 1px solid rgba(255, 255, 255, 0.12);
  opacity: 0;
  transform: translateY(16px);
  animation: khResFadeUp 0.8s ease forwards 0.6s;
}

.kh-res-hero-side p {
  font-family: "Bricolage Grotesque", sans-serif;
  font-size: 13px;
  line-height: 1.9;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.68);
  margin: 0;
}

@keyframes khResFadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ==========================================================================
   MAIN RESERVATION SECTION (GRID LAYOUT)
   ========================================================================== */
.kh-res-main-section {
  position: relative;
  width: 100%;
  padding: 80px 40px 100px;
  background: #161412;
  box-sizing: border-box;
}

.kh-res-main-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at top right, rgba(92, 71, 43, 0.18), transparent 70%);
  pointer-events: none;
}

.kh-res-container {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(0, 1.25fr);
  gap: 60px;
  align-items: start;
  position: relative;
  z-index: 2;
}

/* ==========================================================================
   LEFT COLUMN: CONTACT / CONCIERGE CARD & HOURS
   ========================================================================== */
.kh-contact-card {
  position: relative;
  width: 100%;
  box-sizing: border-box;
  padding: 36px;
  background: rgba(255, 255, 255, 0.025);
  border: 1px solid rgba(255, 255, 255, 0.08);
  margin-bottom: 30px;
  display: flex;
  flex-direction: column;
}

.kh-contact-card::before {
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  opacity: 0.03;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='240' height='240' viewBox='0 0 240 240'><g fill='none' stroke='white' stroke-width='0.8'><path d='M120 32 L145 80 L120 128 L95 80 Z'/><path d='M120 112 L145 160 L120 208 L95 160 Z'/><path d='M120 72 L160 120 L120 168 L80 120 Z' opacity='0.7'/></g></svg>");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 160px 160px;
}

.kh-ct-inner {
  position: relative;
  z-index: 1;
  width: 100%;
  display: flex;
  flex-direction: column;
}

.kh-ct-header {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 24px;
  width: 100%;
}

.kh-ct-line {
  flex: 1;
  min-width: 0;
  height: 1px;
  background: rgba(255, 255, 255, 0.16);
}

.kh-ct-title {
  margin: 0;
  font-family: "IvyOraDisplay", serif;
  font-size: 18px;
  line-height: 1;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #FFFFFF;
  white-space: nowrap;
}

.kh-ct-list {
  width: 100%;
  display: flex;
  flex-direction: column;
}

.kh-ct-row {
  display: grid;
  grid-template-columns: 130px minmax(0, 1fr);
  gap: 20px;
  align-items: start;
  padding: 16px 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.kh-ct-row:last-child {
  border-bottom: none;
}

.kh-ct-label {
  font-family: "Bricolage Grotesque", sans-serif;
  font-weight: 500;
  font-size: 11px;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #F2E4C7;
  padding-top: 3px;
  white-space: nowrap;
}

.kh-ct-value {
  font-family: "Bricolage Grotesque", sans-serif;
  font-weight: 300;
  font-size: 13px;
  line-height: 1.8;
  color: rgba(255, 255, 255, 0.78);
  text-align: right;
  word-break: break-word;
}

.kh-ct-value a {
  color: rgba(255, 255, 255, 0.85);
  text-decoration: none;
  transition: color 0.25s ease;
}

.kh-ct-value a:hover {
  color: #FFFFFF;
  text-decoration: underline;
}

/* Opening Hours Card */
.kh-opening-hours {
  position: relative;
  width: 100%;
  box-sizing: border-box;
  padding: 32px 36px;
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.06);
  display: flex;
  flex-direction: column;
}

.kh-oh-inner {
  position: relative;
  z-index: 1;
  width: 100%;
}

.kh-oh-header {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 22px;
}

.kh-oh-line {
  flex: 1;
  height: 1px;
  background: rgba(255, 255, 255, 0.16);
}

.kh-oh-title {
  margin: 0;
  font-family: "IvyOraDisplay", serif;
  font-size: 18px;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #FFFFFF;
  white-space: nowrap;
}

.kh-oh-list {
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.kh-oh-row {
  display: grid;
  grid-template-columns: minmax(0, auto) minmax(14px, 1fr) auto;
  align-items: center;
  gap: 10px;
}

.kh-oh-day {
  font-family: "Bricolage Grotesque", sans-serif;
  font-weight: 500;
  font-size: 13px;
  color: #FFFFFF;
}

.kh-oh-time {
  font-family: "Bricolage Grotesque", sans-serif;
  font-weight: 300;
  font-size: 13px;
  color: rgba(255, 255, 255, 0.7);
  white-space: nowrap;
  text-align: right;
}

.kh-oh-divider {
  height: 1px;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.14), rgba(255, 255, 255, 0));
}

.kh-oh-note {
  margin-top: 20px;
  padding: 12px 16px;
  border: 1px solid rgba(242, 228, 199, 0.2);
  background: rgba(242, 228, 199, 0.04);
  font-family: "Bricolage Grotesque", sans-serif;
  font-size: 12px;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.75);
}

.kh-oh-note span {
  color: #F2E4C7;
  font-weight: 500;
}

/* ==========================================================================
   RIGHT COLUMN: SEQUENTIAL RESERVATION FORM
   ========================================================================== */
.kh-seq-contact {
  --khseq-title-font-family: "IvyOraDisplay", serif;
  --khseq-title-font-size: 18px;
  --khseq-intro-font-family: "Bricolage Grotesque", sans-serif;
  --khseq-intro-font-size: 14px;
  --khseq-progress-font-family: "Bricolage Grotesque", sans-serif;
  --khseq-progress-font-size: 11px;
  --khseq-question-font-family: "IvyOraDisplay", serif;
  --khseq-question-font-size: clamp(20px, 2vw, 26px);
  --khseq-input-font-family: "Bricolage Grotesque", sans-serif;
  --khseq-input-font-size: 15px;
  --khseq-choice-font-family: "Bricolage Grotesque", sans-serif;
  --khseq-choice-font-size: 12px;
  --khseq-action-font-family: "Bricolage Grotesque", sans-serif;
  --khseq-action-font-size: 12px;

  position: relative;
  width: 100%;
  box-sizing: border-box;
  padding: 44px;
  background: rgba(255, 255, 255, 0.035);
  border: 1px solid rgba(255, 255, 255, 0.1);
  display: flex;
  flex-direction: column;
}

.kh-seq-contact::before {
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  opacity: 0.035;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='240' height='240' viewBox='0 0 240 240'><g fill='none' stroke='white' stroke-width='0.8'><path d='M120 32 L145 80 L120 128 L95 80 Z'/><path d='M120 112 L145 160 L120 208 L95 160 Z'/><path d='M120 72 L160 120 L120 168 L80 120 Z' opacity='0.7'/></g></svg>");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 200px 200px;
}

.kh-seq-inner {
  position: relative;
  z-index: 1;
  width: 100%;
  display: flex;
  flex-direction: column;
}

.kh-seq-header {
  display: flex;
  align-items: center;
  gap: 14px;
  width: 100%;
  margin-bottom: 16px;
}

.kh-seq-title {
  margin: 0;
  font-family: var(--khseq-title-font-family);
  font-weight: 300;
  font-size: var(--khseq-title-font-size);
  line-height: 1;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #FFFFFF;
  white-space: nowrap;
}

.kh-seq-line {
  flex: 1;
  min-width: 0;
  height: 1px;
  background: rgba(255, 255, 255, 0.16);
}

.kh-seq-intro {
  margin: 0 0 28px 0;
  font-family: var(--khseq-intro-font-family);
  font-weight: 300;
  font-size: var(--khseq-intro-font-size);
  line-height: 1.85;
  color: rgba(255, 255, 255, 0.72);
  text-align: left;
}

.kh-seq-progress-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 18px;
  margin-bottom: 30px;
}

.kh-seq-progress-text {
  font-family: var(--khseq-progress-font-family);
  font-size: var(--khseq-progress-font-size);
  font-weight: 500;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: #F2E4C7;
  white-space: nowrap;
}

.kh-seq-progress-bar {
  position: relative;
  flex: 1;
  height: 2px;
  background: rgba(255, 255, 255, 0.12);
  overflow: hidden;
}

.kh-seq-progress-fill {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 20%;
  background: #F2E4C7;
  transition: width 0.4s cubic-bezier(0.22, 1, 0.36, 1);
}

.kh-seq-form {
  position: relative;
  width: 100%;
}

.kh-seq-stage {
  position: relative;
  width: 100%;
  min-height: 190px;
  margin-bottom: 24px;
}

.kh-seq-step {
  display: none;
  opacity: 0;
  transform: translateY(12px);
  transition: opacity 0.35s ease, transform 0.35s ease;
}

.kh-seq-step.is-active {
  display: block;
  opacity: 1;
  transform: translateY(0);
}

.kh-seq-question {
  margin: 0 0 20px 0;
  font-family: var(--khseq-question-font-family);
  font-weight: 300;
  font-size: var(--khseq-question-font-size);
  line-height: 1.25;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  color: #FFFFFF;
  min-height: 1.2em;
}

.kh-seq-question .kh-word {
  display: inline-block;
  opacity: 0;
  transform: translateY(8px);
  animation: khWordIn 0.45s ease forwards;
}

@keyframes khWordIn {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.kh-seq-field-wrap {
  width: 100%;
}

.kh-seq-field-wrap.kh-grid-2 {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 16px;
}

.kh-seq-input,
.kh-seq-textarea,
.kh-seq-select {
  width: 100%;
  box-sizing: border-box;
  background: transparent !important;
  border: none !important;
  border-bottom: 1px solid rgba(255, 255, 255, 0.22) !important;
  border-radius: 0 !important;
  box-shadow: none !important;
  outline: none !important;
  padding: 12px 0;
  font-family: var(--khseq-input-font-family);
  font-weight: 300;
  font-size: var(--khseq-input-font-size);
  line-height: 1.6;
  color: #FFFFFF !important;
  transition: border-color 0.26s ease;
}

.kh-seq-input::placeholder,
.kh-seq-textarea::placeholder {
  color: rgba(255, 255, 255, 0.38);
}

.kh-seq-input:focus,
.kh-seq-textarea:focus {
  border-bottom-color: #F2E4C7 !important;
}

.kh-seq-textarea {
  min-height: 70px;
  resize: vertical;
}

.kh-seq-choices {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 6px;
}

.kh-seq-choice {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 12px 18px;
  background: transparent !important;
  border: 1px solid rgba(255, 255, 255, 0.16) !important;
  border-radius: 0 !important;
  box-shadow: none !important;
  outline: none !important;
  cursor: pointer;
  font-family: var(--khseq-choice-font-family);
  font-size: var(--khseq-choice-font-size);
  font-weight: 400;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.78) !important;
  transition: border-color 0.25s ease, color 0.25s ease, background 0.25s ease, transform 0.25s ease;
}

.kh-seq-choice:hover {
  color: #FFFFFF !important;
  border-color: rgba(255, 255, 255, 0.45) !important;
  background: rgba(255, 255, 255, 0.04) !important;
  transform: translateY(-1px);
}

.kh-seq-choice.is-selected {
  color: #111111 !important;
  border-color: #F2E4C7 !important;
  background: #F2E4C7 !important;
  font-weight: 500;
}

.kh-seq-sub-label {
  display: block;
  font-size: 11px;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #F2E4C7;
  margin-bottom: 8px;
  margin-top: 14px;
}

.kh-seq-sub-label:first-child {
  margin-top: 0;
}

.kh-seq-counter {
  margin-top: 6px;
  font-family: var(--khseq-input-font-family);
  font-size: 11px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.42);
  text-align: right;
}

.kh-seq-counter.is-idle {
  opacity: 0.4;
}

.kh-seq-actions {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 18px;
  margin-top: 18px;
  padding-top: 16px;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.kh-seq-action {
  background: transparent !important;
  border: none !important;
  outline: none !important;
  padding: 10px 0;
  font-family: var(--khseq-action-font-family);
  font-size: var(--khseq-action-font-size);
  font-weight: 500;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: #FFFFFF !important;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  transition: opacity 0.24s ease, color 0.24s ease;
}

.kh-seq-action:disabled {
  opacity: 0.25;
  cursor: not-allowed;
}

.kh-seq-action--prev::before {
  content: "";
  width: 22px;
  height: 1px;
  background: rgba(255, 255, 255, 0.75);
  transition: transform 0.24s ease;
}

.kh-seq-action--prev:hover:not(:disabled)::before {
  transform: translateX(-5px);
}

.kh-seq-action--next::after {
  content: "";
  width: 22px;
  height: 1px;
  background: #F2E4C7;
  transition: transform 0.24s ease;
}

.kh-seq-action--next:hover:not(:disabled)::after {
  transform: translateX(5px);
}

.kh-seq-success {
  display: none;
  margin-top: 10px;
  opacity: 0;
  transform: translateY(12px);
  transition: opacity 0.35s ease, transform 0.35s ease;
}

.kh-seq-success.is-visible {
  display: block;
  opacity: 1;
  transform: translateY(0);
}

.kh-seq-success-inner {
  max-width: 540px;
}

.kh-seq-success-title {
  margin: 0 0 12px 0;
  font-family: var(--khseq-question-font-family);
  font-weight: 300;
  font-size: 22px;
  line-height: 1.25;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  color: #F2E4C7;
}

.kh-seq-success-text {
  margin: 0 0 24px 0;
  font-family: var(--khseq-intro-font-family);
  font-weight: 300;
  font-size: 14px;
  line-height: 1.85;
  color: rgba(255, 255, 255, 0.78);
}

.kh-seq-success-card {
  padding: 18px 22px;
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(242, 228, 199, 0.2);
  margin-bottom: 24px;
}

.kh-seq-summary-row {
  display: flex;
  justify-content: space-between;
  padding: 8px 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.06);
  font-size: 13px;
}

.kh-seq-summary-row:last-child {
  border-bottom: none;
}

.kh-seq-summary-label {
  color: #F2E4C7;
  font-size: 11px;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.kh-seq-summary-val {
  color: #FFFFFF;
  font-weight: 400;
}

.kh-seq-success-reset {
  background: transparent !important;
  border: none !important;
  outline: none !important;
  padding: 8px 0;
  font-family: var(--khseq-action-font-family);
  font-weight: 500;
  font-size: var(--khseq-action-font-size);
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: #FFFFFF !important;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 10px;
}

.kh-seq-success-reset::after {
  content: "";
  width: 22px;
  height: 1px;
  background: #F2E4C7;
  transition: transform 0.24s ease;
}

.kh-seq-success-reset:hover::after {
  transform: translateX(5px);
}

.kh-seq-contact.is-complete .kh-seq-progress-row,
.kh-seq-contact.is-complete .kh-seq-stage,
.kh-seq-contact.is-complete .kh-seq-actions {
  display: none !important;
}

.kh-seq-hp {
  position: absolute !important;
  left: -9999px !important;
  width: 1px !important;
  height: 1px !important;
  overflow: hidden !important;
}

/* ==========================================================================
   FAQ SECTION (ACCORDION)
   ========================================================================== */
.kh-faq {
  --kh-text: #F7F3EE;
  --kh-text-soft: rgba(247, 243, 238, 0.82);
  --kh-text-muted: rgba(242, 228, 199, 0.64);
  --kh-brown: #F7F3EE;
  --kh-brown-soft: #F2E4C7;
  --kh-line: rgba(247, 243, 238, 0.14);
  --kh-line-strong: rgba(247, 243, 238, 0.22);

  width: 100%;
  padding: 90px 40px 110px;
  background: #111111;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  box-sizing: border-box;
}

.kh-faq-wrap {
  max-width: 1200px;
  margin: 0 auto;
}

.kh-faq-head {
  position: relative;
  margin: 0 0 52px;
  max-width: 720px;
  padding-top: 18px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.kh-faq-number {
  position: absolute;
  top: -16px;
  left: 50%;
  font-family: "IvyOraDisplay", serif;
  font-weight: 300;
  font-size: clamp(58px, 7vw, 118px);
  line-height: 0.82;
  letter-spacing: 0.02em;
  color: rgba(247, 243, 238, 0.08);
  pointer-events: none;
  user-select: none;
  transform: translateX(-50%);
}

.kh-faq-kicker {
  position: relative;
  z-index: 1;
  display: inline-block;
  margin: 0 0 12px;
  font-family: "Bricolage Grotesque", sans-serif;
  font-size: 10px;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  font-weight: 400;
  color: var(--kh-brown-soft);
}

.kh-faq-title {
  position: relative;
  z-index: 1;
  margin: 0;
  font-family: "IvyOraDisplay", serif;
  font-weight: 300;
  font-size: clamp(32px, 3.2vw, 52px);
  line-height: 1.05;
  text-transform: uppercase;
  color: var(--kh-brown);
}

.kh-faq-script {
  display: block;
  font-family: "GoldenHopes", cursive;
  font-size: clamp(22px, 1.8vw, 30px);
  line-height: 1.1;
  color: var(--kh-brown-soft);
  transform: rotate(-2deg);
  text-transform: capitalize;
  margin-top: 4px;
}

.kh-faq-lead {
  margin: 16px auto 0;
  max-width: 620px;
  font-family: "Bricolage Grotesque", sans-serif;
  font-size: 13px;
  line-height: 1.78;
  font-weight: 300;
  color: var(--kh-text-soft);
}

.kh-faq-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 0 44px;
  align-items: start;
}

.kh-faq-column {
  display: flex;
  flex-direction: column;
  min-height: 0;
}

.kh-faq-item {
  border-top: 1px solid var(--kh-line);
}

.kh-faq-question {
  appearance: none;
  -webkit-appearance: none;
  width: 100%;
  padding: 22px 38px 22px 0;
  border: 0;
  background: transparent !important;
  text-align: left;
  cursor: pointer;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 20px;
  color: var(--kh-brown) !important;
  box-shadow: none;
  outline: none;
}

.kh-faq-question-text {
  display: block;
  font-family: "IvyOraDisplay", serif;
  font-weight: 300;
  font-size: clamp(19px, 1.6vw, 24px);
  line-height: 1.2;
  text-transform: uppercase;
  color: var(--kh-brown) !important;
}

.kh-faq-icon {
  position: relative;
  width: 16px;
  height: 16px;
  flex: 0 0 16px;
  margin-top: 4px;
}

.kh-faq-icon::before,
.kh-faq-icon::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 16px;
  height: 1px;
  background: var(--kh-brown-soft);
  transform: translate(-50%, -50%);
  transition: transform 0.35s ease, opacity 0.35s ease;
}

.kh-faq-icon::after {
  transform: translate(-50%, -50%) rotate(90deg);
}

.kh-faq-item.is-open .kh-faq-icon::after {
  opacity: 0;
  transform: translate(-50%, -50%) rotate(90deg) scaleX(0.2);
}

.kh-faq-answer {
  display: grid;
  grid-template-rows: 0fr;
  transition: grid-template-rows 0.4s cubic-bezier(0.22, 1, 0.36, 1);
}

.kh-faq-item.is-open .kh-faq-answer {
  grid-template-rows: 1fr;
}

.kh-faq-answer-inner {
  overflow: hidden;
}

.kh-faq-answer p {
  margin: 0;
  padding: 0 32px 22px 0;
  font-family: "Bricolage Grotesque", sans-serif;
  font-size: 13px;
  line-height: 1.8;
  font-weight: 300;
  color: var(--kh-text-soft);
}

.kh-faq-answer a {
  color: var(--kh-brown-soft);
  text-decoration: underline;
  text-underline-offset: 4px;
}

/* ==========================================================================
   RESPONSIVE ADJUSTMENTS
   ========================================================================== */
@media (max-width: 960px) {
  .kh-res-hero-inner {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  .kh-res-hero-side {
    border-left: none;
    padding-left: 0;
    border-top: 1px solid rgba(255, 255, 255, 0.12);
    padding-top: 20px;
  }
  .kh-res-container {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .kh-faq-grid {
    grid-template-columns: 1fr;
    gap: 0;
  }
}

@media (max-width: 600px) {
  .kh-res-hero {
    padding: 100px 20px 50px;
  }
  .kh-res-main-section,
  .kh-faq {
    padding: 50px 20px 70px;
  }
  .kh-seq-contact,
  .kh-contact-card,
  .kh-opening-hours {
    padding: 26px 20px;
  }
  .kh-ct-row {
    grid-template-columns: 1fr;
    gap: 6px;
  }
  .kh-ct-value {
    text-align: left;
  }
  .kh-seq-field-wrap.kh-grid-2 {
    grid-template-columns: 1fr;
  }
  .kh-seq-choices {
    gap: 8px;
  }
  .kh-seq-choice {
    width: 100%;
    justify-content: flex-start;
    padding: 12px 14px;
  }
}
</style>

<div class="kh-res-page-wrapper">

  <!-- ======================================================================
       HERO SECTION
       ====================================================================== -->
  <section class="kh-res-hero" id="khResHero">
    <div class="kh-res-hero-inner">
      <div class="kh-res-hero-copy">
        <div class="kh-res-hero-kicker">
          Table Bookings & Private Dining
        </div>
        <h1 class="kh-res-hero-title">
          Reservations
          <span class="kh-res-hero-script">
            A Table Set In Tradition
          </span>
        </h1>
        <p class="kh-res-hero-lead">
          Whether joining us for an intimate dinner, family celebration, or corporate dining across Dublin, Milpitas, Livermore, or Concord, our dining concierge ensures every table is prepared with care and authentic South Indian hospitality.
        </p>
        <a href="#khSeqReservation" class="kh-res-hero-scroll">
          <div class="kh-res-hero-scroll-line"></div>
          <span>Reserve Your Table</span>
        </a>
      </div>

      <div class="kh-res-hero-side">
        <p>
          Reservations and private dining bookings are handled directly with precision and care to guarantee your preferred seating, dietary accommodations, and seamless service from the moment you arrive.
        </p>
      </div>
    </div>
  </section>

  <!-- ======================================================================
       MAIN RESERVATIONS INTERACTIVE MODULE
       ====================================================================== -->
  <section class="kh-res-main-section" id="khSeqReservation">
    <div class="kh-res-container">

      <!-- LEFT COLUMN: CONCIERGE & HOURS -->
      <div class="kh-res-card-col">

        <!-- Concierge / Contact Card -->
        <div class="kh-contact-card">
          <div class="kh-ct-inner">
            <div class="kh-ct-header">
              <h3 class="kh-ct-title">Reservation Concierge</h3>
              <span class="kh-ct-line"></span>
            </div>

            <div class="kh-ct-list">
              <div class="kh-ct-row">
                <div class="kh-ct-label">Locations</div>
                <div class="kh-ct-value">
                  Dublin • Milpitas<br>
                  Livermore • Concord, CA
                </div>
              </div>

              <div class="kh-ct-row">
                <div class="kh-ct-label">Direct Lines</div>
                <div class="kh-ct-value">
                  <a href="tel:+19258287768">Dublin: (925) 828-7768</a><br>
                  <a href="tel:+14089467768">Milpitas: (408) 946-7768</a><br>
                  <a href="tel:+19258287768">Livermore: (925) 828-7768</a><br>
                  <a href="tel:+19258287768">Concord: (925) 828-7768</a>
                </div>
              </div>

              <div class="kh-ct-row">
                <div class="kh-ct-label">Email Booking</div>
                <div class="kh-ct-value">
                  <a href="mailto:reservations@biryanispot.com">reservations@biryanispot.com</a>
                </div>
              </div>

              <div class="kh-ct-row">
                <div class="kh-ct-label">Private Events</div>
                <div class="kh-ct-value">
                  <a href="mailto:catering@biryanispot.com">catering@biryanispot.com</a><br>
                  Live Dosa Stations & Buffets
                </div>
              </div>

              <div class="kh-ct-row">
                <div class="kh-ct-label">Cuisine Note</div>
                <div class="kh-ct-value">
                  100% Certified Halal Meats<br>
                  Extensive Vegan & Gluten-Free Dosas
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Dining Hours Card -->
        <div class="kh-opening-hours">
          <div class="kh-oh-inner">
            <div class="kh-oh-header">
              <h3 class="kh-oh-title">Dining Hours</h3>
              <span class="kh-oh-line"></span>
            </div>

            <div class="kh-oh-list">
              <div class="kh-oh-row">
                <span class="kh-oh-day">Monday – Thursday</span>
                <span class="kh-oh-divider"></span>
                <span class="kh-oh-time">11:00 AM – 10:00 PM</span>
              </div>
              <div class="kh-oh-row">
                <span class="kh-oh-day">Friday – Saturday</span>
                <span class="kh-oh-divider"></span>
                <span class="kh-oh-time">11:00 AM – 10:30 PM</span>
              </div>
              <div class="kh-oh-row">
                <span class="kh-oh-day">Sunday</span>
                <span class="kh-oh-divider"></span>
                <span class="kh-oh-time">11:00 AM – 10:00 PM</span>
              </div>
              <div class="kh-oh-row">
                <span class="kh-oh-day">Concord Express</span>
                <span class="kh-oh-divider"></span>
                <span class="kh-oh-time">Daily: 11:00 AM – 9:30 PM</span>
              </div>
            </div>

            <p class="kh-oh-note">
              <span>Note:</span> Kitchen orders and table seating close 30 minutes prior to restaurant closing time.
            </p>
          </div>
        </div>

      </div>

      <!-- RIGHT COLUMN: SEQUENTIAL MULTI-STEP RESERVATION FORM -->
      <div class="kh-res-form-col">
        <div class="kh-seq-contact" id="khSeqReservationModule">
          <div class="kh-seq-inner">

            <div class="kh-seq-header">
              <h3 class="kh-seq-title">Table Reservation</h3>
              <span class="kh-seq-line"></span>
            </div>

            <p class="kh-seq-intro">
              A few details are all we need. Choose your preferred location, party size, date, time, and contact info, and our team will be in touch shortly to confirm your table.
            </p>

            <div class="kh-seq-progress-row">
              <div class="kh-seq-progress-text" id="khSeqProgressText">01 / 05</div>
              <div class="kh-seq-progress-bar">
                <div class="kh-seq-progress-fill" id="khSeqProgressFill" style="width: 20%;"></div>
              </div>
            </div>

            <form class="kh-seq-form" id="khReservationForm" novalidate>
              <!-- Hidden form states -->
              <input type="hidden" name="location" id="khResLocation" value="Dublin - 7120 Regional St">
              <input type="hidden" name="guests" id="khResGuests" value="2 Guests">
              <input type="hidden" name="time" id="khResTime" value="7:00 PM">
              <input type="hidden" name="occasion" id="khResOccasion" value="Casual Dining">

              <!-- Anti-Spam Honeypot -->
              <div class="kh-seq-hp" aria-hidden="true">
                <label for="khWebsite">Website</label>
                <input type="text" id="khWebsite" name="website" tabindex="-1" autocomplete="off">
              </div>

              <div class="kh-seq-stage" id="khSeqStage">

                <!-- STEP 1: SELECT LOCATION -->
                <section class="kh-seq-step is-active" data-step="1">
                  <h2 class="kh-seq-question" data-text="Which location would you like to visit?"></h2>
                  <div class="kh-seq-choices" id="khLocationChoices">
                    <button type="button" class="kh-seq-choice is-selected" data-value="Dublin - 7120 Regional St">Dublin (Regional St)</button>
                    <button type="button" class="kh-seq-choice" data-value="Milpitas - 280 W Calaveras Blvd">Milpitas (Calaveras)</button>
                    <button type="button" class="kh-seq-choice" data-value="Livermore - 2062 First St">Livermore (First St)</button>
                    <button type="button" class="kh-seq-choice" data-value="Concord - 1690 Salvio St">Concord (Salvio St)</button>
                  </div>
                </section>

                <!-- STEP 2: PARTY SIZE -->
                <section class="kh-seq-step" data-step="2">
                  <h2 class="kh-seq-question" data-text="How many guests in your dining party?"></h2>
                  <div class="kh-seq-choices" id="khGuestChoices">
                    <button type="button" class="kh-seq-choice is-selected" data-value="1 - 2 Guests">1 - 2 Guests</button>
                    <button type="button" class="kh-seq-choice" data-value="3 - 4 Guests">3 - 4 Guests</button>
                    <button type="button" class="kh-seq-choice" data-value="5 - 6 Guests">5 - 6 Guests</button>
                    <button type="button" class="kh-seq-choice" data-value="7 - 10 Guests">7 - 10 Guests</button>
                    <button type="button" class="kh-seq-choice" data-value="10+ Large Party">10+ Event</button>
                  </div>
                </section>

                <!-- STEP 3: DATE & TIME -->
                <section class="kh-seq-step" data-step="3">
                  <h2 class="kh-seq-question" data-text="When would you like to dine with us?"></h2>
                  <div class="kh-seq-field-wrap">
                    <span class="kh-seq-sub-label">Reservation Date</span>
                    <input class="kh-seq-input" type="date" id="khResDate" name="date" required>
                    
                    <span class="kh-seq-sub-label" style="margin-top: 18px;">Preferred Seating Time</span>
                    <div class="kh-seq-choices" id="khTimeChoices">
                      <button type="button" class="kh-seq-choice" data-value="11:30 AM">11:30 AM</button>
                      <button type="button" class="kh-seq-choice" data-value="12:30 PM">12:30 PM</button>
                      <button type="button" class="kh-seq-choice" data-value="1:30 PM">1:30 PM</button>
                      <button type="button" class="kh-seq-choice" data-value="5:30 PM">5:30 PM</button>
                      <button type="button" class="kh-seq-choice" data-value="6:30 PM">6:30 PM</button>
                      <button type="button" class="kh-seq-choice is-selected" data-value="7:00 PM">7:00 PM</button>
                      <button type="button" class="kh-seq-choice" data-value="7:45 PM">7:45 PM</button>
                      <button type="button" class="kh-seq-choice" data-value="8:30 PM">8:30 PM</button>
                    </div>
                  </div>
                </section>

                <!-- STEP 4: GUEST CONTACT INFO -->
                <section class="kh-seq-step" data-step="4">
                  <h2 class="kh-seq-question" data-text="What is your contact information?"></h2>
                  <div class="kh-seq-field-wrap">
                    <input
                      class="kh-seq-input"
                      type="text"
                      id="khResName"
                      name="name"
                      placeholder="Your Full Name"
                      autocomplete="name"
                      required
                      style="margin-bottom: 12px;"
                    >
                    <div class="kh-seq-field-wrap kh-grid-2">
                      <input
                        class="kh-seq-input"
                        type="tel"
                        id="khResPhone"
                        name="phone"
                        placeholder="Phone Number (e.g. 925-828-7768)"
                        autocomplete="tel"
                        required
                      >
                      <input
                        class="kh-seq-input"
                        type="email"
                        id="khResEmail"
                        name="email"
                        placeholder="Email Address (your@email.com)"
                        autocomplete="email"
                        required
                      >
                    </div>
                  </div>
                </section>

                <!-- STEP 5: OCCASION & SPECIAL REQUESTS -->
                <section class="kh-seq-step" data-step="5">
                  <h2 class="kh-seq-question" data-text="Any special requests or dietary preferences?"></h2>
                  <div class="kh-seq-field-wrap">
                    <span class="kh-seq-sub-label">Dining Occasion</span>
                    <div class="kh-seq-choices" id="khOccasionChoices" style="margin-bottom: 18px;">
                      <button type="button" class="kh-seq-choice is-selected" data-value="Casual Dining">Casual Dining</button>
                      <button type="button" class="kh-seq-choice" data-value="Birthday Celebration">Birthday</button>
                      <button type="button" class="kh-seq-choice" data-value="Anniversary">Anniversary</button>
                      <button type="button" class="kh-seq-choice" data-value="Business / Corporate">Business</button>
                    </div>

                    <span class="kh-seq-sub-label">Special Requests (Optional)</span>
                    <textarea
                      class="kh-seq-textarea"
                      id="khResNotes"
                      name="notes"
                      placeholder="Seating preference, spice level, Halal meat preference, Jain / Vegan requirements, or high chairs..."
                      maxlength="280"
                    ></textarea>
                    <div class="kh-seq-counter is-idle" id="khResCounter">0 / 280</div>
                  </div>
                </section>

              </div>

              <!-- ACTIONS BAR -->
              <div class="kh-seq-actions" id="khSeqActions">
                <button type="button" class="kh-seq-action kh-seq-action--prev" id="khPrevBtn" disabled>Back</button>
                <button type="submit" class="kh-seq-action kh-seq-action--next" id="khNextBtn">Next</button>
              </div>

              <!-- SUCCESS CONFIRMATION MODAL -->
              <div class="kh-seq-success" id="khSeqSuccess" aria-live="polite">
                <div class="kh-seq-success-inner">
                  <h3 class="kh-seq-success-title">Thank you for your reservation.</h3>
                  <p class="kh-seq-success-text" id="khSeqSuccessText">
                    Your table request has been received. Our dining team will review your reservation and confirm your table shortly.
                  </p>

                  <div class="kh-seq-success-card" id="khResSummaryBox">
                    <div class="kh-seq-summary-row">
                      <span class="kh-seq-summary-label">Location</span>
                      <span class="kh-seq-summary-val" id="sumLocation">Dublin - 7120 Regional St</span>
                    </div>
                    <div class="kh-seq-summary-row">
                      <span class="kh-seq-summary-label">Party Size</span>
                      <span class="kh-seq-summary-val" id="sumGuests">2 Guests</span>
                    </div>
                    <div class="kh-seq-summary-row">
                      <span class="kh-seq-summary-label">Date & Time</span>
                      <span class="kh-seq-summary-val" id="sumDateTime">Today at 7:00 PM</span>
                    </div>
                    <div class="kh-seq-summary-row">
                      <span class="kh-seq-summary-label">Guest</span>
                      <span class="kh-seq-summary-val" id="sumGuestName">-</span>
                    </div>
                  </div>

                  <button type="button" class="kh-seq-success-reset" id="khSeqReset">Make Another Reservation</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ======================================================================
       FAQ SECTION
       ====================================================================== -->
  <section class="kh-faq" id="khFaq">
    <div class="kh-faq-wrap">
      <div class="kh-faq-head">
        <div class="kh-faq-number">01</div>
        <div class="kh-faq-kicker">Frequently Asked Questions</div>
        <h2 class="kh-faq-title">
          What Guests Often
          <br>Ask Before They Arrive
          <span class="kh-faq-script">Useful to know in advance</span>
        </h2>
        <p class="kh-faq-lead">
          A few practical details, answered with the same clarity and care as the dining experience itself.
        </p>
      </div>

      <div class="kh-faq-grid">
        <div class="kh-faq-column">

          <div class="kh-faq-item is-open">
            <button class="kh-faq-question" type="button">
              <span class="kh-faq-question-text">Is all the meat served 100% Halal?</span>
              <span class="kh-faq-icon" aria-hidden="true"></span>
            </button>
            <div class="kh-faq-answer">
              <div class="kh-faq-answer-inner">
                <p>Yes, absolutely. All our chicken, goat, and lamb are 100% certified Halal, prepared fresh daily across our Dublin, Milpitas, Livermore, and Concord locations.</p>
              </div>
            </div>
          </div>

          <div class="kh-faq-item">
            <button class="kh-faq-question" type="button">
              <span class="kh-faq-question-text">What is the difference between Dum Biryani and Vijayawada Biryani?</span>
              <span class="kh-faq-icon" aria-hidden="true"></span>
            </button>
            <div class="kh-faq-answer">
              <div class="kh-faq-answer-inner">
                <p>Our Hyderabadi Dum Biryani is cooked on slow charcoal dum with aged basmati rice, saffron, and marinated meats sealed in clay handis. Our Vijayawada Biryani features aromatic spiced biryani rice topped with a spicy, wok-tossed boneless chicken gravy cooked in authentic Andhra spices.</p>
              </div>
            </div>
          </div>

          <div class="kh-faq-item">
            <button class="kh-faq-question" type="button">
              <span class="kh-faq-question-text">Do you offer Gluten-Free and Vegan options?</span>
              <span class="kh-faq-icon" aria-hidden="true"></span>
            </button>
            <div class="kh-faq-answer">
              <div class="kh-faq-answer-inner">
                <p>Yes! All our traditional Dosas, Idlis, and Medu Vadas are naturally gluten-free, crafted from fermented rice and urad dal batter. We also offer extensive vegan curries like Chana Masala, Dal Tadka, and Vegetable Biryani.</p>
              </div>
            </div>
          </div>

        </div>

        <div class="kh-faq-column">

          <div class="kh-faq-item">
            <button class="kh-faq-question" type="button">
              <span class="kh-faq-question-text">Can I place large catering orders for weddings or corporate events?</span>
              <span class="kh-faq-icon" aria-hidden="true"></span>
            </button>
            <div class="kh-faq-answer">
              <div class="kh-faq-answer-inner">
                <p>Yes, we cater corporate lunches, family celebrations, and weddings across Silicon Valley and the East Bay with live Dosa stations, hot Biryani handis, and customized South Indian buffet spreads.</p>
              </div>
            </div>
          </div>

          <div class="kh-faq-item">
            <button class="kh-faq-question" type="button">
              <span class="kh-faq-question-text">How do I order for takeout or delivery?</span>
              <span class="kh-faq-icon" aria-hidden="true"></span>
            </button>
            <div class="kh-faq-answer">
              <div class="kh-faq-answer-inner">
                <p>You can order directly online through our official ToastTab ordering links for Dublin, Milpitas, Livermore, and Concord with instant pickup and delivery tracking.</p>
              </div>
            </div>
          </div>

          <div class="kh-faq-item">
            <button class="kh-faq-question" type="button">
              <span class="kh-faq-question-text">What are your operating hours across the 4 locations?</span>
              <span class="kh-faq-icon" aria-hidden="true"></span>
            </button>
            <div class="kh-faq-answer">
              <div class="kh-faq-answer-inner">
                <p>Dublin, Milpitas, and Livermore are open daily from 11:00 AM to 10:00 PM (10:30 PM on Friday and Saturday). Chennai Dosa Express in Concord is open daily from 11:00 AM to 9:30 PM.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

</div>

<!-- ==========================================================================
     INTERACTIVE JAVASCRIPT FOR SEQUENTIAL FORM & FAQ ACCORDION
     ========================================================================== -->
<script type="text/javascript">
(function(){
  // --- Sequential Reservation Form Controller ---
  const root = document.getElementById('khSeqReservationModule');
  if(!root) return;

  const form = document.getElementById('khReservationForm');
  const stage = document.getElementById('khSeqStage');
  const steps = Array.from(root.querySelectorAll('.kh-seq-step'));
  const prevBtn = document.getElementById('khPrevBtn');
  const nextBtn = document.getElementById('khNextBtn');
  const progressText = document.getElementById('khSeqProgressText');
  const progressFill = document.getElementById('khSeqProgressFill');
  const successMsg = document.getElementById('khSeqSuccess');
  const successText = document.getElementById('khSeqSuccessText');
  const resetBtn = document.getElementById('khSeqReset');

  // Input elements
  const locationInput = document.getElementById('khResLocation');
  const guestsInput = document.getElementById('khResGuests');
  const timeInput = document.getElementById('khResTime');
  const occasionInput = document.getElementById('khResOccasion');
  const dateInput = document.getElementById('khResDate');
  const nameInput = document.getElementById('khResName');
  const phoneInput = document.getElementById('khResPhone');
  const emailInput = document.getElementById('khResEmail');
  const notesInput = document.getElementById('khResNotes');
  const counterEl = document.getElementById('khResCounter');
  const websiteInput = document.getElementById('khWebsite');

  // Set minimum date to today
  if(dateInput){
    const today = new Date().toISOString().split('T')[0];
    dateInput.min = today;
    dateInput.value = today;
  }

  let currentStep = 1;
  const totalSteps = steps.length;
  let isSubmitting = false;

  // Choice button group handler
  function setupChoiceGroup(containerId, hiddenInput){
    const container = document.getElementById(containerId);
    if(!container) return;
    const btns = Array.from(container.querySelectorAll('.kh-seq-choice'));
    btns.forEach(btn => {
      btn.addEventListener('click', () => {
        btns.forEach(b => b.classList.remove('is-selected'));
        btn.classList.add('is-selected');
        if(hiddenInput){
          hiddenInput.value = btn.getAttribute('data-value') || btn.textContent.trim();
        }
      });
    });
  }

  setupChoiceGroup('khLocationChoices', locationInput);
  setupChoiceGroup('khGuestChoices', guestsInput);
  setupChoiceGroup('khTimeChoices', timeInput);
  setupChoiceGroup('khOccasionChoices', occasionInput);

  function animateQuestion(stepEl){
    const questionEl = stepEl.querySelector('.kh-seq-question');
    if(!questionEl) return;
    const text = questionEl.getAttribute('data-text') || '';
    const words = text.split(' ');
    questionEl.innerHTML = '';
    words.forEach((word, idx) => {
      const span = document.createElement('span');
      span.className = 'kh-word';
      span.textContent = word;
      span.style.animationDelay = (idx * 0.055) + 's';
      questionEl.appendChild(span);
      if(idx !== words.length - 1){
        questionEl.appendChild(document.createTextNode(' '));
      }
    });
  }

  function updateProgress(){
    if(progressText){
      progressText.textContent = String(currentStep).padStart(2, '0') + ' / ' + String(totalSteps).padStart(2, '0');
    }
    if(progressFill){
      progressFill.style.width = ((currentStep / totalSteps) * 100) + '%';
    }
  }

  function updateButtons(){
    if(prevBtn) prevBtn.disabled = currentStep === 1 || isSubmitting;
    if(nextBtn){
      nextBtn.disabled = isSubmitting;
      nextBtn.textContent = isSubmitting ? 'Confirming...' : (currentStep === totalSteps ? 'Confirm Reservation' : 'Next');
    }
  }

  function updateCounter(){
    if(!notesInput || !counterEl) return;
    const len = notesInput.value.length;
    counterEl.textContent = len + ' / 280';
    counterEl.classList.toggle('is-idle', len === 0);
  }

  function focusStepField(){
    if(currentStep === 3 && dateInput){
      dateInput.focus();
    } else if(currentStep === 4 && nameInput){
      nameInput.focus();
    } else if(currentStep === 5 && notesInput){
      notesInput.focus();
    }
  }

  function showStep(stepNumber, options){
    const settings = Object.assign({ focusField: true }, options);
    currentStep = stepNumber;
    let activeStep = null;

    steps.forEach(step => {
      const isActive = Number(step.getAttribute('data-step')) === stepNumber;
      step.classList.toggle('is-active', isActive);
      if(isActive){
        activeStep = step;
        animateQuestion(step);
      }
    });

    updateProgress();
    updateButtons();
    if(successMsg) successMsg.classList.remove('is-visible');
    root.classList.remove('is-complete');

    if(settings.focusField){
      setTimeout(focusStepField, 180);
    }
  }

  function validateStep(stepNumber){
    if(stepNumber === 1){
      if(!locationInput.value.trim()){
        alert('Please select a location.');
        return false;
      }
    } else if(stepNumber === 2){
      if(!guestsInput.value.trim()){
        alert('Please select party size.');
        return false;
      }
    } else if(stepNumber === 3){
      if(!dateInput.value){
        alert('Please choose a valid date.');
        dateInput.focus();
        return false;
      }
      if(!timeInput.value.trim()){
        alert('Please choose a dining time.');
        return false;
      }
    } else if(stepNumber === 4){
      if(!nameInput.value.trim()){
        alert('Please enter your full name.');
        nameInput.focus();
        return false;
      }
      if(!phoneInput.value.trim()){
        alert('Please provide a phone number for reservation confirmation.');
        phoneInput.focus();
        return false;
      }
      const emailVal = emailInput.value.trim();
      if(!emailVal || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailVal)){
        alert('Please provide a valid email address.');
        emailInput.focus();
        return false;
      }
    }
    return true;
  }

  function setSuccess(data){
    if(successText && data.message){
      successText.textContent = data.message;
    }
    
    // Update summary card
    const sumLoc = document.getElementById('sumLocation');
    const sumGst = document.getElementById('sumGuests');
    const sumDT = document.getElementById('sumDateTime');
    const sumName = document.getElementById('sumGuestName');

    if(sumLoc) sumLoc.textContent = locationInput.value;
    if(sumGst) sumGst.textContent = guestsInput.value;
    if(sumDT) sumDT.textContent = dateInput.value + ' at ' + timeInput.value;
    if(sumName) sumName.textContent = nameInput.value;

    root.classList.add('is-complete');
    if(successMsg) successMsg.classList.add('is-visible');
  }

  function resetForm(){
    form.reset();
    root.classList.remove('is-complete');
    if(dateInput){
      const today = new Date().toISOString().split('T')[0];
      dateInput.value = today;
    }
    updateCounter();
    showStep(1, { focusField: false });
  }

  function submitReservation(){
    if(isSubmitting) return;
    if(websiteInput && websiteInput.value.trim() !== '') return; // Spam honeypot

    isSubmitting = true;
    updateButtons();

    const payload = {
      name: nameInput.value.trim(),
      email: emailInput.value.trim(),
      phone: phoneInput.value.trim(),
      location: locationInput.value.trim(),
      date: dateInput.value.trim(),
      time: timeInput.value.trim(),
      guests: guestsInput.value.trim(),
      notes: (occasionInput.value ? '[' + occasionInput.value + '] ' : '') + notesInput.value.trim()
    };

    fetch('/api/reservations', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
      },
      body: JSON.stringify(payload)
    })
    .then(async res => {
      const data = await res.json();
      if(!res.ok || !data.success){
        throw new Error(data && data.error ? data.error : (data && data.message ? data.message : 'Unable to confirm reservation.'));
      }
      return data;
    })
    .then(data => {
      setSuccess(data);
    })
    .catch(err => {
      alert(err.message || 'Something went wrong while booking. Please call the restaurant directly.');
    })
    .finally(() => {
      isSubmitting = false;
      updateButtons();
    });
  }

  if(prevBtn){
    prevBtn.addEventListener('click', () => {
      if(currentStep > 1 && !isSubmitting){
        showStep(currentStep - 1);
      }
    });
  }

  form.addEventListener('keydown', (e) => {
    const activeTag = document.activeElement ? document.activeElement.tagName.toLowerCase() : '';
    if(e.key === 'Enter' && activeTag !== 'textarea'){
      e.preventDefault();
      if(!validateStep(currentStep)) return;
      if(currentStep < totalSteps){
        showStep(currentStep + 1);
      } else {
        submitReservation();
      }
    }
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if(!validateStep(currentStep)) return;
    if(currentStep < totalSteps){
      showStep(currentStep + 1);
      return;
    }
    submitReservation();
  });

  if(notesInput){
    notesInput.addEventListener('input', updateCounter);
  }

  if(resetBtn){
    resetBtn.addEventListener('click', resetForm);
  }

  // Initial step setup
  updateCounter();
  showStep(1, { focusField: false });

  // --- FAQ Accordion Controller ---
  const faq = document.getElementById('khFaq');
  if(faq){
    const items = Array.from(faq.querySelectorAll('.kh-faq-item'));
    items.forEach(item => {
      const button = item.querySelector('.kh-faq-question');
      if(!button) return;
      button.addEventListener('click', () => {
        const isOpen = item.classList.contains('is-open');
        if(isOpen) {
          item.classList.remove('is-open');
          return;
        }
        items.forEach(entry => entry.classList.remove('is-open'));
        item.classList.add('is-open');
      });
    });
  }
})();
</script>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
