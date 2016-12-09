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
      First name:<br>
      <input type="text" name="firstName">
      <br>
      Last name:<br>
      <input type="text" name="lastName">
      <br>
      Username:<br>
      <input type="text" name="userName">
      <br>
      Password:<br>
      <input type="text" name="passWord">
      <br>
      Confirm Password:<br>
      <input type="text" name="confirmPassword">
      <br>
      Email address:<br>
      <input type="text" name="emailAddress">
      
      <h3>Shipping address</h3>
      Street address:<br>
      <input type="text" name="streetAddress">
      City:<br>
      <input type="text" name="city">
      County:<br>
      <input type="text" name="county">
      State:<br>
      <input type="text" name="usa-State">
      Zip code:<br>
      <input type="text" name="zipCode">
      </p>
      <input type="submit" value="Submit">
      
      <a href="../login.php" class="button">Go back</a>
</body>
</html>