<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    admin-change-password.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<title>Admin: Change Password</title>
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

$username=$_POST["name"];
$password=$_POST["password"];



$sql = "UPDATE accounts SET password = '$password' WHERE username = '$username'";

if ($conn->query($sql) === TRUE) {
    echo "User successfully edited";
} else {
    echo "Error: User failed to be edited";
}

$conn->close();
?>
	<a href="admin-access.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>