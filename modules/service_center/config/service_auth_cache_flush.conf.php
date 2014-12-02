<?php
return array(
			'enabled' => true,
            'name' => '',
			//参数限制
			'input_filter' => array(
				'areaid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'numid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				)
			),
			//数据源
			'data_source' => array(
				'Auth.Cache.Flush' => array(
					'source' => 'Auth.Cache.Flush',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid'
					)
				)
			)
);