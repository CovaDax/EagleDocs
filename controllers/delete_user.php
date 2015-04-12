<?php
	include_once '../config.php';
	$urlid = $_GET['id'];

	$db = new Database($database);

	$db->query("DELETE FROM user WHERE uin = '$urlid'");

	header("Location:http://" . $root . "/views/allusers.php");
?>
