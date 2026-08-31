<?php

namespace App\Core;

class Response
{
    public static function json(mixed $data, int $statusCode = 200, array $headers = []): void
    {
        http_response_code($statusCode);
        header("Content-Type: application/json; charset=UTF-8");
        foreach ($headers as $name => $value) {
            header("{$name}: {$value}");
        }
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        exit;
    }

    public static function redirect(string $url, int $statusCode = 302): void
    {
        http_response_code($statusCode);
        header("Location: {$url}");
        exit;
    }

    public static function html(string $content, int $statusCode = 200): void
    {
        http_response_code($statusCode);
        header("Content-Type: text/html; charset=UTF-8");
        echo $content;
        exit;
    }
}
