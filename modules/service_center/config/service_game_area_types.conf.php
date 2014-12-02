<?php
return array(
			'enabled' => true,
			//参数限制
			'input_filter' => array(
				'areaid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'areatypeid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				)
			),
			//数据源
			'data_source' => array(
				'Game.Area.Types' => array(
					'source' => 'Game.Area.Types',
					'args' => array(
						'areaid' => 'args.areaid',
						'areatypeid' => 'args.areatypeid',
					),
					'code_map' => array(
					)
				)
			)
);