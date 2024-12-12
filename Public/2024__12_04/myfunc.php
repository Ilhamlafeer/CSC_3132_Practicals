<?php
// Get the db connection to file
require_once 'dbconf.php';

function PrintTables($connect, $tName, $attri) {
    try {
        // Query
        $sql = "SELECT ";
        for ($i = 0; $i < sizeof($attri)-1; $i++) {
            $sql .= $attri[$i].",";
        }
        $sql .= $attri[sizeof($attri)-1]." FROM $tName";

        // Execute the query
        $result = mysqli_query($connect, $sql);

        // Check if data exists in the table
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            $col = mysqli_fetch_fields($result);
            // Print the columns
            echo "<tr>";
            foreach ($col as $value) {
                echo "<th>" . $value->name . "</th>";
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
}

function SearchBooks($name, $connect){
try {
        // Query
        $sql = "SELECT * FROM students where name like '%$name%'";

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
}
//PrintTables($connect, "students", ["id", "name", "age", "course"]);
//PrintTables($connect, "book", []);
?>
