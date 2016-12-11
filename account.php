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
		<title>Account</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
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
				$sql = 'SELECT id, number FROM items WHERE username="'.$user.'" AND type="C"';
				$result2 = $conn->query($sql);
				echo "<h2>Items</h2>";
				
				if ($result2->num_rows > 0) {
					// output data of each row
					echo "<table><tr><th>Name</th><th>number</th><th>price</th><th>Remove</th></tr>";
					
					while($row = $result2->fetch_assoc()) {
						$id=$row["id"];
						$number=$row["number"];
						$price=0;
						$name="";
						$sql1 = "SELECT name, price FROM products WHERE id='$id'";
						$result1 = $conn->query($sql1);
						
						if ($result1->num_rows > 0) {
							
							// output data of each row
							while($row = $result1->fetch_assoc()) {
								$name=$row["name"];
								$price=$row["price"];
							}
						} else {
							
						}
						$total=$price*$number;
						echo "<tr><td>".$name."</td><td>".$number."</td><td>".$total."</td><td><form action=\"remove-from-cart.php\" method=\"post\"><input name=\"id\" class=\"makehidden\" type=\"text\" value=\"".$id."\"><input type=submit value=\"Delete\"></form></td></tr>";
					}
					echo "</table>";
				} else {
					echo "Cart is empty";
				}
				
				$sql = 'SELECT id, number, date, ordernum FROM items WHERE username="'.$user.'" AND type="P" ORDER BY date DESC';
				$result2 = $conn->query($sql);
				echo "<h2>Purchases</h2>";
				
				if ($result2->num_rows > 0) {
					// output data of each row
					echo "<table>
							<tr>
								<th>Name</th>
								<th>number</th>
								<th>price</th>
								<th>Date</th>
								<th>Order Number</th>
							</tr>";
					
					while($row = $result2->fetch_assoc()) {
						$id=$row["id"];
						$number=$row["number"];
						$date=$row["date"];
						$ordernum=$row["ordernum"];
						$price=0;
						$name="";
						$sql1 = "SELECT name, price FROM products WHERE id='$id'";
						$result1 = $conn->query($sql1);
						
						if ($result1->num_rows > 0) {
							
							// output data of each row
							while($row = $result1->fetch_assoc()) {
								$name=$row["name"];
								$price=$row["price"];
							}
						} else {
							
						}
						$total=$price*$number;
						echo 
							"<tr>
								<td>".$name."</td>
								<td>".$number."</td>
								<td>".$total."</td>
								<td>".$date."</td>
								<td>".$ordernum."</td>
							</tr>";
					}
					echo "</table>";
				} else {
					echo "No purchases<br>";
				}
				$conn->close();
				echo '<div class="center">';
				echo '<a href="account-change.php"><input type="button" id="btn0" value="Change Info" class="button"></a>';
				echo '<a href="checkout.php"><input type="button" id="btn1" value="Checkout" class="button"></a>';
				echo '<br>';
				echo '<a href="shop.php"><input type="button" id="btn2" value="Back" class="button"></a>';
				echo '<a href="welcome.php" class="button">Logout</a>';
				echo '</div>';
			}
		?>
	</body>
</html>