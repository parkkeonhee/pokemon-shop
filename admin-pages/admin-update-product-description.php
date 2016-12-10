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
$description=$_POST["description"];



$sql = "UPDATE products SET description = '$description' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Description successfully edited";
} else {
    echo "Error: Description failed to be edited";
}

$conn->close();
?>
	<a href="admin-access.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>