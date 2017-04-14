<?php

$app = new Phalcon\Mvc\Micro();

$app->get(
    '/',
    function () {
        echo "Hello World!";
    }
);

$app->notFound(
    function() {
        echo "Not Found";
    }
);

$app->handle();

