<?php

namespace App\Core;

class Router
{
    protected array $routes = [];
    protected array $middlewares = [];

    public function get(string $path, mixed $handler, array $middlewares = []): self
    {
        return $this->addRoute("GET", $path, $handler, $middlewares);
    }

    public function post(string $path, mixed $handler, array $middlewares = []): self
    {
        return $this->addRoute("POST", $path, $handler, $middlewares);
    }

    public function addRoute(string $method, string $path, mixed $handler, array $middlewares = []): self
    {
        $this->routes[] = [
            "method" => strtoupper($method),
            "path" => rtrim($path, "/") ?: "/",
            "handler" => $handler,
            "middlewares" => $middlewares,
        ];
        return $this;
    }

    public function dispatch(Request $request): void
    {
        $method = $request->getMethod();
        $uri = rtrim($request->getUri(), "/") ?: "/";

        foreach ($this->routes as $route) {
            if ($route["method"] !== $method && !($method === "HEAD" && $route["method"] === "GET") && $route["method"] !== "ANY") {
                continue;
            }

            $pattern = preg_replace("/\{([a-zA-Z0-9_]+)\}/", "(?P<$1>[^/]+)", $route["path"]);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $uri, $matches)) {
                $params = array_filter($matches, "is_string", ARRAY_FILTER_USE_KEY);

                // Run route middlewares
                foreach ($route["middlewares"] as $mw) {
                    $mwInstance = is_string($mw) ? new $mw() : $mw;
                    if (method_exists($mwInstance, "handle")) {
                        $mwInstance->handle($request);
                    }
                }

                $handler = $route["handler"];
                if (is_callable($handler)) {
                    call_user_func($handler, $request, $params);
                    return;
                }

                if (is_array($handler) && count($handler) === 2) {
                    [$class, $action] = $handler;
                    $controller = new $class();
                    $controller->$action($request, $params);
                    return;
                }

                if (is_string($handler) && str_contains($handler, "@")) {
                    [$class, $action] = explode("@", $handler, 2);
                    $fullClass = str_starts_with($class, "App\\") ? $class : "App\\Controllers\\" . $class;
                    $controller = new $fullClass();
                    $controller->$action($request, $params);
                    return;
                }
            }
        }

        // 404 fallback
        http_response_code(404);
        $fallback = new \App\Controllers\HomeController();
        $fallback->index($request);
    }
}
