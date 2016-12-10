<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    confirmation.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8"/>
    <title>Order Confirmation</title>
</head>

<body>
    <!-- whole div -->
    <div>
        <!-- top div -->
        <div>
            <!-- top-left div -->
            <img src="images/pokemon-logo.jpg" alt="pokeshop logo"/>
            
            <!-- top-center div -->
            <div>
                <h3>Order Confirmation</h3>
            <?php
                
            ?>
            </div>
            <!-- top-right div -->
            <div>
                <a href="shop.php" class="button">Continue Shopping</a>
            </div>
        </div>
        <!-- middle div -->
        <div>
            <div>
                <h3>Your estimated deliver date is:</h3>
                <?php
                    //order date + 5 days
                    //Order #1532250234
                ?>
                <br/>
                <h3>Your shipping speed:</h3>
                <ul>
                    <li>Standard free shipping</li>
                </ul>
                <h3>Your order was sent to:</h3>
                <?php
                    // First name, last name
                    // street name, city, zipcode
                ?>
            </div>
        </div>
        <!-- bottom div -->
        <div>
            <h3>Order Details</h3>
            <?php
                //Order #1532250234
                // [Image]  [Pokemon name]  [Price]
            ?>
        </div>
    </div>
</body>
</html>