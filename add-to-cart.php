<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    create-account.php
    Course: CSC 4370 - Web Programming
    Instructor: Louis Henry
    Date: December 12, 2016
-->
<html>

<head lang="en">
	<meta charset="utf-8">
	<title>to DB</title>

</head>

<body>
	<div>
<?php
	session_start();
	$user = $_SESSION['name'];
if($user===0)
{
	echo '<a href="login.php"><input type="button" id="btn1" value="Log in"></a>';
}else{
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



$sql = "INSERT INTO items
VALUES ('$id','$number','$user','C','','')";

if ($conn->query($sql) === TRUE) {
    echo "New item successfully added to cart";
} else {
    echo "Error: New item failed to be added to cart";
}

$conn->close();}
?>
	<a href="shop.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>