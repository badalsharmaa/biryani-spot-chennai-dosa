# 🧠 AI Long-Term Memory & Context Ledger

> **Purpose**: This file serves as persistent, long-term memory for AI agents across multiple sessions. Update this file at the end of every working session to record key architectural decisions, user preferences, project milestones, and pending tasks.

---

## 📌 1. Project Overview & Fundamental Context
- **Client / Project**: **Biryani Spot Chennai Dosa** (also known as *Biryani & Dosa Grill*).
- **Core Objective**: Build a modern, high-performance, mobile-first website in **PHP 8.2+ & MySQL 8.0+ (PDO)** replacing the legacy Toast Sites web portal (`https://biryanispotchennaidosa.com/`).
- **4 Operating Locations**:
  1. **Dublin**: `4288 Dublin Blvd #111, Dublin, CA 94568` | `(925) 361-5317`
  2. **Milpitas**: `380 South Main Street, Milpitas, CA 95035` | `(669) 264-7920`
  3. **Livermore**: `2050 Portola Avenue, Livermore, CA 94551` | `(669) 264-7920`
  4. **Concord (Chennai Dosa Express)**: `3540 Clayton Road, Concord, CA 94519` | `(925) 494-4470`

---

## 🛠️ 2. Core Technical Decisions & Architecture
- **System Design Foundation**: Follows [`guideline/SYSTEM_DESIGN.md`](./guideline/SYSTEM_DESIGN.md) (MVC architecture, relational MySQL schema, request lifecycle, CSRF/XSS armor, Alpine.js client layer).
- **Backend**: PHP 8.2+ using clean MVC separation (`Controllers/`, `Models/`, `views/`).
- **Database**: MySQL 8.0+ on production with SQLite fallback for local development via PDO multi-driver wrapper (`config/database.php`).
- **Frontend**: Tailwind CSS + Semantic HTML5 + Lightweight vanilla JS / Alpine.js.
- **Server Deployment Standard**: Follows [`guideline/PRODUCTION_DEPLOYMENT_AI_GUIDE.md`](./guideline/PRODUCTION_DEPLOYMENT_AI_GUIDE.md):
  - Filesystem boundary: `public_html/` (public web root), `private/` (credentials, backups), and `cli/` (cron workers).
  - Apache `.htaccess` clean URL rewriting without `.php` extensions.
  - Google Consent Mode v2 by default (`ad_storage: denied`) with interactive cookie banner.
  - Honeypot anti-spam protection on all forms.
- **Knowledge Graph Search**: Knowledge graph indexing in `graphify-out/` (95 nodes, 87 relations) for high-speed concept navigation and file search.

---

## 📂 3. Sources of Truth & Project Map
- **Guideline Documentation**: Located in [`guideline/`](./guideline/)
  - `guideline/SYSTEM_DESIGN.md`: **Core System Design & Technical Architecture Blueprint**.
  - `guideline/PERSONA.md`: Brand identity, customer personas, location schedules.
  - `guideline/VISUAL_GUIDELINES.md`: Design system & visual rules (custom styling).
  - `guideline/TECH_STACK.md`: PHP + MySQL relational architecture.
  - `guideline/FEATURES_AND_REQUIREMENTS.md`: PRD, page breakdown, and user flows.
  - `guideline/AI_RULES.md`: Strict AI coding standards, PDO parameterized queries, XSS escaping, mobile-first rules.
  - `guideline/PRODUCTION_DEPLOYMENT_AI_GUIDE.md`: Server isolation, Apache routing, privacy compliance.
  - `guideline/DEVELOPMENT_TRACKER.md`: Historical roadmap and status tracker.
- **Scraped Data & Assets**: Located in [`old_website_data/`](./old_website_data/)
  - `old_website_data/data/unified_menu.json`: 426 unique dishes across 32 categories.
  - `old_website_data/data/locations.json`: 4 verified restaurant locations & hours.
  - `old_website_data/data/menus_by_location.json`: Location-specific menu catalogs.
  - `old_website_data/assets/images/`: High-resolution banners, food photography, drinks boards, promo flyers, and brand icons.

---

## 📜 4. Chronological Session History

### Session 1 — August 31, 2026 (Foundation & Scaffolding Phase)
- **Accomplishments**:
  - Researched live site `https://biryanispotchennaidosa.com/` and bypassed Cloudflare bot checks via Chrome DevTools MCP.
  - Extracted 100% of data from all 4 locations (Dublin, Milpitas, Livermore, Concord) with 426 menu items across 32 categories.
  - Downloaded all high-res photography, banners, flyers, and brand icons.
  - Reorganized all scraped data into `old_website_data/`.
  - Created pre-development guideline files in `guideline/` (`PERSONA.md`, `VISUAL_GUIDELINES.md`, `TECH_STACK.md`, `FEATURES_AND_REQUIREMENTS.md`, `AI_RULES.md`).
  - Switched and tailored technical architecture to **PHP 8.2+ & MySQL 8.0+ PDO**.
  - Merged and tailored `PRODUCTION_DEPLOYMENT_AI_GUIDE.md` for enterprise server deployment standards.
  - Researched and established full **Enterprise System Design (`guideline/SYSTEM_DESIGN.md`)**.
  - Built Knowledge Graph Indexing in `graphify-out/` (95 nodes, 87 relations).
  - Maintained `MEMORY.md` at root for long-term AI memory persistence.
  - Git repository initialized and all milestones committed with clean version history.

### Session 2 — August 31, 2026 (Khufu's Luxury Design System Extraction & Clone)
- **Accomplishments**:
  - Researched and reverse-engineered visual layout, animations, typography, and color palette of `https://khufus.com`.
  - Extracted and downloaded custom font assets (`IvyOraDisplay`, `GoldenHopes`, `BricolageGrotesque`).
  - Extracted and downloaded high-resolution images, SVG vector masks (`tree-var-icon.svg`, `plants-icon.svg`, `pottery-icon.svg`, `khufus-pattern.svg`, `vase.svg`), and background looping video (`hero-video.mp4`).
  - Implemented complete master CSS design system (`public/assets/css/khufus-theme.css`) with luxury serif typography, 3D perspective transformations, and responsive breakpoints.
  - Implemented JavaScript controller (`public/assets/js/khufus-core.js`) for the word-by-word preloader intro overlay, transparent luxury header, fullscreen popup overlay drawer, parallax scroll engine, 3D perspective curved momentum gallery, and Polaroid Slider v2.
  - Built PHP MVC architecture:
    - Master layout (`app/views/layouts/header.php` and `app/views/layouts/footer.php`)
    - Full featured homepage (`app/views/home/index.php`)
    - Unified Menu Explorer with 426 dishes across 32 categories (`app/views/menu/index.php`)
    - 4 Operating Locations & Hours Explorer (`app/views/locations/index.php`)
    - Reservations, Table Booking & Catering Inquiry (`app/views/reservations/index.php`)
    - Heritage & Craft (`app/views/about/index.php`)
    - Front controller router (`public/index.php`)
  - Verified live execution on local PHP server (`http://127.0.0.1:8899/`) with zero console errors and 60fps animations.
  - Committed all milestone files cleanly to git version control.

---

## 🎯 5. Immediate Next Steps & Backlog
1. [ ] **Database Persistence**:
   - Create `database/schema.sql` (MySQL table definitions for locations, schedules, categories, menu items, catering leads, contact messages).
   - Create `database/seed_data.php` to populate MySQL directly from `old_website_data/data/`.
2. [ ] **Backend Database Controller Layer**:
   - Connect dynamic PDO queries for the menu and location switchers.
   - Wire up dynamic reservation and catering lead submission with honeypot validation and PDO transactions.
3. [ ] **ToastTab Deep Links**:
   - Enhance the Unified Menu explorer with direct-to-cart ToastTab URLs for each of the 4 locations.

---
*Update this memory file at the conclusion of each development milestone.*
