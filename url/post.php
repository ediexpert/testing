<?php session_start(); 
include("connection.php");
if (!empty($_POST)){
//$file = "Desert.jpg";
$email = $_SESSION['email'];
//$sql5=mysql_query("SELECT * FROM User_Registration WHERE email = '$email' ");
//$data = mysql_fetch_array($sql5);
$userid = "48";
$data["displayName"]="test";


//move_uploaded_file($_FILES["post_image"]["tmp_name"],"uploads/".$file);
 //added a new field link, which will act as new URL for all the posts
/*updated code
@author: Imran Bajwa
* updated on:3-nov-2015
*/
$title1 = str_replace(' ', '_', $_REQUEST["post_title"]);
$link = substr($title1, 0, -1);
/*Below code will check if length is more than 10 words it will trim it to 10 words only*/
/*if (strlen($link) > 10)
   $link = substr($link, 0, 10);*/
$qry = "INSERT INTO ManagePost (userid,link,title,description, author, keywords) VALUES ('99','{$link}','{$_POST["post_title"]}','{$_POST['post_description']}','imran','test');";
if(!mysqli_query($dbc,$qry))
	header("location:addpost.php?error=Unable To Post, Please Try Again..");
else{
	header("location:addpost.php?success=Successfully Posted !!!");
}
}

/*
$sql = mysqli_query("INSERT INTO  ManagePost SET title = '".$_REQUEST["post_title"]."',image = 'Desert.jpg',description = '".$_REQUEST["post_description"]."',keywords = '".$_REQUEST["post_title"]."',userid = '$userid',author = '".$data["displayName"]."', link ='".$link."'  ");
if($sql){
header("location:addpost.php?success=Successfully Posted !!!");
}
else{
header("location:addpost.php?error=Unable To Post, Please Try Again..");
}

?>
<script> window.location.href = "addpost.php" ;</script>
<?php	
}
?>
