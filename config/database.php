<?php
    //define credentials
    define('DB_HOST', 'localhost');
    define('DB_USER', 'kiko');
    define('DB_PASS', '123456');
    define('DB_NAME', 'php_dev');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 

    //check the connection
    if($conn->connect_error){
        die('Conneciton failed ' . $conn->connect_err);
    }
?>