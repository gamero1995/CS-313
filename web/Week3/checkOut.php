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
    <title>Check Out</title>
    <script>
        function redirect() {
            window.location.href="viewCart.php";
        };        
    </script>
</head>
<body>
    <h1 id="titleCart">Check Out</h1>
    <br>
    <br>
    <br>
    <form action="confirm.php" method="post">
            <h1>Shipping Address</h1>
            <input type="text" placeholder="First Name" id="first" name="fname"><input type="text" placeholder="Last Name" id="last" name="lname">
            <input type="text" placeholder="Street" id="strt" name="street">            
            <input type="text" placeholder="city" id="cit" name="city">
            <input type="text" placeholder="State" id="stat" name="state">
            <input type="text" placeholder="Zip Code" id="code" name="zip">
            <div>                
                <input id="button" class="submit_checkout" type="submit" value="Complete Purchase">                               
            </div>                       
        </form>
        <div>
            <input id="button" class="cancel_checkout" type="button" value="return To Cart" onclick="redirect()">
        </div>

            
</body>
</html>