<?php
return array(
			'enabled' => true,
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
				),
				'propids' => array(
					'type' => 'list',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				)
			),
			//数据源
			'data_source' => array(
				'Prop.Info.Get' => array(
					'source' => 'Prop.Info.Get',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'propids' => 'args.propids',
					),
					'code_map' => array(
						1 => array(
							'code' => 1001,
						)
					)
				)
			)
);