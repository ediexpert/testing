<?php # Script 11.2 - login_functions.inc.php
// This page defines two functions used by the login/logout process.
/* This function determines and returns an
absolute URL.
* It takes one argument: the page that
concludes the URL.
* The argument defaults to index.php.
*/
function absolute_url($page = 'index.php'){

	$url = 'http://'. $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']);
	// Remove any trailing slashes:
	$url = rtrim($url, '/\\');
	// Add the page:
	$url .= '/' . $page;

	//return the URL
	return $url;
}//End of absolute_url() function.

function check_login($dbc, $email='',$pass=''){
	$errors = array();
	// validate the email
	if(empty($email)){
		$errors[] = 'You forgot to enter your email address.';
	}else{
		$e = mysqli_real_escape_string($dbc, trim($email));
	}

	// validate the Password

	if(empty($pass)){
		$errors[] = 'YOu forgot to enter your Password';
	}else{
		$p = mysqli_real_escape_string($dbc, trim($pass));
	}

	if(empty($errors)){
		// if everything ok.

		// retrieve the user_id and first_name for that email/password combination:

		$q = "SELECT name,user FROM user WHERE user='$e' AND pass='$p'";
		$r = @mysqli_query ($dbc, $q);// Run the query
		// check the result

		if(mysqli_num_rows($r)== 1){

			// fetch record
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);

			//return true and the record:
			return array(true, $row);
		}else{ // No Match
			$errors[] = 'The email address and pass entered do not match those on file.';
		}
	} // End of empty($errors) IF.

	// Return false and the errors:
	return array(false, $errors);
} // End of check_login() function.
?>