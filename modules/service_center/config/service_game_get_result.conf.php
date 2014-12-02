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
				)
			),
			//数据源
			'data_source' => array(
				'Game.Get.Result' => array(
					'source' => 'Game.Get.Result',
					'args' => array(
						'areaid' => 'args.areaid',
						'gameid'  => 'args.gameid',
						'numid' => 'args.numid',
					),
					'code_map' => array(
						1 => array(
							'code' => 10010,
							'output_filter' => array(
								'info' => array(
									'map'  => 'info',
									'cond' => array(
										'type' => 'int',
										'limit' => '_CHECK_VAL_NOT_LIMIT_',
										'must_give' => false
									)
								)
							)
						),
						0 => array(
							'code' => 0,
							'output_filter' => array(
								'jf' => array(
									'map'  => 'jf',
									'cond' => array(
										'type' => 'int',
										'limit' => '_CHECK_VAL_NOT_LIMIT_',
										'default' => 0,
										'must_give' => false
									)
								),
								'win' => array(
									'map'  => 'win',
									'cond' => array(
										'type' => 'int',
										'limit' => '_CHECK_VAL_NOT_LIMIT_',
										'default' => 0,
										'must_give' => false
									)
								),
								'lost' => array(
									'map'  => 'lost',
									'cond' => array(
										'type' => 'int',
										'limit' => '_CHECK_VAL_NOT_LIMIT_',
										'default' => 0,
										'must_give' => false
									)
								),
								'peace' => array(
									'map'  => 'peace',
									'cond' => array(
										'type' => 'int',
										'limit' => '_CHECK_VAL_NOT_LIMIT_',
										'default' => 0,
										'must_give' => false
									)
								),
								'esc' => array(
									'map'  => 'esc',
									'cond' => array(
										'type' => 'int',
										'limit' => '_CHECK_VAL_NOT_LIMIT_',
										'default' => 0,
										'must_give' => false
									)
								),
								'jy' => array(
									'map'  => 'jy',
									'cond' => array(
										'type' => 'int',
										'limit' => '_CHECK_VAL_NOT_LIMIT_',
										'default' => 0,
										'must_give' => false
									)
								)
							)
						)
					)
				)
			)
);