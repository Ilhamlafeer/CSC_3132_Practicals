<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <?php
    require_once 'dbconf.php';
    require_once 'stdfun.php';
    //echo "student";
    $id = $_GET['id'];
    getStu($_GET['id'], $connect);

    //if(isset($_GET['id']) && $_GET['id'] != ''){
    //    getStu($_GET['id'], $connect);
    //}

    ?>
</body>
</html>