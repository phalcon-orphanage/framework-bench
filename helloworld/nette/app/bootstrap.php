<?php

use Nette\Application\Routers\SimpleRouter;
use Nette\Config\Configurator;

require __DIR__ . '/../libs/nette.min.php';

$configurator = new Configurator();
$configurator->setDebugMode(FALSE);
$configurator->setTempDirectory(__DIR__ . '/../temp');

$container = $configurator->createContainer();
$container->router = new SimpleRouter('Default:default');
$container->application->run();
