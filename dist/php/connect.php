<?php
date_default_timezone_set('Asia/Bangkok');
$server = "127.0.0.1";
$user = "root";
$password="";
$dbname = "db_package";
$now = new DateTime();
$conn= mysql_connect($server,$user,$password) ;
if(!$conn)
die("1. Can't connect MySQL");

mysql_select_db($dbname,$conn)
or die("2.Can't Use Database");

mysql_query( "SET character_set_results=utf8");
mysql_query( "SET character_set_client=utf8");
mysql_query( "SET character_set_connection=utf8");
mysql_query( 'SET CHARACTER SET UTF8');
?>