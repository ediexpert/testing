<?php
preg_match("/[^\/]+$/", "http://www.mydomainname.com/m/groups/view/test", $matches);
echo $last_word = $matches[0];
echo "<br/>";
echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo preg_match("/[^\/]+$/",$actual_link, $matches);
//echo $arg = $matches[-2];
?>
<a href="index.php?bid=24&link=i_am_looki">link</a>

post id is: <?php echo $_GET['bid'];?>
URL will be like www.tinycent.com/i_am_best/24
we take  "i_am_best" as first argument
and take "24" as second argument

first argument variable name is  $_GET['post']
Second argument variable name is $_GET['bid']

<?php

include 'connection.php';
$query = "SELECT * FROM ManagePost WHERE link = '".$_GET['link']."'";
if($r = mysqli_query($dbc,$query)){
	while($row = mysqli_fetch_array($r)){
	echo $row[0].'>'.$row[1].'>'.$row[2].'>'.$row[3];
	}	
}else{
	echo mysqli_error($r);
}
