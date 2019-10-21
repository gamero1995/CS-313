<?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contactUs.php">Contact us</a></li>
                    <li><a href="logIn.php">Login</a></li>
                  </ul>
                </div>
              </nav>
    <!-- <div class="navbar">
            <ul>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contactUs.html">Contact us</a></li>
                    <li><a href="logIn.html">Login</a></li>
                  </ul>
    </div> -->
    <!-- <br>
    <br>
    <div class="slide-container">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div class="image-container">
            <img src="1.jpg" class="slider-image">
            <img src="2.jpg" class="slider-image">
            <img src="3.jpg" class="slider-image">
        </div>
        
    </div>
    <div class="button-container">
            <a href="#slider-image-1" class="slider-button"></a>
            <a href="#slider-image-2" class="slider-button"></a>
            <a href="#slider-image-3" class="slider-button"></a>
    </div>
    <br>
    <br> -->
    <div>
       <h1>Services</h1>
       <div class="flex-container">
       <?php 
       foreach ($db->query('SELECT type_service_id, type_service_title FROM type_service ORDER BY id DESC') as $row)
       {
          echo '<div><h2>' . $row['type_service_title'].'</h2></div>';
       }
       ?> 
       </div>
    </div>
    

</body>
</html>