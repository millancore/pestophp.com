<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$container = require dirname(__DIR__) . '/bootstrap.php';

AppFactory::setContainer($container);
$app = AppFactory::create();

$app->addErrorMiddleware(true, true, true);

// Add Not Found Handler
$app->addRoutingMiddleware();
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {

    $response->getBody()->write(
        $this->get('view')->make('404.php')->toHtml()
    );

    return $response->withStatus(404);
});


$app->get('/', function (Request $request, Response $response, $args) {

    $homeView = $this->get('view')->make('home.php');

    $response->getBody()->write($homeView->toHtml());
    return $response;
});

$app->run();
