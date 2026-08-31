<?php
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($uri) {
    case "/":
    case "":
        require __DIR__ . "/../app/views/home/index.php";
        break;
    case "/menu":
        require __DIR__ . "/../app/views/menu/index.php";
        break;
    case "/locations":
        require __DIR__ . "/../app/views/locations/index.php";
        break;
    case "/about":
        require __DIR__ . "/../app/views/about/index.php";
        break;
    case "/legacy":
        require __DIR__ . "/../app/views/legacy/index.php";
        break;
    case "/experience":
        require __DIR__ . "/../app/views/experience/index.php";
        break;
    case "/reservations":
    case "/contact":
        require __DIR__ . "/../app/views/reservations/index.php";
        break;
    case "/gallery":
        require __DIR__ . "/../app/views/gallery/index.php";
        break;
    case "/bistro":
        require __DIR__ . "/../app/views/bistro/index.php";
        break;
    default:
        http_response_code(404);
        require __DIR__ . "/../app/views/home/index.php";
        break;
}
