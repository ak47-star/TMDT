<?php
$db['db_host']='localhost';
$db['db_user']='root';
$db['db_pass']='';
$db['db_name']='bandienthoai';

foreach ($db as $key => $value) {
	define(strtoupper($key),$value);
}
$conection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset( $conection,'utf8');
?>