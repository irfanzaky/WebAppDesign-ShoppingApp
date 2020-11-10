<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssfile_1.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/slider.css" />
    <script src="js/cart.js" async></script>
    <title>Da Mario: Cart</title>
</head>
<body>

    <!-- header -->
    <?php require_once ("header.php"); ?>

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

<!-- begin simple product -->

                                        <!-- <tr  class="cart-row">
                                            <td>
                                                <div class="product-info-1">
                                                    <img src="http://fakeimg.pl/150/e5e5e5/adadad/?text=IMG" />
                                                    <div class="product-info-2">
                                                        <p>Product Name</p>
                                                        <small>Price: $25.00</small>
                                                    </div>
                                                </div>
                                                <td><input class="cartQty" type="number" value="2" min="1"></td>
                                                <td class="cartPrice">$50.00</td>
                                                <td><button class='remove' type='button'>X</button></td>
                                                </td>
                                            

                                    </tr> -->
                                    <!-- end simple product -->

                                    <!-- begin simple product -->

                                    <!-- <tr class="cart-row">
                                        <td >
                                            <div class="product-info-1">
                                                <img src="http://fakeimg.pl/150/e5e5e5/adadad/?text=IMG" />
                                                <div class="product-info-2">
                                                    <p>Product Name</p>
                                                    <small>Price: $25.00</small>
                                                </div>
                                            </div>
                                            <td><input class="cartQty" type="number" value="2" min="1"></td>
                                            <td class="cartPrice"> $50.00</td>
                                            <td><button class='remove' type='button'>X</button></td>
                                        </td>
                                    


                            </tr> -->
                            <!-- end simple product -->

                               <!-- begin simple product -->

                               <!-- <tr class="cart-row">
                                <td>
                                    <div class="product-info-1">
                                        <img src="http://fakeimg.pl/150/e5e5e5/adadad/?text=IMG" />
                                        <div class="product-info-2">
                                            <p>Product Name</p>
                                            <small>Price: $25.00</small>
                                        </div>
                                    </div>
                                                                
                                <td><input class="cartQty" type="number" value="2" min="1"></td>
                                <td class="cartPrice">$50.00</td>
                                <td><button class='remove' type='button'>X</button></td>
                                </td>


                    </tr> -->
                    <!-- end simple product -->

                    </table>
                </div> <!--End of table div-->


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
                                <td class="subtotal">$0.00</td>
                            </tr>

                            <tr>
                            <td><strong>Delivery Fee</strong></td>
                                <td>$20.00</td>
                            </tr>

                            <tr>
                            <td><strong>Total</strong></td>
                                <td class="total" >$0.00</td>
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