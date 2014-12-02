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
				'nums' => array(
					'type' => 'int',
					'limit' => '0{-}101',
					'must_give' => true
				),
				'gameid' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'must_give' => true
				),
				'type' => array(
					'type' => 'string',
					'limit' => 'jf',
					'must_give' => false,
					'default' => 'jf'
				),
				'sort' => array(
					'type' => 'string',
					'limit' => 'DESC{,}ASC',
					'must_give' => false,
					'default' => 'DESC'
				)
			),
			//数据源
			'data_source' => array(
				'Rank.Game.Get' => array(
					'source' => 'Rank.Game.Get',
					'args' => array(
						'areaid' => 'args.areaid',
						'nums' => 'args.nums',
						'gameid' => 'args.gameid',
						'type' => 'args.type',
						'sort' => 'args.sort',
					),
					'code_map' => array(

					)
				)
			)
);