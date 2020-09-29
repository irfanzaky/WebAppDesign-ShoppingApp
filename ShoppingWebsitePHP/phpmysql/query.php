<?php
require_once 'login.php';
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if($connection->connect_error) die($connection->connect_error);
  
$query = "SELECT * FROM classics WHERE year = 1876";
$result = $connection->query($query);

if (!result) die($connection->error);

$rows = $result->num_rows;
/* data retrieval using data_seek */

// for ($j = 0 ; $j < $rows ; ++$j)
// {
//     $result->data_seek($j);
//     echo 'Author: ' . $result->fetch_assoc()['author'] . '<br>';
//     $result->data_seek($j);
//     echo 'Title: ' . $result->fetch_assoc()['title'] . '<br>';
//     $result->data_seek($j);
//     echo 'Category: ' . $result->fetch_assoc()['category'] . '<br>';
//     $result->data_seek($j);
//     echo 'Year: ' . $result->fetch_assoc()['year'] . '<br>';
//     $result->data_seek($j);
//     echo 'ISBN: ' . $result->fetch_assoc()['isbn'] . '<br><br>';
// }

/* fetch row */

for ($j = 0 ; $j < $rows ; ++$j)
{
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo 'Author: ' . $row['author'] . '<br>';
    echo 'Title: ' . $row['title'] . '<br>';
    echo 'Category: ' . $row['category'] . '<br>';
    echo 'Year: ' . $row['year'] . '<br>';
    echo 'ISBN: ' . $row['isbn'] . '<br><br>';
}

/* Using method in OpsDB */

// $row = $result->fetch_assoc();
// echo <<<_END
// Author: $row"['author']"
// Title: $row"['title']"
// Category: $row"['category']"
// Year: $row"['year']"
// ISBN: $row"['isbn']"
// _END;

$result->close();
$connection->close();

?>