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
	<title>Remove from Cart</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
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
$id=$_POST["id"];

$sql = "DELETE from items WHERE
username = '$user' AND id='$id' AND type='C'";
if ($conn->query($sql) === TRUE) {
	echo 'Item is removed';
} else {
	echo 'Error: Item failed to be removed';
}

$conn->close();
?>
	<a href="account.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>