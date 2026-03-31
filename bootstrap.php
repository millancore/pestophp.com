<?php

use DI\Container;
use Millancore\Pesto\PestoFactory;

require __DIR__ . '/vendor/autoload.php';

define('APP_ROOT', __DIR__);

if (!function_exists('public_path')) {
    function public_path(string $path = ''): string
    {
        return APP_ROOT . '/public/' . ltrim($path, '/');
    }
}

$container = new Container();

$container->set('view', function () {
    return PestoFactory::create(
        __DIR__.'/resources/view',
        __DIR__.'/tmp/cache'
    );
});


return $container;