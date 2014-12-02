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
				'nickname' => array(
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
				'User.Info.GetByNickname' => array(
					'source' => 'User.Info.GetByNickname',
					'args' => array(
						'areaid' => 'args.areaid',
						'nickname' => 'args.nickname',
						'advance' => 'args.advance',
					),
					'code_map' => array(
						1 => array(
							'code' => 1,
						),
						2 => array(
							'code' => 10011
						)
					)
				)
			)
);