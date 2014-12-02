<?php
return array(
			'enabled' => true,
			//参数限制
			'input_filter' => array(
				'sn' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'token' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				)
			),
			//数据源
			'data_source' => array(
				'Safe.MobileToken.Validate' => array(
					'source' => 'Safe.MobileToken.Validate',
					'args' => array(
						'sn' => 'args.sn',
						'token' => 'args.token',
					),
					'code_map' => array(
						1 => array(
							'code' => 1001,
						)
					)
				)
			)
);