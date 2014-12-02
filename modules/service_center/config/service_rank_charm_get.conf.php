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
				'count' => array(
					'type' => 'int',
					'limit' => '0{-}101',
					'must_give' => true
				)
			),
			//数据源
			'data_source' => array(
				'Rank.Charm.Get' => array(
					'source' => 'Rank.Charm.Get',
					'args' => array(
						'areaid' => 'args.areaid',
						'count' => 'args.count',
					),
					'code_map' => array(

					)
				)
			)
);