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
				'orderid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'donee_numid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'propid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'count' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'must_give' => true
				),
				'from' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				)
			),
			//数据源
			'data_source' => array(
				'Prop.Base.Gift' => array(
					'source' => 'Prop.Base.Gift',
					'args' => array(
						'areaid' => 'args.areaid',
						'orderid'  => 'args.orderid',
						'numid' => 'args.numid',
						'donee_numid' => 'args.donee_numid',
						'propid' => 'args.propid',
						'count' => 'args.count',
						'from' => 'args.from',
					),
					'code_map' => array(
						1 => array(
							'code' => 1,
						),
						2 => array(
							'code' => 10011,
						),
						3 => array(
							'code' => 10012,
						),
						4 => array(
							'code' => 2,
						)
					)
				)
			)
);