<?php
$server_host = "localhost";
$server_user = "tinycent";
$server_password = "tinycent";
$database_name = "Tinycent01";

$conn = mysql_connect($server_host,$server_user,$server_password) or die("Server connection failed :" .mysql_error()) ;

mysql_select_db($database_name,$conn) or die("database connection failed :" .mysql_error());
?>