<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    admin-access.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<link rel="icon" type="image/x-icon" href="../images/pokeball.ico"/>
		<title>Admin: Access</title>
	</head>
	<body>
		<form action="../welcome.php" method="post">
			<div class="right">
				<input type="submit" id="btn2" value="Logout" class="button-orange">
			</div>
		</form>
		<div class="center">
			<img src="../images/pokestop.png" alt="pokestop"/>
		</div>
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
			
			$sql0 = "SELECT username, password, admin, fname, lname, email, phone, sadd, scity, scounty, sstate, szip, badd, bcity, bcounty, bstate, bzip FROM accounts";
			$result0 = $conn->query($sql0);
			
			echo "<p class='user'>You are logged in as <b><u>Admin</u> ". $user . "</b>!</p>";
			
			echo "<hr>";
			
			echo "<h2>Accounts</h2>";
			if ($result0->num_rows > 0) {
				// output data of each row
				echo "<table class='center'>
						<tr>
							<th>username</th>
							<th>password</th>
							<th>admin</th>
							<th>fname</th>
							<th>lname</th>
							<th>email</th>
							<th>phone</th>
							<th>sadd</th>
							<th>scity</th>
							<th>scounty</th>
							<th>sstate</th>
							<th>szip</th>
							<th>badd</th>
							<th>bcity</th>
							<th>bcounty</th>
							<th>bstate</th>
							<th>bzip</th>
						</tr>";
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
				
				echo "<tr>
						<td>".$username."</td>
						<td>".$password."</td>
						<td>".$admin."</td>
						<td>".$fname."</td>
						<td>".$lname."</td>
						<td>".$email."</td>
						<td>".$phone."</td>
						<td>".$sadd."</td>
						<td>".$scity."</td>
						<td>".$scounty."</td>
						<td>".$sstate."</td>
						<td>".$szip."</td>
						<td>".$badd."</td>
						<td>".$bcity."</td>
						<td>".$bcounty."</td>
						<td>".$bstate."</td>
						<td>".$bzip."</td>
					</tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			//id, name,description, img,type, price
			$sql1 = "SELECT id, name, description, img, price, type, stock  FROM products";
			$result1 = $conn->query($sql1);
			
			echo "<hr>";
			
			echo "<h2>Products</h2>";
			if ($result1->num_rows > 0) {
				// output data of each row
				echo "<table class='center'>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Description</th>
							<th>Image</th>
							<th>Price</th>
							<th>Type</th>
							<th>Stock</th>
						</tr>";
				while($row = $result1->fetch_assoc()) {
					$id=$row["id"];
					$name=$row["name"];
					$description=$row["description"];
					$img=$row["img"];
					$price=$row["price"];
					$type=$row["type"];
					$stock=$row["stock"];
					echo "<tr>
							<td>".$id."</td>
							<td>".$name."</td>
							<td>".$description."</td>
							<td>".$img."</td>
							<td>".$price."</td>
							<td>".$type."</td>
							<td>".$stock."</td>
						</tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			
			$sql2 = "SELECT id, number, username, type, date, ordernum FROM items";
			$result2 = $conn->query($sql2);
			
			echo "<hr>";
			
			echo "<h2>Items</h2>";
			if ($result2->num_rows > 0) {
				// output data of each row
				echo "<table class='center'>
						<tr>
							<th>ID</th>
							<th>Number</th>
							<th>Username</th>
							<th>Type</th>
							<th>Date</th>
							<th>Order #</th>
						</tr>";
				
				while($row = $result2->fetch_assoc()) {
					$id=$row["id"];
					$number=$row["number"];
					$username=$row["username"];
					$type=$row["type"];
					$date=$row["date"];
					$ordernum=$row["ordernum"];
					
					echo "<tr>
							<td>".$id."</td>
							<td>".$number."</td>
							<td>".$username."</td>
							<td>".$type."</td>
							<td>".$date."</td>
							<td>".$ordernum."</td>
						</tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
		
		<hr>
		
		<form action="admin-create-admin.php" method="post">
			<h2>Add Admin</h2>
			<div>
				<label>Name:</label> <input name="name" type="text">
				<br>
				<br>
				<label>Password:</label> <input name="password" type="text">
				<br>
				<br>
				<input type="submit" id="btn2" value="Add" class="button">
			</div>
		</form>
		
		<hr>
		
		<form action="admin-delete-account.php" method="post">
			<h2>Delete user</h2>
			<div>
				<label>Name:</label> <input name="name" type="text">
				<br>
				<br>
				<input type="submit" id="btn2" value="Delete" class="button">
			</div>
		</form>
		
		<hr>
		
		<form action="admin-change-password.php" method="post">
			<h2>Change Password of Account</h2>
			<div>
				<label>Name:</label> <input name="name" type="text">
				<br>
				<br>
				<label>Password:</label> <input name="password" type="text">
				<br>
				<br>
				<input type="submit" id="btn2" value="Change Password" class="button">
			</div>
		</form>
		
		<hr>
		
		<form action="admin-add-product.php" method="post">
			<h2>Add Product</h2>
			<div>
				<label>ID:</label> <input name="id" type="text">
				<br>
				<br>
				<label>Name:</label> <input name="name" type="text">
				<br>
				<br>
				<label>Description:</label> <textarea name="description" rows="2" cols="34">What is interesting about this pokémon?</textarea>
				<br>
				<br>
				<label>Image:</label> <input name="img" type="text">
				<br>
				<br>
				<label>Price:</label> <input name="price" type="number" step="0.01" min="0">
				<br>
				<br>
				<label>Type:</label> <input name="type" type="text">
				<br>
				<br>
				<label>Stock:</label> <input name="stock" type="number" min="0">
				<br>
				<br>
				<input type="submit" id="btn2" value="Add Product" class="button">
			</div>
		</form>
		
		<hr>
		
		<form action="admin-delete-product.php" method="post">
			<h2>Delete Product</h2>
			<div>
				<label>ID:</label> <input name="id" type="text">
				<br>
				<br>
				<input type="submit" id="btn2" value="Delete Product" class="button">
			</div>
		</form>
		
		<hr>
		
		<form action="admin-update-product-stock.php" method="post">
			<h2>Update Product's Stock</h2>
			<div>
				<label>ID:</label> <input name="id" type="text">
				<br>
				<br>
				<label>Stock:</label> <input name="stock" type="number">
				<br>
				<br>
				<input type="submit" id="btn2" value="Update Stock" class="button">
			</div>
		</form>
		
		<form action="admin-update-product-img.php" method="post">
			<h2>Update Product's Image</h2>
			<div>
				<label>ID:</label> <input name="id" type="text">
				<br>
				<br>
				<label>Image:</label> <input name="img" type="text">
				<br>
				<br>
				<input type="submit" id="btn2" value="Update Stock" class="button">
			</div>
		</form>
		
		<hr>
		
		<form action="admin-update-product-description.php" method="post">
			<h2>Update Product's Description</h2>
			<div>
				<label>ID:</label>
				<input name="id" type="text">
				<br>
				<br>
				<label>Description:</label>
				<textarea name="description" rows="2" cols="34">What is interesting about this pokémon?</textarea>
				<br>
				<br>
				<input type="submit" id="btn2" value="Update Description" class="button">
			</div>
		</form>
		
		<hr>
		
		<form action="reset-item-table.php" method="post">
			<h2>Clean Item Table</h2>
			<div>
				<input type="submit" id="btn2" value="Clean Items" class="button">
			</div>
		</form>
</body>
</html>