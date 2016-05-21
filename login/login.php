<?php # Script 11.3 - login.php

if(isset($_POST['submitted'])){
	require_once('includes/login_functions.inc.php');
	require_once('mysqli_connect.php');

	//check the login:
	list($check, $data) = check_login($dbc,$_POST['email'], $_POST['pass']);
	if($check){
		//ok

		setcookie('user_id', $data['user_id']);
		setcookie('first_name', $data['first_name']);
		$url = absolute_url('loggedin.php');
		header("Location: $url");
		exit(); // Quit the script
	}else{ // unsuccessful
		$errors = $data;
	}

	mysqli_close($dbc);
}

include('includes/login_page.inc.php');
?>