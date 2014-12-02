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
					'limit' => '1{-}',
					'must_give' => true
				),
				'TSession' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'FSession' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'channel' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				)
			),
			//数据源
			'data_source' => array(
				'Auth.Session.Validate' => array(
					'source' => 'Auth.Session.Validate',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid'  => 'args.numid',
						'TSession' => 'args.TSession',
						'FSession' => 'args.FSession',
						'channel' => 'args.channel',
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