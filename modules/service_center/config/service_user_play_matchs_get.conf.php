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

		)
	),
	//数据源
	'data_source' => array(
		'User.PlayMatchs.Get' => array(
			'source' => 'User.PlayMatchs.Get',
			'args' => array(
				'areaid' => 'args.areaid',
				'numid' => 'args.numid',
			)
		)
	)
);