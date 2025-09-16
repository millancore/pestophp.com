<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$container = require dirname(__DIR__) . '/bootstrap.php';

AppFactory::setContainer($container);
$app = AppFactory::create();

$app->addErrorMiddleware(false, true, true);

// Add Not Found Handler
$app->addRoutingMiddleware();


$app->get('/', function (Request $request, Response $response, $args) {

    $homeView = $this->get('view')->make('home.php');

    $response->getBody()->write($homeView->toHtml());
    return $response;
});


$app->get('/codeigniter', function (Request $request, Response $response, $args) {

    $codeigniterView = $this->get('view')->make('codeigniter.php');
    $response->getBody()->write($codeigniterView->toHtml());
    return $response;

});

$app->get('/slim', function (Request $request, Response $response, $args) {

    $slimView = $this->get('view')->make('slim.php');
    $response->getBody()->write($slimView->toHtml());
    return $response;

});


$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {

    $response->getBody()->write(
        $this->get('view')->make('404.php')->toHtml()
    );

    return $response->withStatus(404);
});

$app->run();
