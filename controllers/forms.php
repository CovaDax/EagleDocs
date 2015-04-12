<?php
	session_start();
	//$db = new Database($database);
	$username = $_SESSION['username'];
	$uin = $_SESSION['uin'];

	$db = new Database($database);
	$results = $db->query("SELECT * FROM document d
							INNER JOIN user_document ud
							ON ud.doc_id=d.id
							WHERE ud.user_id='$uin'");
	

	$toBeProcessed = array();
	$ra = $db->query("SELECT * FROM document d
						INNER JOIN user_role ur
							ON ur.doc_id=d.id
						WHERE ur.role='RA'");
	if($ra->num_rows > 0){
		while($row = $ra->fetch_assoc()){
			$toBeProcessed[] = $row;
		}
	}


	$rd = $db->query("SELECT * FROM document d
						INNER JOIN user_role ur
							ON ur.doc_id=d.id
						WHERE ur.role='RD'");
	if($_SESSION['role']=="AD" || $_SESSION['role']=="DIRECTOR" || $_SESSION['role']=="RLTA" || $_SESSION['role']=="RD"){
		if($rd->num_rows >0){
			while($row = $rd->fetch_assoc()){
				$toBeProcessed[] = $row;
			}
		}
	}


	$rlta = $db->query("SELECT * FROM document d
						INNER JOIN user_role ur
							ON ur.doc_id=d.id
						WHERE ur.role='RLTA'");
	if($_SESSION['role']=="AD" || $_SESSION['role']=="DIRECTOR" || $_SESSION['role']=="RLTA"){
		if($rlta->num_rows > 0){
			while($row = $rlta->fetch_assoc()){
				$toBeProcessed[] = $row;
			}
		}
	}

	$ad = $db->query("SELECT * FROM document d
						INNER JOIN user_role ur
							ON ur.doc_id=d.id
						WHERE ur.role='AD'");
	if($_SESSION['role']=="AD" || $_SESSION['role']=="DIRECTOR"){
			if($ad->num_rows > 0){
				while($row = $ad->fetch_assoc()){
					$toBeProcessed[] = $row;
				}
			}
	}

	$direc = $db->query("SELECT * FROM document d
						INNER JOIN user_role ur
							ON ur.doc_id=d.id
						WHERE ur.role='DIRECTOR'");

	if($_SESSION['role']=="DIRECTOR"){
			if($direc->num_rows > 0){
				while($row = $direc->fetch_assoc()){
					$toBeProcessed[] = $row;
				}
			}
	}
	// $directories = array();
	// $root = '../uploads';
	// $iter = new RecursiveIteratorIterator(
	// 	    new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS),
	// 		    RecursiveIteratorIterator::SELF_FIRST,
	// 		    RecursiveIteratorIterator::CATCH_GET_CHILD // Ignore "Permission denied"
	// 		);
	// $paths = array($uploads);
	// foreach ($iter as $path => $dir) {
	//     if ($dir->isDir()) {
	//         if($_SESSION['role']=="DIRECTOR" || $_SESSION['role']=="AD"){
	//         	$directories[] = $path;
	//         } else if($_SESSION['village']==explode("/",$path)[3]){
	//         	if($_SESSION['role'] == "RD"){
	//         		$directories[] = $path;
	// 	        } else if($_SESSION['building']==explode("/",$path)[4]){
	//         		$directories[] = $path;
	// 	        }
	//         }
	//     }
	// }

	// $myDir;
	// if($_SESSION['role']=="DIRECTOR" || $_SESSION['role']=="AD"){
	// 	$myDir = "../uploads/director";
	// } else {
	// 	$myDir = "../uploads/director/" . $_SESSION['village'] . "/" . $_SESSION['building'];
	// }

	// // echo "<PRE>";
	// // 	echo $_SESSION['username'] . "\n";
	// // 	foreach($directories as $key => $directory){
	// // 		echo $directory . "/";
	// // 		listFolderFiles($directory);
	// // 		echo "\n";
	// // 	}
	// // echo "</PRE>";
	// $it = new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS);
	// foreach(new RecursiveIteratorIterator($it) as $file){
	// 	$explode = explode("/",$file);
	// 	$filename = explode("_",end($explode));
	// 	if($filename[0] == $_SESSION['username']){
	// 		//$myFiles[] = $file;
	// 		array_push($myfiles, $file->getPathname());
	// 	}
	// }

	// $test = scandir($myDir);
	// foreach($test as $key => $p){
	// 	if(!is_dir($p)){
	// 		if(sizeof(explode("_",$p)) > 1){
	// 			array_push($toBeProcessed, $myDir . "/" . $p);
	// 		}
	// 	}
	// }
?>