<?php
	include '../config.php';

	$directory = "uploads/director/" . $_SESSION['village'] . "/" . $_SESSION['building'];
	$fulldirectory = ROOT_PATH . "/" . $directory;
	$filename = $directory . "/" . $_SESSION['username'] . "_" . $_GET['type'];
	$document = new Document($fulldirectory, $_POST);
	$s = serialize($document);
	$fp = fopen("../" . $filename,"w");
	fwrite($fp, $s);
	fclose($fp);

	//$db = new Database($database);
	$db = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	$results = $db->query("SELECT * FROM document 
						WHERE directory='" . $filename. "' 
						AND submitted='" . $_SESSION['username'] . "'
						AND type='" . $_GET['type'] . "'");
	if($results->num_rows < 1){
		$db->query("INSERT INTO document (directory, submitted, type)
					VALUES ('" . $filename . "','" . $_SESSION['username'] . "', '" . $_GET['type'] . "')");
		$id = $db->insert_id;
		$db->query("INSERT INTO user_document (doc_id, user_id)
					VALUES ('" . $id . "','" . $_SESSION['uin'] ."')");
		$db->query("INSERT INTO user_role (doc_id, role)
					VALUES ('" . $id . "','" . $_SESSION['role'] . "')");
	}

	header("Location: http://" . $root . "/index.php");
?>