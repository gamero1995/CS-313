<?php
// require "../dbConnect.php";
// $db = get_db();

    try
    {
      $dbUrl = getenv('DATABASE_URL');
    
      $dbOpts = parse_url($dbUrl);
    
      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');
    
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body style="height:1500px">
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">YourStyle</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li class="active"><a href="services.php">Services</a></li>
                    <li><a href="contactUs.php">Contact us</a></li>
                    <li><a href="logIn.php">Login</a></li>
                  </ul>
                </div>
              </nav>
<br>
<br>
<div>
       <h1>Facial</h1>
       <div class="flex-container">
       <?php 
       foreach ($db->query('SELECT sevices_name, services_description, services_price, type_service_id FROM services WHERE type_service_id = 6') as $row)
       {
          echo '<div><h2>' . $row['sevices_name'] . '</h2><br><p>' . $row['services_description'] . '</p><br><p><strong>Price: </strong>$' . $row['services_price'] . '</p></div>';
          
       }
       ?> 
    
       </div>
    </div>