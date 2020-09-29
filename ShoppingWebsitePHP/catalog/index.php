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
        <li><a href="../man">Man</a></li>
        <li>Jeans</li>
      </ul>
    </div>

    <!-- catalog -->
    <div class="catalog">
      <h5>Jeans</h5>
      <div class="card-container card-wrap">
        <?php require_once ("item-card.php"); 
          card("Water-repellent car coat","S$84.85","S, M, L", "../assets/images/water.jfif","");
          card("Shirt Regular Fit","S$29.955","XS, S, M, L","../assets/images/shirt.jfif","");
          card("Cargo Jogger","S$34.85","XS, S, M, L","../assets/images/cargo.jfif","" );
          card("Cotton Cardigan","S$36.15","XS, S, M, L","../assets/images/cardigan.jfif","");
          card("Cotton Cardigan","S$36.15","XS, S, M, L","../assets/images/cardigan.jfif","");
          card("Water-repellent car coat","S$84.85","S, M, L", "../assets/images/water.jfif","");
          card("Shirt Regular Fit","S$29.955","XS, S, M, L","../assets/images/shirt.jfif","");
          card("Cargo Jogger","S$34.85","XS, S, M, L","../assets/images/cargo.jfif" ,"");
        ?>

      </div>

      <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
      </div>
    </div>

    <!-- Footer -->
    <?php require_once ("../footer.php"); ?>

    <!-- Scripts -->
    <script></script>
  </body>
</html>
