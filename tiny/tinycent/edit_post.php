<?php session_start(); 
include("connection.php");
$eid = $_GET["eID"];
if(isset($_REQUEST["addpost"])){
if($_FILES["post_image"]["name"]){
$file = $_FILES["post_image"]["name"];
}else{
$file = $_REQUEST["oldimage"];
}


$email = $_SESSION['email'];
$sql5=mysql_query("SELECT * FROM User_Registration WHERE email = '$email' ");
$data = mysql_fetch_array($sql5);
$userid = $data["id"];
$dname = $data["displayName"];


move_uploaded_file($_FILES["post_image"]["tmp_name"],"uploads/".$file);
 
$sql = mysql_query("UPDATE  ManagePost SET title = '".$_REQUEST["post_title"]."',image = '$file',description = '".$_REQUEST["post_description"]."',keywords = '".$_REQUEST["post_keywords"]."',userid = '$userid',author = '".$data["displayName"]."' WHERE id = '$eid'  ");
if($sql){
header("location:managepost.php?success=Post updated successfully");
}
else{
header("location:managepost.php?error=Post unsuccessfull");
}

?>
<script> window.location.href = "managepost.php" ;</script>
<?php	
}
?>
