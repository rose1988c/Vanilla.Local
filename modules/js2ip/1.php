<?php
$server = 'ping cl.168dtsj.com -n 1';
$last_line = exec($server, $arr);
echo "$last_line"; //最后总结结果

echo '<pre>';
print_r($arr); //PING命令详细数据数组
?>