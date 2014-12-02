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
					'limit' => '1{-}10000000000',
					'must_give' => true
				),
				'ip' => array(
					'type' => 'string',
					'limit' => '{regex}/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/',
					'must_give' => true
				),
				'action' => array(
					'type' => 'string',
					'limit' => '1{-}32',
					'must_give' => true
				),
				'orderid' => array(
					'type' => 'string',
					'limit' => '{regex}/^[A-Z0-9]{1,32}$/i',
					'must_give' => true
				),
				'value' => array(
					'type' => 'int',
					'limit' => '1{-}1000',
					'must_give' => true
				),
				'desc' => array(
					'type' => 'string',
					'limit' => '1{-}100',
					'must_give' => true
				),
				'type' => array(
					'type' => 'int',
					'limit' => '1{-}100',
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
				'Currency.Base.Consume' => array(
					'source' => 'Currency.Base.Consume',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'action'  => 'args.action',
						'ip' => 'args.ip',
						'orderid' => 'args.orderid',
						'value' => 'args.value',
						'desc' => 'args.desc',
						'type' => 'args.type'
					),
					'code_map' => array(
						1 => array(
							'code' => 10010,
						),
						2 => array(
							'code' => 10011
						),
						3 => array(
							'code' => 10012
						),
						4 => array(
							'code' => 10013
						),
						5 => array(
							'code' => 10014
						),
						1001 => array(
							'code' => 10015
						),
						1000100001 => array(
							'code' => 10015
						)
					)
				)
			)
);