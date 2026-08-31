<?php
$pageTitle = "Reservations & FAQ | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";
?>

<!-- Hero Booking Header -->
<section style="padding: 160px 48px 80px; background: linear-gradient(180deg, #241810 0%, #3D291C 100%); color: #fff; text-align: center; position: relative;">
  <div style="position: absolute; inset: 0; background: url('/assets/images/res-hero.webp') center / cover no-repeat; opacity: 0.18;"></div>
  
  <div style="position: relative; z-index: 2; max-width: 900px; margin: 0 auto;">
    <div style="font-size: 11px; letter-spacing: 0.32em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 14px;">A Table Set in Time</div>
    <h1 style="font-family: var(--font-serif); font-size: clamp(38px, 4.5vw, 64px); font-weight: 300; text-transform: uppercase; line-height: 1.05;">
      RESERVE YOUR TABLE
      <span style="display: block; font-family: var(--font-script); font-size: clamp(26px, 2.5vw, 38px); color: var(--color-sand); text-transform: capitalize; margin-top: 6px;">an unhurried culinary journey</span>
    </h1>
    <p style="margin-top: 20px; font-size: 14px; color: rgba(255,255,255,0.8); line-height: 1.8; max-width: 680px; margin-left: auto; margin-right: auto;">
      To ensure an intimate dining pace and dedicated service, advance reservations are recommended. Select your preferred location and time below.
    </p>
  </div>
</section>

<!-- Interactive Booking Stage -->
<section style="padding: 80px 48px; background-color: var(--color-cream);">
  <div style="max-width: 980px; margin: 0 auto; background: #fff; padding: 48px; box-shadow: 0 20px 60px rgba(0,0,0,0.06); border: 1px solid rgba(61,41,28,0.08);">
    <form action="javascript:alert('Thank you. Your table reservation request has been received. Our concierge will confirm via SMS and email within 15 minutes.');" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 24px;">
      
      <div>
        <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: rgb(106,76,54); margin-bottom: 8px;">Select Location</label>
        <select required style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); background: #FAF7F2; font-family: var(--font-sans); font-size: 13px;">
          <option value="dublin">Dublin, CA (7198 Regional St)</option>
          <option value="milpitas">Milpitas, CA (440 Barber Ln)</option>
          <option value="livermore">Livermore, CA (2090 Railroad Ave)</option>
          <option value="concord">Concord, CA (1855 Willow Pass Rd)</option>
        </select>
      </div>

      <div>
        <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: rgb(106,76,54); margin-bottom: 8px;">Date</label>
        <input type="date" required value="<?= date('Y-m-d') ?>" style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); background: #FAF7F2; font-family: var(--font-sans); font-size: 13px;">
      </div>

      <div>
        <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: rgb(106,76,54); margin-bottom: 8px;">Time Slot</label>
        <select required style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); background: #FAF7F2; font-family: var(--font-sans); font-size: 13px;">
          <option>12:00 PM - Lunch</option>
          <option>01:30 PM - Lunch</option>
          <option>05:30 PM - Dinner</option>
          <option>07:00 PM - Evening Bistro</option>
          <option>08:30 PM - Late Dinner</option>
        </select>
      </div>

      <div>
        <label style="display: block; font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: rgb(106,76,54); margin-bottom: 8px;">Guests</label>
        <select required style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); background: #FAF7F2; font-family: var(--font-sans); font-size: 13px;">
          <option>2 Guests (Intimate Table)</option>
          <option>4 Guests (Standard Booth)</option>
          <option>6 Guests (Family Table)</option>
          <option>8+ Guests (Private Dining)</option>
        </select>
      </div>

      <div style="grid-column: 1 / -1; margin-top: 10px; text-align: center;">
        <button type="submit" class="khf-btn-luxury khf-btn-gold" style="padding: 16px 48px; width: auto; cursor: pointer;">
          Confirm Table Reservation &rarr;
        </button>
      </div>
    </form>
  </div>
</section>

<!-- =========================================================================
     SECTION 04: FREQUENTLY ASKED QUESTIONS (EXACT SCREENSHOT CLONE)
     ========================================================================= -->
<section class="kh-faq-section" id="khFaqSection">
  <div class="kh-faq-head">
    <div class="kh-faq-number">04</div>
    <div class="kh-faq-kicker">FREQUENTLY ASKED QUESTIONS</div>
    <h2 class="kh-faq-title">
      What Guests Often Ask Before They Arrive
      <span class="kh-faq-script">Useful to know in advance</span>
    </h2>
  </div>

  <!-- 3-Image Collage in Center -->
  <div class="kh-faq-collage">
    <div class="kh-faq-img-card">
      <img src="/assets/images/faq-img-1.webp" alt="Man gazing across pyramids setting" loading="lazy">
    </div>
    <div class="kh-faq-img-card">
      <img src="/assets/images/faq-img-2.webp" alt="Artisanal stone hearth oven" loading="lazy">
    </div>
    <div class="kh-faq-img-card">
      <img src="/assets/images/faq-img-3.webp" alt="Authentic culinary table spread" loading="lazy">
    </div>
  </div>

  <!-- 2-Column Accordion List -->
  <div class="kh-faq-grid">
    
    <!-- Question 1 -->
    <div class="kh-faq-item is-open">
      <button type="button" class="kh-faq-question">
        <span class="kh-faq-question-text">DO I NEED A RESERVATION?</span>
        <span class="kh-faq-icon" aria-hidden="true"></span>
      </button>
      <div class="kh-faq-answer" style="max-height: 200px;">
        <p>Reservations are not required; however, the restaurant is consistently busy, particularly during peak periods and weekend evenings. To guarantee a table and avoid disappointment, we strongly recommend making a reservation in advance. Walk-in guests are always welcome, but availability cannot be guaranteed.</p>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="kh-faq-item">
      <button type="button" class="kh-faq-question">
        <span class="kh-faq-question-text">IS THERE A DRESS CODE?</span>
        <span class="kh-faq-icon" aria-hidden="true"></span>
      </button>
      <div class="kh-faq-answer">
        <p>We embrace smart casual attire that reflects an elevated yet comfortable dining atmosphere. We kindly request that guests refrain from wearing beachwear or sportswear during evening service.</p>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="kh-faq-item">
      <button type="button" class="kh-faq-question">
        <span class="kh-faq-question-text">ARE CHILDREN WELCOME?</span>
        <span class="kh-faq-icon" aria-hidden="true"></span>
      </button>
      <div class="kh-faq-answer">
        <p>Children are welcome across all our dining rooms. We offer family-friendly table options and mild dishes tailored for younger palates upon request.</p>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="kh-faq-item">
      <button type="button" class="kh-faq-question">
        <span class="kh-faq-question-text">IS THERE A MINIMUM CHARGE?</span>
        <span class="kh-faq-icon" aria-hidden="true"></span>
      </button>
      <div class="kh-faq-answer">
        <p>There is no general minimum spend for standard dining room tables. For private dining celebrations and parties of 8 or more, bespoke tasting menus with tailored minimum commitments are arranged through our concierge.</p>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="kh-faq-item" style="grid-column: 1 / -1;">
      <button type="button" class="kh-faq-question">
        <span class="kh-faq-question-text">CAN DIETARY NEEDS BE ACCOMMODATED?</span>
        <span class="kh-faq-icon" aria-hidden="true"></span>
      </button>
      <div class="kh-faq-answer">
        <p>Yes. Our kitchen caters thoughtfully to vegetarian, vegan, halal, and gluten-free dietary requirements. Please notify our team when booking or upon arrival so our chefs can curate your selections seamlessly.</p>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
