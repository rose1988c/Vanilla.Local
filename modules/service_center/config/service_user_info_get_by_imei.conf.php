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
				'imei' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'advance' => array(
					'type' => 'bool',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'default' => false,
					'must_give' => false
				)
			),
			//数据源
			'data_source' => array(
				'User.Info.GetByIMEI' => array(
					'source' => 'User.Info.GetByIMEI',
					'args' => array(
						'areaid' => 'args.areaid',
						'imei' => 'args.imei',
						'advance' => 'args.advance',
					),
					'code_map' => array(
						1 => array(
							'code' => 1001,
						),
						2 => array(
							'code' => 1002,
						),
						3 => array(
							'code' => 1003,
						)
					)
				)
			)
);