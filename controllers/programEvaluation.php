<?php
	include_once '../config.php';

	echo "<PRE>";
		echo var_dump($_POST);
	echo "</PRE>";

	$document = new Document();
	$document->data = $_POST;
	echo $document->data;
?>