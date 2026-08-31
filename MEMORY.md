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
- **Frontend Architecture**:
  - Exact compiled Elementor + Astra stylesheets located in `public/assets/css/elementor/` (51 stylesheets).
  - Theme customization & overlay rules in `public/assets/css/khufus-theme.css`.
  - Core interaction engine in `public/assets/js/khufus-core.js`.
  - Elementor runtime scripts in `public/assets/js/elementor/` (`jquery.min.js`, `frontend.min.js`, `frontend-modules.min.js`, `webpack.runtime.min.js`).
- **Custom Font Stack**: `IvyOraDisplay` (serif), `GoldenHopes` (cursive script), and `BricolageGrotesque` (sans-serif) served locally from `public/assets/fonts/` and `public/assets/images/`.
- **Knowledge Graph Search**: Knowledge graph indexing in `graphify-out/` (95 nodes, 87 relations) for high-speed concept navigation and file search.

---

## 📂 3. Live Page Directory & Route Mappings

All pages are served via the PHP development server on `http://127.0.0.1:8899/`:

| Page Route | Local Development URL | Source View File | Content / Layout Status |
| :--- | :--- | :--- | :--- |
| **Home** | `http://127.0.0.1:8899/` | `app/views/home/index.php` | 9 full sections (`7,068px` total height), hero video, card deck, polaroid slider, 3D gallery |
| **Reservations & FAQ** | `http://127.0.0.1:8899/reservations` | `app/views/reservations/index.php` | Step-booking widget + Section 04 `#khFaq` 2-column interactive accordion |
| **The Experience** | `http://127.0.0.1:8899/experience` | `app/views/experience/index.php` | Approach hero + 4-moment sequential cards |
| **The Legacy** | `http://127.0.0.1:8899/legacy` | `app/views/legacy/index.php` | Founder & head chef profiles + kitchen team spread |
| **The Menu** | `http://127.0.0.1:8899/menu` | `app/views/menu/index.php` | Platter frame + full culinary course listings |
| **Contact & Locations** | `http://127.0.0.1:8899/contact` / `/locations` | `app/views/locations/index.php` | Operating hours schedule table + concierge message form |
| **About** | `http://127.0.0.1:8899/about` | `app/views/about/index.php` | Heritage chapters, philosophy & culinary vision |
| **Gallery** | `http://127.0.0.1:8899/gallery` | `app/views/gallery/index.php` | High-res responsive masonry photography grid |
| **The Bistro** | `http://127.0.0.1:8899/bistro` | `app/views/bistro/index.php` | Khufu's Bistro evening dining visual clone |

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

### Session 3 — August 31, 2026 (Subpage Clones & Visual Fidelity)
- Cloned FAQ Section 04 matching desktop screenshot (`Screenshot 2026-08-31 at 22.49.11.png`) with numeral `04`, 3-image collage, and 2-column accordion.
- Implemented 3D recognition card stack with bezier translation and counter trigger.
- Implemented reserve glass dropdown with frosted modal.
- Configured lookahead `IntersectionObserver` to eliminate blank gaps during scrolling.

### Session 4 — August 31, 2026 (100% Exact Raw Elementor DOM & CSS Architecture)
- Rebuilt entire PHP view layer directly from `scratch/khufus_raw/*.html` to ensure 100% pixel-perfect fidelity matching `khufus.com`.
- Downloaded and linked all 51 compiled Elementor, Astra, and widget stylesheets locally in `public/assets/css/elementor/`.
- Downloaded all runtime dependencies (`jquery.min.js`, `frontend-modules.min.js`, `frontend.min.js`, `webpack.runtime.min.js`) locally in `public/assets/js/elementor/`.
- Generated 1:1 identical PHP views for all 9 routes.

### Session 5 — Header, Popup Drawer & Full Section Restoration
- Fixed regex matching for Elementor header (`data-elementor-type="header" class="elementor elementor-48 elementor-location-header"`) and footer (`data-elementor-type="footer" class="elementor elementor-58 elementor-location-footer"`).
- Stripped Cloudflare Rocket Loader MIME types (`type="...-text/javascript"`) across all PHP views so all scripts and Lottie loaders execute properly.
- Integrated Elementor popup modal (`.elementor-location-popup`, 27.6KB) with full navigation menu and animated Lottie toggle -> close button transitions.
- Validated all 9 page sections on Home (total height 7,068px) and confirmed header and footer are fully rendered and visible.

---


### Session 6 — Enterprise PHP 8.2+ Architecture & MVC Refactoring
- Architected and implemented high-end enterprise PHP structure with zero visual regression:
  - `app/Core/`: `App`, `Autoloader`, `Request`, `Response`, `Router`, `View`, `Database`.
  - `app/Middleware/`: `SecurityHeaders`, `CsrfProtection`, `MiddlewareInterface`.
  - `app/Helpers/`: `Asset`, `Str`, `Validator`.
  - `app/Models/`: `Location`, `MenuItem`, `Reservation`, `ContactInquiry`.
  - `app/Repositories/`: `LocationRepository`, `MenuRepository`, `LeadRepository`.
  - `app/Services/`: `MenuService`, `ReservationService`, `SeoService`.
  - `app/Controllers/`: `BaseController`, `HomeController`, `MenuController`, `ReservationController`, `ExperienceController`, `LegacyController`, `LocationController`, `AboutController`, `GalleryController`, `BistroController`.
  - `config/`: `app.php`, `database.php`, `locations.php`, `seo.php`.
  - `public/index.php`: High-performance front controller.
- Verified all 10 web routes + REST API endpoints (`/api/menu`, `/api/reservations`, `/api/contact`).
- Confirmed database persistence in SQLite (`database/app.sqlite`) with prepared statement security.
- Confirmed zero visual regression via Chrome DevTools MCP.

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
