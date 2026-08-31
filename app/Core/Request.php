<?php

namespace App\Core;

class Request
{
    protected string $method;
    protected string $uri;
    protected array $query;
    protected array $body;
    protected array $headers;

    public function __construct()
    {
        $this->method = strtoupper($_SERVER["REQUEST_METHOD"] ?? "GET");
        $rawUri = $_SERVER["REQUEST_URI"] ?? "/";
        $this->uri = parse_url($rawUri, PHP_URL_PATH) ?: "/";
        $this->query = $_GET ?? [];
        
        $body = $_POST ?? [];
        $rawInput = file_get_contents("php://input");
        if (!empty($rawInput)) {
            $json = json_decode($rawInput, true);
            if (is_array($json)) {
                $body = array_merge($body, $json);
            }
        }
        $this->body = $body;
        $this->headers = function_exists("getallheaders") ? (getallheaders() ?: []) : [];
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getQuery(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) return $this->query;
        return $this->query[$key] ?? $default;
    }

    public function getBody(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) return $this->body;
        return $this->body[$key] ?? $default;
    }

    public function isPost(): bool
    {
        return $this->method === "POST";
    }

    public function isAjax(): bool
    {
        return !empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && 
               strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) === "xmlhttprequest";
    }

    public function sanitize(mixed $data): mixed
    {
        if (is_array($data)) {
            return array_map([$this, "sanitize"], $data);
        }
        if (is_string($data)) {
            return htmlspecialchars(trim($data), ENT_QUOTES, "UTF-8");
        }
        return $data;
    }
}
