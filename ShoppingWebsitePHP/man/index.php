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
      <h5>New Arrival</h5>
      <div class="card-container">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

        <?php require_once ("item-card.php"); 
          card("Water-repellent car coat","S$84.85","S, M, L", "../assets/images/men_water.jfif","../sdflog");
          card("Shirt Regular Fit","S$29.955","XS, S, M, L","../assets/images/men_shirt.jfif","../catalog");
          card("Cargo Jogger","S$34.85","XS, S, M, L","../assets/images/men_cargo.jfif" ,"../catalog");
          card("Cotton Cardigan","S$36.15","XS, S, M, L","../assets/images/men_cardigan.jfif","../catalog");
          
        ?>

        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>

      <h5>Most Popular Item</h5>
      <div class="card-container">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

        <?php require_once ("item-card.php"); 
          card("Water-repellent car coat","S$84.85","S, M, L", "../assets/images/men_jogger.jfif","../catalog");
          card("Shirt Regular Fit","S$29.955","XS, S, M, L","../assets/images/men_tshirt.jfif","../catalog");
          card("Cargo Jogger","S$34.85","XS, S, M, L","../assets/images/men_jeans.jfif" ,"../catalog");
          card("Cotton Cardigan","S$36.15","XS, S, M, L","../assets/images/men_formal.jfif","../catalog");
          
        ?>
        
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </div>

     <!-- Footer -->
     <?php require_once ("../footer.php"); ?>

    <!-- Scripts -->
    <script></script>
  </body>
</html>
