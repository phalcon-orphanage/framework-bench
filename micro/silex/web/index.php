<?php

use Silex\Application;

ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

$app = new Application();

$app->get('/', function () use ($app) {
    return "Hello World!";
//    return $app['twig']->render('index.html.twig', array());
})
    ->bind('homepage')
;

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    return "Error: " . $e->getMessage();
});

$app->run();

