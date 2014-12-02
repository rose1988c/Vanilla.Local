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
				'gameid' => array(
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
					'source' => 'Game.Result.Get',
					'args' => array(
						'areaid' => 'args.areaid',
						'gameid'  => 'args.gameid',
						'numid' => 'args.numid'
					),
					//storage.User.ID = data.userid 

					'code_map' => array(
						1 => array(
							'code' => 10010,
						),
						0 => array(
							'code' => 0,
						)
					)
				)
			)
);