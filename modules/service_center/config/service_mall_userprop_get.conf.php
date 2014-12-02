<?php
return array(
		'enabled' => true,
		//参数限制
		'input_filter' => array(
			'areaid' => array(
				'type' => 'int',
				'limit' => '_CHECK_VAL_NOT_LIMIT_',
				'must_give' => true
			),
			'numid' => array(
				'type' => 'int',
				'limit' => '_CHECK_VAL_NOT_LIMIT_',
				'must_give' => true
			),
			'pid' => array(
				'type' => 'int',
				'limit' => '_CHECK_VAL_NOT_LIMIT_',
				'must_give' => false,
			    'default' => 0,
			),
	        'type' => array(
                'type' => 'int',
                'limit' => '0{-}8',
                'must_give' => false,
	            'default' => 0,
	        ),
		),
		//数据源
		'data_source' => array(
			'Userprop.Info.Record' => array(
				'source' => 'Userprop.Info.Get',
				'args' => array(
					'areaid' => 'args.areaid',
					'numid' => 'args.numid',
					'pid' => 'args.pid',
				    'type' => 'args.type',
				),
				'code_map' => array(
					1 => array(
						'code' => 1001,
					)
				)
			)
		)
);