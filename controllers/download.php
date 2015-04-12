<?php
	session_start();
	include("classa.inc");


	$directory = $_GET['directory'];
	$submitter = $_GET['name'];

	$s = implode("", @file("../" . $_GET['directory']));
  	$a = unserialize($s);
  	$data = $a->getData();
?>