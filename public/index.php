<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\TaskController;

$controller = new TaskController();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        $controller->index();
        break;
    case '/create':
        $controller->create();
        break;
    case '/toggle':
        $controller->toggle($_GET['id'] ?? 0);
        break;
    case '/delete':
        $controller->delete($_GET['id'] ?? 0);
        break;
    default:
        http_response_code(404);
        echo "Page not found";
}