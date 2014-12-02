<?php
return array(
			'enabled' => true,
			'source' => 'Game.Match.Get.New',
			'router' => 'local',
			'input_filter' => array(
				'areaid' => array(
					'type' => 'int',
					'limit' => '1{-}10000'
				),
				'matchid' => array(
					'type' => 'int',
					'limit' => '1{-}4000000000'
				)
			),
			'output_filter' => array(
				// 'nickname' => array(
				// 	'type' => 'string',
				// 	'limit' => '15{-}20'
				// ),
				// 'userid'  => array(
				// 	'type' => 'string',
				// 	'limit' => '12{-}18'
				// ),
				// 'is_new_player'    => array(
				// 	'type' => 'bool'
				// )
			)
);