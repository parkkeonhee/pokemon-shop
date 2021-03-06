<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    admin-update-product-description.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="icon" type="image/x-icon" href="../images/pokeball.ico"/>
        <title>Admin: Update Product Description</title>
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
                
                $id=$_POST["id"];
                $description=$_POST["description"];
                $sql = "UPDATE products SET description = '$description' WHERE id = '$id'";
                if ($conn->query($sql) === TRUE) {
                    echo "<h1>Pokémon description successfully edited!</h1>";
                } else {
                    echo "<h1>Error: Failed to edit pokémon description</h1>";
                }
                $conn->close();
            ?>
            <a href="admin-access.php">
                <input type="button" id="btn1" class="button" value="Admin Page">
            </a>
        </div>
    </body>
</html>