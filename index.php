<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Guayaquil');
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

#region HTTPS Redirection
$_ACTUAL_DOMAIN = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$_IS_PRODUCTION = (str_contains($_ACTUAL_DOMAIN, $_ENV['HTTP_PATH_PRODUCTION'])) ? true : false;
$_IS_HTTPS = (isset($_SERVER['HTTPS'])) ? 'true' : 'false';
if (!$_IS_PRODUCTION) $_ENV['HTTP_PATH'] = 'http://' . $_ENV['HTTP_PATH_LOCAL'];
else $_ENV['HTTP_PATH'] = (($_ENV['PROTOCOL_HTTPS_PRODUCTION'] == 'true') ? 'https' : 'http') . '://' . $_ENV['HTTP_PATH_PRODUCTION'];
$_ENV['STATIC_PATH'] = $_ENV['HTTP_PATH'] . $_ENV['STATIC_PATH'];
if ($_IS_PRODUCTION && $_IS_HTTPS != $_ENV['PROTOCOL_HTTPS_PRODUCTION']) {
    // echo "xd";

    header('location: ' . $_ENV['HTTP_PATH']);
    exit();
}
// echo $_ENV['HTTP_PATH'];
#endregion

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
