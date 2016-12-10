<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    inventory.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8"/>
    <title>Inventory</title>
</head>

<body>

<?php

session_start();
$user = $_SESSION['name'];
if($user===0)
{
}else{
	echo $user;
}

$servername = "localhost";
$username = "knguyen74";
$password = "knguyen74";
$dbname = "knguyen74";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql1 = "SELECT id, name, description, img, price, type, stock  FROM products";
$result1 = $conn->query($sql1);
echo "<h3>PRODUCTS</h3>";
if ($result1->num_rows > 0) {
     // output data of each row
     while($row = $result1->fetch_assoc()) {

		 $id=$row["id"];
		 $name=$row["name"];
		 $description=$row["description"];
		 $img=$row["img"];
		 $price=$row["price"];
		 $type=$row["type"];
		 $stock=$row["stock"];
		 echo "<div><img src= \"images/pokedex/".$img."\" alt=".$name.">".$name." ".$type." ".$price."</div>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>

</body>

</html>
