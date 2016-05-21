<?php # Script 11.1 - login_page.inc.php

// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

//include the header
$page_title = 'Login';
include('includes/header.html');

//print any error messages, if they exist:

if(!empty($errors)){
	echo '<h1>Error!</h1><p class="error">The Following error(s) occured:<br />';
	foreach ($errors as $key => $value) {
		echo ' - '.$value.' <br /><br>';
	}
	echo '</p><p>Please try again.</p>';
}

//Display the form
?>

<h1>Login</h1>
<form action="login.php" method="post">
	<p>Email Address: <input type="text" name="email" size="20" maxlength="20"/></p>
	<p>Password: <input type="password" name="pass" size="20" maxlength="20"/></p>
	<p><input type="submit" name="submit" value="Login" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>


<?php
	//include the footer
include('includes/footer.html');
?>