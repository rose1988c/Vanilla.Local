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
					'limit' => '1{-}',
					'must_give' => true
				),
				'ip' => array(
					'type' => 'string',
					'limit' => '{regex}/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/',
					'must_give' => true
				),
				'orderid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'opcode' => array(
					'type' => 'string',
					'limit' => '6{-}6',
					'must_give' => true
				),
				'from' => array(
					'type' => 'string',
					'limit' => '1{-}100',
					'must_give' => true
				),
				'value' => array(
					'type' => 'int',
					'limit' => '1{-}1000000',
					'must_give' => true
				)
			),
			//数据源
			'data_source' => array(
				'Currency.Sr.Award' => array(
					'source' => 'Currency.Sr.Award',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'ip' => 'args.ip',
						'orderid' => 'args.orderid',
						'value' => 'args.value',
						'from' => 'args.from',
						'opcode' => 'args.opcode'
					),
					'code_map' => array(
					)
				)
			)
);