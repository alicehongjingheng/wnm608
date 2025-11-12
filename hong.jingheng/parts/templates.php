<?php


function productListTemplate($r,$o) {  //r is the currently reducing value as we loop through the array. o is the current object in the loop that we're at.
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="img/$o->thumbnail" alt="">
		</div>
		<figcaption class="flex-none">
			<div>&dollar;$o->price</div>
			<div>$o->name</div>

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

function cartListTemplate($r,$o){
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		&dollar;$o->price
	</div>
</div>

HTML;}





?>