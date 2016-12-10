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

<body>
    
    <h2>Password Information</h2>
	  <form action="" method="post">
	      Password:<input type="text" name="passWord"><!--change type to password later-->
	      <br>
	      Confirm Password:<input type="text" name="confirmPassword"><!--change type to password later-->
	      <br>
	      <input type="submit" value="Submit">
	  </form>
	  
	  <h2>Contact Information</h2>
	  <form action="" method="post">
	      Email address:<input type="text" name="emailAddress">
	      <br>
	      Phone number: <input type="text" name="phone"><!--10 digits only-->
      </form>
      
      <form action="" method="post">
      <h2>Shipping address</h2>
      Street address: <input type="text" name="ship-streetAddress">
      <br>
      City: <input type="text" name="ship-city">
      <br>
      County: <input type="text" name="ship-county">
      <br>
      State: <input type="text" name="ship-usa-State">
      <br>
      Zip code: <input type="text" name="ship-zipCode">
      </form>
      
      <h3>Billing address</h3>
      <form action="" method="post">
      Street address: <input type="text" name="bill-streetAddress">
      <br>
      City: <input type="text" name="bill-city">
      <br>
      County: <input type="text" name="bill-county">
      <br>
      State: <input type="text" name="bill-usa-State">
      <br>
      Zip code: <input type="text" name="bill-zipCode">
      </p>
      <input type="submit" value="Submit">
      </form>
      
      <a href="login.php" class="button">Go back</a>
</body>
</html>