<!DOCTYPE html>
<html>
<head>
    <title>getTable</title>
</head>
<body>
    
<?php
//get the db connection file
require_once 'dbconf.php';
require_once 'myfunc2.php';

//PrintTables($connect, "students", ["id", "name", "age", "course"]);
SearchBooks('sql', $connect);
//SearchBooks('ann', $connect);


//echo $_SERVER['PHP_SELF'];

?>
</body>
</html>