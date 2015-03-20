<?php
	defined("ROOT_PATH")
        or define("ROOT_PATH", realpath(__DIR__ . '' ));

	function __AUTOLOAD($class_name){
    	include_once(ROOT_PATH . "/models/" . $class_name . ".php");
    }

?>