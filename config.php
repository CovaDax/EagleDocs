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

    define(DBNAME, "eagledocsdb");
    define(DBUSER, "root");
    define(DBPASS, "password");
    define(DBHOST, "localhost");

    function __AUTOLOAD($class_name){
        include_once ROOT_PATH . '/models/' . $class_name . '.php';
    }

    if(isset($_SESSION['username'])){
        header("Location: " . $root . "/index.php");
    }

    include_once ROOT_PATH . '/functions.php';
    include_once ROOT_PATH . '/views/templates/navbar.php';
    
    echo "<STYLE>";
        include_once 'css/bootstrap.css';
    echo "</STYLE>";
?>