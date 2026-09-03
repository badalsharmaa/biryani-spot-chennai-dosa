<?php

declare(strict_types=1);

// Set root directory as working directory
chdir(dirname(__DIR__));

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('session.save_path', '/tmp');
error_reporting(E_ALL);

require_once __DIR__ . '/../app/Core/Autoloader.php';
\App\Core\Autoloader::register();

use App\Core\App;
use App\Core\View;
use App\Controllers\HomeController;
use App\Controllers\MenuController;
use App\Controllers\ReservationController;
use App\Controllers\ExperienceController;
use App\Controllers\LegacyController;
use App\Controllers\LocationController;
use App\Controllers\AboutController;
use App\Controllers\GalleryController;
use App\Controllers\BistroController;

try {
    // Initialize Application Kernel
    App::boot();
    View::setViewsPath(__DIR__ . '/../app/views');
    $router = App::router();

    // Web Page Routes
    $router->get('/', [HomeController::class, 'index']);
    $router->get('/menu', [MenuController::class, 'index']);
    $router->get('/reservations', [ReservationController::class, 'index']);
    $router->get('/experience', [ExperienceController::class, 'index']);
    $router->get('/legacy', [LegacyController::class, 'index']);
    $router->get('/locations', [LocationController::class, 'index']);
    $router->get('/contact', [LocationController::class, 'index']);
    $router->get('/about', [AboutController::class, 'index']);
    $router->get('/gallery', [GalleryController::class, 'index']);
    $router->get('/bistro', [BistroController::class, 'index']);

    // REST API Endpoints
    $router->get('/api/menu', [MenuController::class, 'api']);
    $router->post('/api/reservations', [ReservationController::class, 'store']);
    $router->post('/api/contact', [LocationController::class, 'submitInquiry']);

    // Dispatch Request
    App::run();
} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>Application Error</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " on line " . $e->getLine() . "</p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
