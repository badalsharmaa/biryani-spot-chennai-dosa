# 📋 Biryani Spot Chennai Dosa — AI Development Tracker & Progress Log

> **Project Goal**: Design and build a high-performance, modern, multi-location restaurant website for **Biryani Spot Chennai Dosa** replacing the old Toast Sites implementation (`https://biryanispotchennaidosa.com/`).
>
> **Tech Stack**: **PHP 8.2+ & MySQL 8.0+ (PDO)** + Tailwind CSS + Modern JavaScript (Alpine.js / Vanilla)
>
> **Last Updated**: August 31, 2026

---

## 🧭 Quick Context for AI Agents & Developers

If you are an AI assistant or engineer resuming work on this project:
1. **Source of Truth for Old Site Data**: All scraped data, menus, schedules, brand configs, and high-res images from the live site are stored inside the `old_website_data/` folder.
2. **Production Deployment Standards**: Follow the enterprise deployment protocol specified in [`PRODUCTION_DEPLOYMENT_AI_GUIDE.md`](./PRODUCTION_DEPLOYMENT_AI_GUIDE.md) (Server isolation `public_html/` vs `private/`, `.htaccess` routing, Google Consent Mode v2, honeypot spam protection, multi-driver PDO support).
3. **Multi-Location Architecture**: The brand operates **4 locations** (Dublin, Milpitas, Livermore, Concord), each with distinct schedules, phone numbers, and unique menu item offerings stored in MySQL.
4. **Core Tech Stack**:
   - **Backend**: Modern PHP 8.2+ (MVC structure, PDO prepared statements, strict typing).
   - **Database**: MySQL 8.0+ / MariaDB & SQLite portability (Relational schema for locations, schedules, menu categories, items, location-specific pricing, and inquiry submissions).
   - **Frontend**: Tailwind CSS + Responsive Semantic HTML5 + Vanilla JS / Alpine.js.

---

## 📂 Project Directory Structure

```
biryani_spot_chennai_dosa/
├── DEVELOPMENT_TRACKER.md              # 📊 Master tracking record for AI and developers
├── PRODUCTION_DEPLOYMENT_AI_GUIDE.md   # 🚀 Enterprise PHP server deployment manual
├── PERSONA.md                          # 👤 1. Brand identity, customer personas & business info
├── VISUAL_GUIDELINES.md                # 🎨 2. Visual design guidelines (blank placeholder)
├── TECH_STACK.md                       # 🛠️ 3. PHP + MySQL architecture & database design
├── FEATURES_AND_REQUIREMENTS.md        # 📋 4. Product specifications & page features (PRD)
├── AI_RULES.md                         # 🤖 5. AI coding rules, standards & constraints
├── config/                             # Database and application configuration
├── database/                           # MySQL schema DDL & data seeder scripts
├── src/                                # Controllers, Models, and Helper classes
├── views/                              # Layouts (Header/Footer) and page templates
├── public/                             # Web root, front controller (index.php) & static assets
└── old_website_data/                   # Scraped raw data, JSON catalogs & master assets
    ├── data/
    │   ├── brand_and_theme.json        # Colors, typography, brand descriptions, payment methods
    │   ├── locations.json              # 4 locations (address, phone, hours, geo coords, order links)
    │   ├── menus_by_location.json      # Location-specific menu catalogs (Milpitas, Dublin, Livermore, Concord)
    │   ├── unified_menu.json           # Deduplicated master menu (426 items, 32 categories, location price map)
    │   ├── pages_content.json          # Copy & headers from Home, Catering, Contact, Gift Cards
    │   ├── assets_manifest.json        # CDN URL to local asset path mapping
    │   └── raw_*.json                  # Raw GraphQL & per-location data exports
    ├── assets/
    │   └── images/                     # Downloaded high-res photography, banners, flyers & icons
    └── scripts/                        # Scrapers & data normalization tools
```

---

## 📈 Development Roadmap & Status

| Phase | Description | Status | Completion Date |
|---|---|---|---|
| **Phase 1** | **Old Website Research, Data Scraping & Asset Extraction** | ✅ **COMPLETED** | Aug 31, 2026 |
| **Phase 2** | **5 Core Guideline Files & Production Deployment Guide Setup** | ✅ **COMPLETED** | Aug 31, 2026 |
| **Phase 3** | **Database Schema (`schema.sql`) & Seeder Script (`seed_data.php`)** | ⏳ Pending | - |
| **Phase 4** | **Backend Scaffolding & Routing (MVC, Config, PDO Helper)** | ⏳ Pending | - |
| **Phase 5** | **UI Layouts & Core Pages (Header, Hero, Location Picker, Footer)** | ⏳ Pending | - |
| **Phase 6** | **Interactive Menu Explorer (Search, Category Scroll, Location Filter)** | ⏳ Pending | - |
| **Phase 7** | **Catering & Contact Submission Handlers + SEO & Performance Polish** | ⏳ Pending | - |

---
*Maintained automatically during development sessions.*
