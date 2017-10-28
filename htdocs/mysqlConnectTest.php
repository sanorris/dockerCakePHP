<?php
$db = new PDO('mysql:host=db;dbname=test;charset=utf8mb4', 'root', 'admin');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$stmt = $db->query("SHOW TABLES FROM test");
    
$tblCnt = 0;
foreach($stmt->fetch(PDO::FETCH_NUM) as $row) {
    echo $row . "<br />";
    $tblCnt++;
}

if (!$tblCnt) {
  echo "There are no tables, but if you see no errors the connection is good.<br />\n";
}