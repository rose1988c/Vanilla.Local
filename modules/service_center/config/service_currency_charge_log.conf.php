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
				'stime' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'must_give' => true
				),
				'etime' => array(
					'type' => 'int',
					'limit' => '1{-}',
					'must_give' => true
				),
				'start' => array(
					'type' => 'int',
					'limit' => '0{-}',
					'must_give' => false,
					'default' => 0
				),
				'nums' => array(
					'type' => 'int',
					'limit' => '10{-}',
					'must_give' => false,
					'default' => 20
				)
			),
			//数据源
			'data_source' => array(
				'Currency.Charge.Log' => array(
					'source' => 'Currency.Charge.Log',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'stime' => 'args.stime',
						'etime' => 'args.etime',
						'etime' => 'args.etime',
						'start' => 'args.start',
						'nums' => 'args.nums',
					)
				)
			)
);