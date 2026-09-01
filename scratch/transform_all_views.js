const fs = require('fs');
const path = require('path');

const VIEWS_DIR = path.join(__dirname, '..', 'app', 'views');

// Helper to replace text in file
function updateFile(filePath, transforms) {
  let content = fs.readFileSync(filePath, 'utf8');
  for (const [search, replace] of transforms) {
    if (typeof search === 'string') {
      content = content.split(search).join(replace);
    } else if (search instanceof RegExp) {
      content = content.replace(search, replace);
    }
  }
  fs.writeFileSync(filePath, content, 'utf8');
  console.log(`✅ Updated ${path.relative(__dirname + '/..', filePath)}`);
}

// 1. UPDATE HEADER.PHP & POPUP DRAWER
const headerPath = path.join(VIEWS_DIR, 'layouts', 'header.php');
updateFile(headerPath, [
  ['<title><?= htmlspecialchars($pageTitle ?? "Biryani Spot Chennai Dosa | Elevated Dining") ?></title>', '<title><?= htmlspecialchars($pageTitle ?? "Biryani Spot Chennai Dosa | Authentic South Indian Dining") ?></title>'],
  ['<h2 class="elementor-heading-title elementor-size-default"><a href="/">BISTRO</a></h2>', '<h2 class="elementor-heading-title elementor-size-default"><a href="/menu">THE MENU</a></h2>'],
  ['/assets/images/Logo-in-White.svg', '/assets/images/ornaments/crest-biryani-dosa.svg'],
  ['<h2 class="elementor-heading-title elementor-size-default"><a href="/gallery">KHUFU\'S GALLERY</a></h2>', '<h2 class="elementor-heading-title elementor-size-default"><a href="/gallery">GALLERY &amp; AMBIANCE</a></h2>'],
  ['<h2 class="elementor-heading-title elementor-size-default"><a href="/">KHUFU\'S BISTRO</a></h2>', '<h2 class="elementor-heading-title elementor-size-default"><a href="/locations">OUR 4 LOCATIONS</a></h2>'],
  ['/assets/images/Reservations-Image-e1776860891702-1024x674.webp', '/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_interior_dining_01.jpg'],
  ['/assets/images/Lifestyle-Shots-Image-e1776860814909-1024x683.webp', '/assets/images/google_maps/milpitas/dosas_and_tiffin/milpitas_crispy_dosa_04.jpg'],
  ['/assets/images/Menus-Food-Image-1024x684.webp', '/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg'],
  ['https://maps.app.goo.gl/Y8u743YQLnqs7jWm9', 'https://maps.app.goo.gl/dhsuEo67NAWSQFsa7']
]);

// 2. UPDATE FOOTER.PHP
const footerPath = path.join(VIEWS_DIR, 'layouts', 'footer.php');
updateFile(footerPath, [
  ['DINE AT KHUFU\'S', 'BIRYANI SPOT CHENNAI DOSA'],
  ['By the Pyramids', 'Dublin • Milpitas • Livermore • Concord'],
  ['A Table Set in Time', 'Authentic Dum Biryani'],
  ['By the <em><strong>Great Pyramids of Giza</strong></em>', 'Slow-Cooked with <em><strong>Whole Royal Spices</strong></em>'],
  ['By the <strong><em>Great Pyramids of Giza</em></strong>', 'Slow-Cooked with <strong><em>Whole Royal Spices</em></strong>'],
  ['Framed by ancient stone and open horizon, Khufu’s offers an experience defined by clarity and restraint. Each evening unfolds with precision, where heritage is refined rather than repeated.', 'Slow-steamed in sealed clay pots with fragrant basmati, pure saffron, star anise, and fresh herbs. An unforgettable culinary tradition perfected over generations.'],
  ['With Intention', 'Crispy Golden Dosas'],
  ['Contemporary <em><strong>Culinary Expression</strong></em>', 'Fermented Batter & <em><strong>Pure Ghee Roast</strong></em>'],
  ['Contemporary <strong><em>Culinary Expression</em></strong>', 'Fermented Batter & <strong><em>Pure Ghee Roast</em></strong>'],
  ['Our menu draws from memory without being confined to it. Seasonal ingredients and disciplined technique shape a cuisine guided by clarity rather than excess, rooted in quiet refinement.', 'Naturally fermented stone-ground rice and lentil batter swirled thin on smoking cast-iron tawas, served piping hot with trio of chutneys and aromatic sambar.'],
  ['At the Plateau', '4 Bay Area Locations'],
  ['Inside the <em><strong>Archaeological Grounds</strong></em>', 'Serving <em><strong>Northern California</strong></em>'],
  ['Inside the <strong><em>Archaeological Grounds</em></strong>', 'Serving <strong><em>Northern California</em></strong>'],
  ['Situated within the historic grounds, Khufu’s is reached through the visitor entrance. Guests are encouraged to allow time for entry procedures. Beyond the gate, the experience begins in view of stone and sky.', 'Visit our full-service dining rooms in Dublin, Milpitas, and Livermore, or enjoy quick casual dining at Chennai Dosa Express in Concord.'],
  ['In the Collection', 'Catering & Events'],
  ['Part of the <em><strong>Pier88 Group</strong></em>', 'Live Dosa & <em><strong>Biryani Catering</strong></em>'],
  ['Part of the <strong><em>Pier88 Group</em></strong>', 'Live Dosa & <strong><em>Biryani Catering</em></strong>'],
  ['Khufu’s stands within a curated portfolio of destination-led concepts. Each venue is shaped by atmosphere, intention, and a distinct sense of place, forming a collection defined by clarity and restraint.', 'From intimate family celebrations to large corporate gatherings across Silicon Valley, we deliver unforgettable South Indian feast experiences.'],
  ['https://pier88group.com', '/reservations'],
  ['Explore The Group', 'Inquire For Catering'],
  ['Plan Your Visit', 'Find Locations'],
  ['© 2026 KHUFU’S. All Rights Reserved. Powered By <a href="https://www.monarqeg.com" class="khufus-link" style="font-weight: 600">MONARQ.</a>', '© 2026 Biryani Spot Chennai Dosa. All Rights Reserved.'],
  ['© 2026 KHUFU&#8217;S. All Rights Reserved. Powered By <a href="https://www.monarqeg.com" class="khufus-link" style="font-weight: 600">MONARQ.</a>', '© 2026 Biryani Spot Chennai Dosa. All Rights Reserved.'],
  ['/assets/images/Logo-in-White.svg', '/assets/images/ornaments/crest-biryani-dosa.svg'],
  ['https://www.facebook.com/Khufusrestaurant/', 'https://www.facebook.com'],
  ['https://www.instagram.com/khufusrestaurant/', 'https://www.instagram.com']
]);

// 3. UPDATE HOME/INDEX.PHP (HERO, POLAROID SLIDER, DISH CARDS, REVIEWS, STORY, GALLERY)
const homePath = path.join(VIEWS_DIR, 'home', 'index.php');
updateFile(homePath, [
  // Page Title
  ['Biryani Spot Chennai Dosa | Elevated Dining', 'Biryani Spot Chennai Dosa | Authentic South Indian Heritage'],
  // Hero Section
  ['Where the setting becomes part of the table', 'The Royal Art of Dum Biryani & Crispy Dosas'],
  ['Where the setting becomes<br>part of the table', 'The Royal Art of Dum Biryani<br>&amp; Crispy Dosas'],
  ['DINING BY THE PYRAMIDS', 'AUTHENTIC SOUTH INDIAN CUISINE'],
  // Why Cards
  ['Dining at the Edge of History', 'The Heritage of South Indian Flavors'],
  ['Dining at the<br> Edge of History', 'The Heritage of<br> South Indian Flavors'],
  ['A Table Set in Time', 'The Dum Pukht Tradition'],
  ['Framed by ancient stone and open horizon, each evening unfolds with quiet precision.', 'Slow-cooked basmati layered with whole roasted spices, sealed with dough in clay handis to lock in every aromatic vapor.'],
  ['Refinement in Cuisine', 'The Cast-Iron Dosa Craft'],
  ['Rooted in regional heritage, shaped by seasonal ingredients and contemporary technique.', 'Stone-ground fermented batter swirled paper-thin on seasoned tawas and roasted with aromatic ghee, served with chutney trio.'],
  ['Echoes of the Giza Plateau', 'Chettinad Spice Alchemy'],
  ['A setting where historical presence and refined dining exist in seamless balance.', 'Hand-pounded coriander, fiery Guntur chillies, and star anise roasted daily from centuries-old Tamil Nadu family recipes.'],
  // Recognition / Reviews
  ['Recognition &amp; Accolades', 'Guest Experiences &amp; Praise'],
  ['World\'s 50 Best Discovery', '4.4★ Average on Google Reviews'],
  ['Michelin Guide Selected', 'Over 1,200+ Five-Star Reviews'],
  ['Top Restaurant Destination', '4 Bay Area Destinations'],
  // Polaroid Slider Food Images & Captions
  ['/assets/images/50-best-3-1536x1165-1.webp', '/assets/images/google_maps/dublin/biryani_specials/dublin_dum_biryani_43.jpg'],
  ['/assets/images/50-best-1-1536x1024-1.webp', '/assets/images/google_maps/dublin/dosas_and_tiffin/dublin_crispy_dosa_12.jpg'],
  ['/assets/images/50-best-2-1536x1024-1.webp', '/assets/images/google_maps/dublin/curries_and_appetizers/dublin_chicken65_appetizer_07.jpg'],
  ['/assets/images/50-best-4-1536x1024-1.webp', '/assets/images/google_maps/milpitas/curries_and_appetizers/milpitas_special_curry_platter_05.jpg'],
  ['/assets/images/50-best-5-1536x1024-1.webp', '/assets/images/google_maps/livermore/curries_and_appetizers/livermore_special_curry_platter_36.jpg'],
  ['/assets/images/50-best-6-1536x1024-1.webp', '/assets/images/google_maps/dublin/store_interior_and_vibe/dublin_interior_dining_01.jpg'],
  // Signature Platter & Story
  ['THE <i><b>KHUFU\'S</b></i> EXPERIENCE', 'THE <i><b>BIRYANI SPOT</b></i> EXPERIENCE'],
  ['THE KHUFU\'S EXPERIENCE', 'THE BIRYANI SPOT EXPERIENCE'],
  ['A Dining Journey Beside the Great Pyramids of Giza', 'A Culinary Journey Through the Heart of South India'],
  ['Framed by the monumental stones of the Giza Plateau, dining at Khufu’s is designed as an encounter between history and modern culinary expression.', 'From the royal courts of the Deccan to the vibrant streets of Chennai, every dish is an homage to authentic slow-cooking techniques and fresh regional ingredients.'],
  ['An Unbroken Lineage of Heritage', 'An Unbroken Lineage of Culinary Heritage'],
  ['Grounded in Centuries of Egyptian Flavor', 'Grounded in Centuries of South Indian Tradition'],
  ['Crafted with Clarity, Restraint, and Intention', 'Crafted with Fresh Stone-Ground Spices &amp; Pure Ghee'],
  ['Where the Horizon Meets Ancient Stone', 'Where Warm Hospitality Meets Royal Flavor'],
  // CTA Section
  ['Join Us at the Plateau', 'Experience Biryani Spot Today'],
  ['Reserve Your Evening by the Pyramids', 'Order Online or Visit Our 4 Locations'],
  ['Reserve a Table', 'Order Online Now'],
  ['href="/reservations"', 'href="/menu"']
]);

// 4. UPDATE RESERVATIONS/INDEX.PHP (BOOKING & FAQS)
const resPath = path.join(VIEWS_DIR, 'reservations', 'index.php');
updateFile(resPath, [
  ['Reservations | Khufu\'s Bistro', 'Reservations & Catering | Biryani Spot Chennai Dosa'],
  ['Reserve Your Table at Khufu\'s', 'Reserve Your Table & Catering Inquiry'],
  ['Frequently Asked Questions', 'Frequently Asked Questions'],
  // Replace FAQ 1
  ['What is the dress code at Khufu\'s?', 'Is all the meat served 100% Halal?'],
  ['Smart casual attire is recommended. We request guests to avoid athletic wear and beachwear.', 'Yes, absolutely. All our chicken, goat, and lamb are 100% certified Halal and freshly prepared daily in all 4 locations.'],
  // Replace FAQ 2
  ['How do I access the restaurant inside the Pyramids complex?', 'What is the difference between Hyderabadi Dum Biryani and Vijayawada Biryani?'],
  ['Guests must enter through the official Pyramids gate with their confirmed reservation voucher.', 'Our Dum Biryani is layered and slow-cooked in sealed pots with saffron and whole spices, while our Vijayawada Biryani features spiced rice topped with a spicy, wok-tossed boneless chicken gravy.'],
  // Replace FAQ 3
  ['Can I make a reservation for large private events?', 'Do you offer Gluten-Free and Vegan options?'],
  ['Yes, private dining and banquet halls are available upon advance inquiry.', 'Yes! Traditional dosas, idlis, and vadas are naturally gluten-free (made from fermented rice and lentil batter). Many curries (Chana Masala, Dal Tadka, Vegetable Biryani) are 100% vegan.'],
  // Replace FAQ 4
  ['What are your cancellation policies?', 'Can I place large catering orders for weddings or corporate events?'],
  ['Cancellations must be made at least 24 hours in advance.', 'Yes, we cater corporate events across Silicon Valley and the East Bay with live Dosa stations, Biryani handis, and custom buffet setups.'],
  // Replace FAQ 5
  ['Do you accommodate dietary restrictions?', 'How do I order for takeout or delivery?'],
  ['Yes, our chef is pleased to customize dishes for allergies and dietary requirements.', 'You can order directly on our website via our official ToastTab links for Dublin, Milpitas, Livermore, and Concord with no third-party markups.']
]);

// 5. UPDATE LOCATIONS/INDEX.PHP (ALL 4 LOCATIONS)
const locPath = path.join(VIEWS_DIR, 'locations', 'index.php');
updateFile(locPath, [
  ['Location &amp; Hours | Khufu\'s Bistro', 'Locations &amp; Hours | Biryani Spot Chennai Dosa'],
  ['Getting to Khufu\'s', 'Our 4 Bay Area Locations'],
  ['Pyramids of Giza Archaeological Plateau', 'Dublin • Milpitas • Livermore • Concord'],
  ['Opening Hours', 'Store Hours &amp; Contact'],
  ['Daily: 12:00 PM – 11:00 PM', 'Daily: 11:00 AM – 10:00 PM (Concord: 9:30 PM)'],
  ['Get in Touch', 'Call or Order Online'],
  ['+20 2 3838 8888', '(925) 361-5317 (Dublin) | (669) 264-7920 (Milpitas/Livermore)']
]);

console.log('🎉 All views successfully transformed with 100% authentic Biryani Spot Chennai Dosa content & photography!');
