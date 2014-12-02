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
					'limit' => '0{-}10000',
					'must_give' => true
				),
				'numid' => array(
					'type' => 'int',
					'limit' => '1{-}10000000',
					'must_give' => true
				),
				'from' => array(
					'type' => 'string',
					'limit' => '1{-}32',
					'must_give' => true
				),
				'action' => array(
					'type' => 'string',
					'limit' => '1{-}32',
					'must_give' => true
				),
				'consume' => array(
					'type' => 'list',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'orderid' => array(
					'type' => 'string',
					'limit' => '{regex}/^[A-Z0-9]{3}-[A-Z0-9]{32}$/i',
					'must_give' => false
				),
				'ip' => array(
					'type' => 'string',
					'limit' => '{regex}/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/',
					'must_give' => false
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
				'Res.Pack.Consume' => array(
					'source' => 'Res.Pack.Consume',
					'args' => array(
						'areaid' => 'args.areaid',
						'areatypeid'  => 'args.areatypeid',
						'numid' => 'args.numid',
						'from' => 'args.from',
						'action'  => 'args.action',
						'consume' => 'args.consume',
						'orderid' => 'args.orderid',
						'ip' => 'args.ip'
					),
					'code_map' => array(
						1 => array(
							'code' => 10010,
						),
						2 => array(
							'code' => 10011
						)
					)
				)
			)
);