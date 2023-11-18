<?php 

require_once __DIR__ . "/app/config/Databases.php";
require_once __DIR__ . "/app/router/Router.php";
require_once __DIR__ . "/app/core/Core.php";

spl_autoload_register(function($file) {

    if (file_exists(__DIR__."/app/utils/$file.php")) {
        require_once __DIR__ . "/app/utils/$file.php";
    } else if (file_exists(__DIR__ . "/app/config/$file.php")) {
        require_once __DIR__ . "/app/config/$file.php";
    } else if (file_exists(__DIR__ ."/app/Controller/$file.php")) {
        require_once __DIR__ . "/app/Controller/$file.php";
    }  else if (file_exists(__DIR__ ."/app/Model/DAO/$file.php")) {
        require_once __DIR__ . "/app/Model/DAO/$file.php";
    }  else if (file_exists(__DIR__ ."/app/Model/DTO$file.php")) {
        require_once __DIR__ . "/app/Model/DTO$file.php";
    } 
} );

$core = new Core($routes);
$core->run();