<?php
//This is separate file to connect the database
//constant variable
$dbHOST = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');

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
?>