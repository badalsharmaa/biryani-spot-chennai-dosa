# 🤖 AI CODING STANDARDS & WORKFLOW RULES (PHP + MySQL)

## 1. Core Principles
1. **Never Hallucinate Menu Data or Locations**: Always seed or load from verified datasets stored in `old_website_data/data/`. Never invent prices, phone numbers, addresses, or menu items.
2. **Strict PHP Security**:
   - **PDO Prepared Statements Only**: NEVER concatenate user input into SQL queries. Always use PDO parameterized queries (`$stmt->prepare(...)` + `$stmt->execute([...])`).
   - **XSS Prevention**: Always escape user/dynamic output rendered in templates using `htmlspecialchars((string)$var, ENT_QUOTES, 'UTF-8')` or a helper `e($var)`.
   - **CSRF Token Validation**: Ensure all POST requests validate a unique session token.
3. **Mobile-First & Touch-Friendly**: 70%+ of restaurant traffic is on smartphones. All buttons, navigation tabs, and drawers must have tap targets of at least 44x44px and zero horizontal overflow.
4. **Clean, Modular Code**: Follow MVC / clean separation of concerns:
   - `Controllers/` handle requests and business logic.
   - `Models/` handle database interaction via PDO.
   - `views/` handle presentation and semantic HTML rendering.
   - `public/` serves as the web root front-controller entry point.
5. **Modern PHP 8+ Standards**: Use `declare(strict_types=1);`, typed properties, and PSR-12 code style formatting.

## 2. Component Design & Styling Rules
- **Styling with Tailwind CSS**: Maintain consistent spacing (`p-4`, `p-6`, `gap-4`, `gap-6`, `rounded-xl`, `rounded-2xl`).
- **Semantic HTML & Accessibility (a11y)**:
  - Always use semantic tags: `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`.
  - Provide descriptive `alt` tags on all food images.
  - Buttons must have accessible text or `aria-label`.
- **Interactive JavaScript**:
  - Keep clientside scripts lightweight, vanilla, or Alpine.js (for location selector dropdown, menu instant search filter, mobile hamburger menu).

## 3. Data & State Management Guidelines
- **Location Context**: Store the active selected location in Cookie / Session / LocalStorage so navigation across pages remembers the customer's preferred branch.
- **Search & Filter Logic**: Instant client-side search filtering through dish names, descriptions, and dietary flags seamlessly.

## 4. What NOT to Do 🚫
- ❌ Do NOT use outdated PHP constructs (no `mysql_*` or unescaped `mysqli_query` without parameters).
- ❌ Do NOT leave broken image paths or missing fallback states for dishes without photography.
- ❌ Do NOT store plain passwords or bypass CSRF on form submissions.
- ❌ Do NOT alter the verified address or phone number records for the 4 restaurant locations.
