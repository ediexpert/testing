<?php session_start(); 	
include("connection.php");

	if(isset($_REQUEST["personaldetails"])){ 
    $file = $_FILES["user_image"]["name"];
    $aboutme = $_REQUEST["aboutme"];
//echo $new_password = $_REQUEST["re_password"];
 $email = $_SESSION['email'];
 if($file){
 move_uploaded_file($_FILES["user_image"]["tmp_name"],"images/".$file);
 $sql = mysql_query('UPDATE User_Registration SET  Aboutme = "'.$aboutme.'",user_image = "'.$_FILES["user_image"]["name"].'" WHERE email = "$email"');
//echo 'UPDATE User_Registration SET  Aboutme = "'.$aboutme.'",user_image = "'.$_FILES["user_image"]["name"].'" WHERE email = "$email"';die;
 } ?>
 <script>window.location.href="settings.php";</script>
 <?php
  
}	
?>
