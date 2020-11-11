

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cssfile_1.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/slider.css" />
    <title>FashionStore: Cart</title>
</head>
<body>

<!-- header -->
<?php require_once ("header.php"); 
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
        'item_color'       => $_POST["qty"],
        'item_size'       => $_POST["size"],
        'item_img'       => $_POST["img"],
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
            'item_color'       => $_POST["qty"],
            'item_size'       => $_POST["size"],
            'item_img'       => $_POST["img"],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
?>
    <div class="wrapper">
    <div class="cart-title">
        <h1>Cart</h1>
    </div>
    <div class="cart-page">
    <table class="cart-table">
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>SubTotal</th>
            <th>Delete</th>
        </tr>
        <?php   
        $total = 0;  
        if(!empty($_SESSION["shopping_cart"]))  
        {  
            $total = 0;  
            foreach($_SESSION["shopping_cart"] as $keys => $values)  
            {  
        ?> 
        <tr  class="cart-row">
            <td>
            <div class="product-info-1">
                <img src="http://fakeimg.pl/150/e5e5e5/adadad/?text=IMG" />
                <div class="product-info-2">
                    <p><?php echo $values["item_name"]; ?></p>
                    <small>Price: $ <?php echo $values["item_price"]; ?></small>
                </div>
            </div>
            <td><input class="cartQty" type="number" value="<?php echo $values["item_quantity"]; ?>" min="1"></td>

            <td class="cartPrice">$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2) ?></td>
            
            <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>
            </td>
        </tr>
    
        <?php  
            $total = $total + ($values["item_quantity"] * $values["item_price"]);  
        }}  
        ?>  
        </table>  
    <div class="total-price">
    <table class="total-price-table">
    <tr>
        <td>
            <form action="orderconfirmation.php" method="POST">
            <div class="payment-type">
                <strong><p>Payment Method</p></strong>
                <input name = "payment-method" type="radio" value="mastercard" required/><label>MasterCard</label>
                <input name = "payment-method" type="radio" value="paypal" required/><label>Paypal</label>
            </div>
        </td>
    </tr>

    <tr>
    <td><strong>Subtotal</strong></td>
        <td class="subtotal">$ <?php echo number_format($total, 2); ?></td>
    </tr>

    <tr>
    <td><strong>Delivery Fee</strong></td>
        <td>$20.00</td>
    </tr>

    <tr>
    <td><strong>Total</strong></td>
        <td class="total" >$ <?php echo number_format($total + 20, 2); ?></td>
        <input type="hidden" name="total-price" class="total-hidden" value="0" >
    </tr>

    <tr>
        <td colspan=2>
            <div class="checkout-button">
                <button type="submit" class="btn" name = "checkout">Checkout</button>
            </div>
        </td>
    </form>
    </tr>

    </table>

    </div>

                    
         </div> <!--End of wrapper-->
        
          <!-- Footer -->
    <?php require_once ("footer.php"); ?>
</body>
</html>