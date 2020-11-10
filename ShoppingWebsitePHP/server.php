<?php

session_start();


$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
} //End of MySQL connection.


// Register button activation
if(isset($_POST['register'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $postalcode = $_POST["postal"];

    $password = md5($password);

    $sql = "INSERT INTO users (name, email, password, address, postalcode)
                VALUES ('$name', '$email','$password', '$address', '$postalcode')";


        if ($conn->query($sql) === FALSE) {
            echo "Data not added";
          }
}

// Login button activation
if(isset($_POST['login'])) {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $password = md5($password);
    $sql_1 = "SELECT * FROM users WHERE email ='$email' AND password ='$password'";
    $result = mysqli_query($conn, $sql_1);

    if(mysqli_num_rows($result)== 1) {    
        // log in user
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $_SESSION['loginName'] = $name;
        header('location: index.php');
    } else {
        header('location: loginform.php?error=1');
    }

}


// Checkout button adding data to database
if(isset($_POST['checkout'])) {
    $totalPrice = $_POST['total-price'];
    $name = $_SESSION['loginName'];
    $today = date("Ymd");
    $rand =strtoupper(substr(uniqid(sha1(time())),0,4));
    $unique = $today . $rand;  

    $sql = "INSERT INTO custorder (orderid, name, totalprice) VALUES ('$unique', '$name', '$totalPrice')";

    if ($conn->query($sql) === FALSE) {
        echo ("Error Description: " .mysqli_error($conn));
      }
    
}



// Get other user info once session is not empty
$query = "SELECT * FROM users WHERE name = '{$_SESSION['loginName']}' ";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

while($row = mysqli_fetch_assoc($result)){
    $uname = $row['name'];
    $uemail = $row['email'];
    $uaddress = $row['address'];
    $upostal = $row['postalcode'];
}



?>