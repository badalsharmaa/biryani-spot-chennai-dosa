<?php

declare(strict_types=1);

if (php_sapi_name() === "cli-server") {
    $path = parse_url($_SERVER["REQUEST_URI"] ?? "/", PHP_URL_PATH) ?: "/";
    $file = __DIR__ . $path;
    if ($path !== "/" && is_file($file)) {
        return false;
    }
}

require_once __DIR__ . "/app/Core/Autoloader.php";
\App\Core\Autoloader::register();

use App\Core\App;
use App\Controllers\HomeController;
use App\Controllers\MenuController;
use App\Controllers\ReservationController;
use App\Controllers\ExperienceController;
use App\Controllers\LegacyController;
use App\Controllers\LocationController;
use App\Controllers\AboutController;
use App\Controllers\GalleryController;
use App\Controllers\BistroController;

// Initialize Application Kernel
App::boot();
$router = App::router();

// Web Page Routes (Preserving 100% Exact Elementor DOM & CSS)
$router->get("/", [HomeController::class, "index"]);
$router->get("/menu", [MenuController::class, "index"]);
$router->get("/reservations", [ReservationController::class, "index"]);
$router->get("/experience", [ExperienceController::class, "index"]);
$router->get("/legacy", [LegacyController::class, "index"]);
$router->get("/locations", [LocationController::class, "index"]);
$router->get("/contact", [LocationController::class, "index"]);
$router->get("/about", [AboutController::class, "index"]);
$router->get("/gallery", [GalleryController::class, "index"]);
$router->get("/bistro", [BistroController::class, "index"]);

// REST API Endpoints
$router->get("/api/menu", [MenuController::class, "api"]);
$router->post("/api/reservations", [ReservationController::class, "store"]);
$router->post("/api/contact", [LocationController::class, "submitInquiry"]);

// Dispatch Request
App::run();
