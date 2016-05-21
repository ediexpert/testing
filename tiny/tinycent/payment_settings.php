<?php
 session_start();
include("connection.php");
$email = $_SESSION['email'];
 $uid = mysql_query("SELECT id FROM	User_Registration WHERE email = '$email'");
 $userid = mysql_fetch_array($uid);
$user = $userid['id'];
if(isset($_REQUEST["banksettings"])){
	$email = $_SESSION['email'];
	$sql = mysql_query("INSERT INTO Payment_settings SET bankname = '".$_REQUEST["bankname"]."',ifsccode = '".$_REQUEST["ifsccode"]."',paypal_account = '".$_REQUEST["paypal_account"]."',account_number = '".$_REQUEST["account_number"]."',user = '$email',userid='$user' ");
?>
<script> window.location.href="settings.php"; </script>
<?php	
}
?>