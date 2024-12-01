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
    //insert data into student table
    function AddData($connect, $regNo, $name, $age, $course){
        try {
            //Query
            $sql = "INSERT INTO STUDENTS VALUES('$regNo', '$name', $age, '$course')";
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

    if ($_SERVER['REQUEST_METHOD']=="POST") {
    //echo "Got the POST request from client";
        $reg = $_POST['regNo'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $course = $_POST['course'];

        addData($connect, $reg, $name, $age, $course);
    }
    //echo "Hello!";
        try {
        // Query
        $sql = "SELECT * FROM students";

        // Execute the query
        $results = mysqli_query($connect, $sql);

        // Check if data exists in the table
        if (mysqli_num_rows($results) > 0) {
            echo "<table border='1'>";
            $col = mysqli_fetch_fields($results);
            //Print the columns
            echo "<tr>";
            foreach ($col as $value) {
                //return object
                echo "<td>$value->name</td>";
            }
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($results)) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No Results!";
        }

    } catch (Exception $e) {
        die($e->getMessage());
    }

    ?>
</body>
</html>