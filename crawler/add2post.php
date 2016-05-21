<?php




if(isset($_REQUEST['add'])){
	$doc = "";
	//$c = count($_REQUEST['add']);
	$urls = "";
	foreach ($_REQUEST['imgs'] as $key) {
		$doc .= '<img src="'.$key.'"/>';
		$urls .= $key.",";
	}
	$title=$c." Pictures One Post";
	$tmp = htmlentities($doc);
	html_entity_decode($tmp);?>
<form action="http://image.homefilm.com/add-photo-page" method="post">
<input type="text" name="desc" value="<?php echo $tmp;?>" >
<input type="text" name="title" value="" placeholder="Please enter title">
<input type="hidden" name="url" value="<?php echo $urls;?>">
<input type="submit" value="submit">
</form>
	<?php 
}
	
?>