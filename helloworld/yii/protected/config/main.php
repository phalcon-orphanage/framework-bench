<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	//'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
	),

	// application components
	'components'=>array(
		'cache'=>array(
			'class'=>'system.caching.CApcCache',
		),
		'user'=>array(
			'allowAutoLogin'=>true,
		),
		// 'db'=>array(
		// 	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		//),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            		'errorAction'=>'site/error',
        	),
		'log'=>array(
			// 'class'=>'CLogRouter',
			// 'routes'=>array(
			// 	array(
			// 		'class'=>'CFileLogRoute',
			// 		'levels'=>'error, warning',
			// 	),
			// ),
		),
	),
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
