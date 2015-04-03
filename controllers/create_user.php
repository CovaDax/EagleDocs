<?php	
	include_once '../config.php';

  	//session_start(); 
	// if($_SESSION['role']!="ADMIN"){
	// 	header("Location:http://" . $root . "/index.php");
	// }

	$uin = $_POST['uin'];
	$username = $_POST['username'];
	//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$role = $_POST['role'];

	$db = new Database($database);

	$results = $db->query("SELECT * FROM user WHERE uin = '$uin'");
	if($results->num_rows < 1){
	$db->query("INSERT INTO user (uin, firstName, lastName, username, password, email, role) VALUES 
								 ('$uin','$firstName','$lastName','$username','$password','$email','$role')");
	}
	header("Location:http://" . $root . "/index.php");
?>
