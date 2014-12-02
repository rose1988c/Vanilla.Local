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
				'start' => array(
					'type' => 'int',
					'limit' => '0{-}',
					'default' => 0,
					'must_give' => false
				),
				'count' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'default' => 20,
					'must_give' => false
				),
				'phone' => array(
					'type' => 'string',
					'limit' => '11{-}11',
					'default' => 0,
					'must_give' => true
				)

			),
			//数据源
			'data_source' => array(
				'User.Info.GetMultiByPhone' => array(
					'source' => 'User.Info.GetMultiByPhone',
					'args' => array(
						'areaid' => 'args.areaid',
						'phone' => 'args.phone',
						'count' => 'args.count',
						'start' => 'args.start',
					),
					'code_map' => array(
					
					)
				)
			)
);