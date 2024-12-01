<?php
//This is separate file to connect the database
//constant variable
$host = getenv('DB_HOST') ?: 'db';
$dbname = getenv('DB_NAME') ?: 'students';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: 'mariadb';

//Use Try-Catch to find errors
try{
    //connect with database
    $connect = mysqli_connect($host, $user, $pass, $dbname);

    if(!$connect) {
        die("connection failed");
    }   else {
        echo "Connected Successfully";
    }
}
catch (Exception $e) {
    die($e->getMessage());
}
?>