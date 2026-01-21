<?php
declare(strict_types=1);

namespace App\Core;

final class Router
{
    private array $routes = ['GET' => [], 'POST' => []];

    public function get(string $path, string $handler): void
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function post(string $path, string $handler): void
    {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $handler = $this->routes[$method][$uri] ?? null;

        if ($handler === null) {
            http_response_code(404);
            echo 'Not Found';
            return;
        }

        [$controllerName, $action] = explode('@', $handler);
        $controllerClass = 'App\\Controllers\\' . $controllerName;
        if (!class_exists($controllerClass)) {
            http_response_code(500);
            echo 'Controller not found';
            return;
        }
        $controller = new $controllerClass();
        if (!method_exists($controller, $action)) {
            http_response_code(500);
            echo 'Action not found';
            return;
        }
        $controller->$action();
    }
}
