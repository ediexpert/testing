<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("onlineexam",$con);

$query = "SELECT * FROM questionoptions ORDER BY rand() LIMIT 20";
$mqry = mysql_query($query);
while($row = mysql_fetch_array($mqry)){
	//echo $row['opt_id'].") ".$row['option_txt']."<br>";	
}


$qry = "SELECT * FROM tests WHERE test_id ='1' ";
$mqry = mysql_query($qry);
$r = mysql_fetch_assoc($mqry);
$t = explode(',', $r['topics']);
print_r($t);
echo count($t);
//for($i=0; $i<count($t);$i++){
	$q2 = mysql_query("SELECT * FROM questions WHERE topic_id = 1 ORDER BY RAND()");
	while ($r = mysql_fetch_array($q2)) {
		echo $r['qid'].") ".$r['question']."<br>";
	}
	echo "<br>";
//}


	

?>