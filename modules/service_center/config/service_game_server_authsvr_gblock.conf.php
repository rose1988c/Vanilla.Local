<?php
return array(
    'enabled' => true,
    'name'    => '临时封号',

    //参数限制
    'input_filter' => array(
        'areaid' => array(
            'type' => 'int',
            'limit' => '_CHECK_VAL_NOT_LIMIT_',
            'must_give' => true,
            'desc' => '平台ID',
        ),
        'numid' => array(
            'type' => 'int',
            'limit' => '_CHECK_VAL_NOT_LIMIT_',
            'must_give' => true,
            'desc' => '数字账号',
        ),
        'gameid' => array(
            'type' => 'int',
            'limit' => '_CHECK_VAL_NOT_LIMIT_',
            'must_give' => true,
            'desc' => '游戏ID',
        ),
        'expired' => array(
            'type' => 'int',
            'limit' => '1{-}',
            'must_give' => true,
            'desc' => '封号时间(s)',
        ),
        'uid' => array(
            'type' => 'int',
            'limit' => '_CHECK_VAL_NOT_LIMIT_',
            'must_give' => false,
            'desc' => '操作人ID，用来做log记录',
        ),
        'reason' => array(
            'type' => 'string',
            'limit' => '',
            'must_give' => false,
            'desc' => '临时封号理由',
        ),
    ),
    //数据源
    'data_source' => array(
        'GameServer.AuthSvr.Gblock' => array(
            'source' => 'GameServer.AuthSvr.Gblock',
            'args' => array(
                'areaid'  => 'args.areaid',
                'numid'   => 'args.numid',
                'gameid'  => 'args.gameid',
                'expired' => 'args.expired',
                'uid'     => 'args.uid',
                'reason'  => 'args.reason',
            ),
            'code_map' => array(
            ),
            'return' => 'true|false'
        )
    )
);