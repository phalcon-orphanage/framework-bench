<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

require_once __DIR__.'/../vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/../')
);

//$app->singleton(
//    Illuminate\Contracts\Debug\ExceptionHandler::class,
//    App\Exceptions\Handler::class
//);
//
//$app->singleton(
//    Illuminate\Contracts\Console\Kernel::class,
//    App\Console\Kernel::class
//);

$app->get('/', function () use ($app) {
    return "Hello World!";
//    return $app->version();
});

$app->run();
