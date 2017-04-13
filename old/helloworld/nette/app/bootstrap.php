<?php

use Nette\Config\Configurator;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\SimpleRouter;

require __DIR__ . '/../vendor/nette/nette/Nette/loader.php';

if (is_file($cache = __DIR__ . '/../temp/classes.cache.php')) {
	require $cache;
} else {
	require __DIR__ . '/ClassCacheBuilder.php';
	ClassCacheBuilder::customBuild($cache);
}

$configurator = new Configurator();
$configurator->setDebugMode(FALSE);
$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$container = $configurator->createContainer();

$container->router[] = new SimpleRouter('Default:default');

$container->application->run();
