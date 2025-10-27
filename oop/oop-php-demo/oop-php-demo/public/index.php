<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\AnimalController;
use App\Models\Address;
use App\Models\User;
use App\Services\UserService;

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        echo (new HomeController())->index();
        break;

    case '/animals':
        echo (new AnimalController())->list();
        break;

    case '/users':
        $address = new Address("Carrer Major 10", "Barcelona");
        $user = new User("Anna", $address);
        $service = new UserService();
        echo "<pre>" . $service->printCard($user) . "</pre>";
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
}
