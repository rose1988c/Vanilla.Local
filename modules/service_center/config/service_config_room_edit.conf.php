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
				'gameid' => array(
					'type' => 'int',
					'limit' => '1{-}10000000',
					'must_give' => true
				),
				'roomid' => array(
					'type' => 'int',
					'limit' => '1{-}10000000',
					'must_give' => true
				),
				'joinroomrule' => array(
					'type' => 'string',
					'limit' => '0{-}1000',
					'must_give' => true
				),
				'jointablerule' => array(
					'type' => 'string',
					'limit' => '0{-}1000',
					'must_give' => true
				),
				'continuetablerule' => array(
					'type' => 'string',
					'limit' => '0{-}1000',
					'must_give' => true
				),
				'addjf' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
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
				'Res.Get.Info' => array(
					'source' => 'Config.Room.Edit',
					'args' => array(
						'areaid' => 'args.areaid',
						'gameid'  => 'args.gameid',
						'roomid' => 'args.roomid',
						'joinroomrule'  => 'args.joinroomrule',
						'jointablerule'  => 'args.jointablerule',
						'continuetablerule'  => 'args.continuetablerule',
						'addjf' => 'args.addjf',
					),
					'code_map' => array(
						1 => array(
							'code' => 10010
						)
					)
				)
			)
);