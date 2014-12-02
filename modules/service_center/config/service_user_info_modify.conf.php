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
				'info.nickname' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.sex' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.head' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.cardid' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.username' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),

				'info.question' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),

				'info.answer' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),

				'info.email' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.tel' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.phone' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.qq' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.msn' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.birthday' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.constellation' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.bloodtype' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.resideprovince' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.residecity' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.residedist' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.income' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.occupation' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.head_small' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.head_normal' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.head_big' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.remark' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				),
				'info.description' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => false
				)
			),
			//数据源
			'data_source' => array(
				0 => array(
					'source' => 'User.Info.Modify',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid',
						'nickname' => 'args.info.nickname',
						'sex' => 'args.info.sex',
						'head' => 'args.info.head',
						'cardid' => 'args.info.cardid',
						'username' => 'args.info.username',
						'answer' => 'args.info.answer',
						'question' => 'args.info.question',
						'email' => 'args.info.email',
						'tel' => 'args.info.tel',
						'phone' => 'args.info.phone',
						'qq' => 'args.info.qq',
						'msn' => 'args.info.msn',
						'birthday' => 'args.info.birthday',
						'constellation' => 'args.info.constellation',
						'bloodtype' => 'args.info.bloodtype',
						'resideprovince' => 'args.info.resideprovince',
						'residecity' => 'args.info.residecity',
						'residedist' => 'args.info.residedist',
						'income' => 'args.info.income',
						'occupation' => 'args.info.occupation',
						'head_small' => 'args.info.head_small',
						'head_normal' => 'args.info.head_normal',
						'head_big' => 'args.info.head_big',
						'remark' => 'args.info.remark',
						'description' => 'args.info.description'
					),
					'code_map' => array(
						1 => array(
							'code' => 1,
						),
						2 => array(
							'code' => 2,
						),
						0 => array(
							'code' => 0,
						)
					)
				)
			)
);