<?php

use Nette\Config\Configurator;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\SimpleRouter;

require __DIR__ . '/../libs/nette.min.php';

$configurator = new Configurator();
$configurator->setDebugMode(FALSE);
$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$container = $configurator->createContainer();

if (isset($_SERVER['REDIRECT_NETTE_HTACCESS'])) {
    $container->router[] = new Route('<presenter>/<action>', 'Default:default');
} else {
    $container->router[] = new SimpleRouter('Default:default');
}

$container->application->run();
