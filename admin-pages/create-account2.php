<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Create Account 2</title>
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

$fname=$_POST["firstName"];
$lname=$_POST["lastName"];
$username=$_POST["userName"];
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



$sql = "INSERT INTO accounts
VALUES ('$username','$password','N','$fname','$lname','$email','$phone','$sadd','$scity','$scounty','$sstate','$szip','$badd','$bcity','$bcounty','$bstate','$bzip')";

if ($conn->query($sql) === TRUE) {
    echo "New user successfully saved";
} else {
    echo "Error: New user failed to be saved";
}

$conn->close();
?>
	<a href="../login.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>