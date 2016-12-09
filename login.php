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
    <meta charset="utf-8" />
    <title>User Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="custom-bg">
    <div class="center">
        <img src="images/pokemon-logo.jpg" alt="pokemon logo" />
        <p>
            <h1>User Login</h1>
            Username: <input type="text" name="userName" value="Louis" />
            <br> Password: <input type="password" name="password" value="Henry" />
            <br> Admin access: <input type="checkbox" name="adminOrNot" />
        </p>
        <input type="submit" value="Login" name="submit" class="button" />
        <br>
        <a href="admin-pages/create-account.html" class="button-orange">Create an Account</a>
    </div>
</body>

</html>
