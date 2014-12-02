<?php
return array(
    'enabled' => true,
    //参数限制
    'input_filter' => array(
        'areaids' => array(
            'type' => 'list',
            'limit' => '',
            'must_give' => true
        ),
    ),
    //数据源
    'data_source' => array(
        0 => array(
            'source' => 'GameConfig.Get.SvrConfig',
            'args' => array(
                'areaids' => 'args.areaids',
            ),
            'code_map' => array(
            )
        )
    )
);