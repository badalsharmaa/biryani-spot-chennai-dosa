<?php

namespace App\Middleware;

use App\Core\Request;

class SecurityHeaders implements MiddlewareInterface
{
    public function handle(Request $request): void
    {
        if (headers_sent()) return;

        header("X-Content-Type-Options: nosniff");
        header("X-Frame-Options: SAMEORIGIN");
        header("X-XSS-Protection: 1; mode=block");
        header("Referrer-Policy: strict-origin-when-cross-origin");
    }
}
