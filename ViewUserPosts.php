<?php
        $mysqli = new mysqli("mysql.eecs.ku.edu", "n044h371", "aW4phahp", "n044h371");
        if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }
        echo "<table border = \"1\" style='border-collapse: collapse'>";
        $selected = $_POST["id"];
        $query = "SELECT content FROM Posts WHERE user_id='$selected'";
        $result = $mysqli->query($query);
        if($result->num_rows > 0)
        {
                echo "<th>Posts</th>";
                while($row = $result->fetch_assoc())
                {
                        echo "<tr> \n";
                        echo "<td>". $row["content"]. "</td>";
                        echo "</tr>";
                }
        }
        else
                echo "This user has no posts.";
        $mysqli->close();
?>

