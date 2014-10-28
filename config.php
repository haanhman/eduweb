<?php

$mysql_config = array(
    'host' => 'localhost',
    'username' => 'eduuser',
    'password' => 'Eadux23X',
    'db_global' => 'edu_global',
);
mysql_connect($mysql_config['host'], $mysql_config['username'], $mysql_config['password']) or die('Khong the ket noi server');
mysql_select_db($mysql_config['db_global']) or die('Khong the ket noi DB: ' . $mysql_config['db_global']);
mysql_query('SET NAMES UTF8');
