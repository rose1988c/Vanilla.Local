<?php
return array(
			'enabled' => true,
			'name' => '加元宝',

			//参数限制
			'input_filter' => array(
				'areaid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true,
					'desc' => '平台ID'
				),
				'numid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true,
					'desc' => '数字ID'
				),
				'value' => array(
					'type' => 'int',
					'limit' => '1{-}1000',
					'must_give' => true,
					'desc' => '元宝数量100以内'
				),
                'ip' => array(
					'type' => 'string',
					'limit' => '{regex}/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/',
					'must_give' => true,
					'desc' => '客户端ip'
				),
				'orderid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true,
					'desc' => '唯一订单号，可使用某张表的自增ID'
				),
				'opcode' => array(
					'type' => 'string',
					'limit' => '6{-}6',
					'must_give' => true,
					'desc' => '活动代码'
				),
                'from' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true,
					'desc' => '来源哪个活动'
				),
			),
			//数据源
			'data_source' => array(
				'Currency.Base.Award' => array(
					'source' => 'Currency.Base.Award',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'ip' => 'args.ip',
						'orderid' => 'args.orderid',
						'value' => 'args.value',
						'opcode' => 'args.opcode',
                        'from' => 'args.from',
					),
					'return' => 'yb'
				)
			)
);