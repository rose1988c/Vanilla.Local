<?php

/**
 * 
 * array(
 * 	areaid => 100,
 *  numid  => 135653,
 *  gameid => 201,
 *  user   => array (
 *      ID => 'zhoulianbo'
 *  )
 * 
 * )
 * 
 */


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
				)
			),
			//数据源
			'data_source' => array(
				0 => array(
					'source' => 'User.Attr.Get',
					'args' => array(
						'areaid' => 'args.areaid',
						'numid' => 'args.numid'
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