<?php
session_start();
unset($_SESSION['cart'][$_POST["product_index"]]);
header("Location: viewCart.php");
die();
?>
