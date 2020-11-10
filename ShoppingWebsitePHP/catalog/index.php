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
        <li><?php echo (isset($_GET['gender']))? $_GET['gender'] : 'catalog'?></li>
      </ul>
    </div>

    <!-- menu -->
    <div class="catalog">
      <div class="card-container">
        <div class="card">
          <img class="menu-img" src="../assets/images/men_jeans.jfif" alt="kids" />
          <div class="menu-text">BOTTOM</div>
        </div>
        <a href="./?cat='sports'"><div class="card">
          <img class="menu-img" src="../assets/images/men_tshirt.jfif" alt="man" />
          <div class="menu-text">SPORTS</div>
        </div></a>
        <a href="./?cat='casual'"><div class="card">
          <img class="menu-img" src="../assets/images/men_jogger.jfif" alt="woman" />
          <div class="menu-text">CASUAL</div>
        </div></a>
        <a href="./?cat='formal'"><div class="card">
          <img class="menu-img" src="../assets/images/men_formal.jfif" alt="kids" />
          <div class="menu-text">FORMAL</div>
        </div></a>
      </div>

      <!-- menu-catalog -->
      <h2>New Arrival</h2>

      <div class="item-card-container card-wrap">
        <?php require_once("card-collection.php"); card_collection(); ?>
      </div> 
     <!-- Footer -->
     <?php require_once ("../footer.php"); ?>

    <!-- Scripts -->
    <script></script>
  </body>
</html>
