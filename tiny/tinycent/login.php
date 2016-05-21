<?php session_start();
include("connection.php");
 
 
if(isset($_REQUEST["login"])){
 
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$sql = mysql_query("SELECT * from User_Registration where email = '".$email."' AND password = '".$password."' AND active = 1");
$data = mysql_fetch_array($sql);
$rows = mysql_num_rows($sql);
if($rows>0){ 
$_SESSION['email'] = $data["email"]; 
$_SESSION['userid'] = $data["userid"];  
?>
<script> window.location.href="myblog.php?success=Signed in successfully"; </script>
<?php
}else{
?>
<script>window.location.href="signin.php?error=Incorrect Display Name / Email or Password ";</script>
<?php

}

}
?>