<?php
$type = $_POST['type'];
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
   $query = 'INSERT INTO type_service(type_service_title, type_service_id) VALUES(:type, :id)';
   $statement = $db->prepare($query);
   $statement->bindValue(':type', $type);
   $statement->bindValue(':id', $id);
   $statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

$myfile = fopen("edit" . $type. ".php", "w") or die("Unable to open file!");

echo copy("editPedicure.php", "edit" . $type. ".php"); 

header("Location: admin_page.php?typeID=$id");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>