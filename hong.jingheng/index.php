<?php include_once "lib/php/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />


<head>

  <title>Verdant Living</title>

  <!-- Core CSS from styleguide -->
<link rel="stylesheet" href="lib/css/styleguide.css">
<link rel="stylesheet" href="lib/css/gridsystem.css">
<link rel="stylesheet" href="css/storetheme.css">

<!-- Fonts: Lora (Google) + Fields (Adobe Fonts / Typekit) -->
<link href="https://fonts.googleapis.com/css2?family=Lora:opsz,wght@8..72,400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/kxj0zgi.css">

  <?php include "parts/meta.php"; ?>

</head>
<body>

  <?php include "parts/navbar.php"; ?>

  <div class="view-window" style="background-image:url('img/plant.png')">
    <div class="container text-center" style="padding:8em 0; color:white;">
      <h1>Welcome to Verdant Living</h1>
      <h2>Make your home green, lively, and sustain</h2>
    </div>
  </div>


  <div class="container" style="margin-top:3em;">
    <h1 class="text-center brand-title">New Release</h1>
    <div class="grid gap">
      
      <div class="col-xs-12 col-md-3">
        <figure class="figure product">
          <a href="product_item.php?id=1"><img src="img/monstera_obliqua_1.png" alt="Monstera Obliqua"></a>
          <figcaption>
            <div class="caption-top">
              <div class="name"><a href="product_item.php?id=1">Monstera Obliqua</a></div>
              <div class="favorite fav">
                <input type="checkbox" id="fav_obliqua" class="hidden">
                <label for="fav-obliqua">&hearts;</label>
              </div>
            </div>
            <div class="caption-bottom">
              <div class="price">$30</div>
              <a href="product_cart.php" class="form-button sm">Add to Cart</a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-xs-12 col-md-3">
        <figure class="figure product">
          <a href="product_item.php?id=2"><img src="img/monstera_albosml_1.png" alt="Monstera Albo"></a>
          <figcaption>
            <div class="caption-top">
              <div class="name"><a href="product_item.php?id=2">Monstera Albo 1 Leaf</a></div>
              <div class="favorite fav">
                <input type="checkbox" id="fav-albo" class="hidden">
                <label for="fav-albo">&hearts;</label>
              </div>
            </div>
            <div class="caption-bottom">
              <div class="price">$25</div>
              <a href="product_cart.php" class="form-button sm">Add to Cart</a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-xs-12 col-md-3">
        <figure class="figure product">
          <a href="product_item.php?id=3"><img src="img/monstera_albosml_3.png" alt="Monstera Halfmoon"></a>
          <figcaption>
            <div class="caption-top">
              <div class="name"><a href="product_item.php?id=3">Monstera Half-Moon</a></div>
              <div class="favorite fav">
                <input type="checkbox" id="monstera-halfmoon" class="hidden">
                <label for="monstera-halfmoon">&hearts;</label>
              </div>
            </div>
            <div class="caption-bottom">
              <div class="price">$35</div>
              <a href="product_cart.php" class="form-button sm">Add to Cart</a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-xs-12 col-md-3">
        <figure class="figure product">
          <a href="product_item.php?id=4"><img src="img/hoya_kerri_1.png" alt="Hoya Kerri"></a>
          <figcaption>
            <div class="caption-top">
              <div class="name"><a href="product_item.php?id=4">Hoya Kerri</a></div>
              <div class="favorite fav">
                <input type="checkbox" id="hoya-kerri" class="hidden">
                <label for="hoya-kerri">&hearts;</label>
              </div>
            </div>
            <div class="caption-bottom">
              <div class="price">$12.99</div>
              <a href="product_cart.php" class="form-button sm">Add to Cart</a>
            </div>
          </figcaption>
        </figure>
      </div>

    </div>
  </div>


  <div class="container">
     <div class="card soft">
     <h1 class="about-title">About Verdant Living</h1>
        <div class="card soft">
          <p>
            Verdant Living offers pre-owned plants, cultivated cuttings, and unique planters. It is designed for plant lovers and home decorators who value both style and sustainability. Whether the customers are new plant parents or collectors, by giving plants and planters a second life, the store is to create a marketplace that makes plant parenthood more accessible and affordable align with their lifestyle. The purpose of this project is to extend the lifecycle of plants and planters, find them a new home, and let them shine again.
          </p>
          <a href="about.php" class="form-button sm learn-more">Learn More</a>
        </div>
    </div>
  </div>

</body>
</html>