<?php
require_once 'login.php';
$connection = new mysqli($db_localhost, $db_username, $db_password, $db_database);
if($connection->connect_error) die ($connection->connect_error);

$query = "SELECT * FROM catalog";
$result = $connection->query($query);

if(!$result) die($connection->error);

$rows = $result->num_rows;
$columns = $result->field_count;

for($j = 0; $j < $rows; ++$j)
{
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "$row[0] purchased ISBN $row[1]:<br>";
    
//     $subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";
//     $subresult = $connection->query($subquery);
    
//     if(!$subresult) die($connection->error);
    
//     $subrow = $subresult->fetch_array(MYSQLI_NUM);
    
//     echo " '$subrow[1]' by $subrow[0]<br>";
// 
}