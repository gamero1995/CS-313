<?php

$uname = "admin";
$pwd = "admin";

session_start();

if(isset($_SESSION['uname']))
{
    echo "<script>location.href='admin_page.php'</script>";
}
else{
    if($_POST['uname']== $uname && $_POST['pwd']== $pwd){
        $_SESSION['uname'] = $uname;
        echo "<script>location.href='admin_page.php'</script>";
    }
    else{
        echo "<script>alert('Incorret Password or username. Stop Hacking!')</script>";
        echo "<script>location.href='logIn.php'</script>";
    }
}
?>