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
					'limit' => 'WEB.ACTIVE{,}WEB.TASK{,}WEB.AWARD',
					'must_give' => true
				),
				'init' => array(
					'type' => 'bool',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false,
					'default' => false
				),
				'init_count' => array(
					'type' => 'int',
					'limit' => '0{-}',
					'must_give' => false
				)

			),
			//数据源
			'data_source' => array(
				'Game.AwardServiceData.Get' => array(
					'source' => 'Game.AwardServiceData.Get',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid'  => 'args.numid',
						'gameid' => 'args.gameid',
						'type' => 'args.type',
						'flag' => 'args.flag',
						'init' => 'args.init',
						'init_count' => 'args.init_count',
					),
					'code_map' => array(
						1 => array(
							'code' => 1001,
						)
					)
				)
			)
);