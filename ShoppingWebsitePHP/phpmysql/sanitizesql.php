<?php 
/* not working must fix due to mysql_real_escape_string is depreciated*/

// $user = mysql_fix_string($_POST['user']);
// $pass = mysql_fix_string($_POST['pass']);
// $query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

// function mysql_fix_string($string)
// {
//     if (get_magix_quotes_gpc()) $string = stripslashes($string);
//     return mysqli_real_escape_string($con, $string);
// }

require 'login.php';
$conn = new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($conn->connect_error) die($conn->connect_error);

$query = 'PREPARE statement FROM "INSERT INTO classics VALUES(?,?,?,?,?)"';
$conn->query($query);

$query = 'SET @author = "Emily Brontë",' .
         '@title = "Wuthering Heights",' .
         '@category = "Classic Fiction",'.
         '@year = "1847",'.
         '@isbn = "9780553212587"';
$conn->query($query);

$query = 'EXECUTE statement USING @author, @title, @category, @year, @isbn';
$conn->query($query);

$query = 'DEALLOCATE PREPARE statement';
$conn->query($query);
?>
