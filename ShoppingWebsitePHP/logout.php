<?php
session_start();
session_destroy();
header('location: index.php'); //redirects back to homepage
?>
