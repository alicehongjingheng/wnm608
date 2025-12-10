<?php


function productListTemplate($r,$o) {  //r is the currently reducing value as we loop through the array. o is the current object in the loop that we're at.
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="img/$o->thumbnail" alt="">
		</div>
		<figcaption class="flex-none">
			<div class="product-text">
				<div>&dollar;$o->price</div>
				<div>$o->name</div>	
			</div>

			<div class="form-control">
				<label class="form-label">Qty</label>
				<div class="display-flex">
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<select class="form-select">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select>
					</div>
				</div>
			</div>

			<div class="form-control">
				<input type="button" class="form-button" value="Add to Cart">
			</div>
		</figcaption>
	</figure>
</a>

HTML;

}

function selectAmount($amount=1,$total=6) {
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}


function cartListTemplate($r,$o){
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,6);
return $r.<<<HTML
<div class="display-flex card-section" style="align-items: flex-start; gap: 1em;">
    <div class="flex-none">
        <img src="img/$o->thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
    </div>
    <div class="flex-stretch">
        <div style="display: flex; flex-direction: column; justify-content: space-between; height: 80px;">
            <div>
                <div>
                	<strong>$o->name</strong>
                </div>
                <div style="font-size: 0.9em; color: var(--color-neutral-dark);">Quantity: $o->amount</div>
            </div>
            <div>
                <form action="cart_actions.php?action=delete-cart-item" method="post">
                    <input type="hidden" name="id" value="$o->id">
                    <input type="submit" class="form-button inline" value="Delete" style="width: auto; padding: 0.3em 1em;">
                </form>
            </div>
        </div>
    </div>
    <div class="flex-none" style="font-weight: bold; font-size: 1.1em;">
        <div>&dollar;$totalfixed</div>
        <form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
        	<input type="hidden" name="id" value="$o->id">
			<div class="form-select" style="font-size:0.8em">
				$selectamount
			</div>
        	
        </form>
    </div>
</div>
HTML;
}


function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0975,2,'.','');
	$taxedfixed = number_format($cartprice*1.0975,2,'.','');

	return <<<HTML
	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Taxes</strong></div>
		<div class="flex-none">&dollar;$taxfixed</div>
	</div>
	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Actual Total</strong></div>
		<div class="flex-none">&dollar;$taxedfixed</div>
	</div>

	HTML;
}



function recommendedProducts($a) {
$products = array_reduce($a,'productListTemplate');
echo <<<HTML
<div class="grid gap productlist">$products</div>

HTML;
}


function recommendedAnything($limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY rand() DESC LIMIT $limit");
    recommendedProducts($result);
}

function recommendedCategory($cat,$limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `date_create` DESC LIMIT $limit");
    recommendedProducts($result);
}

function recommendedSimilar($cat,$id=0,$limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' AND `id`<>$id ORDER BY rand() DESC LIMIT $limit");
    recommendedProducts($result);
}












?>