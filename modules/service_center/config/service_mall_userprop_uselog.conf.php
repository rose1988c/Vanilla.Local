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
	        'count' => array(
                'type' => 'int',
                'limit' => '0{-}',
                'must_give' => false,
	            'default' => 0,
	        ),
	        'usetype' => array(
                'type' => 'int',
                'limit' => '0{-}3',
                'must_give' => false,
	            'default' => 0,
	        ),
	        'param' => array(
                'type' => 'string',
                'limit' => '_CHECK_VAL_NOT_LIMIT_',
                'must_give' => false,
	            'default' => 0,
	        )
		),
		//数据源
		'data_source' => array(
			'Userprop.Info.Uselog' => array(
				'source' => 'Userprop.Info.Uselog',
				'args' => array(
					'areaid' => 'args.areaid',
					'numid' => 'args.numid',
					'pid' => 'args.pid',
				    'count' => 'args.count',
				    'usetype' => 'args.usetype',
				    'param' => 'args.param',
				),
				'code_map' => array(
					1 => array(
						'code' => 1001,
					)
				)
			)
		)
);