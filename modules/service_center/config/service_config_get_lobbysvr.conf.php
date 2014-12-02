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
				'areatypeid' => array(
					'type' => 'int',
					'limit' => '0{-}10000000',
					'must_give' => true
				)
			),
			//数据源
			'data_source' => array(
				'Config.Get.Lobbysvr' => array(
					'source' => 'Config.Get.Lobbysvr',
					'args' => array(
						'areaid' => 'args.areaid',
						'areatypeid'  => 'args.areatypeid'
					),
					'code_map' => array(
						1 => 10010
					)
				)
			)
);