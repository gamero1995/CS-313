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
    <title>Confirmation</title>
</head>
<body>
    <h1 id="titleCart">Order Confirmation</h1>
    <br>
    <div>
        <h2>Shipping Address</h2>
        <?php 
            echo htmlspecialchars($_POST["fname"])." ".htmlspecialchars($_POST["lname"])."<br>";
            echo htmlspecialchars($_POST["street"])."<br>";
            echo htmlspecialchars($_POST["city"]).", ".htmlspecialchars($_POST["state"])." ".htmlspecialchars($_POST["zip"])."<br>";
            ?>
    </div>
    <br>
    <br>
    <div id="table">
        <table style="width:100%">
        <tr>
            <th>Item</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php
        $ironMan= "Iron Man.jpg";
        $Dragon= "dragon.jpg";
        $Hersheys= "Hersheys.jpg";
        $total = 0;
        foreach ($_SESSION['cart'] as $i => $value) {
            if ($_SESSION['cart'][$i][0] == "Iron Man Hot Wheels"){
                echo "<tr>";
                echo "<td><img src='$ironMan' 'height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'></td>";
                echo "<td><p>". $_SESSION['cart'][$i][0] . "</p></td>";
                echo "<td><p>$". $_SESSION['cart'][$i][1] . "</p></td>";
                echo "<tr>";
                $total += $_SESSION['cart'][$i][1];
            } 
            elseif ($_SESSION['cart'][$i][0] == "Ultimate Dragon Hot Wheels") {
                echo "<tr>";
                echo "<td><img src='$Dragon' 'height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'></td>";
                echo "<td><p>". $_SESSION['cart'][$i][0] . "</p></td>";
                echo "<td><p>$". $_SESSION['cart'][$i][1] . "</p></td>";
                echo "<tr>";
                $total += $_SESSION['cart'][$i][1];
            } 
            else {
                echo "<tr>";
                echo "<td><img src='$Hersheys' 'height='150px' width='150px' alt='" . $_SESSION['cart'][$i][0] . "'></td>";
                echo "<td><p>". $_SESSION['cart'][$i][0] . "</p></td>";
                echo "<td><p>$". $_SESSION['cart'][$i][1] . "</p></td>";
                echo "<tr>";
                $total += $_SESSION['cart'][$i][1];
            }
            
        }   
        ?>     
    </table>
    <?php
    echo "<h3>Total Price: $" . $total . "</h3>";
    ?>

</div>


</body>
</html>
