<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/say/hello/{name}', function($name) use($app) {
    return 'Hello '.$name.'!';
});

$app->run();

