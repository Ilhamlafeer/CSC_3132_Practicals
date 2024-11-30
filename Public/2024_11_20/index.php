<?php
// Get the db connection to file
require_once 'dbconf.php';
    try {
        // Query
        $sql = "SELECT * FROM student";

        // Execute the query
        $result = mysqli_query($connect, $sql);

        // Check if data exists in the table
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            $col = mysqli_fetch_fields($result);
            //Print the columns
            echo "<tr>";
            foreach ($col as $value) {
                //return object
                echo "<td>$value->name</td>";
            }
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($result)) {
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
