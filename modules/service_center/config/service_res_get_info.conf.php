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
				'appkey' => array(
					'type' => 'string',
					'limit' => '1{-}10000',
					'must_give' => false
				),
				'type' => array(
					'type' => 'int',
					'limit' => '1{-}10000',
					'must_give' => false
				),
				'rkey' => array(
					'type' => 'string',
					'limit' => '1{-}10000',
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
				'Res.Get.Info' => array(
					'source' => 'Res.Get.Info',
					'args' => array(
						'areaid' => 'args.areaid',
						'areatypeid' => 'args.areatypeid',
						'appkey'  => 'args.appkey',
						'type'  => 'args.type',
						'rkey'  => 'args.rkey',
					),
					'code_map' => array(
						1 => 10010
					),
					'output'    => array(
						'info' => 'info'
					)
				)
			)
);