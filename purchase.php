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
	<title>Purchase</title>
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


date_default_timezone_set("America/New_York");


$date=date("Y/m/d");
$sql = "UPDATE items SET date = '$date' WHERE username = '$user' AND type='C'";
if ($conn->query($sql) === TRUE) {
} else {
}

$unique=false;
while($unique==false)
{
	$ordernum=rand(100000);
		$sql = "Select * FROM items WHERE ordernum = '$ordernum'";
	if ($conn->query($sql) === TRUE) {
	} else {
			$unique=true;
			$sql = "UPDATE items SET ordernum = '$ordernum' WHERE username = '$user' AND type='C'";
		if ($conn->query($sql) === TRUE) {
		} else {
		}
	}
}

$sql = "UPDATE items SET type = 'P' WHERE username = '$user' AND type='C'";
if ($conn->query($sql) === TRUE) {
} else {
}
*/

$conn->close();
?>
	<a href="shop.php"><input type="button" id="btn1" value="Thank you for your purchase"></a>
	</div>
</body>

</html>