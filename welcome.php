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
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
	<?php
        session_start();
        session_unset();
        session_destroy();
		session_start();
		$_SESSION['name'] = 0;
    ?>
    <!-- top div 30%-->
    <div>
        <div class="one">
            <a href="login.php" class="button">Cart</a>
            <a href="shop.php" class="button">Account</a>
        </div>
        <div class="two">
            <img src="images/pokestop.png" alt="pokestop"/>
        </div>
    </div>
    
    <!-- div: rest of bottom page 70% -->
    <div>
        <div>
        <!-- BOTTOM-LEFT-DIV table -->
        <h4>Refine Search</h4>
        <form action="" method="post">
            Price range: <input type="number" name="search-min-price" min="0" max="1000" step="0.01">
            to <input type="number" name="search-max-price" min="0" max="1000" step="0.01">
            <input type="submit" value="Submit">
        </form>
        <form action="" method="post">
            Browse Inventory by Name: <input type="search" name="search-name"/>
            <input type="submit" value="Submit">
        </form>
        </div>
        <!-- end of bottom left div table (refine search category) -->
        <!-- start of bottom right div table (table pokemon category) -->
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                <td>001</td>
                <td>IMAGE HERE</td>
                <td>Bulbasaur</td>
                <td>$24.70</td>
            </table>
        </div>
        <!-- end of bottom right category -->
    </div>
    <!-- end of bottom page category 70% -->
    
</body>
</html>