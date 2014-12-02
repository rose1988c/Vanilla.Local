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
					'limit' => '1{-}4000000000',
					'must_give' => true
				),
				'matchid' => array(
					'type' => 'int',
					'limit' => '1{-}1000000',
					'must_give' => true
				),
				'config.init_score' => array(
					'type' => 'int',
					'default' => 1000,
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				)
			),
			//数据源
			'data_source' => array(
				'Game.Match.Get.New' => array(
					'source' => 'Game.Match.Get.New',
					'args' => array(
						'areaid' => 'args.areaid',
						'matchid'  => 'args.matchid',
					),
					'code_map' => array(
						1 => 10010
					)
				),
				'Game.Match.SignUp.New' =>array(
					//数据源标记
					'source' => 'Game.Match.SignUp.New',
					//执行数据源的条件
					'exec_cond' => array(
						'code' => array(
							'limit' => 0,
							'break_it' => true
						),
					),
					//输入参数
					'args' => array(
						'areaid' => 'args.areaid',
						'numid'  => 'args.numid',
						'matchid'  => 'args.matchid',
					),
					//继存器数据
					'storage' => array(
						//'userid' => 'userid'
					),
					//输出数据
					'output'    => array(
						// 'nickname' => 'info.nickname'
					),
					'code_map' => array(
						
					)
				)
			)
);