<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    checkout.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
	<head>
		<meta charset="utf-8"/>
		<title>Checkout</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
		<script type="text/javascript" src="card.js"></script>
	</head>
	<body>
		<div>
			<!-- left page div 70%-->
			<div>
			<?php
				session_start();
				$user = $_SESSION['name'];
				$servername = "localhost";
				$username = "knguyen74";
				$password = "knguyen74";
				$dbname = "knguyen74";
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				$sql0 = "SELECT username, password, admin, fname, lname, email, phone, sadd, scity, scounty, sstate, szip, badd, bcity, bcounty, bstate, bzip FROM accounts WHERE username='$user'";
				$result0 = $conn->query($sql0);
				echo "<h3>ACCOUNTS</h3>";
				
				if ($result0->num_rows > 0) {
					// output data of each row
					while($row = $result0->fetch_assoc()) {
						$username=$row["username"];
						$password=$row["password"];
						$admin=$row["admin"];
						$fname=$row["fname"];
						$lname=$row["lname"];
						$email=$row["email"];
						$phone=$row["phone"];
						$sadd=$row["sadd"];
						$scity=$row["scity"];
						$scounty=$row["scounty"];
						$sstate=$row["sstate"];
						$szip=$row["szip"];
						$badd=$row["badd"];
						$bcity=$row["bcity"];
						$bcounty=$row["bcounty"];
						$bstate=$row["bstate"];
						$bzip=$row["bzip"];
						
						echo  "<h3>1. Your Shipping Address</h3>";
						echo  "Street address: ".$sadd;
						echo  "<br>";
						echo  "City: ".$scity;
						echo  "<br>";
						echo  "County: ".$scounty;
						echo  "<br>";
						echo  "State: ".$sstate;
						echo  "<br>";
						echo  "Zip code: ".$szip;
						
						echo  "<h3>2. Your Billing Address</h3>";
						echo  "Street address: ".$badd;
						echo  "<br>";
						echo  "City: ".$bcity;
						echo  "<br>";
						echo  "County: ".$bcounty;
						echo  "<br>";
						echo  "State: ".$bstate;
						echo  "<br>";
						echo  "Zip code: ".$bzip;
						echo  "</p>";
					}
				} else {
					echo "Error";
				}$conn->close();
			?>
			
			<h3>3. Payment Method</h3>
			<div id="display">
				
			</div>
			<div id="display2">
				
			</div>
			
			<form action="confirmation.php" method="post">
				Card number: <input type="number" onblur="start()" id="num" name="cardNumberCC"/>
				<br>
				Name on card: <input type="text" name="ownerNameCC"/>
				<br>
				Expiration date:
				Month:
				
				<select name="expirationMonthCC">
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				
				Year:
				
				<select name="expirationYearCC">
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
				</select>
			
			<h3>Review Items and Shipping</h3>
			
			<!-- need php code here-->
			<?php
				$servername = "localhost";
				$username = "knguyen74";
				$password = "knguyen74";
				$dbname = "knguyen74";
				$all=0;
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				$sql = 'SELECT id, number FROM items WHERE username="'.$user.'" AND type="C"';
				$result2 = $conn->query($sql);
				echo "<h3>items</h3>";
				
				if ($result2->num_rows > 0) {
					
					// output data of each row
					echo "<table><tr><th>Name</th><th>number</th><th>price</th></tr>";
					
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
						$all+=$total;
						echo "<tr><td>".$name."</td><td>".$number."</td><td>".$total."</td></tr>";
					}
					echo "</table>";
				} else {
					echo "Cart is empty";
				}
				echo '</div><!-- right page div 30%-->';
				echo '<div>';
				echo '<h3>Your order</h3>';
				echo '<p>Items: '.$all.'</p>';
				echo '<p>Free Shipping & Handling: 0.00</p>';
				echo '<p>Order total: '.$all.'</p>';
			?>
			
			<input type="submit" value="Place your order" name="placeOrder" class="button" />
			</form>
			<a href="account.php" class="button">Go back</a>
			</div>
		</div>
	</body>
</html>