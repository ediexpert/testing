<?php
class db{
	define('DB_USER','root');
	define('DB_HOST','localhost');
	define('DB_PASSWORD','');
	define('DB_NAME','test');
	var $msg;
	function __construct(){
		if(! $this->mysql->connecct("localhost","test","")){
			$this->msg = $this->mysql->error();
		}else{
			$this->msg ="Connected to database server!";
		}
	}
	function Db(){
		return $this->msg;
		print("hello");
	}
	function prt(){
		echo "hello";
		echo $this->msg;
	}
}
?>