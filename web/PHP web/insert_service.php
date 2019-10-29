<?php
$service = $_POST['service'];
$service_description = $_POST['service_description'];
$price = $_POST['service_price'];
$id = $_POST['id'];

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

try
{
   $query = 'INSERT INTO services(sevices_name, services_description, services_price, type_service_id) VALUES(:service_name, :service_description, :service_price, :id)';
   $statement = $db->prepare($query);
   $statement->bindValue(':service_name', $service);
   $statement->bindValue(':service_description', $service_description);
   $statement->bindValue(':service_price', $price);
   $statement->bindValue(':id', $id);
   $statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: admin_page.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>