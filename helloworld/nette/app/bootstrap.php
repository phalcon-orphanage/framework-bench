<?php

/**
 * My Application bootstrap file.
 */
use Nette\Application\Routers\Route,
Nette\Application\Routers\SimpleRouter;


// Load Nette Framework
require LIBS_DIR . '/Nette.min.php';
//require LIBS_DIR . '/Nette/loader.php';


// Configure application
$configurator = new Nette\Config\Configurator;

// Enable Nette Debugger for error visualisation & logging
//$configurator->setDebugMode($configurator::AUTO);
$configurator->enableDebugger(__DIR__ . '/../log');

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
	->addDirectory(APP_DIR)
	->addDirectory(LIBS_DIR)
	->register();

// Create Dependency Injection container from config.neon file
$configurator->addConfig(__DIR__ . '/config/config.neon');
$container = $configurator->createContainer();

// Setup router

$container->router = new SimpleRouter('Say:hello');


// Configure and run the application!
$container->application->run();
