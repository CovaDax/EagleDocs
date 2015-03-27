<?php
	defined("ROOT_PATH")
        or define("ROOT_PATH", realpath(__DIR__ . '' ));

    $root = $_SERVER['HTTP_HOST'] . "/projects/EagleDocs";

    $database = array(
            "dbname" => "eagleDocsDB",
            "username" => "root",
            "password" => "password",
            "host" => "localhost"
    );

	function __AUTOLOAD($class_name){
    	include_once ROOT_PATH . "/models/" . $class_name . ".php";
    }
?>