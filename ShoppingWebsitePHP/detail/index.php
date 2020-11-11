<!DOCTYPE html>
<html>
<head>
    <title>Fashion Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/catalog.css" />
  </head>

  <body>
    <!-- Header -->
    <?php require_once ("../header.php"); ?>

    <!-- Breadcrumpts -->
    <div class="breadcrumpts-container">
      <ul class="breadcrumb">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../catalog">Catalog</a></li>
        <li>Details</li>
      </ul>
    </div>

    <!-- item -->
    <div class="catalog">
      <h1>Product Details</h1>
      <div class="card-container card-wrap">
        <?php 
          require_once ("item-card.php"); 
          require_once '../phpmysql/login.php';
          $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
          if($connection->connect_error) die($connection->connect_error);
          //get current existing query
          $id = (!isset($_GET['id'])) ? $id ='1001': $id = $_GET['id'];

          //get initial total number of page
          $query = "SELECT * FROM catalog " . " WHERE product_id=$id";

          $result = $connection->query($query);
          if(!$result) die($connection->error);

          $columns = $result->field_count;
          if($result->num_rows){
            $row = $result->fetch_assoc();
            card($row['name'],$row['price'],$row['size'],$row['img'], $row['product_id']);
            echo "
            <div class='detail-card'>
            <img class='menu-img' src=$row[img] alt='woman' />
             <div class='item-summary'>
              <p><b>Item name:</b> Grabs our brand new $row[name]</p>
              <p><b>Description:</b><br> It is $row[description]. <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis lobortis mi. Nulla vel iaculis ante. Integer leo augue, feugiat finibus volutpat posuere, imperdiet nec nunc. </p>
              <p><b>Current Stocks:</b> $row[stocks]</p>
              <p><b>Available Size:</b> $row[size]</p>
                          
            <div class='details-form'>
            <form action='../carts.php?action=add&id=$row[product_id]' method='POST'>
              <h2>Order Now!</h2><br>

              <label>Size</label>
              <select name='size' id='size'>
                <option value='S'>S</option>
                <option value='M'>M</option>
                <option value='L'>L</option>
                <option value='XL'>XL</option>
              </select><br>

              <label>Quantity</label>
              <input type='number' id='qty' name='qty' required placeholder='1'><br>

              <label>Color</label>
              <select name='color' id='color'>
                <option value='black'>black</option>
                <option value='white'>white</option>
                <option value='grey'>Grey</option>
              </select><br>
              <input type='hidden' name='hidden_name' value=$row[name] />
              <input type='hidden' name='hidden_price' value=$row[price] />
              <input type='hidden' name='img' value=$row[img] />

              <label>Special Request</label>
              <input type='text' id='email' name='request' placeholder='Make sure its on delivered with top quality..' ><br>

              <input type='submit' name='add_to_cart' value='Add to Cart'>
            </form>
            </div>
              </div>  
            ";
          }else {
            echo "product not available";
        }

        ?>

      </div>
    </div>

    <!-- Footer -->
    <?php require_once ("../footer.php"); ?>

    <!-- Scripts -->
    <script></script>
    <style>
      input[type=text], select {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        align:right;
      }

      input[type=number], select {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        align:right;
      }


      input[type=submit] {
        width: 80%;
        background-color: #666;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #444;
      }

}
</style>
  </body>
</html>
