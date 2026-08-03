<?php
declare(strict_types=1);

use App\Core\Router;

if (is_file(dirname(__DIR__).'/vendor/autoload.php')) {
    require dirname(__DIR__).'/vendor/autoload.php';
} else {
    spl_autoload_register(static function (string $class): void {
        $prefix = 'App\\';
        if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
            return;
        }
        $relative = substr($class, strlen($prefix));
        $file = dirname(__DIR__).'/app/'.str_replace('\\', '/', $relative).'.php';
        if (is_file($file)) {
            require $file;
        }
    });
}

$router = new Router();
require dirname(__DIR__).'/routes/web.php';
$router->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/');
