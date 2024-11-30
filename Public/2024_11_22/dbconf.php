<?php
//This is separate file to connect the database
//constant variable
define('SERVERNAME', '127.0.0.1:3306');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'students');

//Use Try-Catch to find errors
try{
    //connect with database
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

    if(!$connect) {
        die("connection failed");
    }   else {
        echo "Connected Successfully";
    }
}
catch (Exception $e) {
    die($e->getMessage());
}

//echo "abc";
?>