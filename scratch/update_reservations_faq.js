const fs = require('fs');
const path = require('path');

const RES_PATH = path.join(__dirname, '..', 'app', 'views', 'reservations', 'index.php');
let content = fs.readFileSync(RES_PATH, 'utf8');

const oldFaqGrid = content.match(/<div class="kh-faq-grid">[\s\S]*?<\/section>/);

const newFaqGrid = `<div class="kh-faq-grid">
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
              <p>Our Hyderabadi Dum Biryani is cooked on slow charcoal dum with basmati rice, saffron, and marinated meats sealed in clay handis. Our Vijayawada Biryani features spiced rice topped with a spicy, wok-tossed boneless chicken gravy cooked in traditional Andhra style.</p>
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
              <p>Yes! All our traditional Dosas, Idlis, and Medu Vadas are naturally gluten-free as they are crafted from fermented rice and urad dal batter. We also offer extensive vegan curries like Chana Masala, Dal Tadka, and Vegetable Biryani.</p>
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
              <p>Yes, we cater corporate lunches, family celebrations, and weddings across Silicon Valley and the East Bay with live Dosa stations, hot Biryani handis, and custom South Indian buffet spreads.</p>
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
              <p>You can order directly online through our official ToastTab links for Dublin, Milpitas, Livermore, and Concord with real-time pickup and delivery tracking.</p>
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
              <p>Dublin, Milpitas, and Livermore are open daily from 11:00 AM to 10:00 PM. Chennai Dosa Express in Concord is open daily from 11:00 AM to 9:30 PM.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>`;

if (oldFaqGrid) {
  content = content.replace(oldFaqGrid[0], newFaqGrid);
  fs.writeFileSync(RES_PATH, content, 'utf8');
  console.log('✅ Updated Reservations FAQ accordion with 6 authentic questions & answers!');
} else {
  console.error('❌ FAQ section not found in file');
}
