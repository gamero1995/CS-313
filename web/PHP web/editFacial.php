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
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">YourStyle</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contactUs.php">Contact us</a></li>
                    <li class="active"><a href="logIn.php">Login</a></li>
                  </ul>
                </div>
              </nav>
    <br>
    <br>
    <br>
    <br>
        <table class="types" width="400">
            <tr>
                <th style="text-align: center;" >Service Name</th>
                <th style="text-align: center;" >Service Description</th>
                <th style="text-align: center;" >Service Price</th>
                <th style="text-align: center;" >ID</th>
            </tr>
        <?php 
        $id = $_GET['typeID'];

        foreach ($db->query('SELECT sevices_name, services_description, services_price, services_id FROM services WHERE type_service_id = ' . $id . '') as $row)
       {
          echo '<tr><td>' . $row['sevices_name'] . '</td><td>' . $row['services_description'] . '</td><td>' . $row['services_price'] . '</td><td>' . $row['services_id'] . '</td></tr>';
          
       }

       ?> 
        </table>
        <br>
        <div class="insert_type">
		<form action="insert_service.php" method="POST">
                <label for="title">Add Service</label>
                <input type="text" class="form-control" name="service" placeholder="Service Name">
                <br>
                <input type="text" class="form-control" name="service_description" placeholder="Service Description">
                <br>
                <input type="text" class="form-control" name="service_price" placeholder="Price">
                <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
				<button type="submit" class="btn btn-primary">Add</button>
			</form>
        </div>
        <br>
        <div class="insert_type">
		<form action="remove_service.php" method="POST">
                <label for="title">Remove Service</label>
                <input type="text" class="form-control" name="id" placeholder="Id">
                <br>
				<button type="submit" class="btn btn-primary">Remove</button>
			</form>
    </div>
    <br>
    <form>
  <input class="cancelbtn" type="button" value="Go back!" onclick="history.back()">
</form>
    
</body>
</html>