<?php
        $mysqli = new mysqli("mysql.eecs.ku.edu", "n044h371", "aW4phahp", "n044h371");

        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        echo "<table border = \"1\" style='border-collapse: collapse'>";
        $query = "SELECT user_id FROM Users";
        $result = $mysqli->query($query);
        if($result->num_rows > 0)
        {
                echo "<th>User Id</th>";
                while($row = $result->fetch_assoc())
                {
                        echo "<tr> \n";
                        echo "<td>". $row["user_id"]. "</td>";
                        echo "</tr>";
                }
       }
        else
                echo "No users in the database.";
        $mysqli->close();
?>
