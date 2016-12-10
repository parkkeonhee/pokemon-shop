<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    item-page.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8"/>
    <title>Item Page</title>
</head>

<body>
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
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo $user.'<br>';


$sql2 = 'SELECT id, number FROM items WHERE username="$user" AND type="C"';
$result2 = $conn->query($sql2);
echo "<h3>items</h3>";
if ($result2->num_rows > 0) {
     // output data of each row
     while($row = $result2->fetch_assoc()) {

		 $id=$row["id"];
		 $number=$row["number"];

		echo $id.' '.$num;
     }
	 echo "</table>";
} else {
     echo "Cart is empty";
}


$conn->close();
	
	
	
	
	
	
	
	echo '<a href="account-change.php"><input type="button" id="btn1" value="Change Info"></a>';
}
?>


</body>

</html>