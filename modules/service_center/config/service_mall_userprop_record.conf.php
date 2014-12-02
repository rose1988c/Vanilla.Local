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
				'must_give' => true
			),
	        'type' => array(
                'type' => 'int',
                'limit' => '1{-}8',
                'must_give' => true
	        ),
	        'count' => array(
                'type' => 'int',
                'limit' => '1{-}10',
                'must_give' => true
	        ),
	        'dateline' => array(
                'type' => 'int',
                'limit' => '_CHECK_VAL_NOT_LIMIT_',
                'must_give' => false,
	            'default' => time(),
	        )
		),
		//数据源
		'data_source' => array(
			'Userprop.Info.Record' => array(
				'source' => 'Userprop.Info.Record',
				'args' => array(
					'areaid' => 'args.areaid',
					'numid' => 'args.numid',
					'pid' => 'args.pid',
				    'count' => 'args.count',
				    'type' => 'args.type',
				    'dateline' => 'args.dateline',
				),
				'code_map' => array(
					1 => array(
						'code' => 1001,
					)
				)
			)
		)
);