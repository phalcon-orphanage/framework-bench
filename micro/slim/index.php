<?php

require 'Slim/Slim.php';

$app = new Slim();

$app->config("mode", "production");

$app->get('/say/hello/:name', function ($name) {
    echo "Hello, $name!";
});

$app->run();

