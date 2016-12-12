<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    admin-delete-product.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="icon" type="image/x-icon" href="../images/pokeball.ico"/>
        <title>Admin: Delete Product</title>
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
                $sql = "DELETE from products WHERE id = '$id'";
                
                if ($conn->query($sql) === TRUE) {
                    echo "Product successfully deleted";
                } else {
                    echo "Error: product failed to be deleted";
                }
                $conn->close();
            ?>
            <a href="admin-access.php"><input type="button" class="button" id="btn1" value="OK"></a>
        </div>
    </body>
</html>