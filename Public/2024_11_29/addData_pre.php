
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="addData.php" method="POST">
    <table>
            <tr><td align='right'>RegNo: <input type="text" name="regNo"></td></tr>
            <tr><td align='right'>Name: <input type="text" name="name"></td></tr>
            <tr><td align='right'>Age: <input type="number" name="age"></td></tr>
            <tr><td>Course: <select name="course">
                                <option value="AMC">AMC</option>
                                <option value="CSC">CS</option>
                                <option value="ICT">IT</option>
                                <option value="ESc">ESc</option>
                            </select>
                </td>
            </tr>

            <tr><td></td>
                <td><input type="submit" value="Add new student" /></td>
            </tr>
        </table>
    </form>

    <?php
    require_once 'dbconf.php';

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        //echo "Got the POST request from client";
        $reg = $_POST['regNo'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $course = $_POST['course'];
    }
    //echo "Hello!";
    //insert data into student table
    function AddData($connect){
        try {
            //Query
            $sql = "INSERT INTO STUDENTS(id, name, age, course) 
                    VALUES('2020/ASP/6', 'Raja', 21, 'CSC'),
                          ('2020/IT/7', 'Roy', 22, 'IT'),
                          ('2020/ASP/8', 'Ann', 23, 'CSC')";
            //Execute the query
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "New student record created successfully!";
            } else {
                die("Error ".mysqli_error($connect));
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    ?>
</body>
</html>