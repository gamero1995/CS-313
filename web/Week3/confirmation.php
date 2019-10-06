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
    <title>confirmation</title>
</head>
<body>
    <h1 id="titleCart">Order Confirmation</h1>
    <br>
    <div>
        <h2>Shipping Address</h2>
        <?php 
            echo $_POST["fname"]." ".$_POST["lname"]."<br>";
            echo $_POST["street"]."<br>";
            echo $_POST["city"].", ".$_POST["state"]." ".$_POST["zip"]."<br>";
            ?>
    </div>
    <div>
        <table>
        <tr>
            <th>Item</th>
            <th>Price</th> 
        </tr>
        <?php
        $ironMan= "Iron Man.jpg";
        $Dragon= "dragon.jpg";
        $Hersheys= "Hersheys.jpg";
        foreach ($_SESSION['cart'] as $i => $value) {
            if ($_SESSION['cart'][$i][0] == "Iron Man Hot Wheels"){
                echo "<tr>";
                echo "<td><img src='$ironMan' 'height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'></td>";
                echo "<td><p>$". $_SESSION['cart'][$i][1] . "</p></td>";
                echo "<tr>";
            } 
            elseif ($_SESSION['cart'][$i][0] == "Ultimate Dragon Hot Wheels") {
                echo "<tr>";
                echo "<td><img src='$Dragon' 'height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'></td>";
                echo "<td><p>$". $_SESSION['cart'][$i][1] . "</p></td>";
                echo "<tr>";
            } 
            else {
                echo "<img src='$Hersheys' height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'>";
                echo "<tr>";
                echo "<td><img src='$Dragon' 'height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'></td>";
                echo "<td><p>$". $_SESSION['cart'][$i][1] . "</p></td>";
                echo "<tr>";
            }
            
        }   
        ?>     
    </table>

</div>

</body>
</html>
