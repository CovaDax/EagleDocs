<?php
	session_start();
	include_once 'config.php';

	if(isset($_SESSION['username'])){
		$goto = "Location: views/forms.php";
	} else {
		$goto = "Location: views/login.php";
	}

	header($goto);
?>