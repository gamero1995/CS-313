<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
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
    <h1 id="title">Hot Wheels Garage</h1>
    <br>
    <a id="button" href="browse.php">Home</a>
    <a id="button" href="viewCart.php">Cart</a>
    <br>
    <br>
    <br>
      <div class="flex-container">
          <form action="addingCart.php" method="post">
        <div>
            <img src="Iron Man.jpg" alt="Iron Man" height="200px" width="200px">
            <p>Iron Man Hotwheels</p>
            <p>Price: $50.00</p>
            <input type="hidden" value="50" name="price">
                    <input type="hidden" value="Iron Man Hot Wheels" name="product">                    
                    <input type="submit" value="Add To Cart">
        </div>
    </form>
    <form class="cart_form" action="addingCart.php" method="post">
        <div>
            <img src="dragon.jpg" alt="Dragon" height="200px" width="200px">
            <p>Ultimate Dragon Hot Wheels</p>
            <p>Price: $60.00</p>
            <input type="hidden" value="60" name="price">
                    <input type="hidden" value="Ultimate Dragon Hot Wheels" name="product">                    
                    <input type="submit" value="Add To Cart">
        </div>
    </form>
    <form class="cart_form" action="addingCart.php" method="post">
        <div>
            <img src="Hersheys.jpg" alt="Hersheys" height="200px" width="200px">
            <p>Hershey Hot Wheels</p>
            <p>Price: $350.00</p>
            <input type="hidden" value="350" name="price">
                    <input type="hidden" value="Hershey Hot Wheel's" name="product">                    
                    <input type="submit" value="Add To Cart">
        </div>  
    </form>
      </div>
    </form>
</body>
</html>