<?php
	function listFolderFiles($dir){
	    $ffs = scandir($dir);
	    foreach($ffs as $ff){
	        if($ff != '.' && $ff != '..'){
	            if(explode("_",$ff)[0] == $_SESSION['username']){
	            	echo $ff;
	            }
	            //if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
	        }
	    }
	}

?>