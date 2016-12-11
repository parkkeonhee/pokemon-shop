<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    create-account.php
    Course: CSC 4370 - Web Programming
    Instructor: Louis Henry
    Date: December 12, 2016
-->
<html lang="en-US">
<head>
    <meta charset="utf-8"/>
    <title>Change Account Information</title>
    <link rel="stylesheet" type="text/css" href="../css/createAcc.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body class="center">
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
		 
		echo	"<h2>Password Information</h2>";
		echo  "<form action=\"update-account.php\" method=\"post\">";
		echo	"Password:<input type=\"text\" name=\"passWord\" value=\"".$password."\"><!--change type to password later-->";
		echo	  "<br>";
		echo	  "Confirm Password:<input type=\"text\" name=\"confirmPassword\" value=\"".$password."\"><!--change type to password later-->";
		echo	  "<br>";
		  
		echo  "<h2>Contact Information</h2>";
		echo	  "Email address:<input type=\"text\" name=\"emailAddress\" value=\"".$email."\">";
		echo	  "<br>";
		echo	  "Phone number: <input type=\"text\" name=\"phone\" value=\"".$phone."\"><!--10 digits only-->";
		  
		echo  "<h2>Shipping address</h2>";
		echo  "Street address: <input type=\"text\" name=\"ship-streetAddress\" value=\"".$sadd."\">";
		echo  "<br>";
		echo  "City: <input type=\"text\" name=\"ship-city\" value=\"".$scity."\">";
		echo  "<br>";
		echo  "County: <input type=\"text\" name=\"ship-county\" value=\"".$scounty."\">";
		echo  "<br>";
		echo  "State: <input type=\"text\" name=\"ship-usa-State\" value=\"".$sstate."\">";
		echo  "<br>";
		echo  "Zip code: <input type=\"text\" name=\"ship-zipCode\" value=\"".$szip."\">";
		  
		echo  "<h3>Billing address</h3>";
		echo  "Street address: <input type=\"text\" name=\"bill-streetAddress\" value=\"".$badd."\">";
		echo  "<br>";
		echo  "City: <input type=\"text\" name=\"bill-city\" value=\"".$bcity."\">";
		echo  "<br>";
		echo  "County: <input type=\"text\" name=\"bill-county\" value=\"".$bcounty."\">";
		echo  "<br>";
		echo  "State: <input type=\"text\" name=\"bill-usa-State\" value=\"".$bstate."\">";
		echo  "<br>";
		echo  "Zip code: <input type=\"text\" name=\"bill-zipCode\" value=\"".$bzip."\">";
		echo  "</p>";
		echo  "<input type=\"submit\" value=\"Submit\">";
		echo  "</form>";
     }
} else {
     echo "0 results";
}
	?>
	  <a href="account.php"><input type="button" id="btn1" value="Back"></a>
</body>
</html>