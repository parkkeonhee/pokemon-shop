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
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
	} 
	
	
$sql0 = "SELECT username, password, admin, fname, lname, email, phone, sadd, scity, scounty, sstate, szip, badd, bcity, bcounty, bstate, bzip FROM accounts WHERE username='$user'";
$result0 = $conn->query($sql0);
echo "<h1 style='text-align:center'>Account Information</h1>";
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
		 
		 echo	"<h2>Password</h2>";
		echo  "<form action=\"update-account.php\" method=\"post\">";
	    echo         "<div>
		    	<label>Password:</label><input type=\"text\" name=\"passWord\" value=\"".$password."\"><!--change type to password later-->";
		echo   	  "<br>";
		echo    	  "<label>Confirm Password:</label><input type=\"text\" name=\"confirmPassword\" value=\"".$password."\"><!--change type to password later-->";
		echo	  "<br>";
		           "</div>";
		echo  "<h2>Contact</h2>";
		echo	  "<label>Email address:</label><input type=\"text\" name=\"emailAddress\" value=\"".$email."\">";
		echo	  "<br>";
		echo	  "<label>Phone number:</label> <input type=\"text\" name=\"phone\" value=\"".$phone."\"><!--10 digits only-->";
		  
		echo  "<h2>Shipping</h2>";
		echo  "<label>Street address:</label> <input type=\"text\" name=\"ship-streetAddress\" value=\"".$sadd."\">";
		echo  "<br>";
		echo  "<label>City:</label> <input type=\"text\" name=\"ship-city\" value=\"".$scity."\">";
		echo  "<br>";
		echo  "<label>County:</label> <input type=\"text\" name=\"ship-county\" value=\"".$scounty."\">";
		echo  "<br>";
		echo  "<label>State:</label> <input type=\"text\" name=\"ship-usa-State\" value=\"".$sstate."\">";
		echo  "<br>";
		echo  "<label>Zip code:</label> <input type=\"text\" name=\"ship-zipCode\" value=\"".$szip."\">";
		  
		echo  "<h2>Billing</h2>";
		echo  "<label>Street address:</label> <input type=\"text\" name=\"bill-streetAddress\" value=\"".$badd."\">";
		echo  "<br>";
		echo  "<label>City:</label> <input type=\"text\" name=\"bill-city\" value=\"".$bcity."\">";
		echo  "<br>";
		echo  "<label>County</label>: <input type=\"text\" name=\"bill-county\" value=\"".$bcounty."\">";
		echo  "<br>";
		echo  "<label>State:</label> <input type=\"text\" name=\"bill-usa-State\" value=\"".$bstate."\">";
		echo  "<br>";
		echo  "<label>Zip code:</label> <input type=\"text\" name=\"bill-zipCode\" value=\"".$bzip."\">";
		echo  "</p>";
		
		echo  "<div class=\"sub\">
		       <a href=\"account.php\"><input type=\"submit\" value=\"Submit\" id=\"sub\" class=\"button-orange\">
		       </div>";
		echo  "</form>";

     }
} else {
     echo "0 results";
}
	?>
      <div class="go">
	  <a href="account.php"><input type="button" class="button" value="Back"></a>
      </div>
</body>
</html>