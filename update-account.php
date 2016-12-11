<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    create-account2.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
	<head>
		<meta charset="utf-8"/>
		<title>Update Account</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
	</head>
	<body>
		<div>
		<?php
			session_start();
			$user = $_SESSION['name'];
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
			$fname="";
			$lname="";
			$sql = "SELECT fname, lname from accounts WHERE username = '$user'";
			if ($conn->query($sql) === TRUE) {
				$fname=$row["fname"];
				$lname=$row["lname"];
			} else {
				
			}
			
			$sql = "DELETE from accounts WHERE username = '$user'";
			
			if ($conn->query($sql) === TRUE) {
				
			} else {
				
			}
			
			$password=$_POST["passWord"];
			$email=$_POST["emailAddress"];
			$phone=$_POST["phone"];
			
			$sadd=$_POST["ship-streetAddress"];
			$scity=$_POST["ship-city"];
			$scounty=$_POST["ship-county"];
			$sstate=$_POST["ship-usa-State"];
			$szip=$_POST["ship-zipCode"];
			
			$badd=$_POST["bill-streetAddress"];
			$bcity=$_POST["bill-city"];
			$bcounty=$_POST["bill-county"];
			$bstate=$_POST["bill-usa-State"];
			$bzip=$_POST["bill-zipCode"];
			
			$sql = "INSERT INTO accounts VALUES ('$user','$password','N','$fname','$lname','$email','$phone','$sadd','$scity','$scounty','$sstate','$szip','$badd','$bcity','$bcounty','$bstate','$bzip')";
			
			if ($conn->query($sql) === TRUE) {
				echo "Account successfully updated";
			} else {
				echo "Error: Account failed to be updated";
			}
			
			$conn->close();
		?>
		<a href="login.php"><input type="button" id="btn1" value="OK"></a>
		</div>
	</body>
</html>