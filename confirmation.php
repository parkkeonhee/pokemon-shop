<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    confirmation.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
<head>
    <meta charset="utf-8"/>
    <title>Order Confirmation</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
</head>
<body>
	<?php
		session_start();
		$user = $_SESSION['name'];
		$servername = "localhost";
		$username = "knguyen74";
		$password = "knguyen74";
		$dbname = "knguyen74";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		date_default_timezone_set("America/New_York");
		$date=date("Y/m/d");
		$sql = "UPDATE items SET date = '$date' WHERE username = '$user' AND type='C'";
		
		if ($conn->query($sql) === TRUE) {
			
		} else {
			
		}
		
		$unique=false;
		while($unique==false){
			$ordernum=rand(0,100000);
			$sql = "Select * FROM items WHERE ordernum = '$ordernum'";
			if ($conn->query($sql) === TRUE) {
				
			} else {
				$unique=true;
				$sql = "UPDATE items SET ordernum = '$ordernum' WHERE username = '$user' AND type='C'";
				if ($conn->query($sql) === TRUE) {
					
				} else {
					
				}
			}
		}
		
		$sql = "UPDATE items SET type = 'P' WHERE username = '$user' AND type='C'";
		if ($conn->query($sql) === TRUE) {
			
		} else {
			
		}
		
		$sql = "SELECT id, number FROM items WHERE ordernum=\"".$ordernum."\"";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$id=$row["id"];
				$number=$row["number"];
				$sql1 = "SELECT stock FROM products WHERE id=\"".$id."\"";
				$result1 = $conn->query($sql1);
				
				if ($result1->num_rows > 0) {
					while($row = $result1->fetch_assoc()) {
						$stock=$row["stock"];
						$newnum=$stock-$number;
						echo $newnum.'<br>';
						$sql2 = "UPDATE products SET stock = \"".$newnum."\" WHERE id=\"".$id."\"";
						
						if ($conn->query($sql2) === TRUE) {
							
						} else {
							
						}
					}
				} else {
					
				}
			}
		} else {
			
		}
		echo '<!-- whole div -->';
		echo '<div>';
        echo '<!-- top div -->';
        echo '<div>';
        echo '<!-- top-left div -->';
        echo '<img src="images/pokestop.png" alt="pokeshop logo"/>';
        echo '<!-- top-center div -->';
        echo '<div>';
        echo '<h1>Order Confirmation</h1>';
        echo 'Order #'.$ordernum;
        echo '</div>';
        echo '<!-- top-right div -->';
        echo '<div>';
        echo '<a href="shop.php" class="button">Continue Shopping</a>';
        echo '</div>';
        echo '</div>';
        echo '<!-- middle div -->';
        echo '<div>';
        echo '<div>';
        echo '<h2>Your estimated deliver date is:</h2>';
        
        echo date('m/d/Y', strtotime($date. ' + 5 days'));
        //order date + 5 days
        //Order #1532250234
        echo '<br/>';
        echo '<h2>Shipping speed:</h2>';
        echo '<p>Standard free shipping</p>';
        echo '<h2>Your order was sent to:</h2>';
        
        $sql0 = "SELECT username, password, admin, fname, lname, email, phone, sadd, scity, scounty, sstate, szip, badd, bcity, bcounty, bstate, bzip FROM accounts WHERE username='$user'";
        $result0 = $conn->query($sql0);
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
        		echo $fname.' '.$lname.'<br>';
        		echo $sadd.', '.$scity.', '.$szip.'<br>';
        	}
        } else {
        	
        }
        
        // First name, last name
        // street name, city, zipcode
        echo '</div>';
        echo '</div>';
        echo '<!-- bottom div -->';
        echo '<div>';
        echo '<h2>Order Details</h2>';
        
        //Order #1532250234
        echo $ordernum.'<br>';
        
        $sql = 'SELECT id, number, date, ordernum FROM items WHERE username="'.$user.'" AND type="P" AND ordernum="'.$ordernum.'"';
        $result2 = $conn->query($sql);
        
        if ($result2->num_rows > 0) {
        	// output data of each row
        	echo "<table style='center'>
        			<tr>
        				<th>Pokémon</th>
        				<th>Name</th>
        				<th>number</th>
        				<th>price</th>
        			</tr>";
        			
        	while($row = $result2->fetch_assoc()) {
        		$id=$row["id"];
        		$number=$row["number"];
        		$date=$row["date"];
        		$ordernum=$row["ordernum"];
        		
        		$price=0;
        		$name="";
        		$sql1 = "SELECT img, name, price FROM products WHERE id='$id'";
        		$result1 = $conn->query($sql1);
        		
        		if ($result1->num_rows > 0) {
        			// output data of each row
        			while($row = $result1->fetch_assoc()) {
        				$img=$row["img"];
        				$name=$row["name"];
        				$price=$row["price"];
        			}
        		} else {
        			
        		}
        		$total=$price*$number;
        		echo "
        			<tr>
        				<td>
        					<img src= \"images/pokedex/".$img."\" alt='.$name.'>
        				</td>
        				<td>".$name."</td>
        				<td>".$number."</td>
        				<td>".$total."</td>
        			</tr>";
        	}
        	echo "</table>";
        	
        } else {
        	echo "No purchases
        	<br>";
        }
        
        // [Image]  [Pokemon name]  [Price]
        $conn->close();
    ?>
    	</div>
    </div>
    </body>
</html>