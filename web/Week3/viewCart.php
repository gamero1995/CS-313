<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="shoppingCart.css">
    <title>Hot Wheels Garage</title>
</head>
<body>
    <h1 id="titleCart">Cart</h1>
    <br>
    <a id="button" href="browse.php">Home</a>
    <a id="button" href="viewCart.php">Cart</a>
    <br>
    <br>
    <br>
    <?php 
        $ironMan= "Iron Man.jpg";
        $Dragon= "dragon.jpg";
        $Hersheys= "Hersheys.jpg";
        foreach ($_SESSION['cart'] as $i => $value) {
            echo "<div>";
            echo "<form class='cart_form' action='remove.php' method='post'>";
            echo "<div>";
            echo "<div class='description'>";
            echo "<h4>" . $_SESSION['cart'][$i][0] . "</h4>";
            echo "<p>Price: $" . $_SESSION['cart'][$i][1] . "</p>";
            echo "</div>";
            echo "<div class='product'>";
            if ($_SESSION['cart'][$i][0] == "Iron Man Hot Wheels"){
                echo "<img src='$ironMan' 'height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'>";
            } 
            elseif ($_SESSION['cart'][$i][0] == "Ultimate Dragon Hot Wheels") {
                echo "<img src='$Dragon' height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'>";
            } 
            else {
                echo "<img src='$Hersheys' height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'>";
            };            
            echo "</div>"; 
            echo "<hr>"           
            echo "<input type='hidden' name='product_index' value='$i'>";
            echo "<input type='submit' value='Remove'>";            
            echo "</form>";
            echo "</div>";
        }        
    ?>
    <br>
    <br>
    <div id="check">
        <a id="button" href="checkOut.php">Checkout</a>
    </div>
    </body>
</html>