<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    login.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8"/>
    <title>Login Process</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="pokemon-bg">

<?php
session_start();

$servername = "localhost";
$username = "knguyen74";
$password = "knguyen74";
$dbname = "knguyen74";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "DROP TABLE items";
if ($conn->query($sql) === TRUE) {
} else {
}

$sql = "CREATE TABLE items (id VARCHAR(10), number INTEGER(3), username VARCHAR(50), type VARCHAR(1), date VARCHAR(10), ordernum INTEGER(5))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$conn->close();
echo '<a href="admin-access.php"><input type="button" id="btn1" value="OK"></a>';
?>  


</body>

</html>