<?php
return array(
			'enabled' => true,
			//参数限制
			'input_filter' => array(
				'areaid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false,
					'default' => 3
				),
				'gameid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'type' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'flag' => array(
					'type' => 'string',
					'limit' => 'WEB.ACTIVE',
					'must_give' => true
				),
				'top' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'must_give' => false,
					'default' => 10
				)

			),
			//数据源
			'data_source' => array(
				'Game.AwardServiceData.GetTop' => array(
					'source' => 'Game.AwardServiceData.GetTop',
					'args' => array(
						'areaid' => 'args.areaid',
						'gameid' => 'args.gameid',
						'type' => 'args.type',
						'flag' => 'args.flag',
						'top' => 'args.top',
					),
					'code_map' => array(
						1 => array(
							'code' => 1001,
						)
					)
				)
			)
);