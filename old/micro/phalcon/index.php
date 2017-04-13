<?php

$app = new Phalcon\Mvc\Micro();

$app->get('/say/hello/{name}', function ($name) {
    echo "Hello ", $name, "!";
});

$app->handle();

