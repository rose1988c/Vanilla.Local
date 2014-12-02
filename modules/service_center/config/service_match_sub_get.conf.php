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
				'type' => array(
					'type' => 'string',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				),
				'matchid' => array(
					'type' => 'int',
					'limit' => '_CHECK_VAL_NOT_LIMIT_',
					'must_give' => true
				)
			),
			//数据源
			'data_source' => array(
				'Match.Sub.Get' => array(
					'source' => 'Match.Sub.Get',
					'args' => array(
						'type' => 'args.type',
						'matchid'  => 'args.matchid',
					),
				)
			)
);