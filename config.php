<?php
	defined("ROOT_PATH")
        or define("ROOT_PATH", realpath(__DIR__ . '' ));

    $root = $_SERVER['HTTP_HOST'] . "/projects/EagleDocs";

    $database = array(
            "dbname" => "eagledocsdb",
            "username" => "root",
            "password" => "password",
            "host" => "localhost"
    );

	function __AUTOLOAD($class_name){
    	include_once ROOT_PATH . "/models/" . $class_name . ".php";
    }

    if(isset($_SESSION['username'])){
        $db = new Database($database);       
        $db->query("UPDATE online o
                        INNER JOIN user u ON o.uin = u.uin
                    SET online = "); 
    }

    include_once ROOT_PATH . '/views/templates/navbar.php';
?>