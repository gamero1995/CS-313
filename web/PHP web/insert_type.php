<?php

$type = $_POST['type'];

try
{
   $query = 'INSERT INTO type_service(type_service_title) VALUES(:type)';
   $statement = $db->prepare($query);
   $statement->bindValue(':type', $type);
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