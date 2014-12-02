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
				'flag' => array(
					'type' => 'string',
					'limit' => '0{-}8',
					'must_give' => true
				),
				'pwd' => array(
					'type' => 'string',
					'limit' => '0{-}32',
					'must_give' => true
				),
				'action' => array(
					'type' => 'string',
					'limit' => '0{-}32',
					'must_give' => true
				),
				'desc' => array(
					'type' => 'string',
					'limit' => '0{-}32',
					'must_give' => true
				),
				'value' => array(
					'type' => 'int',
					'limit' => '1{-}90000000000',
					'must_give' => true
				),
				'ip' => array(
					'type' => 'string',
					'limit' => '{regex}/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/',
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
				'Money.Sr.Transfer' => array(
					'source' => 'Money.Sr.Transfer',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'flag' => 'args.flag',
						'pwd' => 'args.pwd',
						'action' => 'args.action',
						'value' => 'args.value',
						'desc' => 'args.desc',
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