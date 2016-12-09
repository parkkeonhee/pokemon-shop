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

$username=$_POST["name"];
$password=$_POST["password"];



$sql = "INSERT INTO accounts (username, password, admin)
VALUES ('$username', '$password', 'Y')";

if ($conn->query($sql) === TRUE) {
    echo "New user successfully saved";
} else {
    echo "Error: New user failed to be saved";
}

$conn->close();
?>
	<a href="admin-access.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>