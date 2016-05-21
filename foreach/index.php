<?php
if(isset($_REQUEST['sbt'])){
	$var = $_REQUEST['option'];
	foreach ($var as $key ) {
		echo $var[$key];
	}
}

?>
<form metho="POST" action="">
	<input type="option[]" value="">
	<input type="option[]" value="">
	<input type="option[]" value="">
	<input type="option[]" value="">
	<input type="option[]" value="">
	<input type="submit" name="sbt">
</form>