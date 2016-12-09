<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
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

$id=$_POST["id"];
$name=$_POST["name"];
$description=$_POST["description"];
$img=$_POST["img"];
$price=$_POST["price"];
$stock=$_POST["stock"];



$sql = "INSERT INTO products
VALUES ('$id','$name','$description','$img','$price','$stock')";

if ($conn->query($sql) === TRUE) {
    echo "New product successfully saved";
} else {
    echo "Error: New product failed to be saved";
}

$conn->close();
?>
	<a href="admin-access.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>