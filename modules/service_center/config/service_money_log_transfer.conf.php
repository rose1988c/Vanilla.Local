<?php
return array(
			'enabled' => true,
			//参数限制
			'input_filter' => array(
				'areaid' => array(
					'type' => 'int',
					'limit' => '1{-}10000',
					'must_give' => true
				),
				'numid' => array(
					'type' => 'int',
					'limit' => '1{-}90000000000',
					'must_give' => true
				),
				'page' => array(
					'type' => 'int',
					'limit' => '1{-}100000',
					'default' => 1,
					'must_give' => false
				),
				'nums' => array(
					'type' => 'int',
					'limit' => '1{-}100',
					'default' => 20,
					'must_give' => false
				),
				'gameid' => array(
					'type' => 'int',
					'limit' => '0{-}90000000000',
					'must_give' => false
				),
				'type' => array(
					'type' => 'int',
					'limit' => '0{-}256',
					'default' => 0,
					'must_give' => false
				),
				'stime' => array(
					'type' => 'string',
					'limit' => '0{-}256',
					'must_give' => false
				),
				'etime' => array(
					'type' => 'string',
					'limit' => '0{-}256',
					'must_give' => false
				)
			),
			'output_filter' => array(
				'info' => array(
					'type' => 'list',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
				)
			),
			//数据源
			'data_source' => array(
				'Money.Info.Get' => array(
					'source' => 'Money.Log.Transfer',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'gameid' => 'args.gameid',
						'type' => 'args.type',
						'page' => 'args.page',
						'nums' => 'args.nums',
						'stime' => 'args.stime',
						'etime' => 'args.etime'
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