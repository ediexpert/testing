 <?php
include("connection.php");

if(isset($_REQUEST["submit"])){

	
	$check_record = mysql_query("SELECT * FROM User_Registration where email = '".$_REQUEST["email"]."' ");
	
	if($_REQUEST["password"] == $_REQUEST["re_password"] ){

			 
	$rows=mysql_fetch_array($check_record);
  
   $count = $count=mysql_num_rows($check_record);
   if($count == 0){

	 $user_Rndmno = md5(uniqid(rand()));

$sql = mysql_query("INSERT INTO  User_Registration SET email = '".$_REQUEST["email"]."',password = '".$_REQUEST["password"]."',firstName = '".$_REQUEST["firstName"]."',lastName = '".$_REQUEST["lastName"]."',displayName = '".$_REQUEST["displayName"]."',birthday = '".$_REQUEST["birthday"]."',phoneNumber = '".$_REQUEST["phoneNumber"]."',gender = '".$_REQUEST["gender"]."',user_Rndmno = '".$user_Rndmno."'");

$to = $_REQUEST['email'];
$subject = "Registered Successfully !!";
$txt = "That was Great !!! You are now successfully registered with TinyCent.  Please verify your email by click this link" ."https://www.tinycent.com/tinycent/confirmation.php?key=$user_Rndmno";
$headers = "From: noreply@tinycent.com" . "\r\n" .
"CC: noreply@tinycent.com";

mail($to,$subject,$txt,$headers);



?>
<script> window.location.href = "varification.php" ;</script>
<?php
}else{
echo "email already exist";
}	
		
	}else{
		echo "Password does not match !";?>
		<a href="registration.php">Try again</a>
		<?php
	}

 
}

?>
