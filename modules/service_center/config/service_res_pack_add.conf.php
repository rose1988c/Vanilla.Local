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
					'limit' => '1{-}90000000000',
					'must_give' => true
				),
				'userid' => array(
					'type' => 'string',
					'limit' => '1{-}32',
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
				'resid' => array(
					'type' => 'int',
					'limit' => '1{-}32',
					'must_give' => true
				),
				'count' => array(
					'type' => 'int',
					'limit' => '1{-}100000',
					'must_give' => true
				),
				'expire' => array(
					'type' => 'string',
					'limit' => '1{-}32',
					'must_give' => false
				),
				'bind' => array(
					'type' => 'bool',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
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
				'Res.Pack.Add' => array(
					'source' => 'Res.Pack.Add',
					'args' => array(
						'areaid' => 'args.areaid',
						'areatypeid'  => 'args.areatypeid',
						'numid' => 'args.numid',
						'userid'  => 'args.userid',
						'from' => 'args.from',
						'action'  => 'args.action',
						'resid' => 'args.resid',
						'count'  => 'args.count',
						'expire' => 'args.expire',
						'bind'  => 'args.bind',
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