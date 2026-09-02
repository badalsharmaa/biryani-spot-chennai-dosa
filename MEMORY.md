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

### 6. Home Page Redundant Styles & Egyptian Accolades Replacement
- **Symptom**: `app/views/home/index.php` had residual duplicate Elementor/Astra inline styles and font dumps at the top of the file; Section 3 Recognition Deck displayed legacy Egyptian restaurant awards ("MENA's 50 Best, No. 1", "La Liste Best in Africa").
- **Fix**:
  - Removed top duplicate styles from `home/index.php`.
  - Replaced legacy awards in `public/assets/js/khufus-core.js` and `home/index.php` with authentic Bay Area accolades ("4.4★ on Google Reviews (4,500+ ratings)", "Top Bay Area Biryani Destination", "Authentic Chennai Dosa Craft", "Premier Catering Partner").
  - Cleaned up raw ChatGPT copy-paste markup in `app/views/layouts/footer.php`.
  - Verified full mobile/tablet/desktop responsiveness (375px, 768px, 1440px) with zero horizontal overflow (`scrollWidth === innerWidth`).

### 7. Hero Background Video Fill Mode & Transparent Header
- **Symptom**:
  - Top header area rendered brown block `#1e120c` in Safari / inner page routes instead of transparent.
  - On mobile screens, the background video was letterboxed in "fit mode" (leaving brown bars on top and bottom).
  - An old legacy pyramid painting background image was rendered behind the video container in `post-1536.css`.
  - Hamburger menu icon had an inline `right: -40px` offset and was not pinned to the right edge.
- **Root Cause**:
  - `khufus-theme.css` had a fallback rule applying `background-color: #1e120c` to `body:not(.home)` header selectors, which kicked in on non-root or proxy requests.
  - Global `video { max-width: 100%; }` constrained the 16:9 video width on portrait mobile viewports, shrinking its height to ~211px in an 812px container.
- **Fix**:
  - Removed all `#1e120c` and solid background rules; header is unconditionally 100% transparent and overlaid (`position: absolute`) on all viewports.
  - Forced `video.elementor-background-video-hosted` to `max-width: none !important`, `width: 100% !important`, `height: 100% !important`, `object-fit: cover !important` (full-bleed fill mode).
  - Removed all background images behind the video container (`background-image: none !important; background: #0d0a08 !important`).
  - Set the bottom gradient fade to 25% height precisely matching the below Section 2 background color `#E2C4AF` (`linear-gradient(180deg, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.08) 25%, rgba(0,0,0,0) 50%, rgba(226,196,175,0) 75%, rgba(226,196,175,0.65) 90%, #E2C4AF 100%)`).
  - Pinned hamburger icon firmly to the right edge across desktop, tablet, and mobile with `margin-left: auto; justify-content: flex-end;`.

### 9. Standardized Homepage Section Spacing & Vertical Rhythm
- **Symptom**: Inconsistent, erratic gaps between homepage sections caused by inherited WordPress/Elementor asymmetric paddings (e.g. `150px` bottom padding on Section 3, `120px` on Section 4) and brittle negative margins (`-80px`, `-100px`, and mobile `-250px`/`-260px`).
- **Fix**:
  - Zeroed out all inherited negative margins and outer gaps across parent sections.
  - Standardized all sections to a consistent vertical rhythm in `public/assets/css/khufus-theme.css`:
    - **Desktop**: Uniform `75px` top and `75px` bottom padding.
    - **Tablet (768px–1024px)**: Uniform `55px` top and `55px` bottom padding.
### 10. Final CTA Section (Section 7) Scroll Hold & Dynamic White-to-Brown Color Shift
- **Behavior**:
  - As the user reaches Section 7, the section enters the viewport with pure **White (`#FFFFFF`)** background and dark brown typography (`#3D291C`).
  - The section pins in place in the viewport (`position: fixed` while scrolling through the `220vh` track).
  - As the user scrolls through the track:
    - Background smoothly transitions from **White (`#FFFFFF`)** to **Rich Heritage Brown (`#1e120c`)**.
    - Typography smoothly transitions from dark brown to **Glowing White (`#FFFFFF`)**.
    - The "Reserve Your Table" button and spice flourish ornament smoothly adapt to frosted glass and white accent.
  - At the end of the track, the section releases smoothly into the footer.
### 11. Halved Vertical Gaps Above Sections 05 & 08
- **Changes**:
  - Halved the vertical gap above **05 (Culinary Heritage / The Dum Pukht Tradition)** (Section 4):
    - Desktop: `padding-bottom: 35px` on Section 3 + `padding-top: 35px` on Section 4 (total 70px, down from 150px).
    - Tablet: `25px + 25px = 50px`. Mobile: `20px + 20px = 40px`.
  - Halved the vertical gap above **08 (Grand Feasts & Catering / The Feast Brought To Your Table)** (Section 6):
    - Desktop: `padding-bottom: 35px` on Section 5 + `padding-top: 35px` on Section 6 (total 70px, down from 150px).
    - Tablet: `25px + 25px = 50px`. Mobile: `20px + 20px = 40px`.
### 12. Added Spacious Top Padding Above "THE BIRYANI SPOT EXPERIENCE"
- **Changes**:
  - Increased top padding on Section 4 (`69bf7a3`) to provide luxurious breathing room above the heading "THE BIRYANI SPOT EXPERIENCE":
    - **Desktop**: `padding-top: 80px`
    - **Tablet**: `padding-top: 60px`
    - **Mobile**: `padding-top: 48px`
### 13. Fixed Square Container Images in Header Dropdown Menu Drawer
- **Changes**:
  - Transformed the 3 card images in the dropdown overlay (`#elementor-popup-modal-166`) into fixed square containers (`aspect-ratio: 1 / 1 !important; max-width: 260px`).
  - Applied `overflow: hidden; border-radius: 8px; object-fit: cover; object-position: center;` with luxury scale animation (`1.05x`) on hover.
  - Linked high-resolution authentic photography for **Reservations**, **Lifestyle Shots**, and **Menus**.
### 15. Section 7 Hold Pinning & White-to-Brown Scroll Engine
- **Changes**:
  - Restored `.kh-cta-reveal` as a dedicated scroll track with `height: 220vh !important; position: relative !important;`.
  - Built viewport hold/pin controller on `.kh-cta-sticky` (`height: 100vh; display: flex; align-items: center; justify-content: center;`):
    - **Approaching**: Sits at the top of the track with **Pure White background (`#ffffff`)** and dark brown text (`#3D291C`).
    - **Held / Pinned in Viewport** (`rect.top <= 0 && rect.bottom >= vh`): Locks to `position: fixed; top: 0; width: 100%; height: 100vh;`. As the user scrolls through the track, background dynamically shifts from **White (`#ffffff`)** to **Rich Heritage Brown (`#1e120c`)**, and typography morphs to crisp white (`#ffffff`).
    - **Completed**: Unpins to `position: absolute; bottom: 0;` at 100% Rich Brown, naturally scrolling up to reveal the footer.
- **Files**:
  - [`app/views/home/index.php`](file:///Users/badalsharma/Work/biryani_spot_chennai_dosa/app/views/home/index.php) (lines 8714–8741, 9050–9190).

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

## 📍 Bay Area Locations Reference (Verified against Toast POS)

| Location | Verified Address | Phone | Toast Online Ordering URL |
|---|---|---|---|
| **Dublin** | 4288 Dublin Blvd #111, Dublin, CA 94568 | (925) 361-5317 | `https://order.toasttab.com/online/biryani-spot-4288-dublin-blvd-111` |
| **Livermore** | 2050 Portola Avenue, Livermore, CA 94551 | (669) 264-7920 | `https://order.toasttab.com/online/chennai-biryani-and-dosa-livermore-portal-ave` |
| **Milpitas** | 380 South Main Street, Milpitas, CA 95035 | (669) 264-7920 | `https://order.toasttab.com/online/biryani-and-dosa-grill-milpitas-380-south-main-street` |
| **Concord** | 3540 Clayton Road, Concord, CA 94519 | (925) 494-4470 | `https://order.toasttab.com/online/chennai-dosa` |
