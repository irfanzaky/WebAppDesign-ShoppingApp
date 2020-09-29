<?php
require_once 'login.php';
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
if($connection->connect_error) die($connection->connect_error);

$query = "CREATE TABLE cats (
id SMALLINT NOT NULL AUTO_INCREMENT,
family VARCHAR(32) NOT NULL,
name VARCHAR(32) NOT NULL,
age TINYINT NOT NULL,
PRIMARY KEY (id)
)";

$result=$connection->query($query);

if(!$result) die("Database access failed: ".$connection->error);
else echo "Table cats has been created YAY!!!";

$connection->close();
?>