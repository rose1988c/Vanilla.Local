<?php
header("Content-type: text/html; charset=utf-8");
set_time_limit(0);

echo date("H:i:s");
echo "<br />";

$dbh = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '', array(
    PDO::ATTR_PERSISTENT => false
));
$dbh->query("SET NAMES 'utf8';");

$sql = "insert into twenty_million values ";
for ($i = 0; $i < 2000000; $i ++) {
    $sql .= "(null, $i),";
}
;
$sql = rtrim($sql, ',');

$dbh->query($sql);


echo date("H:i:s");