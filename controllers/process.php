<?php
	include_once '../config.php';
	echo "<PRE>";
		print_r($_POST);
	echo "</PRE>";
	switch($_POST['progress']){
		case ("Approved"):
			$approval = 1;
			break;
		case ("Denied"):
			$approval = -1;
			break;
		default:
			$approval = 0;
	}
	$submitted = $_GET['upload'];
	$type = $_GET['type'];
	echo $approval;
	echo $direcory;
	$db = new Database($database);
	$db->query("UPDATE document 
				SET processed='$approval'
				WHERE submitted='$submitted'
				AND type='$type'");

	header("Location:http://" . $root . "/index.php");
?>