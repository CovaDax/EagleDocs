<?php
	require_once "../config.php";
	session_start();	 
	// Destroy session 
	$db = new Database($database);
	$uin = $_SESSION['uin'];
	$result = $db->query("SELECT * FROM online WHERE uin = '$uin'");
	if($result->num_rows > 0){
		$db->query("DELETE FROM online WHERE uin = '$uin'");
	}
	session_destroy();
	header('Location:http://' . $root . '/index.php');
?>