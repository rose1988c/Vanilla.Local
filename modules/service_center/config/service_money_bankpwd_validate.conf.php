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
			'limit' => '1{-}90000000000',
			'must_give' => true

		),
		'password' => array(
			'type' => 'string',
			'limit' => '0{-}32',
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
		'Money.BankPwd.Validate' => array(
			'source' => 'Money.BankPwd.Validate',
			'args' => array(
				'areaid' => 'args.areaid',
				'numid' => 'args.numid',
				'password' => 'args.password',
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