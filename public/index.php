<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$container = require dirname(__DIR__) . '/bootstrap.php';

AppFactory::setContainer($container);
$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {

    $homeView = $this->get('view')->make('home.php');

    $response->getBody()->write($homeView->toHtml());
    return $response;
});

$app->run();
