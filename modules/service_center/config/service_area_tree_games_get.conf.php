<?php
return array(
	'enabled' => true,
    'name' => '获取平台游戏树',

	//参数限制
	'input_filter' => array(
		'areaid' => array(
			'type' => 'int',
			'limit' => '1{-}10000',
			'must_give' => true
		),
		'areatypeid' => array(
			'type' => 'int',
			'limit' => '0{-}90000000000',
			'must_give' => true

		)
	),
	//数据源
	'data_source' => array(
		'Area.TreeGames.Get' => array(
			'source' => 'Area.TreeGames.Get',
			'args' => array(
				'areaid' => 'args.areaid',
				'areatypeid' => 'args.areatypeid',
			)
		)
	)
);