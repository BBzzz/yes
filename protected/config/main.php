<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii-aided Electronic Shop',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
//		'application.modules.admin.models.*',
	),

	'modules'=>array(
		'admin',		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'BBzzz1984',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'products/<id:\w+>/*'=>'products/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
			'showScriptName'=>false,
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yes_dev',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'BBzzz1984',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web page
				array(
					'class'=>'CWebLogRoute',
				),
			),
		),
		'authManager'=>array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
/*	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'y.botond@gmail.com',
	),*/
	'homeUrl'=>'/yes/products',
	'params' => require_once (dirname(__FILE__) . DIRECTORY_SEPARATOR .'parameters.php'),
);
