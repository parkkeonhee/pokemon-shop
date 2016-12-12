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
		<?php
			session_start();
			$user = $_SESSION['name'];
			echo $user;
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
			echo "<h3>ACCOUNTS</h3>";
			
			if ($result0->num_rows > 0) {
				// output data of each row
				echo "<table><tr><th>username</th><th>password</th><th>admin</th><th>fname</th><th>lname</th><th>email</th><th>phone</th><th>sadd</th><th>scity</th><th>scounty</th><th>sstate</th><th>szip</th><th>badd</th><th>bcity</th><th>bcounty</th><th>bstate</th><th>bzip</th></tr>";
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
				
				echo "<tr><td>".$username."</td><td>".$password."</td><td>".$admin."</td><td>".$fname."</td>
						<td>".$lname."</td><td>".$email."</td><td>".$phone."</td><td>".$sadd."</td><td>".$scity."</td>
						<td>".$scounty."</td><td>".$sstate."</td><td>".$szip."</td><td>".$badd."</td><td>".$bcity."</td>
						<td>".$bcounty."</td><td>".$bstate."</td><td>".$bzip."</td></tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			//id, name,description, img,type, price
			$sql1 = "SELECT id, name, description, img, price, type, stock  FROM products";
			$result1 = $conn->query($sql1);
			echo "<h3>PRODUCTS</h3>";
			if ($result1->num_rows > 0) {
				// output data of each row
				echo "<table><tr><th>id</th><th>name</th><th>description</th><th>img</th><th>price</th><th>type</th><th>stock</th></tr>";
				while($row = $result1->fetch_assoc()) {
					$id=$row["id"];
					$name=$row["name"];
					$description=$row["description"];
					$img=$row["img"];
					$price=$row["price"];
					$type=$row["type"];
					$stock=$row["stock"];
					echo "<tr><td>".$id."</td><td>".$name."</td><td>".$description."</td><td>".$img."</td><td>".$price."</td><td>".$type."</td><td>".$stock."</td></tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			
			$sql2 = "SELECT id, number, username, type, date, ordernum FROM items";
			$result2 = $conn->query($sql2);
			echo "<h3>items</h3>";
			
			if ($result2->num_rows > 0) {
				// output data of each row
				echo "<table><tr><th>id</th><th>number</th><th>username</th><th>type</th><th>date</th><th>ordernum</th></tr>";
				
				while($row = $result2->fetch_assoc()) {
					$id=$row["id"];
					$number=$row["number"];
					$username=$row["username"];
					$type=$row["type"];
					$date=$row["date"];
					$ordernum=$row["ordernum"];
					
					echo "<tr><td>".$id."</td><td>".$number."</td><td>".$username."</td><td>".$type."</td><td>".$date."</td><td>".$ordernum."</td></tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
		
		<form action="admin-create-admin.php" method="post">
			<h3>add admin</h3>
			<div>
			<label>name:</label> <input name="name" type="text">
			<br>
			<label>password:</label> <input name="password" type="text">
			</div>
			<input type="submit" id="btn2" value="Submit" class="button">
			
		</form>
		
		<form action="admin-delete-account.php" method="post">
			<h3>delete user</h3>
			<label>name:</label> <input name="name" type="text">
			<input type="submit" id="btn2" value="Submit" class="button">
		</form>
		
		<form action="admin-change-password.php" method="post">
			<h3>change password of account</h3>
			<label>name:</label> <input name="name" type="text"></p>
			<p>password: <input name="password" type="text"></p>
			<input type="submit" id="btn2" value="Submit" class="button">
		</form>
		
		<form action="admin-add-product.php" method="post">
			<h3>add product</h3>
			<label>id:</label> <input name="id" type="text">
			<label>name:</label> <input name="name" type="text">
			<label>description:</label> <textarea name="description" rows="10" cols="25">ENTER description</textarea>
			<label>img:</label> <input name="img" type="text">
		    <label>price:</label> <input name="price" type="number" step="0.01" min="0">
			<label>type:</label> <input name="type" type="text">
			<label>stock:</label> <input name="stock" type="number" min="0">
			<input type="submit" id="btn2" value="Submit" class="button">
		</form>
		
		<form action="admin-delete-product.php" method="post">
			<h3>delete product</h3>
			 <label>id:</label> <input name="id" type="text">
			<input type="submit" id="btn2" value="Submit" class="button">
		</form>
		
		<form action="admin-update-product-stock.php" method="post">
			<h3>update product's stock</h3>
			<label>id:</label> <input name="id" type="text">
			<label>stock:</label> <input name="stock" type="number">
			<input type="submit" id="btn2" value="Submit" class="button">
		</form>
		
		<form action="admin-update-product-description.php" method="post">
			<h3>update product's description</h3>
			<label>id:</label> <input name="id" type="text"><
			<label>description:</label> <textarea name="description" rows="10" cols="25">ENTER description</textarea>
			<input type="submit" id="btn2" value="Submit" class="button">
		</form>
		
		<form action="reset-item-table.php" method="post">
			<h3>Clean Item Table</h3>
			<input type="submit" id="btn2" value="Submit" class="button">
		</form>
		
		<form action="../login.php" method="post">
			<h3>Logout</h3>
			<input type="submit" id="btn2" value="Logout" class="button-orange">
		</form>
</body>
</html>