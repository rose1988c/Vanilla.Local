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
				'roomid' => array(
					'type' => 'int',
					'limit' => '1{-}10000000',
					'must_give' => true
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
				'Server.Game.Restart' => array(
					'source' => 'Server.Game.Restart',
					'args' => array(
						'areaid' => 'args.areaid',
						'roomid' => 'args.roomid',
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