 <!DOCTYPE html>
<html>
  <head>
    <title>Fashion Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/slider.css" />
  </head>

  <body>

    <!-- header -->
    <?php require_once ("header.php"); ?>
    

    <!-- Main Slider -->
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="assets/images/woman.jfif" />
        <div class="header-text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <img src="assets/images/woman.jpg" />
        <div class="header-text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <img src="assets/images/hmgoepprod.jfif" />
        <div class="header-text">Caption Three</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="dotNav">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>

    <!-- menu-card -->
    <div class="menu-card-container">
      <div class="menu-card">
        <img class="menu-img" src="assets/images/woman2.jfif" alt="woman" />
        <div class="menu-text">WOMAN</div>
      </div>
      <div class="menu-card">
        <img class="menu-img" src="assets/images/man2.jpg" alt="man" />
        <div class="menu-text">MAN</div>
      </div>
      <div class="menu-card">
        <img class="menu-img" src="assets/images/kids2.jpg" alt="kids" />
        <div class="menu-text">KIDS</div>
      </div>
    </div>

    <!-- Category Card -->

    <div class="category-card-container">
      <h5>Shop By Category</h5>
      <div class="category-card clickable">
        <a href="men.php"></a>
        <img class="menu-img" src="assets/images/womansports.jpg" alt="woman" />
        <div class="menu-text">SPORTS WEAR</div>
      </div>
      <div class="category-card">
        <img class="menu-img" src="assets/images/daily.jpg" alt="man" />
        <div class="menu-text">DAILY WEAR</div>
      </div>
      <div class="category-card">
        <img class="menu-img" src="assets/images/kids2.jpg" alt="kids" />
        <div class="menu-text">KIDS</div>
      </div>
    </div>

    <!-- Footer -->
    <?php require_once ("footer.php"); ?>
    

    <!-- Scripts -->
    <script>
      //Slider Script
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        console.log(slides, dots);
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
  </body>
</php>
