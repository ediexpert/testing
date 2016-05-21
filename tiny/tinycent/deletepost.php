<?php
	include("connection.php");
	$view = $_GET["id"]; 
if(isset($view)){
$sql = mysql_query("DELETE FROM ManagePost WHERE id = '".$view."' ");
  
?>
<script> window.location.href = "managepost.php" ;</script>
<?php	
}
 ?>