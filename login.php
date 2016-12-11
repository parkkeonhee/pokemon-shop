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
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="icon" type="image/x-icon" href="images/pokeball.ico">
    </head>
    <body class="pokemon-bg">
        <?php
            session_start();
            session_unset();
            session_destroy();
        ?>
        <div class="center">
            <img src="images/pokemon-logo.jpg" alt="pokemon logo" />
            <form action="login2.php" method="post">
                <p>
                    <h1>User Login</h1>
                    Username: <input type="text" name="userName" value="Ash" />
                    <br> Password: <input type="password" name="password" value="Ketchum"/>
                    <!--<br> Admin access: <input type="checkbox" name="adminOrNot" />-->
                </p>
                <input type="submit" value="Login" name="submit" class="button" />
            </form>
            <a href="admin-pages/create-account.php" class="button-orange">Create an Account</a>
        </div>
    </body>
</html>