<?php session_start(); 
include("connection.php");
if(isset($_REQUEST["addpost"])){
$file = $_FILES["post_image"]["name"];
$email = $_SESSION['email'];
$sql5=mysql_query("SELECT * FROM User_Registration WHERE email = '$email' ");
$data = mysql_fetch_array($sql5);
$userid = $data["id"];

if($file){
move_uploaded_file($_FILES["post_image"]["tmp_name"],"uploads/".$file);
 
$sql = mysql_query("INSERT INTO  ManagePost SET title = '".$_REQUEST["post_title"]."',image = '".$_FILES["post_image"]["name"]."',description = '".$_REQUEST["post_description"]."',keywords = '".$_REQUEST["post_keywords"]."',userid = '$userid',author = '".$data["displayName"]."'  ");
if($sql){
header("location:addpost.php?success=Successfully Posted !!!");
}
else{
header("location:addpost.php?error=Unable To Post, Please Try Again..");
}
}
?>
<script> window.location.href = "addpost.php" ;</script>
<?php	
}
?>
