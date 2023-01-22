<?php
date_default_timezone_set('America/Guayaquil');
require_once __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router->get('/', function () {
    include './src/frontend/views/index.php';
});

$router->get('/{lang}', function ($lang) {
    include './src/frontend/views/index.php';
});

$router->set404(function () {
    header('HTTP/1.1 404 Not Found');
    echo "Pagina no encontrada!";
});

$router->run();
