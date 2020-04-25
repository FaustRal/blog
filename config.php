<?php

$mysql = [
'host' => 'localhost',
'user' => 'root',
'password' => '',
'database' => 'blog',
];

$connect = mysql_connect($mysql['host'],$mysql['user'],$mysql['password']) or die ('Ошибка подключения к БД');
mysql_select_db($mysql['database']) or die ('Ошибка подключения к БД');

?>