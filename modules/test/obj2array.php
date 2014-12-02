<?php
    $a = new stdClass();
    $a->a = '11';
    $a->b = '11';
    $a->v = '11';
    $a->c = new stdclass();
    $a->c->d = 'name';
    
    $a = json_encode($a);
    $a = json_decode($a, true);
    echo '<pre>';
    print_r($a);
    echo '<pre>';
    die();
    json_decode();
    
    echo '<pre>';
    print_r($a);
    echo '<pre>';
    die();
?>