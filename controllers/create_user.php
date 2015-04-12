<?php	
	include_once '../config.php';

  	//session_start(); 
	// if($_SESSION['role']!="ADMIN"){
	// 	header("Location:http://" . $root . "/index.php");
	// }

	$village;
	switch($_POST['building']){
		case "everglades":
			$village = "sovi";
			break;
		case "biscayne":
			$village = "sovi";
			break;
		case "palmetto":
			$village = "sovi";
			break;
		case "osprey":
			$village = "sovi";
			break;
		case "eagle":
			$village = "sovi";
			break;
		case "groves":
			$village = "nlv";
			break;
		case "glades":
			$village = "nlv";
			break;
		case "gardens":
			$village = "nlv";
			break;
		case "wlv":
			$village = "nlv";
			break;
		default:
			header("Location:http://" . $root . "/views/create_user.php");
	}


	$uin = $_POST['uin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$role = $_POST['role'];
	$building = $_POST['building'];

	$db = new Database($database);

	$results = $db->query("SELECT * FROM user WHERE uin = '$uin'");
	if($results->num_rows < 1){
	$db->query("INSERT INTO user (uin, firstName, lastName, username, password, email, role, village, building) VALUES 
								 ('$uin','$firstName','$lastName','$username','$password','$email','$role', '$village', '$building')");
	}
	//header("Location:http://" . $root . "/index.php");
?>
