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
    <title>Create Account </title>
    <link rel="stylesheet" type="text/css" href="../css/createAcc.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
    
    <h2>Create Account</h2>
      First name:<input type="text" name="firstName">
      <br>
      Last name:<input type="text" name="lastName">
      <br>
      Username:<input type="text" name="userName">
      <br>
      Password:<input type="text" name="passWord">
      <br>
      Confirm Password:<input type="text" name="confirmPassword">
      <br>
      Email address:<input type="text" name="emailAddress">
      <br>
      Phone number: <input type="text" name="zipCode">
      
      <h3>Shipping address</h3>
      Street address: <input type="text" name="ship-streetAddress">
      <br>
      City: <input type="text" name="ship-city">
      <br>
      County: <input type="text" name="ship-county">
      <br>
      State: <input type="text" name="ship-usa-State">
      <br>
      Zip code: <input type="text" name="ship-zipCode">
      
      <h3>Billing address</h3>
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
      
      <a href="../login.php" class="button">Go back</a>
</body>
</html>