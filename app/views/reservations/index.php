<?php
$pageTitle = "Reservations & Catering | Biryani Spot Chennai Dosa";
require_once __DIR__ . "/../layouts/header.php";
?>

<section style="padding: 140px 48px 60px; background-color: var(--color-espresso-dark); color: #fff; text-align: center;">
  <div style="max-width: 900px; margin: 0 auto;">
    <div style="font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; color: var(--color-sand); margin-bottom: 12px;">Table Booking & Catering</div>
    <h1 style="font-family: var(--font-serif); font-size: clamp(38px, 4.5vw, 64px); font-weight: 300; text-transform: uppercase;">
      Reserve Your Table
      <span style="display: block; font-family: var(--font-script); font-size: clamp(26px, 2.5vw, 38px); color: var(--color-sand); text-transform: capitalize; margin-top: 4px;">An Evening Composed With Care</span>
    </h1>
  </div>
</section>

<section style="padding: 80px 48px 120px; background-color: var(--color-cream);">
  <div style="max-width: 720px; margin: 0 auto; background: #fff; padding: 48px; border: 1px solid rgba(61,41,28,0.1); box-shadow: 0 20px 50px rgba(0,0,0,0.06);">
    <form method="POST" action="/reservations">
      <div style="margin-bottom: 24px;">
        <label style="display: block; font-size: 11px; letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 8px; color: var(--color-espresso);">Select Preferred Location</label>
        <select name="location" style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); font-family: inherit; font-size: 14px; background: #faf7f2;">
          <option value="dublin">Dublin (4288 Dublin Blvd)</option>
          <option value="milpitas">Milpitas (380 South Main St)</option>
          <option value="livermore">Livermore (2050 Portola Ave)</option>
          <option value="concord">Concord (3540 Clayton Rd)</option>
        </select>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
        <div>
          <label style="display: block; font-size: 11px; letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 8px; color: var(--color-espresso);">Guest Name</label>
          <input type="text" name="name" required style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); font-family: inherit; font-size: 14px; background: #faf7f2;">
        </div>
        <div>
          <label style="display: block; font-size: 11px; letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 8px; color: var(--color-espresso);">Phone Number</label>
          <input type="tel" name="phone" required style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); font-family: inherit; font-size: 14px; background: #faf7f2;">
        </div>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
        <div>
          <label style="display: block; font-size: 11px; letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 8px; color: var(--color-espresso);">Date</label>
          <input type="date" name="date" required style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); font-family: inherit; font-size: 14px; background: #faf7f2;">
        </div>
        <div>
          <label style="display: block; font-size: 11px; letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 8px; color: var(--color-espresso);">Guests</label>
          <input type="number" min="1" max="50" value="2" name="guests" required style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); font-family: inherit; font-size: 14px; background: #faf7f2;">
        </div>
      </div>

      <div style="margin-bottom: 32px;">
        <label style="display: block; font-size: 11px; letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 8px; color: var(--color-espresso);">Special Notes / Dietary Preferences</label>
        <textarea name="notes" rows="4" style="width: 100%; padding: 14px; border: 1px solid rgba(61,41,28,0.2); font-family: inherit; font-size: 14px; background: #faf7f2;"></textarea>
      </div>

      <button type="submit" class="khf-btn-luxury khf-btn-gold" style="width: 100%; padding: 16px; font-size: 12px; cursor: pointer;">
        Confirm Reservation Request
      </button>
    </form>
  </div>
</section>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
