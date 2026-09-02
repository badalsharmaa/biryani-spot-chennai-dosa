# 🧠 Biryani Spot Chennai Dosa — Project Memory

> Track all past changes, architectural decisions, bugs, fixes, and design standards here.
> Update this file at the end of every development session.

---

## 📁 Project Overview

| Property | Value |
|---|---|
| **Project Name** | Biryani Spot Chennai Dosa |
| **Concept** | Royal Hyderabadi Dum Biryani & Authentic Chennai Dosa Dining |
| **Locations** | 4 Bay Area Outlets: Dublin, Livermore, Milpitas, Concord |
| **Architecture** | Lightweight Custom PHP MVC (`app/` + `public/`) |
| **Front Controller** | `public/index.php` routing via `app/core/App.php` |
| **Styling** | Custom CSS3 + Elementor-compatible luxury layout system |
| **Theme** | Khufu's Luxury Heritage & Modern Fine Dining Theme |
| **Typography** | `IvyOraDisplay` (serif), `GoldenHopes` (luxury cursive), `Bricolage Grotesque` / `Cinzel` |
| **Animations** | Vanilla JS (3D perspective carousels, Polaroid sliders, smooth crossfades) |
| **Local Dev Server** | `php -S 127.0.0.1:8899 -t public` |

---

## 🎨 Design System & Visual Identity

### Colors
| Token | Hex / RGBA | Usage |
|---|---|---|
| **Warm Sand / Cream Base** | `#F7F3EE` / `#E2C4AF` | Primary canvas & section backgrounds |
| **Deep Espresso / Dark Roast**| `#3F2C1F` / `#2B1D14` | High-contrast headings & primary typography |
| **Terracotta / Cinnamon Accent**| `#6A4C36` / `#8B4513` | Subheadings, kickers, handwriting cursive accents |
| **Saffron Gold** | `#E5A93C` / `#D4AF37` | CTAs, ratings stars, highlights, borders |
| **Pure White** | `#FFFFFF` | Card canvases, Polaroid borders, lightbox modals |
| **Soft Glassmorphism** | `rgba(247, 243, 238, 0.92)` | Floating tags, badges, backdrop blur overlays |

### Typography
- **Primary Display Headings**: `IvyOraDisplay` (Light 300 / Regular 400)
- **Luxury Script Accents**: `GoldenHopes` (Cursive signature text with -2deg tilt)
- **Modern Sans / UI Copy**: `Bricolage Grotesque` (300 / 400 / 500) & `Cinzel` (tracking uppercase)
- **Header Logo / Emblem**: Scaled to `78px` height (50% increase for visual prominence)

---

## 🏗️ Architecture & Directory Structure

```
biryani_spot_chennai_dosa/
├── app/
│   ├── config/              # App constants, base URLs, database configs
│   ├── controllers/         # HomeController, AboutController, LocationsController, etc.
│   ├── core/                # App.php (Router), Controller.php, Database.php
│   ├── models/              # Data models (Menu, Location, Reservation)
│   └── views/
│       ├── layouts/         # header.php, footer.php, nav.php
│       ├── home/            # index.php (Sections 1 through 7)
│       ├── about/           # index.php (Brand story, chef craft)
│       ├── locations/       # index.php (Dublin, Livermore, Milpitas, Concord cards & maps)
│       ├── legacy/          # index.php (Dum Pukht culinary history)
│       ├── gallery/         # index.php (3D photo feeds & lightbox)
│       ├── bistro/          # index.php (Dining ambiance & express dining)
│       ├── experience/      # index.php (Sensory dining & spice alchemy)
│       └── reservations/    # index.php (Booking forms & location selectors)
├── public/
│   ├── index.php            # Entry point
│   ├── assets/
│   │   ├── css/             # khufus-theme.css, responsive.css
│   │   ├── js/              # khufus-core.js, slider.js
│   │   └── images/          # Local photography, ornaments, SVGs
│   │       └── google_maps/ # Geo-tagged photos for Dublin, Livermore, Milpitas, Concord
└── memory.md                # Project source of truth
```

---

## 📄 Route & Page Registry

| Route | View Path | Controller | Description |
|---|---|---|---|
| `/` | `app/views/home/index.php` | `HomeController` | Hero, Edge of History, Awards, 3D Gallery, Polaroid Slider, Story Collage |
| `/about` | `app/views/about/index.php` | `AboutController` | Heritage story, culinary philosophy, stone-ground dosa craft |
| `/locations`| `app/views/locations/index.php` | `LocationsController` | Full interactive directory for Dublin, Livermore, Milpitas & Concord |
| `/legacy` | `app/views/legacy/index.php` | `LegacyController` | Centuries-old Hyderabadi Dum Pukht history and sealed handi tradition |
| `/gallery` | `app/views/gallery/index.php` | `GalleryController` | High-resolution food photography, banquets, and dining hall gallery |
| `/bistro` | `app/views/bistro/index.php` | `BistroController` | Contemporary dining, express lunches, and evening ambiance |
| `/experience`| `app/views/experience/index.php`| `ExperienceController`| Spice alchemy, tandoori sizzlers, multi-sensory dining experience |
| `/reservations`| `app/views/reservations/index.php`| `ReservationsController`| Table booking and private event banquet inquiry forms |

---

## 🐛 Bugs Fixed & Key Solutions

### 1. Elementor Static Export Lazyload CSS Blocker (Universal Fix)
- **Symptom**: Background photos and section images below Section 3 failed to render across all pages (rendered blank brown or white).
- **Root Cause**: Elementor static HTML exports inject `<style>.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded) { background-image: none !important; }</style>`. In this custom PHP MVC structure without WordPress JavaScript, `.e-lazyloaded` was never applied.
- **Fix**: Eradicated the blocking style blocks across all 9 view templates (`home`, `header`, `about`, `locations`, `legacy`, `gallery`, `bistro`, `experience`, `reservations`).

### 2. Header Logo Prominence (+50%)
- **Requirement**: Increase header logo/emblem size by 50%.
- **Fix**: Updated `.khf-header-logo img` and `.elementor-element-76a29c8 img` from `52px` to `78px` in `public/assets/css/khufus-theme.css`.

### 3. Polaroid Slider JavaScript Runtime & Crossfade Transitions
- **Symptom**: Section 5 slider (`#monarqPolaroidSliderV2`) was unresponsive; slides would not advance.
- **Root Causes**:
  - Missing variable declaration `let tallest = 0;` inside `syncMobileStageHeight()`.
  - Duplicate/colliding event listener attached in `public/assets/js/khufus-core.js`.
- **Fix**: Fixed the variable initialization in `app/views/home/index.php`, removed the redundant listener in `khufus-core.js`, and implemented smooth CSS crossfade (`.mps5-photo-layer`) transitions.

### 4. Image De-Duplication & Dish-to-Title Alignment
- **Symptom**:
  - In Section 2 ("Dining at the Edge of History"), "Dum Pukht" showed a Dosa and "Dosa Craft" showed Chicken 65.
  - In Section 4b ("The Biryani Spot Experience"), the huge handi biryani pot image was duplicated side-by-side.
- **Fix**:
  - **Section 2**:
    - *Dum Pukht*: Mapped to steaming Dum Biryani handi (`livermore_kashmiri_mutton_curry_pot.jpg`).
    - *Dosa Craft*: Mapped to crispy rolled Paper Roast Dosa on steel platter (`concord_creamy_butter_chicken_delight.jpg`).
    - *Chettinad Spices*: Mapped to sizzling tandoori/Chettinad appetizer platter (`dublin_paneer_tikka_masala_sizzler.jpg`).
  - **Section 4b (3D Gallery Carousel)**:
    - Updated `IMAGES` array with 8 completely distinct, high-resolution food items (Handi Biryani, Paper Dosa, Sizzler Platter, Egg Dum Biryani, Banana Leaf Dosas, Crispy 65, Biryani Feast Platter, Clay Handi).
  - **Section 5 (Polaroid Slider)**:
    - Mapped Slide 1 to authentic Dum Biryani, Slide 2 to Golden Chennai Dosa, and Slide 3 to Milpitas Dining Ambiance.

### 5. Safari/WebKit Header Links & Logo Visibility Fix
- **Symptom**: Header links ("Reservations", "The Menu") and center logo were visible in Chrome, but completely invisible / collapsed in Safari (macOS/iOS).
- **Root Causes**:
  - Elementor's CSS variables computed `--container-widget-width: calc((1 - 1) * 100%) = 0%`, which WebKit flexbox strictly enforced, collapsing the links and logo flex containers to 0px width.
  - WebKit 3D GPU layer occlusion: Hardware-accelerated background video and overlays in the Hero section punched through 2D absolute header children in Safari's compositing pipeline.
- **Fix**: Updated `public/assets/css/khufus-theme.css` to add `-webkit-transform: translate3d(0,0,0)`, `transform: translateZ(0)`, `isolation: isolate`, and explicit flexbox properties (`flex: 1 1 0%`, `min-width: max-content`, `width: auto`) for all 3 header columns.

---

## ⚠️ Rules & Gotchas for Future Development

1. **Do NOT Re-add Elementor Lazyload CSS**:
   Never add rules containing `.e-con.e-parent:not(.e-lazyloaded) { background-image: none !important; }` because WordPress lazyload JS is not loaded.

2. **Verify Google Maps Image Content Before Mapping**:
   Some raw filenames in `assets/images/google_maps/` contain customer-tagged labels that do not match the visual food item (e.g. `concord_creamy_butter_chicken_delight.jpg` is actually a crisp Dosa). Always verify the image visually before linking.

3. **PHP Built-in Server Process**:
   Ensure only one PHP server process is running on port 8899:
   ```bash
   php -S 127.0.0.1:8899 -t public
   ```

4. **Preserve Handwriting Script Fonts**:
   The `GoldenHopes` cursive font must always maintain its subtle `-2deg` transform and luxury color `#6A4C36` to uphold the fine-dining aesthetic.

---

## 📍 Bay Area Locations Reference

| Location | Address | Phone | Specialty Highlights |
|---|---|---|---|
| **Dublin** | 7111 Amador Valley Blvd, Dublin, CA 94568 | (925) 828-7768 | Clay Handi Biryanis, Ghee Podi Dosas, Family Booths |
| **Livermore** | 2062 First St, Livermore, CA 94550 | (925) 447-3672 | Downtown Patio Dining, Dum Pukht Feast, Tandoor Sizzlers |
| **Milpitas** | 350 S Main St, Milpitas, CA 95035 | (408) 263-3672 | Silicon Valley Tech Hub Catering, Executive Lunch Combos |
| **Concord** | 1855 Willow Pass Rd, Concord, CA 94520 | (925) 687-3672 | Grand Banquet Hall, Weekend Tiffin Buffets, Party Orders |
