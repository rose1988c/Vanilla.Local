<?php
return array(
			'enabled' => true,
			//参数限制
			'input_filter' => array(
				'areaid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false,
					'default' => 0
				),
				'gameid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'yk_numid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'openudid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'imei' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'get_status' => array(
					'type' => 'bool',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'default' => false,
					'must_give' => false
				),
				'pt_userid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'os' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'default' => 'ios',
					'must_give' => false
				)

			),
			//数据源
			'data_source' => array(
				'User.Yk.Topt' => array(
					'source' => 'User.Yk.Topt',
					'args' => array(
						'gameid' => 'args.gameid',
						'areaid' => 'args.areaid',
						'openudid'  => 'args.openudid',
						'imei' => 'args.imei',
						'yk_numid' => 'args.yk_numid',
						'get_status' => 'args.get_status',
						'pt_userid' => 'args.pt_userid',
						'os' => 'args.os'
					),
					'code_map' => array(
						
					)
				)
			)
);