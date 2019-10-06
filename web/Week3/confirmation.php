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
</body>
</html>