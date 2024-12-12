<!DOCTYPE html>
<html>
<head>
    <title>getTable</title>
</head>
<body>
    
<?php
//get the db connection file
require_once 'dbconf.php';
require_once 'myfunc.php';

//PrintTables($connect, "students", ["id", "name", "age", "course"]);
//SearchBooks('roy', $connect);
//echo $_SERVER['PHP_SELF'];
//Create a search form


if(isset($_GET['name']) && $_GET['name'] != ''){
	SearchBooks($_GET['name'], $connect);
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
	<table>
        <tr>
            <td align="right">Student Name: </td>
            <td> <input type="text" name="name" placeholder="Search..."> </td>
            <td><input type="submit" value="search"></td>
        </tr>
</table>
</form>

</body>
</html>