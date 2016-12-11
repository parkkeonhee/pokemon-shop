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
    <meta charset="utf-8">
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link rel="icon" type="image/x-icon" href="../images/pokeball.ico"/>
</head>

<body>
    
    <h2>Create Account</h2>
      
	  <form action="create-account2.php" method="post">
	        <div class="block">
	      <div>
      <label>First name:</label>
      <input type="text" name="firstName">
      <br>
      <label>Last name:</label>
      <input type="text" name="lastName">
      <br>
      <label>Username:</label>
      <input type="text" name="userName">
      <br>
      <label>Password:</label>
      <input type="text" name="passWord"><!--change type to password later-->
      <br>
      <label>Confirm Password:</label>
      <input type="text" name="confirmPassword"><!--change type to password later-->
      <br>
      <label>Email address:</label>
      <input type="text" name="emailAddress">
      <br>
      <label>Phone number:</label><input type="text" name="phone"><!--10 digits only-->
      </div>
      
      <h3>Shipping address</h3>
      <div>
      <label>Street address:</label> 
      <input type="text" name="ship-streetAddress">
      <br>
     <label> City:</label> 
     <input type="text" name="ship-city">
      <br>
      <label>County:</label>
      <input type="text" name="ship-county">
      <br>
      <label>State:</label> 
      <input type="text" name="ship-usa-State">
      <br>
      <label>Zip code:</label>
      <input type="text" name="ship-zipCode">
      </div>
      
      <h3>Billing address</h3>
      <div>
          <label>Street address:</label>
          <input type="text" name="bill-streetAddress">
          <br>
          <label>City:</label>
          <input type="text" name="bill-city">
          <br>
          <label>County:</label>
          <input type="text" name="bill-county">
          <br>
          <label>State:</label>
          <input type="text" name="bill-usa-State">
          <br>
          <label>Zip code:</label>
          <input type="text" name="bill-zipCode">
      </div>
      <br>
      <div class="sub">
          <a href="../login.php">
              <input id="sub" type="button" value="Submit" class="button">
          </a>
      </div>
      </div>
      </form>
      <div class="go">
      <a href="../login.php" class="button-orange">Go back</a>
      </div>
</body>
</html>