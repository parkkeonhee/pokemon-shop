<!doctype html>
<!--
    Created by Kenny Nguyen, Keon Hee Park, and Rashidat Akande
    inventory.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: December 12, 2016
-->
<html lang="en-US">
    <head>
        <meta charset="utf-8"/>
        <title>Shop</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="icon" type="image/x-icon" href="images/pokeball.ico"/>
    </head>
    <body>
        
        <?php
            session_start();
            $user = $_SESSION['name'];
            
            echo '<div class="right">
                    <a href="account.php">
                        <input type="button" id="btn1" value="Account" class="button-orange"/>
                    </a>
                </div>';
            echo '<div class="center">
                    <img src="images/pokestop.png" alt="pokestop"/>
                </div>';
            if($user===0) {
                
            }else{
                echo "<p class='user'>You are logged in as Trainer <b>" . $user . "</b>!</p>";
            }
            
            $servername = "localhost";
            $username = "knguyen74";
            $password = "knguyen74";
            $dbname = "knguyen74";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql1 = "SELECT id, name, description, img, price, type, stock FROM products";
            $result1 = $conn->query($sql1);
            
            if ($result1->num_rows > 0) {
                // output data of each row
                while($row = $result1->fetch_assoc()) {
                    $id=$row["id"];
                    $name=$row["name"];
                    $description=$row["description"];
                    $img=$row["img"];
                    $price=$row["price"];
                    $type=$row["type"];
                    $stock=$row["stock"];
                    
                    echo '<form action="item-page.php" method="post">   
                            <input name="id" class="makehidden" type="text" value="'.$id.'">
                            <div>
                                <img src="images/pokedex/'.$img.'" alt='.$name.'/>
                                <input type="submit" class="button" value="'.$name.' ($'.$price.')"/>
                            </div>
                        </form>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
    </body>
</html>