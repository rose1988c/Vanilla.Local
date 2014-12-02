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
				)
			),
			//数据源
			'data_source' => array(
				'Game.Log.GetMultiTotal' => array(
					'source' => 'Game.Log.GetMultiTotal',
					'args' => array(
						'areaid' => 'args.areaid',
						'numids' => 'args.numids',
						'stime' => 'args.stime',
						'gameid' => 'args.gameid',
						'etime' => 'args.etime',
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