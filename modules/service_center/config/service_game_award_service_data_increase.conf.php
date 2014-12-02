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
				'numid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'gameid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'type' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'flag' => array(
					'type' => 'string',
					'limit' => 'WEB.ACTIVE{,}WEB.TASK{,}WEB.AWARD',
					'must_give' => true
				),
				'orderid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'from' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'count' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'must_give' => false
				)

			),
			//数据源
			'data_source' => array(
				'Game.AwardServiceData.Increase' => array(
					'source' => 'Game.AwardServiceData.Increase',
					'args' => array(
						'areaid'  => 'args.areaid',
						'numid'   => 'args.numid',
						'gameid'  => 'args.gameid',
						'type'    => 'args.type',
						'flag'    => 'args.flag',
						'orderid' => 'args.orderid',
						'from'    => 'args.from',
						'count'   => 'args.count',
					),
					'code_map' => array(
					)
				)
			)
);