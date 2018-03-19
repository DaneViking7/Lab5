<?php
        $mysqli = new mysqli("mysql.eecs.ku.edu", "n044h371", "aW4phahp", "n044h371");

        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        $user = $_POST["user"];
        $post = $_POST["post"];
        $id = uniqid();
        $query = "SELECT * FROM Users WHERE user_id='$user'";
        $result = $mysqli->query($query);
        if($post== NULL)
                echo "You must enter a post.";
        else if(!(mysqli_num_rows($result) > 0))
                echo "This user does not exist.";
        else
        {
                $mysqli->query("INSERT INTO Posts (user_id, content) VALUES ('$user','$post')");
		echo "Posting successful!";
        }
        $mysqli->close();
?>

