<?php
	require_once "../config.php";
	session_start();
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if($username && $password){
		$db = new Database($database);
		$result = $db->query("SELECT * FROM user WHERE username = '$username'
												AND password = '$password'");
		if($result->num_rows != 0){
			while($row = $result->fetch_assoc()){
       			if($username==$username && $password==$password){
       				$_SESSION['uin']=$row['uin'];
	   				$_SESSION['username']=$row['username'];
	   				$_SESSION['firstName']=$row['firstName'];
	   				$_SESSION['lastName']=$row['lastName'];
	   				$_SESSION['role']=$row['role'];
	   				$_SESSION['village']=$row['village'];
	   				$_SESSION['building']=$row['building'];
	   			} else {
	   				die("Incorrect Login");
	   			}
			} 

			$uin = $_SESSION['uin'];
			$db->query("INSERT INTO online (uin) VALUES ('$uin')");

		} else {
			die ("User does not exist");
		}


		header("Location:http://" . $root . '/index.php', true) or die("could not change to index");
	} else {
		die ("Please enter a username and password");
	}
?>