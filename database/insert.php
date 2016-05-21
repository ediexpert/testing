<?php include('connection.php');

$name = ''; 
$user = '';
$pass = '';
if (!empty($_POST)){
	$name = trim($_POST['name']); 
	$user = strtolower(trim($_POST['user']));
	$pass = $_POST['pass'];
	if($pass == $_POST['pass1']){
		$query = "INSERT INTO user(name,user,pass) VALUES('{$name}','{$user}','{$pass}');";
		$r = mysqli_query($dbc, $query);
		echo "Congratulations! your id no is: ".mysqli_insert_id($dbc);
		//unset($name,$user,$pass);
		$name = ''; 
		$user = '';
		$pass = '';
		unset($_POST['name']);
		unset($_POST['user']);
		unset($_POST['pass']);
		unset($_POST);
		echo "<style>#form{ display:none;}</style>";
		?>
		<a href="insert.php">Click here to Register</a>
		<?php 
		
	}
		
	else
		echo "Password do not match!";

}
/*f ($_SERVER['REQUEST_METHOD'] == 'GET'){
	$name = $_GET['name']; 
	$user = $_GET['user'];
	$pass = $_GET['pass'];
	if($pass == $_GET['pass1'])
		$query = "INSERT INTO user(name,user,pass) VALUES('{$name}','{$user}','{$pass}');";
	else
		echo "Password do not match!";

}*/
?>
<form action="" method="post" id="form">
	<label>Name</label>
	<input type="text" name="name" placeholder="Enter your Name" value="<?php echo $name;?>">
	<label>Username</label>
	<input type="text" name="user" placeholder="Username" value="<?php echo $user;?>">
	<label>Password</label>
	<input type="password" value="" name="pass" >
	<label>Confirm Password</label>
	<input type="password" value="" name="pass1" >
	<input type="submit" name="submit" value="register" />
</form>