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
            <input type="text" style="height:40px;font-size:14pt;" placeholder="First Name" id="first" name="fname"><input type="text" style="height:40px;font-size:14pt;" placeholder="Last Name" id="last" name="lname"><br><br>
            <input type="text" style="width:400px;height:40px;font-size:14pt;" placeholder="Street" id="strt" name="street"><br>  <br>          
            <input type="text" style="height:40px;font-size:14pt;" placeholder="City" id="city" name="City"><input type="text" style="height:40px;font-size:14pt;" placeholder="State" id="stat" name="state"><br><br>
            <input type="text" style="width:70px;height:40px;font-size:14pt;" placeholder="Zip" id="code" name="zip">
            <br>
            <br>
            <div>                
                <input id="button" type="submit" value="Complete Purchase">                               
            </div>                       
        </form>
        <br>
        <div>
            <input id="button" type="button" value="return To Cart" onclick="redirect()">
        </div>

            
</body>
</html>