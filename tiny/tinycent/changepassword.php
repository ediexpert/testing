<?php session_start(); 	

include("connection.php");
	if(isset($_REQUEST["changepassword"])){
 
 $old_password = $_REQUEST["chng_password"];
 $new_password = $_REQUEST["re_password"];
 $email = $_SESSION['email'];
$sql = mysql_query("UPDATE User_Registration SET  password = '".$new_password."' WHERE email = '$email'");
//echo "UPDATE User_Registration SET  password = '".$new_password."' WHERE email = '$email'";
?>
<script> window.location.href = "settings.php" ;</script>
<?php	
}
?>