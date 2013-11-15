<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
			*/
            'log'=>array(
                'class'=>'CLogRouter',
                'routes'=>array(
                    array(
                        'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                        // Access is restricted by default to the localhost
                        //'ipFilters'=>array('127.0.0.1','192.168.1.*', 88.23.23.0/24),
                    ),
                ),
            ),
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=decorvinilo',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => 'pass',
                'charset' => 'utf8',
                'enableProfiling'=>true,
                'enableParamLogging'=>true,
            ),
		),
	)
);
