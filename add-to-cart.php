<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    create-account.php
    Course: CSC 4370 - Web Programming
    Instructor: Louis Henry
    Date: December 12, 2016
-->
<html lang="en-US">
	<head>
		<meta charset="utf-8"/>
		<title>Add to Cart</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
	</head>
	<body>
		<div>
			<?php
				session_start();
				$user = $_SESSION['name'];
				if($user===0){
					echo '<a href="login.php"><input type="button" id="btn1" value="Log in"></a>';
				} else{
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
					$number=$_POST["number"];
					$stock=$_POST["stock"];
					
					if($number>$stock){
						echo "<h1>Sorry insufficient stock</h1>";
					} else {
						$sql = "INSERT INTO items VALUES ('$id','$number','$user','C','','')";
						
						if ($conn->query($sql) === TRUE) {
							echo "<h1>New item successfully added to cart</h1>";
						} else {
							echo "<h1>Error: New item failed to be added to cart</h1>";
						}
					}
					$conn->close();
				}
			?>
			<a href="shop.php"><input type="button" id="btn1" class="button" value="Back To Store"></a>
		</div>
	</body>
</html>