<?php
return array(
			'enabled' => true,
			'source' => 'User.Info.GetMultiByPhone',
			'config' => array(
				'class' => 'user_info_get_multi_by_phone'
			),
			'router' => 'local',
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