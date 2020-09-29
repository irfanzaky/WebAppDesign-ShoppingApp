<?php
require_once 'login.php';
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
if($connection->connect_error) die($connection->connect_error);

$jeans = "rockets";
$newjeans = "'".$jeans."'";
$query = sprintf(
    "INSERT INTO catalog VALUES('','male','%s', 'Shirt Regular Fit','29.955','XS, S, M, L', 'red, green, blue', 'Blank Staples is a streetwear collection of minimalistic pieces that are the perfect canvas for your personal style and creativity. This contemporary T-shirt is made from heavy, 240 g cotton jersey for a premium handfeel. In a straight cut and oversized for a relaxed fit, it has a round, ribbed neckline and dropped shoulders. The collection consists of five pieces in four earthy colours.', 12,'./assets/images/water.jfif')", $jeans
) ;
$result = $connection->query($query);

if(!$result) die($connection->error);
else {
    echo "Query is successfully inserted<br>";
    echo "The insert id was : ".$connection->insert_id;
}
?>