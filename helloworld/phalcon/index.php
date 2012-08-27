<?php

try {

	$loader = new \Phalcon\Loader();

	$loader->registerDirs(array(__DIR__.'/app/controllers/'))->register();

	$di = new Phalcon\DI\FactoryDefault();

	$di->set('view', function(){
		$view = new \Phalcon\Mvc\View();
		$view->setViewsDir(__DIR__.'/app/views/');
		return $view;
	});

	$application = new Phalcon\Mvc\Application();

	$application->setDI($di);

	echo $application->handle()->getContent();

}
catch(Phalcon_Exception $e){
	echo 'PhalconException: ', $e->getMessage(), PHP_EOL;
}
