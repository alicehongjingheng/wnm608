<?php
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
$cart_product = cartItemById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add to Cart Page</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->name ?> to your cart!</h2>
			
			<?php if($cart_product && isset($cart_product->amount)): ?>
				<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>
			<?php else: ?>
				<p><?= $product->name ?> has been added to your cart.</p>
			<?php endif; ?>

			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php" class="form-button">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="product_cart.php" class="form-button">Go To Cart</a></div>
			</div>
		</div>
	</div>

</body>
</html>