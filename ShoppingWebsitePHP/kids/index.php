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
    <!-- header -->
    <?php require_once ("../header.php"); ?>

    <!-- Breadcrumpts -->
    <div class="breadcrumpts-container">
      <ul class="breadcrumb">
        <li><a href="../index.php">Home</a></li>
        <li>Man</li>
      </ul>
    </div>

    <!-- menu -->
    <div class="catalog">
      <div class="card-container">
        <div class="card">
          <img class="menu-img" src="../assets/images/men_jogger.jfif" alt="woman" />
          <div class="menu-text">JOGGER</div>
        </div>
        <div class="card">
          <img class="menu-img" src="../assets/images/men_tshirt.jfif" alt="man" />
          <div class="menu-text">BASIC</div>
        </div>
        <div class="card">
          <img class="menu-img" src="../assets/images/men_jeans.jfif" alt="kids" />
          <div class="menu-text">JEANS</div>
        </div>
        <div class="card">
          <img class="menu-img" src="../assets/images/men_formal.jfif" alt="kids" />
          <div class="menu-text">FORMAL</div>
        </div>
      </div>

      <!-- menu-catalog -->
      <h2>New Arrival</h2>

      <div class="item-card-container">
      <?php require_once("card-collection.php"); card_collection(); 
      $uri = $_SERVER['REQUEST_URI'];
      echo "<br>".substr($uri,-5); // Outputs: URI

      ?>

      </div> 
     <!-- Footer -->
     <?php require_once ("../footer.php"); ?>

    <!-- Scripts -->
    <script></script>
  </body>
</html>
