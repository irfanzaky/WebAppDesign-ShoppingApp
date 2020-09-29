<?php
require_once 'login.php';
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
if($connection->connect_error) die($connection->connect_error);

$query = "DELETE FROM cats WHERE name='Growler'";
$result = $connection->query($query);

if(!$result) die($connection->error);
else echo "Data is succuessfully deleted";
$query->close();
$result->close();
?>