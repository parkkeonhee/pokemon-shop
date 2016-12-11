<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    home.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
    <head>
        <meta charset="utf-8"/>
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
    </head>
    <body>
        <?php
            session_start();
            session_unset();
            session_destroy();
            session_start();
            $_SESSION['name'] = 0;
        ?>
        <h1>Welcome to the PokeShop</h1>
        <a href="login.php"><input type="button" id="btn1" value="Login" class="button"></a>
        <a href="shop.php"><input type="button" id="btn1" value="Homepage" class="button"></a>
    </body>
</html>