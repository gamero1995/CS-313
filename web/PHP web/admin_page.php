<?php
session_start();
session_destroy();

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
    <title>Document</title>
</head>
<body>
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
    <br>
    <br>
    <div class="current_services">
        <table>
            <tr>
                <th>Types of Service</th>
                <th>ID</th>
            </tr>
        <?php 

        foreach ($db->query('SELECT type_service_id, type_service_title FROM type_service') as $row)
       {
          echo '<tr><td><a href="edit' . $row['type_service_title'] . '.php">' . $row['type_service_title'] . '</td><td>' . $row['type_service_id'] . '</td></tr>';
          
       }

       ?> 
        </table>
      
       
       </div>
    <form action="">

    </form>
    
</body>
</html>