<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
} //End of MySQL connection.

//shopping cart
if(isset($_POST["add_to_cart"]))
{   

    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
        $count = count($_SESSION["shopping_cart"]);
        $item_array = array(
        'item_id'		=>	$_GET["id"],
        'item_name'		=>	$_POST["hidden_name"],
        'item_price'		=>	$_POST["hidden_price"],
        'item_size'       => $_POST["size"],
        'item_quantity'		=>	$_POST["qty"],
        'item_color'       => $_POST["color"],
        'item_size'       => $_POST["size"],
        'item_img'       => $_POST["img"],
        'remarks'       => $_POST["request"],
        );
        $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
        echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'		=>	$_GET["id"],
            'item_name'		=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
            'item_quantity'		=>	$_POST["qty"],
            'item_color'       => $_POST["color"],
            'item_size'       => $_POST["size"],
            'item_img'       => $_POST["img"],
            'remarks'       => $_POST["request"],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}


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
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
		if($values["item_id"] == $_GET["id"])
		{
		unset($_SESSION["shopping_cart"][$keys]);
		echo '<script>alert("Item Removed")</script>';
		echo '<script>window.location="carts.php"</script>';
		}
		}
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
    if(!empty($_SESSION["shopping_cart"]))  
    {  
        $total = 0;  
        foreach($_SESSION["shopping_cart"] as $keys => $values)  
        {  

    $totalPrice = $_POST['total-price'];
    $name = $_SESSION['loginName'];
    $today = date("Ymd");
    $rand =strtoupper(substr(uniqid(sha1(time())),0,4));
    $unique = $today . $rand;  

    print_r($values);

    $sql = "INSERT INTO custorder (id, item_id, item_name, size, color, qty, price, user, dates) VALUES ('$rand', '$values[item_name]', '$values[item_size]', '$values[item_color]', '$values[item_quantity]', '$values[item_price]','Thomas', '$today')";

    if ($conn->query($sql) === FALSE) {
        echo ("Error Description: " .mysqli_error($conn));
      }
    }}
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