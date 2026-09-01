<div align="center">

# 👑 Biryani Spot Chennai Dosa
### *The Royal Art of Dum Biryani & Crispy Dosas*

[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Architecture](https://img.shields.io/badge/Architecture-Custom%20MVC-38B2AC?style=for-the-badge&logo=blueprint&logoColor=white)](#-architecture--directory-structure)
[![Database](https://img.shields.io/badge/Database-SQLite%20%7C%20MySQL%208.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](#-database-setup)
[![License](https://img.shields.io/badge/License-Proprietary-red?style=for-the-badge)](#-credits--license)
[![Status](https://img.shields.io/badge/Status-Production%20Ready-success?style=for-the-badge)](#)

<p align="center">
  A high-performance, mobile-first luxury culinary portal built for <b>Biryani Spot Chennai Dosa (Biryani & Dosa Grill)</b> across its 4 Bay Area locations in California. Re-engineered with bespoke PHP 8.2+ MVC architecture, high-fidelity visual aesthetics, interactive 3D sliders, Lottie-driven navigation, and direct ToastTab ordering integration.
</p>

[Explore Routes](#-live-routes--directory) • [Architecture](#-architecture--directory-structure) • [Installation](#-quick-start--local-development) • [Locations](#-operating-locations)

</div>

---

## 📖 Table of Contents
- [✨ Key Highlights & Features](#-key-highlights--features)
- [🏛️ Architecture & Directory Structure](#️-architecture--directory-structure)
- [🌐 Live Routes & Directory](#-live-routes--directory)
- [⚡ Quick Start & Local Development](#-quick-start--local-development)
- [🗄️ Database Setup](#️-database-setup)
- [📍 Operating Locations](#-operating-locations)
- [🎨 Design System & Typography](#-design-system--typography)
- [🔒 Security & Performance](#-security--performance)
- [📄 License & Credits](#-license--credits)

---

## ✨ Key Highlights & Features

- **🏰 Luxury Visual Experience & Motion Layer**
  - Bespoke typography pairing with `IvyOraDisplay`, `GoldenHopes`, and `BricolageGrotesque`.
  - Fluid scroll-driven animations, 3D recognition card stacks, dynamic Polaroid sliders, and interactive menu platters.
  - Interactive full-screen Lottie modal drawer synced with food photography previews.

- **🍛 Comprehensive South Indian & Dum Biryani Culinary Engine**
  - 426 dishes across 32 authentic categories scraped and curated with ingredients, spice levels, and pricing.
  - High-resolution `=s2048` Google Maps and studio food photography with zero duplicate image placement.
  - Seamless deep-linking into ToastTab online ordering.

- **📅 Multi-Branch Concierge & Table Reservations**
  - Interactive 4-branch location selector (Dublin, Milpitas, Livermore, Concord).
  - Dynamic guest counter, date/time pickers, and real-time form validation.
  - 6 authentic FAQ accordions answering Halal certification, gluten-free options, and catering packages.

- **⚡ Zero-Bloat, Modern PHP 8.2+ MVC Core**
  - Dependency-free core framework featuring custom Router, Controllers, Models, Views, Repositories, and Services.
  - Multi-driver PDO database layer with seamless switching between SQLite (local development) and MySQL 8.0+ (production).
  - Robust security headers, CSRF token protection, and XSS sanitization built-in.

---

## 🏛️ Architecture & Directory Structure

```plaintext
biryani_spot_chennai_dosa/
├── app/
│   ├── Core/                       # Core framework engine
│   │   ├── App.php                 # Application bootstrap & lifecycle
│   │   ├── Autoloader.php          # PSR-4 compatible class autoloader
│   │   ├── Database.php            # PDO Multi-driver database singleton
│   │   ├── Request.php             # HTTP Request encapsulation & sanitization
│   │   ├── Response.php            # JSON & HTML HTTP Response handler
│   │   ├── Router.php              # Clean URL regex dispatcher & middleware pipeline
│   │   └── View.php                # Template rendering engine with layout support
│   ├── Controllers/                # MVC Page & API controllers
│   │   ├── BaseController.php      # Common controller methods & SEO injection
│   │   ├── HomeController.php      # Landing page controller
│   │   ├── MenuController.php      # Culinary book & category controller
│   │   ├── ReservationController.php # Table booking & FAQ controller
│   │   ├── ExperienceController.php# Culinary experience page controller
│   │   ├── LegacyController.php    # Heritage & chef profile controller
│   │   ├── LocationController.php  # 4-branch hours & contact controller
│   │   ├── AboutController.php     # Brand story controller
│   │   ├── GalleryController.php   # Masonry photography grid controller
│   │   └── BistroController.php    # Evening dining visual controller
│   ├── Helpers/                    # Utility classes
│   │   ├── Asset.php               # Versioned static asset resolution
│   │   ├── Str.php                 # String formatting & slugification helpers
│   │   └── Validator.php           # Form and request input validation
│   ├── Middleware/                 # Request filtering middleware
│   │   ├── CsrfProtection.php      # CSRF token validation
│   │   ├── SecurityHeaders.php     # HSTS, CSP, X-Frame-Options headers
│   │   └── MiddlewareInterface.php # Middleware contract
│   ├── Models/                     # Data entities
│   │   ├── Location.php            # Branch entity
│   │   ├── MenuItem.php            # Dish entity
│   │   ├── Reservation.php         # Booking entity
│   │   └── ContactInquiry.php      # Contact message entity
│   ├── Repositories/               # Data access abstraction layer
│   │   ├── LocationRepository.php  # Location queries
│   │   ├── MenuRepository.php      # Menu & category queries
│   │   └── LeadRepository.php      # Inquiries & bookings persistence
│   ├── Services/                   # Business logic layer
│   │   ├── MenuService.php         # Menu structuring & filtering
│   │   ├── ReservationService.php  # Availability & notification rules
│   │   └── SeoService.php          # Dynamic OpenGraph & Meta tags generator
│   └── views/                      # Presentation layer (PHP/HTML templates)
│       ├── home/                   # Hero video, 3D cards, Polaroid slider
│       ├── menu/                   # Interactive culinary book
│       ├── reservations/           # Booking widget & FAQ accordion
│       ├── experience/             # 4-moment sequential cards
│       ├── legacy/                 # Chef & heritage profiles
│       ├── locations/              # Schedules, map & contact form
│       ├── about/                  # Story & vision
│       ├── gallery/                # Masonry responsive gallery
│       ├── bistro/                 # Evening dining showcase
│       └── layouts/                # Global layout wrappers
│           ├── header.php          # Brand navigation & Lottie trigger
│           ├── footer.php          # Footer links, badges & copyright
│           └── drawer.php          # Standalone animated menu popup drawer
├── config/                         # Environment & application configuration
│   ├── app.php                     # App metadata, timezone, debug flags
│   ├── database.php                # Database connection configs (SQLite / MySQL)
│   ├── locations.php               # 4-branch address, phone & schedule registry
│   └── seo.php                     # Default meta tags, social cards & schema.org
├── database/                       # Database files and schemas
│   └── app.sqlite                  # Local SQLite database
├── guideline/                      # System design specifications & guidelines
├── old_website_data/               # Scraped Toast Sites assets, menus & photos
├── public/                         # Public document root (Front Controller)
│   ├── index.php                   # Single entry point for all web requests
│   └── assets/
│       ├── css/                    # Custom stylesheets & compiled Elementor CSS
│       ├── fonts/                  # IvyOraDisplay, GoldenHopes, BricolageGrotesque
│       ├── images/                 # SVG crests, ornaments, Google Maps photography
│       ├── js/                     # khufus-core.js & Lottie animations
│       └── video/                  # Hero background video loops
├── scratch/                        # Asset migration scripts & build tools
├── .gitignore                      # Git ignore definitions
├── MEMORY.md                       # AI long-term context & development ledger
└── README.md                       # Comprehensive project documentation
```

---

## 🌐 Live Routes & Directory

| Route | View Template | Description |
| :--- | :--- | :--- |
| `/` | `app/views/home/index.php` | 9 full sections: Hero video, Dum Pukht triad, Polaroid slider, 3D recognition stack. |
| `/menu` | `app/views/menu/index.php` | Interactive 3-course platter book covering Biryanis, Dosas, and Curries. |
| `/reservations` | `app/views/reservations/index.php` | Multi-branch table booking concierge and 2-column interactive FAQ. |
| `/experience` | `app/views/experience/index.php` | 4-moment culinary storytelling and sensory dining journey. |
| `/legacy` | `app/views/legacy/index.php` | Founders, Master Dosa Craftsmen, and Biryani Master profiles. |
| `/locations` or `/contact` | `app/views/locations/index.php` | Operating hours schedule table for all 4 locations & concierge message form. |
| `/about` | `app/views/about/index.php` | Heritage chapters, spice sourcing philosophy, and culinary vision. |
| `/gallery` | `app/views/gallery/index.php` | Filterable 14-photo masonry grid of food and dining ambiance. |
| `/bistro` | `app/views/bistro/index.php` | Evening dining visual showcase. |
| `/api/menu` | `app/Controllers/MenuController.php` | JSON REST API endpoint for real-time menu item queries. |
| `/api/reservations` | `app/Controllers/ReservationController.php` | JSON REST API endpoint for booking submission. |
| `/api/contact` | `app/Controllers/LocationController.php` | JSON REST API endpoint for concierge contact inquiries. |

---

## ⚡ Quick Start & Local Development

### Prerequisites
- **PHP 8.2** or higher installed (`php -v`)
- **PDO Extension** with `pdo_sqlite` or `pdo_mysql` enabled

### 1. Clone the Repository
```bash
git clone https://github.com/badalsharmaa/biryani_spot_chennai_dosa.git
cd biryani_spot_chennai_dosa
```

### 2. Start Built-in PHP Server
No Composer install or external web server configuration is required for instant local testing:
```bash
php -S 127.0.0.1:8899 -t public
```

### 3. Open in Browser
Navigate to [http://127.0.0.1:8899](http://127.0.0.1:8899) to view the live portal.

---

## 🗄️ Database Setup

The application is pre-configured with **SQLite** by default (`database/app.sqlite`) for frictionless out-of-the-box local development.

### Switching to MySQL (Production)
Update your environment variables or adjust `config/database.php`:

```php
// config/database.php
return [
    "default" => "mysql",
    "connections" => [
        "mysql" => [
            "driver"    => "mysql",
            "host"      => getenv("DB_HOST") ?: "127.0.0.1",
            "port"      => getenv("DB_PORT") ?: 3306,
            "database"  => getenv("DB_DATABASE") ?: "biryani_spot",
            "username"  => getenv("DB_USERNAME") ?: "root",
            "password"  => getenv("DB_PASSWORD") ?: "",
            "charset"   => "utf8mb4",
            "collation" => "utf8mb4_unicode_ci",
        ]
    ]
];
```

---

## 📍 Operating Locations

| Location | Address | Phone | Online Order |
| :--- | :--- | :--- | :--- |
| **Dublin** | `4288 Dublin Blvd #111, Dublin, CA 94568` | `(925) 361-5317` | [Order Dublin](https://www.toasttab.com/biryani-spot-chennai-dosa-dublin/v3) |
| **Milpitas** | `380 South Main Street, Milpitas, CA 95035` | `(669) 264-7920` | [Order Milpitas](https://www.toasttab.com/biryani-spot-chennai-dosa-milpitas/v3) |
| **Livermore** | `2050 Portola Avenue, Livermore, CA 94551` | `(669) 264-7920` | [Order Livermore](https://www.toasttab.com/biryani-spot-chennai-dosa-livermore/v3) |
| **Concord (Chennai Dosa Express)** | `3540 Clayton Road, Concord, CA 94519` | `(925) 494-4470` | [Order Concord](https://www.toasttab.com/chennai-dosa-express-clayton-rd/v3) |

---

## 🎨 Design System & Typography

- **Headlines & Display**: `IvyOraDisplay` — High-contrast luxury editorial serif.
- **Cursive Accents & Ornaments**: `GoldenHopes` — Bespoke handwritten calligraphic script.
- **Body & Technical Metadata**: `BricolageGrotesque` — Readable modern humanist sans-serif.
- **Color Palette**:
  - Deep Heritage Dark: `#0d0d0d` / `#161616`
  - Warm Saffron & Gold: `#c59d5f` / `#e5b869`
  - Crisp Cream & Ivory: `#f9f7f2` / `#ffffff`
  - Subtle Border Glass: `rgba(255, 255, 255, 0.12)`

---

## 🔒 Security & Performance

- **Zero External Runtime Dependencies**: Framework core operates with zero `composer vendor` runtime overhead.
- **Content Security & Headers**: Built-in `SecurityHeaders` middleware automatically applies `X-Content-Type-Options: nosniff`, `X-Frame-Options: SAMEORIGIN`, and strict referrers.
- **CSRF Token Armor**: Form and API submissions validate cryptographically signed session tokens.
- **Optimized Asset Pipeline**: WebP image compression, local font hosting, and CSS/JS asset preloading eliminate render-blocking delays.

---

## 📄 License & Credits

- **Proprietary Software**: Created for **Biryani Spot Chennai Dosa**. All rights reserved.
- **Photography & Assets**: Sourced from official restaurant locations and verified Google Maps media.
