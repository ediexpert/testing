<?php
include('connection.php');
$query =" SELECT * FROM user ;";
$r = mysqli_query($dbc,$query);
while($row = mysqli_fetch_array($r)){
	echo $row[0].'>'.$row[1].'>'.$row[2].'>'.$row[3];
}
mysqli_free_result($r);
//mysqli_close();