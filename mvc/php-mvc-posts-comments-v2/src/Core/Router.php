<?php
namespace App\Core;

use App\Core\Http\Request;
use App\Core\Http\Response;
use App\Core\Routing\Route;

final class Router
{
    /** @var Route[] */
    private array $routes = [];

    public function __construct(array $routes)
    {
        // $routes puede contener arrays (legacy) o Route objects
        foreach ($routes as $r) {
            if ($r instanceof Route) {
                $this->routes[] = $r;
            } elseif (is_array($r) && count($r) === 3) {
                [$m, $p, $h] = $r;
                $this->routes[] = new Route($m, $p, $h);
            }
        }
    }

    public function dispatch(Request $request): void
    {
        foreach ($this->routes as $route) {
            $params = [];
            if ($route->matches($request, $params)) {
                [$class, $action] = $route->handler;
                $controller = new $class();
                $result = $controller->$action(...$params);
                if ($result instanceof Response) {
                    $result->send();
                } else {
                    // Asumir string (HTML) por compatibilidad
                    Response::html((string)$result)->send();
                }
                return;
            }
        }
        Response::html('404 Not Found', 404)->send();
    }
}
