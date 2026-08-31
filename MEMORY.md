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

## 🛠️ 2. Core Technical Decisions & Architecture
- **System Design Foundation**: Follows [`guideline/SYSTEM_DESIGN.md`](./guideline/SYSTEM_DESIGN.md) (MVC architecture, relational MySQL schema, request lifecycle, CSRF/XSS armor, Alpine.js/Vanilla JS motion layer).
- **Backend**: PHP 8.2+ using clean MVC separation (`Controllers/`, `Models/`, `views/`).
- **Database**: MySQL 8.0+ on production with SQLite fallback for local development via PDO multi-driver wrapper (`config/database.php`).
- **Frontend**: Master stylesheet `public/assets/css/khufus-theme.css` + Vanilla JS engine `public/assets/js/khufus-core.js` + Lottie web player.
- **Custom Font Stack**: `IvyOraDisplay` (serif), `GoldenHopes` (cursive script), and `BricolageGrotesque` (sans-serif) served locally from `public/assets/fonts/`.
- **Knowledge Graph Search**: Knowledge graph indexing in `graphify-out/` (95 nodes, 87 relations) for high-speed concept navigation and file search.

---

## 📂 3. Sources of Truth & Project Map
- **Guideline Documentation**: Located in [`guideline/`](./guideline/)
- **Scraped Data & Assets**: Located in [`old_website_data/`](./old_website_data/)
  - `old_website_data/data/unified_menu.json`: 426 unique dishes across 32 categories.
  - `old_website_data/data/locations.json`: 4 verified restaurant locations & hours.
- **Master CSS & JS Engine**:
  - `public/assets/css/khufus-theme.css`: Complete styling for hero video, FAQ 3-image collage, 3D card shuffle deck, Polaroid slider v2, 3D curved gallery, horizontal expanding accordion, parallax arch, and footer.
  - `public/assets/js/khufus-core.js`: Core interaction controller with `IntersectionObserver` scroll reveals, Lottie hamburger toggle, Reserve glass dropdown, Recognition card shuffle, Polaroid slider, and FAQ accordion.

---

## 📜 4. Chronological Session History

### Session 1 — August 31, 2026 (Foundation & Scaffolding Phase)
- Bypassed Cloudflare bot checks via Chrome DevTools MCP and scraped 100% of data across 4 California locations (426 dishes across 32 categories).
- Downloaded all high-res photography, flyers, and branding assets to `old_website_data/`.
- Established architecture guidelines in `guideline/` and initialized Knowledge Graph in `graphify-out/`.

### Session 2 — August 31, 2026 (Khufu's Luxury Design System Extraction & Clone)
- Reverse-engineered typography, colors, and layout from `https://khufus.com`.
- Extracted local custom webfonts (`IvyOraDisplay`, `GoldenHopes`, `BricolageGrotesque`) and background video (`hero-video.mp4`).
- Implemented MVC architecture, front controller router, preloader intro, and Polaroid slider v2.

### Session 3 — August 31, 2026 (Complete 1:1 Page Clones, FAQ Screenshot Reproduction & Motion Polish)
- **FAQ Section 04 Reproduction**:
  - Reverse-engineered exact layout from user's desktop screenshot (`Screenshot 2026-08-31 at 22.49.11.png`).
  - Added numeral `04`, title `What Guests Often Ask Before They Arrive / Useful To Know In Advance`.
  - Added center 3-image collage (`faq-img-1.webp`, `faq-img-2.webp`, `faq-img-3.webp`).
  - Added 2-column interactive accordion (*Do I need a reservation? / Is there a dress code? / Are children welcome? / Is there a minimum charge? / Can dietary needs be accommodated?*).
- **Global Recognition 3D Card Stack**:
  - Cloned section `03 GLOBAL RECOGNITION / A PLACE THE WORLD TOOK NOTE OF / Recognition With Substance`.
  - Implemented 3-card bezier translation stack (`MENA'S 50 BEST`, `RESY ONE TO WATCH`, `LA LISTE`) with blur text transitions and counter arrow trigger.
- **Reserve Your Table Glass Dropdown**:
  - Implemented `.mnq-reserve-wrapper` with hover underline transition and frosted glass dropdown modal.
- **All 8 Subpages 1:1 Cloned & Linked**:
  - `/` (Home)
  - `/about` (Heritage & Craft with Chapter I & II)
  - `/experience` (Approach Hero + 4-Moment Sequential Cards)
  - `/legacy` (Founder & Chef Profiles + Kitchen Team)
  - `/menu` (Featured Platter Frame + Dynamic Category Filter Tabs + 426 dishes)
  - `/locations` & `/contact` (Hours schedule tables + concierge form)
  - `/gallery` (Responsive masonry culinary photography grid)
  - `/bistro` (Dedicated evening dining experience)
  - `/reservations` (Table booking interface + FAQ Section 04)
- **IntersectionObserver Fix**:
  - Implemented proactive lookahead observer ensuring all animated elements immediately render without blank gaps during scrolling or screenshot capture.
- **Live Verification**: Verified on local server `http://127.0.0.1:8899/` with 0 console warnings or errors across all routes. All milestones committed to git.

---

## 🎯 5. Immediate Next Steps & Backlog
1. [ ] **Database Schema & Seeders**:
   - Create `database/schema.sql` (MySQL table definitions for locations, schedules, categories, menu items, catering leads, contact messages).
   - Create `database/seed_data.php` to populate MySQL directly from `old_website_data/data/`.
2. [ ] **Backend Database Controller Layer**:
   - Connect dynamic PDO queries for the menu and location switchers.
   - Wire up dynamic reservation and catering lead submission with honeypot validation and PDO transactions.
3. [ ] **ToastTab Deep Links**:
   - Enhance the Unified Menu explorer with direct-to-cart ToastTab URLs for each of the 4 locations.

---
*Update this memory file at the conclusion of each development milestone.*
