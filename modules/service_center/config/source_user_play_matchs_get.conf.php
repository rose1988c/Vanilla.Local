<?php
return array(
			'enabled' => true,
			'source' => 'User.PlayMatchs.Get',
			'router' => 'local',
			'config' => array(
				'class' => 'user_play_matchs_get'
			),
			'input_filter' => array(
				
			),
			'output_filter' => array(
				// 'nickname' => array(
				// 	'type' => 'string',
				// 	'limit' => '15-20'
				// ),
				// 'userid'  => array(
				// 	'type' => 'string',
				// 	'limit' => '12-18'
				// ),
				// 'is_new_player'    => array(
				// 	'type' => 'bool'
				// )
			)
);