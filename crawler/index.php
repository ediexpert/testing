<?php
include_once('simple_html_dom.php');



$target_url = "http://www.vinicioboutique.com/en/999_yeezy?id_category=U";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('a') as $link){
	
	// check if string contains specific word 
	if (strpos($link,'yeezy') !== false) {
		echo $link->href."<br/>";
	}
//echo $link->href."<br/>";
}




?>

