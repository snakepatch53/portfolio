<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Guayaquil');
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// import config
require_once __DIR__ . '/src/backend/functions/config_absolute_root.php';
require_once __DIR__ . '/src/backend/functions/functions.php';

// Declare routes
$router = new \Bramus\Router\Router();


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
