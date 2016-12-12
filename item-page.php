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
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
	</head>
	<body>
		<div class="center">
            <img src="images/pokestop.png" alt="pokestop"/>
        </div>
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
			$sql1 = "SELECT id, name, description, img, price, type, stock FROM products WHERE id='$id'";
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
					
					echo '<div class="center">';
					echo '<img src= "images/pokedex/'.$img.'" alt='.$name.'/><br><br>';
					
					echo '<table class="center outline">';
					echo 
						'<tr>
							<th class="outline">Pokédex #</th>
							<td class="outline">'.$id.'</td>
						</tr>
						<tr>
							<th class="outline">Pokémon</th>
							<td class="outline">'.$name.'</td>
						</tr>
						<tr>
							<th class="outline">Type</th>
							<td class="outline">'.$type.'</td>
						</tr>
						<tr>
							<th class="outline">Description</th>
							<td class="outline">'.$description.'<td>
						</tr>
						<tr>
							<th class="outline">Price</th>
							<td class="outline">$'.$price.'</td>
						</tr>
						<tr>
							<th class="outline">Stock:</th>
							<td class="outline">'.$stock.'</td>
						</tr>';
					echo '</table>';
					
					echo "<form action=\"add-to-cart.php\" method=\"post\">";
					echo '<input name="id" class="makehidden" type="text" value="'.$id.'">';
					echo '<input name="stock" class="makehidden" type="text" value="'.$stock.'">';
					echo '<p>Amount: <input name="number" type="number" min="1" value="1"></p><br>';
					echo  "<input type=\"submit\" value=\"Add to cart\" class=\"button\">";
					echo '</form>';
					echo '<a href="shop.php"><input type="button" class="button-orange" id="btn1" value="Back"></a>';
					echo '</div>';
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</body>
</html>