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
				'gameid' => array(
					'type' => 'int',
					'limit' => '0{-}90000000000',
					'must_give' => false
				),
				'type' => array(
					'type' => 'int',
					'limit' => '0{-}256',
					'default' => 8,
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
					'source' => 'Money.Info.Get',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'gameid' => 'args.gameid',
						'type' => 'args.type'
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