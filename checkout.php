<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    checkout.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8"/>
    <title>Check Out</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    
    <div>
        <!-- left page div 70%-->
        <div>
            <h3>1. Your Shipping Address</h3>
            
            <h3>2. Your Billing Address</h3>
            
            <h3>3. Payment Method</h3>
            <form action="" method="post">
                Card number: <input type="number" name="cardNumberCC"/>
                <br>
                Name on card: <input type="text" name="ownerNameCC"/>
                <br>
                Expiration date:
                Month:
                <select name="expirationMonthCC">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                Year:
                <select name="expirationYearCC">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
            </form>
            
            
            <h3>Review Items and Shipping</h3>
            <!-- need php code here-->
        </div>
        <!-- right page div 30%-->
        <div>
            <!-- need php or javascript code here-->
            <h3>Your order</h3>
            <p>Items:</p>
            <p>Free Shipping & Handling:</p>
            <p>Order total:</p>
            
            <form>
                <input type="submit" value="Place your order" name="placeOrder" class="button" />
            </form>
            <a href="account.php" class="button">Go back</a>
        </div>
    </div>
    


</body>

</html>
