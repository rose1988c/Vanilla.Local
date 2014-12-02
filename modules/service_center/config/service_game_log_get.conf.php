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
					'limit' => '1{-}',
					'must_give' => true
				),
				'stime' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'must_give' => true
				),
				'etime' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'must_give' => true
				),
				'start' => array(
					'type' => 'int',
					'limit' => '0{-}',
					'must_give' => false,
					'default' => 0
				),
				'nums' => array(
					'type' => 'int',
					'limit' => '10{-}',
					'must_give' => false,
					'default' => 20
				),
				'get_partner' => array(
					'type' => 'bool',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false,
					'default' => false
				)
			),
			//数据源
			'data_source' => array(
				'Game.Log.Get' => array(
					'source' => 'Game.Log.Get',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'stime' => 'args.stime',
						'gameid' => 'args.gameid',
						'etime' => 'args.etime',
						'etime' => 'args.etime',
						'start' => 'args.start',
						'nums' => 'args.nums',
						'get_partner' => 'args.get_partner'
					),
					'code_map' => array(
						1 => array(
							'code' => 1,
						),
						2 => array(
							'code' => 1002,
						),
						3 => array(
							'code' => 1003,
						),
						4 => array(
							'code' => 2,
						)
					)
				)
			)
);