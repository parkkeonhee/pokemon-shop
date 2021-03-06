<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    login.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
	<head>
		<meta charset="utf-8"/>
		<title>Login Process</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
	</head>
	<body class="pokemon-bg">
		<div class="center">
            <img src="images/pokestop.png" alt="pokestop"/>
        </div>
		<?php
			$servername = "localhost";
			$username = "knguyen74";
			$password = "knguyen74";
			$dbname = "knguyen74";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$userName=$_POST["userName"];
			$password=$_POST["password"];
			
			$sql = "CREATE TABLE accounts (username VARCHAR(50) primary key, password VARCHAR(50), admin VARCHAR(1), fname VARCHAR(20), lname VARCHAR(20), email VARCHAR(50), phone VARCHAR(10), sadd VARCHAR(50), scity VARCHAR(20), scounty VARCHAR(20), sstate VARCHAR(20), szip INTEGER(5), badd VARCHAR(50), bcity VARCHAR(20), bcounty VARCHAR(20), bstate VARCHAR(20), bzip INTEGER(5))";
			if ($conn->query($sql) === TRUE) {
				
			} else {
				//table already exists
			}
			$sql = "CREATE TABLE products (id VARCHAR(10) primary key, name VARCHAR(50), description VARCHAR(200), img VARCHAR(20), price DECIMAL(5,2), stock INTEGER(3))";
			if ($conn->query($sql) === TRUE) {
				
			} else {
				//table already exists
			}
			
			$sql = "CREATE TABLE items (id VARCHAR(10), number INTEGER(3), username VARCHAR(50), type VARCHAR(1), date VARCHAR(10), ordernum INTEGER(5))";
			
			if ($conn->query($sql) === TRUE) {
				
			} else {
				//table already exists
			}
			$sql = "INSERT INTO accounts (username, password, admin) VALUES ('Ash', 'Ketchum', 'Y')";
			
			if ($conn->query($sql) === TRUE) {
				
			} else {
				
			}
			$sql0 = "SELECT password, admin FROM accounts WHERE username='$userName'";
			$result0 = $conn->query($sql0);
			
			if ($result0->num_rows > 0) {
				while($row = $result0->fetch_assoc()) {
					echo '<div style="center">';
					if($password==$row["password"]){
						echo '<h1>You have successfully logged in, Trainer!</h1>';
						if($row["admin"]=="Y"){
							//admin page
							echo '<a href="admin-pages/admin-access.php">
									<input type="button" id="btn1" value="Start Managing!" class="button">
									</a>';
							echo '</div>';
							session_start();
							$_SESSION['name'] = $userName;
						} else {
							//customer page
							echo '<a href="shop.php">
									<input type="button" id="btn1" value="Start Shopping!" class="button">
								</a>';
							echo '</div>';
							session_start();
							$_SESSION['name'] = $userName;
						}
					} else {
						echo "<h1>Password is incorrect!</h1>";
						echo '<a href="login.php">
								<input type="button" id="btn1" value="Try Again" class="button-orange">
							</a>';
						echo '</div>';
					}
				}
			} else {
				echo "<div class='center'>";
				echo "<h1>Username not found!</h1>";
				echo '<a href="login.php">
						<input type="button" id="btn1" value="Try Again" class="button-orange">
					</a>';
				echo '</div>';
			}
			$conn->close();
		?>
	</body>
</html>