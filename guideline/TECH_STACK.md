# 🛠️ TECH STACK & SYSTEM ARCHITECTURE (PHP + MySQL)

## 1. Core Framework & Technologies
- **Backend Language**: **PHP 8.2+** (Strict typing `declare(strict_types=1);`, modern features: match expressions, constructor promotion, readonly properties).
- **Database**: **MySQL 8.0+ / MariaDB** (InnoDB engine, utf8mb4 charset, relational schema for locations, categories, menu items, schedules, catering inquiries, contact messages).
- **Database Layer**: **PDO (PHP Data Objects)** with prepared statements for 100% SQL injection security.
- **Frontend / Styling**: **Tailwind CSS** (via CDN or Vite build) + Modern JavaScript / Alpine.js (for location switching, interactive menu search, mobile navigation drawer).
- **Icons**: Lucide Icons / Heroicons (SVG).
- **Web Server**: Apache (`.htaccess` rewriting) or Nginx (clean URL routing).

---

## 2. Directory Structure Conventions

```
biryani_spot_chennai_dosa/
├── config/
│   ├── database.php            # MySQL PDO connection & configuration
│   └── app.php                 # Site constants, base URL, environment settings
├── database/
│   ├── schema.sql              # MySQL DDL table schemas
│   └── seed_data.php           # Database seeder populating data from old_website_data/
├── src/
│   ├── Controllers/            # HomeController, MenuController, LocationController, CateringController, ContactController
│   ├── Models/                 # Location, Category, MenuItem, CateringInquiry, ContactMessage
│   └── Helpers/                # Database helper, sanitization, CSRF protection, view renderer
├── views/
│   ├── layouts/
│   │   ├── header.php          # Global header, navigation, location picker
│   │   └── footer.php          # Global footer, contact cards, hours overview
│   ├── home/
│   │   └── index.php           # Hero banner, signature dishes, location cards, testimonials
│   ├── menu/
│   │   └── index.php           # Filterable, categorized menu explorer with live search
│   ├── locations/
│   │   └── index.php           # 4-location detailed grid, schedules & maps
│   ├── catering/
│   │   └── index.php           # Catering packages & dynamic inquiry form
│   ├── contact/
│   │   └── index.php           # Contact & feedback form
│   └── gift-cards/
│       └── index.php           # Toast gift cards integration
├── public/
│   ├── index.php               # Front controller / Router entry point
│   ├── .htaccess               # Clean URL rewriting
│   └── assets/
│       ├── css/                # Tailwind CSS / custom stylesheets
│       ├── js/                 # Menu filter, search, location selector scripts
│       └── images/             # Food photography, banners, logos
├── old_website_data/           # Scraped raw data, JSON catalogs & master assets
├── DEVELOPMENT_TRACKER.md      # AI & Developer progress tracker
├── PERSONA.md                  # Brand context & customer personas
├── VISUAL_GUIDELINES.md        # Design system & visual styling
├── TECH_STACK.md               # THIS FILE: PHP + MySQL architecture
├── FEATURES_AND_REQUIREMENTS.md# Product specifications & PRD
└── AI_RULES.md                 # AI coding standards & constraints
```

---

## 3. Database Architecture (MySQL)

### Key Relational Tables:
1. **`locations`**: `id`, `name`, `slug`, `address1`, `address2`, `city`, `state`, `zipcode`, `phone`, `latitude`, `longitude`, `toast_order_url`, `is_active`.
2. **`location_schedules`**: `id`, `location_id`, `day_of_week`, `open_time_lunch`, `close_time_lunch`, `open_time_dinner`, `close_time_dinner`, `is_closed`.
3. **`categories`**: `id`, `name`, `slug`, `display_order`, `description`.
4. **`menu_items`**: `id`, `category_id`, `name`, `description`, `price`, `image_path`, `is_vegetarian`, `is_vegan`, `is_gluten_free`, `is_spicy`, `is_featured`, `is_active`.
5. **`location_menu_pricing`**: `id`, `location_id`, `menu_item_id`, `price_override`, `is_available`.
6. **`catering_inquiries`**: `id`, `full_name`, `email`, `phone`, `event_date`, `event_time`, `guest_count`, `event_type`, `location_preference`, `message`, `created_at`.
7. **`contact_messages`**: `id`, `full_name`, `email`, `phone`, `subject`, `message`, `created_at`.

---

## 4. Security & Performance Best Practices

- **SQL Injection Prevention**: All queries MUST use PDO prepared statements with bound parameters (`$stmt->execute([':id' => $id])`). Zero raw string interpolation in SQL.
- **XSS Protection**: All dynamic output in HTML templates must be sanitized using `htmlspecialchars($val, ENT_QUOTES, 'UTF-8')`.
- **CSRF Protection**: All POST forms (Catering, Contact) must validate a secure session-based CSRF token.
- **Clean Routing**: Simple front-controller router mapping clean URLs (`/`, `/menu`, `/locations`, `/catering`, `/contact`, `/gift-cards`) to corresponding controller methods.
- **Fast Asset Delivery**: Static food photography served directly by web server with cache headers; optimized WebP formats used throughout.
