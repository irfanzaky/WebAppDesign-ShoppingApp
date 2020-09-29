<?php
require_once 'login.php';
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
if($connection->connect_error) die($connection->connect_error);

$query = "DROP TABLE cats";
$result = $connection->query($query);

if(!$result) die($connection->error);
else echo " Table is succuessfully deleted";
$query->close();
$result->close();
?>