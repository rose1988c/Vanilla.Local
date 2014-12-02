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
				'limit' => '0{-}',
				'must_give' => true
			),
	        'amount' => array(
                'type' => 'int',
                'limit' => '0{-}',
                'must_give' => true
	        ),
	        'action' => array(
                'type' => 'int',
                'limit' => '1{,}2',
                'must_give' => false,
	            'default' => 2,
	        )
		),
		//数据源
		'data_source' => array(
			'Userprop.count.Update' => array(
				'source' => 'Userprop.count.Update',
				'args' => array(
					'areaid' => 'args.areaid',
					'numid' => 'args.numid',
					'pid' => 'args.pid',
				    'amount' => 'args.amount',
				    'action' => 'args.action',
				),
				'code_map' => array(
					1 => array(
						'code' => 1001,
					)
				)
			)
		)
);