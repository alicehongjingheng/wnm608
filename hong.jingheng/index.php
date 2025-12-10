<?php 
include_once "lib/php/functions.php"; 
include_once "parts/templates.php"


?>


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
<body class="flush">

  <?php include "parts/navbar.php"; ?>

  <div class="view-window" style="background-image:url('img/plant.png')">
    <div class="container text-center" style="padding:8em 0; color:white;">
      <h1>Welcome to Verdant Living</h1>
      <h2>Make your home green, lively, and sustain</h2>
    </div>
  </div>



  <div class="container">

      <div class="alert arrival">
        <span>💖</span> New Arrivals Are Here!
      </div>
      
    <h1 class="text-center brand-title">New Release</h1>

    <?php

    $result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='hoya' ORDER BY `date_create` DESC LIMIT 3");

    recommendedProducts($result);


    ?>

  </div>


  <div class="container">
    <h1 class="text-center brand-title">Our Recommendation</h1>

    <?php

    recommendedCategory("monstera");

    ?>

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