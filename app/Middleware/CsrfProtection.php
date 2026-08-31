<?php

namespace App\Middleware;

use App\Core\Request;
use App\Core\Response;

class CsrfProtection implements MiddlewareInterface
{
    public static function getToken(): string
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (empty($_SESSION["csrf_token"])) {
            $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
        }
        return $_SESSION["csrf_token"];
    }

    public function handle(Request $request): void
    {
        if ($request->isPost()) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $token = $request->getBody("csrf_token") ?? $_SERVER["HTTP_X_CSRF_TOKEN"] ?? null;
            $sessionToken = $_SESSION["csrf_token"] ?? "";

            if (empty($token) || !hash_equals($sessionToken, $token)) {
                if ($request->isAjax()) {
                    Response::json(["error" => "CSRF token validation failed"], 403);
                } else {
                    http_response_code(403);
                    die("CSRF token validation failed");
                }
            }
        }
    }
}
