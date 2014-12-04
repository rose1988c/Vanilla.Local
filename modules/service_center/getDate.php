<?php
defined('DOC_ROOT') or define('DOC_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);

include_once ('lib/ServiceCenter.class.php');

// New
$config = new ServiceCenter();

// 路径
$seturl =  DOC_ROOT . 'config';
$path = isset($_GET ['url']) ? $_GET ['url'] : $seturl;

// 接口数据
$datas = array ();
if ($path) {
    $datas = $config->traverseDate($path);
    $datas = $config->multi_array_sort($datas, 'source');
}

// 接口名称
$units = $config->units;
