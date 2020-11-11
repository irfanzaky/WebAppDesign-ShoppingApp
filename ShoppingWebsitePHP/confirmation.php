

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
require_once('server.php'); 
?>
    <div class="wrapper">
    <div class="cart-title">
        <h1>Order Confirmed,</h1>
        <p> We've send confirmation to your email</p>
    </div>
    
    <div class="cart-page">
    <table class="cart-table">
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>SubTotal</th>
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
                <img src=<?php echo substr($values['item_img'], 1); ?> />
                <div class="product-info-2">
                    <p> <?php echo $values["item_name"]; ?></p>
                    <p>Color: <?php echo $values["item_color"]; ?></p>
                    <p>Size: <?php echo $values["item_size"]; ?></p>
                    <p>Remarks: <?php echo $values["remarks"]; ?></p>
                    <p>Price: $ <?php echo $values["item_price"]; ?></p>
                </div>
            </div>
            <td><?php echo $values["item_quantity"]; ?></td>

            <td class="cartPrice">$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2) ?></td>
            
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
            <div class="payment-type">
                <strong><p>Payment Method</p></strong>
            </div>
        </td>
        <td class="subtotal"> Mastercard</td>
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