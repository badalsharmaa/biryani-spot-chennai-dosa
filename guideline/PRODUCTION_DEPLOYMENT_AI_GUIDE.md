# 🚀 AI Instruction Manual: Enterprise PHP Production Server Deployment
## Project: Biryani Spot Chennai Dosa

> **Role & Purpose for AI Agents:**
> When the user asks to *"Prepare this project for production"*, *"Deploy this PHP website to the server"*, or *"Set up a live production environment"*, follow this exact, strict protocol. Do not skip any step.

---

## 🎯 High-Level Deployment Goals
1. **Zero-Downtime Clean URLs**: Enforce HTTPS, strip `www.`, and route clean extensionless endpoints (`/menu`, `/locations`, `/catering`, `/contact`, `/gift-cards`) using Apache `.htaccess`.
2. **Server Boundary Isolation**: Separate the filesystem into `public_html/` (web assets only), `private/` (credentials, backups), and `cli/` (cron workers).
3. **Database Portability**: Multi-driver database support (MySQL 8.0 on production, SQLite locally) with an idempotent, versioned migration and seeder runner.
4. **Ad & Privacy Compliance**: Google Consent Mode v2 by default (`ad_storage: denied`), interactive cookie banner, and consent-gated ad identifier attribution (`gclid`, `gbraid`, `wbraid`, `utm_*`).
5. **Security Hardening**: Secure `.env` (`chmod 600`), honeypot spam traps on catering/contact forms, and CSRF protection.

---

## 📁 1. Standard Server Directory Structure

When deploying on Hostinger, cPanel, or a Linux VPS under `/home/<USER>/domains/<DOMAIN>/` (or `/var/www/<DOMAIN>/`), construct this exact hierarchy:

```
/home/<USER>/domains/<DOMAIN>/
├── public_html/                # The ONLY directory accessible by web browsers
│   ├── .env                    # Production credentials (permissions: 0600)
│   ├── .htaccess               # Apache routing & security rules
│   ├── index.php               # Front controller & routing gateway
│   ├── admin/                  # Location & Menu CMS / Lead Portal
│   ├── config/
│   │   ├── config.php          # Global configuration & dynamic constants
│   │   └── database.php        # Multi-driver PDO connection (MySQL / SQLite)
│   ├── includes/
│   │   ├── consent_banner.php  # Cookie banner & Google Consent Mode v2
│   │   ├── header.php          # HTML head, GTM container & location selector
│   │   └── footer.php          # Scripts, location cards & closure
│   ├── api/
│   │   ├── catering-submit.php # Catering form processing & lead validation
│   │   ├── contact-submit.php  # Contact & feedback processing
│   │   └── menu-search.php     # Live menu search & filter API endpoint
│   ├── consent-sync.php        # Attribution sync endpoint on cookie acceptance
│   ├── sitemap.xml             # Search engine sitemap
│   ├── robots.txt              # Web crawler directives
│   ├── llms.txt                # AI search crawler documentation
│   └── assets/                 # CSS (Tailwind), JS, Images (Food Photography), Fonts
│
├── private/                    # PROTECTED (Outside web root)
│   ├── smtp-config.php         # Sensitive mail server credentials
│   ├── backups/                # Automated database dumps (.sql.gz)
│   └── logs/                   # Error logs & lead audit journals
│
├── cli/                        # PROTECTED (CLI & Cron workers only)
│   └── export_conversions.php  # Hourly Google Ads offline conversion worker
│
└── deploy-backups/             # Archive tarballs before new releases
```

---

## ⚙️ 2. Core Server Configuration Files

### A. Web Server Gateway (`public_html/.htaccess`)
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On

    # 1. Force HTTPS and canonical non-www domain
    RewriteCond %{HTTPS} !=on [OR]
    RewriteCond %{HTTP_HOST} ^www\. [NC]
    RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L,NE]

    # 2. Whitelist static assets & metadata files
    RewriteCond %{REQUEST_URI} ^/assets/ [OR]
    RewriteCond %{REQUEST_URI} ^/(robots\.txt|sitemap\.xml|llms\.txt|llms-full\.txt)
    RewriteRule ^ - [L]

    # 3. Protect sensitive files from direct browser access
    RewriteRule ^(\.env|\.git|composer\.(json|lock)|package\.json)$ - [F,L,NC]

    # 4. Universal clean URL routing to index.php
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php [QSA,L]
</IfModule>

# Disable directory browsing
Options -Indexes
```

### B. Environment Configuration (`public_html/.env`)
```env
APP_ENV=production
APP_URL=https://biryanispotchennaidosa.com
DB_DRIVER=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=u603392249_biryani_db
DB_USER=u603392249_biryani_user
DB_PASSWORD=YourStrongDatabasePassword123!
DB_CHARSET=utf8mb4

ADMIN_USERNAME=biryani_admin
ADMIN_PASSWORD=AdminSecurePassword2026!

GADS_EXPORT_ENABLED=true
GADS_STALE_CLAIM_TIMEOUT_SECONDS=900
```

---

## 🗄️ 3. Database Engine & Schema Migrations (`config/database.php`)

The database connection must support both production MySQL and local SQLite via environment detection:

```php
<?php
declare(strict_types=1);

function get_db(): PDO {
    static $pdo = null;
    if ($pdo !== null) return $pdo;

    $driver = getenv('DB_DRIVER') ?: 'sqlite';

    if ($driver === 'mysql') {
        $host = getenv('DB_HOST') ?: '127.0.0.1';
        $port = getenv('DB_PORT') ?: '3306';
        $db   = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASSWORD');
        $dsn  = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";
        
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    } else {
        $dbFile = dirname(__DIR__) . '/private/biryani_local.db';
        if (!is_dir(dirname($dbFile))) {
            mkdir(dirname($dbFile), 0755, true);
        }
        $pdo = new PDO('sqlite:' . $dbFile, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    return $pdo;
}
```

---

## 🍪 4. Privacy, Google Consent Mode v2 & Ad Attribution

### In `<head>` of `includes/header.php` (BEFORE any GTM or Google Tag):
```html
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){ dataLayer.push(arguments); }
  gtag('consent', 'default', {
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    'analytics_storage': 'denied',
    'wait_for_update': 500
  });

  // Re-apply previously granted consent
  (function () {
    var m = document.cookie.match(/(?:^|; )biryani_consent=([^;]+)/);
    if (m && decodeURIComponent(m[1]) === 'granted') {
      gtag('consent', 'update', {
        'ad_storage': 'granted',
        'ad_user_data': 'granted',
        'ad_personalization': 'granted',
        'analytics_storage': 'granted'
      });
    }
  })();
</script>
```

### Lead Attribution Deduplication on Forms (`assets/js/main.js`):
When a catering inquiry submits successfully, always push a unique `transaction_id` to Google Tag Manager:
```javascript
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
    event: 'generate_lead',
    form_type: 'catering_inquiry',
    guest_count: formData.guest_count,
    preferred_location: formData.location,
    transaction_id: 'CATERING-' + response.lead_id
});
```

---

## 🛡️ 5. Lead Qualification & Spam Protection (`api/catering-submit.php`)

1. **Honeypot Trap**: Invisible field `website_hp`. If filled -> silently reject.
2. **Minimum Guest Validation for Bulk Catering**:
```php
$guestCount = trim((string)($data['guest_count'] ?? $data['guests'] ?? ''));
if (isset($data['is_bulk_catering']) && (!ctype_digit($guestCount) || (int)$guestCount < 20)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Catering packages require a minimum of 20 guests.']);
    return;
}
```

---

## ⏰ 6. Server Crontab Automations

```cron
# Hourly Google Ads offline conversion upload (CLI worker)
0 * * * * /usr/bin/php /home/<USER>/domains/<DOMAIN>/cli/export_conversions.php >> /home/<USER>/domains/<DOMAIN>/private/logs/conversions.log 2>&1

# Daily Automated MySQL Database Dump at 2:00 AM
0 2 * * * mysqldump -u <DB_USER> -p'<DB_PASS>' <DB_NAME> | gzip > /home/<USER>/domains/<DOMAIN>/private/backups/db_$(date +\%F).sql.gz
```

---

## 🧪 7. Post-Deployment Verification Protocol

| Check | Command / Action | Expected Result |
| :--- | :--- | :--- |
| **HTTPS Redirection** | `curl -I http://biryanispotchennaidosa.com` | `301 Moved Permanently` -> `https://...` |
| **Clean URLs** | `curl -I https://biryanispotchennaidosa.com/menu` | `200 OK` (No `.php` in URL) |
| **Secret File Protection** | `curl -I https://biryanispotchennaidosa.com/.env` | `403 Forbidden` or `404 Not Found` |
| **Database Migration** | `php -r "require 'config/config.php';"` | Exits code 0 with tables created |
| **Catering Submission** | Submit form with 50 guests | Stores in DB, emails notification, returns `200` |
| **Spam/Honeypot Trap** | Submit form with honeypot filled | Rejected with silent return or 400 |
