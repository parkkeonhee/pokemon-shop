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
	<title>to DB</title>
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



$sql = "DELETE from accounts WHERE
username = '$name'";
if ($conn->query($sql) === TRUE) {
    echo "User successfully deleted";
} else {
    echo "Error: user failed to be deleted";
}

$conn->close();
?>
	<a href="admin-access.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>