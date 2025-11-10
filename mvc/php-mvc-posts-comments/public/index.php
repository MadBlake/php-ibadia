<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Core\Store;
use App\Core\Router;

$config = require __DIR__ . '/../config/db.php';
Store::init($config);

$routes = require __DIR__ . '/../config/routes.php';

$router = new Router($routes);
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
