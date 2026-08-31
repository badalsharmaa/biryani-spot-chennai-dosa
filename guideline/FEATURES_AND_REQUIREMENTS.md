# 📋 FEATURES & PRODUCT REQUIREMENTS (PRD)

## 1. Primary Objectives
1. Build an intuitive, ultra-fast website that drives online pickup/delivery orders and catering leads for all 4 restaurant locations.
2. Deliver a mouth-watering visual experience showcasing authentic South Indian Chettinad dishes.
3. Solve multi-location confusion by allowing customers to seamlessly pick their nearest location (Dublin, Milpitas, Livermore, Concord) with dynamic hours & status.

---

## 2. Core Pages & Feature Specifications

### 🏠 1. Home Page (`/`)
- **Hero Section**: High-impact food imagery banner, authentic brand tagline, location dropdown picker, and prominent "Order Now" & "Explore Menu" call-to-actions.
- **Location Selector & Live Status**: Instant indicator of open/closed status for all 4 locations based on current user time.
- **Signature Category Showcase**: Visual cards for Signature Biryanis, Crispy Dosas, Traditional Thalis (Sapadu), and Rich Curries.
- **Brand Heritage / Story Section**: Short narrative celebrating authentic Chettinad spices, traditional slow Dum cooking, and homestyle hospitality.
- **Promotions & Happy Hour Banner**: Highlighting Tea Combo Happy Hours and specials.
- **Customer Testimonials & Social Proof**: Highlighting 4.5+ star customer ratings and community favorites.
- **Drinks & Beer Highlight**: Featuring Wine & Beer menu selection.

### 🍽️ 2. Interactive Menu Page (`/menu` & `/menu/[location]`)
- **Location Filter**: Switch between Dublin (170 items), Milpitas (229 items), Livermore (151 items), Concord (147 items) or view the Master Catalog.
- **Category Navigation**: Sticky horizontal scroll category bar (Biryani, Dosa & Idly, Curries, Appetizers, Thalis/Sapadu, Indo-Chinese, Desserts, Beverages, etc.).
- **Live Search & Filter**: Instant search by dish name or ingredient + dietary filters (Vegetarian, Non-Vegetarian, Vegan, Spicy, Gluten-Free).
- **Item Cards**: High-res dish photo, title, price, description, spice level indicator, dietary badges, and direct "Order on Toast" button.

### 📍 3. Locations & Hours Page (`/locations`)
- **Interactive 4-Location Grid**: Dublin, Milpitas, Livermore, Concord.
- **Per-Location Card**: Full address, clickable phone link, today's open/closed schedule, full weekly timetable (lunch & dinner intervals), and interactive Google Maps link.
- **Direct Order Button**: Jump directly into that location's Toast online ordering cart.

### 🍛 4. Catering & Events Page (`/catering`)
- **Catering Options Overview**: Weddings, corporate gatherings, birthday parties, puja/religious ceremonies, and Food Truck booking.
- **Interactive Catering Inquiry Form**:
  - Full Name, Email, Phone Number
  - Event Date, Event Time, Guest Count (20–500+)
  - Event Type (Corporate, Wedding, Party, Food Truck)
  - Preferred Location / Delivery Area
  - Special Dietary Requirements & Custom Message
- **Submission Feedback**: Instant validation and success confirmation.

### 📞 5. Contact & Feedback Page (`/contact`)
- **Contact Form**: General inquiries, customer feedback, and manager contact.
- **Direct Location Contact Details**: Direct phone numbers and addresses for each branch.

### 🎁 6. Gift Cards Page (`/gift-cards`)
- Information on digital Toast gift cards with direct redemption and purchase links.

---

## 3. User Journeys
1. **The Hungry Customer (Quick Order Flow)**:
   - Lands on homepage -> sees nearest location -> clicks "Order Pickup" -> redirected to ToastTab cart with zero friction.
2. **The Menu Explorer Flow**:
   - Lands on website -> navigates to `/menu` -> filters by "Vegetarian" + "Dosas" -> selects items -> decides location.
3. **The Event Planner (Catering Flow)**:
   - Lands on homepage -> clicks "Catering" in navbar -> reviews menu spreads -> fills out inquiry form -> receives instant confirmation.
