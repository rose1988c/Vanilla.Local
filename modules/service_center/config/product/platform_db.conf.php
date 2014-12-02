<?php
return array(
	'NEWPT' => array(
		'CONFIG' => array(
            'TYPE' => 'mysql',
            'HOST' => '10.6.23.10',
            'PROT' => 3306,
            'USERNAME' => 'webjkuser',
            'PASSWORD' => 'QW(y2@$@',
            'PREFIX' => '',
            'DATABASE' => 'config',
			'CHARSET_LINK' => 'latin1',
			'CHARSET_DATA' => 'gbk',
			'MODEL' => 'PDO'
		),
	),
    'GAMETEA' => array(
		'CONFIG' => array(
            'TYPE' => 'mysql',
            'HOST' => '180.153.248.21',
            'PORT'   => 3306,
            'USERNAME' => 'webjkuser',
            'PASSWORD' => 'QW(y2@$@',
            'PREFIX' => '',
            'DATABASE' => 'config',
			'CHARSET_LINK' => 'latin1',
			'CHARSET_DATA' => 'gbk',
			'MODEL' => 'PDO'
		),
	),
    'GAMEABC' => array(
		// 'CONFIG' => array(
		// 	'TYPE' => 'mysql',
		// 	'HOST' => '10.6.23.10',
		// 	'PROT' => 3306,
		// 	'USERNAME' => 'webjkuser',
		// 	'PASSWORD' => 'QW(y2@$@',
		// 	'PREFIX' => '',
		// 	'DATABASE' => 'config_gt',
		// 	'CHARSET_LINK' => 'latin1',
		// 	'CHARSET_DATA' => 'gbk',
		// 	'MODEL' => 'PDO'
		// ),
	),
    'PUB' => array(
		'CONFIG' => array(
            'TYPE' => 'mysql',
            'HOST' => '180.153.248.21',
            'PORT'   => 3306,
            'USERNAME' => 'webjkuser',
            'PASSWORD' => 'QW(y2@$@',
            'PREFIX' => '',
            'DATABASE' => 'pubconfig',
			'CHARSET_LINK' => 'latin1',
			'CHARSET_DATA' => 'gbk',
			'MODEL' => 'PDO'
		),
	)
);