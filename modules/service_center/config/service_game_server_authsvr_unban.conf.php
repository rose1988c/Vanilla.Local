<?php
return array(
    'enabled' => true,
    'name'    => '解封',

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
        'op' => array(
            'type' => 'int',
            'limit' => '2{,}4',
            'must_give' => true,
            'desc' => '封帐号：2，封聊天：4',
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
        'GameServer.AuthSvr.Unban' => array(
            'source' => 'GameServer.AuthSvr.Unban',
            'args' => array(
                'areaid' => 'args.areaid',
                'numid'  => 'args.numid',
                'op'     => 'args.op',
                'uid'    => 'args.uid',
                'reason' => 'args.reason',
            ),
            'code_map' => array(
            ),
            'return' => 'true|false'
        )
    )
);