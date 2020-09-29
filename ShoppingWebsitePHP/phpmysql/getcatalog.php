<?php
require_once 'login.php';
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
if($connection->connect_error) die ($connection->connect_error);

$query = "SELECT * FROM catalog WHERE category = 'casual'";
$result = $connection->query($query);

if(!$result) die($connection->error);


$columns = $result->field_count;
var_dump($result);
if($result->num_rows){
    while($row = $result->fetch_assoc() )
    {
        
        echo "gender is: $row[gender] $row[gender]:<br> category is: $row[category] <br> price is $row[price] <br>";

        // $subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";
        // $subresult = $connection->query($subquery);
        
        // if(!$subresult) die($connection->error);
        
        // $subrow = $subresult->fetch_array(MYSQLI_NUM);
        
        // echo " '$subrow[1]' by $subrow[0]<br>";
    }
}
$connection->close();
