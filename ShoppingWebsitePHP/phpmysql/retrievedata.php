<?php
require_once 'login.php';
$connection= new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($connection->connect_error) die($connection->connect_error);

$query = "SELECT * FROM cats";
$result = $connection->query($query);
$rows = $result->num_rows;
$columns = $result->field_count;
if(!$result) die($connection->error);

echo "<table><tr> <th>Id</th>  <th>Family</th><th>Name</th><th>Age</th></tr>";

for ($j = 0; $j < $rows; ++$j)
{
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<tr>";
    for ($k = 0; $k < $columns; ++$k)
    {
        echo "<td>$row[$k]</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>