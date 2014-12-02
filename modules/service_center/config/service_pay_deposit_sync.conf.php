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
					'limit' => '1{-}',
					'must_give' => true
				),
				'gameid' => array(
					'type' => 'int',
					'limit' => '0{-}',
					'must_give' => true
				),
				'orderid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'cardid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'cardpwd' => array(
					'type' => 'string',
					'limit' => '{regex}/^[A-Z0-9]{1,32}$/i',
					'must_give' => false
				),
				'isfree' => array(
					'type' => 'bool',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'channel' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'paytype' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'value' => array(
					'type' => 'int',
					'limit' => '1{-}100000000',
					'must_give' => true
				),
				'faceprice' => array(
					'type' => 'double',
					'limit' => '0{-}100000',
					'must_give' => true
				),
				'realprice' => array(
					'type' => 'double',
					'limit' => '0{-}100000',
					'must_give' => true
				),
				'from' => array(
					'type' => 'string',
					'limit' => '1{-}100',
					'must_give' => true
				),
				'ip' => array(
					'type' => 'string',
					'limit' => '{regex}/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/',
					'must_give' => true
				),
				'desc' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				)
			),
			//数据源
			'data_source' => array(
				'Pay.Deposit.Sync' => array(
					'source' => 'Pay.Deposit.Sync',
					'args' => array(
						'areaid' => 'args.areaid',
						'areatypeid' => 'args.areatypeid',
						'numid' => 'args.numid',
						'gameid' => 'args.gameid',
						'orderid' => 'args.orderid',
						'cardid' => 'args.cardid',
						'cardpwd' => 'args.cardpwd',
						'isfree' => 'args.isfree',
						'channel' => 'args.channel',
						'paytype' => 'args.paytype',
						'value' => 'args.value',
						'faceprice' => 'args.faceprice',
						'realprice' => 'args.realprice',
						'from' => 'args.from',
						'ip' => 'args.ip',
						'desc' => 'args.desc',
					),
					'code_map' => array(
					)
				)
			)
);