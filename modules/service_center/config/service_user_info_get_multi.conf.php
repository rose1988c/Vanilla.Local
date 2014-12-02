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
				'numids' => array(
					'type' => 'list',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				)
			),
			//数据源
			'data_source' => array(
				'User.Info.GetMulti' => array(
					'source' => 'User.Info.GetMulti',
					'args' => array(
						'areaid' => 'args.areaid',
						'numids' => 'args.numids',
					),
					'code_map' => array(
						1 => array(
							'code' => 10010,
						),
						2 => array(
							'code' => 10011
						)
					)
				)
			)
);