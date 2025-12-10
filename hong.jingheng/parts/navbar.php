<?php
include_once "lib/php/functions.php";
?>

<base href="http://jhongdesign.com/aau/wnm608/hong.jingheng/">

<link rel="stylesheet" href="lib/css/styleguide.css">
<link rel="stylesheet" href="lib/css/gridsystem.css">
<link rel="stylesheet" href="css/storetheme.css">

<link href="https://fonts.googleapis.com/css2?family=Lora:opsz,wght@8..72,400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/kxj0zgi.css"> <!-- Fields -->


<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>Verdant Living</h1>
		</div>
		<div class="flex-stretch"></div>
		<div class="flex-none menu-button">
			<label for="menu">&equiv;</label>
		</div>
		<nav class="nav nav-flex flex-none">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Product</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge() ?></span>
				</a></li>
			</ul>
		</nav>
	</div>
</header>