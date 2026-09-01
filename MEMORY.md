# 🧠 AI Long-Term Memory & Context Ledger

> **Purpose**: This file serves as persistent, long-term memory for AI agents across multiple sessions. Update this file at the end of every working session to record key architectural decisions, user preferences, project milestones, and pending tasks.

---

## 📌 1. Project Overview & Fundamental Context
- **Client / Project**: **Biryani Spot Chennai Dosa** (also known as *Biryani & Dosa Grill*).
- **Core Objective**: Build a modern, high-performance, mobile-first website in **PHP 8.2+ & MySQL 8.0+ (PDO)** replacing the legacy Toast Sites web portal (`https://biryanispotchennaidosa.com/`) with the luxury visual design, motion physics, and layout architecture reverse-engineered from [Khufu's](https://khufus.com) and [Khufu's Bistro](https://khufusbistro.com).
- **4 Operating Locations**:
  1. **Dublin**: `4288 Dublin Blvd #111, Dublin, CA 94568` | `(925) 361-5317`
  2. **Milpitas**: `380 South Main Street, Milpitas, CA 95035` | `(669) 264-7920`
  3. **Livermore**: `2050 Portola Avenue, Livermore, CA 94551` | `(669) 264-7920`
  4. **Concord (Chennai Dosa Express)**: `3540 Clayton Road, Concord, CA 94519` | `(925) 494-4470`

---

## 🔒 2. Strict Architectural Rules & User Constraints
1. **Preserve Layout & Design Exactly**: Do NOT alter the visual structure, CSS grid, responsive breakpoints, or layout flows. Only transform content, typography copy, and visual assets (photography, logos, animations).
2. **100% Native Architecture (Zero WordPress / Zero Elementor Runtime)**:
   - All backend routing and page generation run on native **PHP 8.2+ MVC**.
   - All interactive UI (modals, drawers, reveals) runs on **Vanilla JavaScript** (`window.BiryaniDrawer`, `IntersectionObserver`).
   - The `.elementor-*` class names remaining in HTML/CSS are **pure static CSS selectors** ensuring responsive grid styling without any WordPress or Elementor JS engines running in the background.
3. **Curated High-Res Photography**: Use verified, authentic Google Maps photography (`public/assets/images/google_maps/`) for real Biryani, Dosa, Thali, Appetizer, and Dining Room visuals. Avoid repeating the same image across different sections.
4. **Official Branding**: Header, footer, and drawer use the official brand logo [`public/assets/images/ornaments/logo.webp`](./public/assets/images/ornaments/logo.webp).

---

## 📂 3. Directory & File Reference Map

```
biryani_spot_chennai_dosa/
├── app/
│   ├── Controllers/         # BaseController, HomeController, MenuController, ReservationController, etc.
│   ├── Core/                # App, Router, Request, Response, Database, View, Autoloader
│   ├── Helpers/             # Asset, Str, Validator
│   ├── Middleware/          # SecurityHeaders, CsrfProtection
│   ├── Models/              # Location, MenuItem, Reservation, ContactInquiry
│   ├── Repositories/        # LocationRepository, MenuRepository, LeadRepository
│   ├── Services/            # MenuService, ReservationService, SeoService
│   └── views/
│       ├── home/index.php           # Home view (9 sections, 7,523px height)
│       ├── menu/index.php           # Interactive culinary course book & listings
│       ├── reservations/index.php   # Multi-location booking & 2-column FAQ accordion
│       ├── experience/index.php     # 4-moment dining experience story
│       ├── legacy/index.php         # Master chefs & culinary heritage
│       ├── locations/index.php      # Operating hours table & concierge form
│       ├── about/index.php          # Brand heritage chapters & vision
│       ├── gallery/index.php        # Responsive masonry photography grid
│       ├── bistro/index.php         # Evening dining & ambiance showcase
│       └── layouts/
│           ├── header.php           # Clean navbar, head tags, logo, Lottie toggle
│           ├── footer.php           # Multi-location footer & social links
│           └── drawer.php           # Isolated standalone full-screen menu drawer
├── config/                  # app.php, database.php, locations.php, seo.php
├── public/
│   ├── index.php            # Front controller entrypoint
│   └── assets/
│       ├── css/elementor/   # 51 compiled static CSS stylesheets
│       ├── css/khufus-theme.css # Theme overrides, gradients, custom styling
│       ├── js/khufus-core.js    # Vanilla JS scroll observers & animations
│       ├── images/
│       │   ├── ornaments/logo.webp # Official brand logo
│       │   ├── google_maps/        # Organized food & dining room photography
│       │   └── Menu-Animation-Custom-8.json # Lottie hamburger-to-X animation
│       └── fonts/           # IvyOraDisplay, GoldenHopes, BricolageGrotesque
└── database/
    └── app.sqlite           # Local SQLite database (PDO multi-driver with MySQL)
```

---

## 🌐 4. Live Routes & Verification Matrix

All pages run locally via `php -S 127.0.0.1:8899 -t public` and are verified with Chrome DevTools MCP:

| Route | View File | Key Features & Visual Status |
| :--- | :--- | :--- |
| `/` | `app/views/home/index.php` | 9 full sections, hero video, heritage triad, polaroid slider, Section 03 recognition with top-to-bottom gradient (`#DAB79F` $\rightarrow$ `#FFFFFF`), 3D gallery |
| `/reservations` | `app/views/reservations/index.php` | Step-booking widget, multi-location selector, 6-item FAQ 2-column accordion |
| `/experience` | `app/views/experience/index.php` | 4 culinary moments (Dum Pukht, Dosa Craft, Chettinad Spice, Royal Dining) |
| `/legacy` | `app/views/legacy/index.php` | Heritage chapters, master chef profiles, spice blending traditions |
| `/menu` | `app/views/menu/index.php` | Royal Biryanis, Chennai Dosas, Curries & Appetizers with real Toast POS prices |
| `/contact` / `/locations` | `app/views/locations/index.php` | 4 Bay Area branches with phone numbers, hours, maps links & inquiry form |
| `/about` | `app/views/about/index.php` | Founder story, stone-ground batter philosophy, slow-steamed biryani art |
| `/gallery` | `app/views/gallery/index.php` | 14-photo responsive masonry gallery with food & restaurant vibe shots |
| `/bistro` | `app/views/bistro/index.php` | Evening ambiance, mocktails, appetizers, and private dining |

---

## 🛠️ 5. Key Technical Implementations & Decisions

### A. Standalone Menu Drawer Architecture (`app/views/layouts/drawer.php`)
- **Root Cause of Previous Blank Screen Bug**: When the drawer modal was placed inside `header.php`, unclosed `<div>` containers swallowed the entire `home/index.php` view. When the drawer closed (`opacity: 0; transform: translateY(-100%)`), the whole home page became blank.
- **Solution**: Isolated the drawer modal into [`app/views/layouts/drawer.php`](./app/views/layouts/drawer.php) and included it right before `</body>` in [`app/views/layouts/footer.php`](./app/views/layouts/footer.php). [`app/views/layouts/header.php`](./app/views/layouts/header.php) now closes cleanly at `</header>`.
- **Vanilla JS Controller (`window.BiryaniDrawer`)**:
  - Open/Close states managed via `.is-open` class and CSS3 hardware-accelerated transforms.
  - Bidirectional Lottie animation segment play (Frames `[0.10, 0.65]` for hamburger $\rightarrow$ X, and `[0.65, 1.0]` for X $\rightarrow$ hamburger).
  - Multi-trigger closing: toggle button click, frosted backdrop click, `Escape` key press, and navigation link clicks.
  - Idempotent initialization prevents duplicate SVG icon layers.

### B. Section 03 Background Gradient & Why Section Styling
- Removed the white sub-box on `.khf-why-sec` for seamless visual integration.
- Applied authentic food photography to the 3 cards (Dum Biryani, South Indian Thali, Crispy Chicken 65).
- Configured top-to-bottom linear gradient on Section 03 (`.elementor-element-e58559a`):
  - Starts with `#DAB79F` matching Section 2 & 3 above.
  - Smoothly transitions from the vertical midpoint down to `#FFFFFF` to connect seamlessly with the gallery section below.
- Updated copy to *"BAY AREA RECOGNITION - A TASTE THE BAY AREA FELL IN LOVE WITH (Celebrated Across 4 Locations)"* featuring real 4.4★ guest reviews.

### C. Official Brand Logo Integration
- Integrated [`public/assets/images/ornaments/logo.webp`](./public/assets/images/ornaments/logo.webp) in navbar and footer.

---

## 📜 6. Chronological Session History

### Session 1–5 (Scraping, Scaffolding & Design Extraction)
- Extracted 100% of dish catalog from legacy Toast Sites (426 dishes across 32 categories) into `old_website_data/`.
- Reverse-engineered typography, colors, layout grid, and motion physics from Khufu's.
- Extracted custom webfonts (`IvyOraDisplay`, `GoldenHopes`, `BricolageGrotesque`).
- Compiled 51 Elementor/Astra static stylesheets into `public/assets/css/elementor/`.

### Session 6–8 (Enterprise PHP 8.2+ MVC Architecture)
- Built enterprise PHP MVC architecture: `App`, `Router`, `BaseController`, `Database` (PDO multi-driver), `SecurityHeaders`, `CsrfProtection`.
- Created repository and service layers for Menu, Reservations, and Locations.

### Session 9 (Master Content & Asset Transformation)
- Transformed all 9 route views with authentic South Indian food copy, pricing, FAQs, location schedules, and high-res Google Maps photography with zero duplicate images.

### Session 10 (Official Branding, Gradient Flow, & Standalone Native Drawer)
- Replaced placeholder logos with official brand logo `logo.webp`.
- Configured Section 03 linear gradient (`#DAB79F` $\rightarrow$ `#FFFFFF`) and removed white sub-box on `.khf-why-sec`.
- Built standalone, isolated menu drawer in `app/views/layouts/drawer.php` with native pure JS controller `window.BiryaniDrawer`.
- Fixed unclosed `<div>` nesting in `header.php` to permanently eliminate blank screen issues.
- Removed all legacy WordPress/Elementor runtime JS engines (`elementorProFrontend`, `elementor-pro-frontend.min.js`, `webpack-pro.runtime.min.js`).

### Session 11 (Hero Video, Full-Color Assets, White Backgrounds & Polaroid Story Fixes)
- **Hero Background Video**: Replaced legacy placeholder video links with native local video [`/assets/ai_ganerated/video/video1.mp4`](./public/assets/ai_ganerated/video/video1.mp4) across desktop, tablet, and mobile viewports.
- **Background Color Unification (`#FFFFFF`)**: Replaced all legacy `#F8F4EE` / `#F6F1EA` / `#FAF7F2` / `#F4EFEA` beige backgrounds across Section 4 (`.khx-gallery`), Section 5 (`.monarq-polaroid-slider-v2`), and Section 6 (`.kh-home-story-sec`) with pure `#FFFFFF` in both `khufus-theme.css` and `home/index.php`.
- **Polaroid Slider Overhaul (`#monarqPolaroidSliderV2`)**:
  - Overhauled both `khufus-core.js` and `home/index.php` slider controllers to eliminate old Khufu's Chef text.
  - Linked authentic, distinct Google Maps photography for all 3 slides with zero image repetition:
    - **05 CULINARY HERITAGE**: *The Dum Pukht Tradition* (`dublin_creamy_butter_chicken_delight.jpg` - steaming dum biryani handi).
    - **06 TIFFIN ARTISTRY**: *Stone-Ground Dosa Craft* (`dublin_hyderabadi_chicken_dum_biryani_pot.jpg` - crispy golden Chennai dosas on banana leaf with chutneys & potato masala).
    - **07 OUR STORY**: *Warmth, Spice & Family* (`milpitas_restaurant_main_dining_hall_booths.jpg` - warm dining room spread).
- **Section 6 Parallax Collage (`#khHomeStorySec`)**:
  - Converted empty containers into responsive semantic `<img>` tags (`.kh-home-story-img` & `.kh-home-story-mobile-img`) with `object-fit: cover`.
  - Removed obsolete `filter: saturate(0);` styles to display all food photography in rich, vibrant color.
  - Populated with distinct, non-repeating dishes: Column 1 (`livermore_kashmiri_mutton_curry_pot.jpg`), Column 2 (`concord_mutton_rogan_josh_slow_simmered.jpg`), Column 3 (`dublin_tandoori_mixed_grill_platter.jpg`), and Floating Arch (`concord_crispy_andhra_chicken_65.jpg`).

### Session 12 (Hero Visibility Filter ~25% Transparency #E2C4AF, Gap Removal above Grand Feasts & Fixed Header on Scroll)
- **Hero Visibility & ~25% Filter Transparency**: Tuned the contrast gradient overlay to ~25% subtle transparency (`linear-gradient(180deg, rgba(0, 0, 0, 0.25) 0%, rgba(226, 196, 175, 0.15) 50%, rgba(226, 196, 175, 0.55) 85%, #E2C4AF 100%)`), allowing the authentic video footage to shine through vibrantly while maintaining crystal-clear white headline text and a smooth transition into Section 2 (`#E2C4AF`).
- **Elimination of #302014 Block above Grand Feasts**: Removed the `margin-bottom: 80px` gap on Polaroid slider container (`.elementor-element-b408a9f`) and `margin-top` on Grand Feasts container (`.elementor-element-cf05877`), unifying backgrounds to `#FFFFFF` for a seamless flow.
- **Header at Hero Top Only & Rendering Fix**: Anchored the header at the top of the hero section on the homepage (`body.home header.elementor-48`) while keeping normal document flow on inner pages (`body.page-inner`). Added cache-busting parameters (`?v=<?= time() ?>`) to `khufus-theme.css` and `khufus-core.js` to ensure browsers immediately render the latest header styling without stale cache conflicts. Verified all 4 core elements (RESERVATIONS, THE MENU, Logo, and Lottie toggle) are rendering cleanly with crisp typography and contrast shadows.
- **Custom AI Backgrounds across Pages & Footer**:
  - **Footer** (Global across all pages): Assigned [footer.png](file:///Users/badalsharma/Work/biryani_spot_chennai_dosa/public/assets/ai_ganerated/images/footer.png) aligned to `right bottom` with 100% filter/overlay removal and seamless `#2b1c13` background integration, rendering the hand-drawn culinary art clearly in the bottom-right corner.
  - **Contact & Locations** (`/contact`, `/locations`): Assigned [contact_page_hero_section.png](file:///Users/badalsharma/Work/biryani_spot_chennai_dosa/public/assets/ai_ganerated/images/contact_page_hero_section.png) with warm atmospheric lighting.
  - **Gallery** (`/gallery`): Assigned [gallery_page_hero_section.png](file:///Users/badalsharma/Work/biryani_spot_chennai_dosa/public/assets/ai_ganerated/images/gallery_page_hero_section.png) featuring architectural arched doorways and subtle depth.
  - **Legacy & Story** (`/legacy`, `/about`): Assigned [lagacy_page_hero_section.png](file:///Users/badalsharma/Work/biryani_spot_chennai_dosa/public/assets/ai_ganerated/images/lagacy_page_hero_section.png) highlighting traditional Indian heritage aesthetics.
  - **Menu Page** (`/menu`): Assigned [menu_page.png](file:///Users/badalsharma/Work/biryani_spot_chennai_dosa/public/assets/ai_ganerated/images/menu_page.png) with Khufu's 3-column featured interactive slider.
  - **Transparent Header & Full-Bleed Hero Alignment**: Configured `body.page-hero-layout` in `header.php` and `khufus-theme.css` to ensure all hero pages render a seamless transparent header overlay with zero top margin gaps.

---

## 🎯 7. Immediate Next Steps & Backlog
1. [x] **Hero Video Integration**: Native `video1.mp4` running in hero container with ~25% subtle transparency `#E2C4AF` filter overlay and crisp typography.
2. [x] **Asset Population & De-Duplication**: Sections 4, 5, and 6 populated with verified non-repeating authentic photography.
3. [x] **Background Color Polish & Gap Removal**: Clean `#FFFFFF` styling applied across lower homepage sections with 0px gap above Grand Feasts & Catering.
4. [x] **Hero-Only Header**: Header anchored cleanly at the top of the hero banner without scroll-following.
5. [x] **Header Rendering & Cache Busting**: Verified DOM rendering and added dynamic timestamp cache-busters.
6. [x] **Menu Page Overhaul**: Fully functional luxury menu catalog with 426 dishes, instant search, category tabs, location pills, and dietary filters.
5. [ ] **MySQL Database Schema & Seeder**:
   - Create `database/schema.sql` (MySQL table definitions for locations, schedules, categories, menu items, catering leads, contact messages).
   - Create `database/seed_data.php` to populate MySQL directly from `old_website_data/data/` and `public/assets/images/google_maps/`.
6. [ ] **ToastTab Direct Cart Links**: Wire up per-location ordering deep links in the Unified Menu explorer.

---

## 🎥 8. Background Video Prompts for User

When generating video assets for the hero banner (`public/assets/images/hero-video.mp4`):
- **Biryani Steam Prompt**: *"Cinematic ultra slow motion 4k macro shot of fragrant Hyderabadi dum biryani being opened from a sealed clay handi, warm aromatic steam rising, glowing saffron rice grains, fresh mint and caramelized onions, dark moody luxury restaurant lighting, 60fps loop"*.
- **Dosa Pour Prompt**: *"Cinematic slow motion shot of fermented golden dosa batter swirled onto a smoking hot cast-iron tawas, pure ghee drizzled with golden sizzle, folding into an ultra-crispy paper dosa, warm ambient lighting, 60fps loop"*.
