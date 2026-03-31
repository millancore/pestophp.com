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

    $raw = json_decode(file_get_contents(APP_ROOT . '/benchmark.json'), true);

    $engines = ['PestoBench' => 'Pesto', 'BladeBench' => 'Blade', 'TwigBench' => 'Twig'];
    $colorMap = ['Pesto' => '#008236', 'Blade' => '#fda4af', 'Twig' => '#7dd3fc'];
    $subjects = [
        'benchSimple' => 'Simple Template',
        'benchLoop' => 'Loop (100 items)',
        'benchConditional' => 'Conditional (50 items)',
        'benchPartial' => 'Partial',
    ];

    $benchmarks = [];
    foreach ($subjects as $key => $name) {
        $values = [];
        foreach ($raw as $b) {
            if ($b['subject'] === $key) {
                $values[$engines[$b['benchmark']]] = $b['mode'];
            }
        }
        $max = max($values);
        $bars = [];
        foreach (['Pesto', 'Blade', 'Twig'] as $eng) {
            $bars[] = [
                'engine' => $eng,
                'value' => number_format($values[$eng], 1) . 'μs',
                'pct' => round(($values[$eng] / $max) * 100),
                'color' => $colorMap[$eng],
            ];
        }
        $benchmarks[] = ['name' => $name, 'bars' => $bars];
    }

    $memByEngine = [];
    foreach ($raw as $b) {
        $eng = $engines[$b['benchmark']];
        $memByEngine[$eng] = max($memByEngine[$eng] ?? 0, $b['mem_peak']);
    }
    $maxMem = max($memByEngine);
    $memoryBars = [];
    foreach (['Pesto', 'Blade', 'Twig'] as $eng) {
        $memoryBars[] = [
            'engine' => $eng,
            'value' => number_format($memByEngine[$eng] / 1024 / 1024, 2) . ' MB',
            'pct' => round(($memByEngine[$eng] / $maxMem) * 100),
            'color' => $colorMap[$eng],
        ];
    }

    $homeView = $this->get('view')->make('home.php', [
        'benchmarks' => $benchmarks,
        'memoryBars' => $memoryBars,
    ]);

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
