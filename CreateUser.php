<?php
        $mysqli = new mysqli("mysql.eecs.ku.edu", "n044h371", "aW4phahp", "n044h371");

        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        $user = $_POST["user"];
        $query = "SELECT * FROM Users WHERE user_id='$user'";
        $result = $mysqli->query($query);
        if($user== NULL)
                echo "You must enter a username to store.";
        else if(mysqli_num_rows($result) > 0)
                echo "Username already exists.";
        else
        {
                $mysqli->query("INSERT INTO Users (user_id) VALUES ('$user')");
                echo "Username successfully added!";
        }
		$mysqli->close();
?>
