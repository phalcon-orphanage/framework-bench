<?php

try {

	$config = new Phalcon_Config(array(
		'phalcon' => array(
			'controllersDir' => 'app/controllers/',
			'modelsDir' => 'app/models/',
			'viewsDir' => 'app/views/',
		)
	));

	$front = Phalcon_Controller_Front::getInstance();
	$front->setConfig($config);
	echo $front->dispatchLoop()->getContent();

}
catch(Phalcon_Exception $e){
	echo 'PhalconException: '.$e->getMessage(), PHP_EOL;
}

