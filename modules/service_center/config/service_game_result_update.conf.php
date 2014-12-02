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
				'gameid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'numid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'jf' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'win' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'lost' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'peace' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'esc' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'jy' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				)
			),
			//数据源
			'data_source' => array(
				'Game.Result.Update' => array(
					'source' => 'Game.Result.Update',
					'args' => array(
						'areaid' => 'args.areaid',
						'gameid'  => 'args.gameid',
						'numid' => 'args.numid',
						'jf' => 'args.jf',
						'win' => 'args.win',
						'lost' => 'args.lost',
						'peace' => 'args.peace',
						'esc' => 'args.esc',
						'jy' => 'args.jy',
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