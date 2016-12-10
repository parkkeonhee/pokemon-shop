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
    <title>Shop</title>
	<style>
	.makehidden{
	display: none;
	}
	</style>
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
echo '<a href="account.php"><input type="button" id="btn1" value="account"></a>';


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
		 
		 
		 echo '<form action="item-page.php" method="post">   
		 <input name="id" class="makehidden" type="text" value="'.$id.'">
		 <div><img src= "images/pokedex/'.$img.'" alt='.$name.'> '.$name.' '.$type.' '.$price.'
		 <input type="submit" value="View"></div>
		 </form>';
		 
		 

		 

     }
} else {
     echo "0 results";
}

$conn->close();
?>

    <!-- top div 30%-->
    <div>
        <div class="one">
            <a href="login.php" class="button">Cart</a>
            <a href="shop.php" class="button">Account</a>
        </div>
        <div class="two">
            <img src="images/pokestop.png" alt="pokestop"/>
        </div>
    </div>
    
    <!-- div: rest of bottom page 70% -->
    <div>
        <div>
        <!-- BOTTOM-LEFT-DIV table -->
        <h4>Refine Search</h4>
        <form action="" method="post">
            Price range: <input type="number" name="search-min-price" min="0" max="1000" step="0.01">
            to <input type="number" name="search-max-price" min="0" max="1000" step="0.01">
            <input type="submit" value="Submit">
        </form>
        <form action="" method="post">
            Browse Inventory by Name: <input type="search" name="search-name"/>
            <input type="submit" value="Submit">
        </form>
        </div>
        <!-- end of bottom left div table (refine search category) -->
        <!-- start of bottom right div table (table pokemon category) -->
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                <td>001</td>
                <td>IMAGE HERE</td>
                <td>Bulbasaur</td>
                <td>$24.70</td>
            </table>
        </div>
        <!-- end of bottom right category -->
    </div>
    <!-- end of bottom page category 70% -->
    
</body>

</html>
