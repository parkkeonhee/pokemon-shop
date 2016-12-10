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

$servername = "localhost";
$username = "knguyen74";
$password = "knguyen74";
$dbname = "knguyen74";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$id=$_POST["id"];


$sql1 = "SELECT id, name, description, img, price, type, stock  FROM products WHERE id='$id'";
$result1 = $conn->query($sql1);
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
		 
		 
		 echo '<img src= "images/pokedex/'.$img.'" alt='.$name.'><br>';
		 echo $id.'<br>';
		 echo $name.'<br>';
		 echo $type.'<br>';
		 echo $description.'<br>';
		 echo '$'.$price.'<br>';
		 echo $stock.' in stock<br>';
		 echo 'add to cart button goes here<br>';
		 echo '<a href="shop.php"><input type="button" id="btn1" value="Back"></a>';
     }
} else {
     echo "0 results";
}


$conn->close();
?>


</body>

</html>
