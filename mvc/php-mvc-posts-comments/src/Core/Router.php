<?php
namespace App\Core;

final class Router
{
    public function __construct(private array $routes) {}

    public function dispatch(string $method, string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH) ?? '/';
        foreach ($this->routes as [$m, $pattern, $handler]) {
            if ($m !== $method) continue;
            if (preg_match($pattern, $path, $matches)) {
                array_shift($matches);
                [$class, $action] = $handler;
                $controller = new $class();
                echo $controller->$action(...$matches);
                return;
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
}
