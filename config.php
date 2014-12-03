<?php
$host = 'localhost';
if($_GET['vn'] == 1) {
    $host = '123.30.236.70';
}
        
$mysql_config = array(
    'host' => $host,
    'username' => 'eduuser',
    'password' => 'Eadux23X',
    'db_global' => 'edu_global',
);
mysql_connect($mysql_config['host'], $mysql_config['username'], $mysql_config['password']) or die('Khong the ket noi server');
mysql_select_db($mysql_config['db_global']) or die('Khong the ket noi DB: ' . $mysql_config['db_global']);
mysql_query('SET NAMES UTF8');
