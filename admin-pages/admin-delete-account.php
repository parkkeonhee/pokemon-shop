<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    admin-delete-account.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="icon" type="image/x-icon" href="../images/pokeball.ico"/>
        <title>Admin: Delete Account</title>
    </head>
    <body>
        <div>
            <?php
                $servername = "localhost";
                $username = "knguyen74";
                $password = "knguyen74";
                $dbname = "knguyen74";
                
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $name=$_POST["name"];
                $sql = "DELETE from accounts WHERE username = '$name'";
                
                echo "<div class='center'>";
                if ($conn->query($sql) === TRUE) {
                    echo "<h1>User successfully deleted!</h1>";
                } else {
                    echo "<h1>Error: Failed to delete user!</h1>";
                }
                echo "</div>";
                $conn->close();
            ?>
            <a href="admin-access.php">
                <input type="button" id="btn1" class="button" value="Admin Page">
            </a>
        </div>
    </body>
</html>