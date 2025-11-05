<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php


	echo "<div> Hello World </div>";
	echo "<div> Goodbye World </div>";


	// Variables
	$a = 5;

	echo $a;


	// String Interpolation
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';


	// Number
	// Integer
	$b = 15;
	// Float
	$b = 0.576;

	$b = 10;


	// String
	$name = "Yerguy2";

	// Boolean

	$isOn = true;



	// Math
	// PEMDAS  
	echo (5 - 4) * 2;


	// Concatenation - Combine the strings together
	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a" . " = ($a+$b)</div>";
	echo "<div>$b + $a = ".($a+$b)."</div>";

	?>


	<hr>
	<div>This is my name</div>
	<div>
	<?php


	$firstname = "Jingheng";
	$lastname = "Hong";
	$fullname = $firstname." ".$lastname;

	echo $fullname;

	?>
	</div>


	<hr>
	<div>This is my name</div>
	<div>
	<?php


	$firstname = "Jingheng";
	$lastname = "Hong";
	$fullname = "$firstname $lastname";

	echo $fullname;

	?>
	</div>


	<hr>
	<?php

	// Superglobal
	// in the url add ?name=Anything
	echo $_GET['name'];

	// Superglobal - another option
	// in the url add ?name=Anything
	echo "<a href='?name=Jingheng'>visit</a><br>";
	echo "<div>My name is {$_GET['name']}<div>";

	// Superglobal - more option
	// in the url add ?name=name&type=p/h1/button/textarea
	// It will create a really dynamic webpages by simply changing the url 
	echo "<a href='?name=Jingheng&type=p'>visit</a><br>";
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";


	?>

	<hr>
	<?php

	// Arrays - Programming Concepts
	// Arrays use when have a number of values that want to think together
	// Make a color array
	$colors = array("red","green","blue");

	// use index as the element inside the array.
	// An index of an element is the number associated with this element.
	// It is a linear number, and always start with 0. 
	// The first index of an array item is always 0.
	// if want to see color blue, then change 0 to 2

	echo $colors[0];

	// Make echo a multi-line string
	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";

	// know amount of values
	// Make a function to get the number of values inside of an array.
	// In php, a function called count.

	// In this case, it should shows a number 3, and this is a numbers of colors shown in the array.

	echo count($colors);

	// In php, semicolon ; only be used in between the statements. Anytime have statements such as echo, an echo, that's two different statements. We have to have a semicolon in between them.

	// If only have one thing, or at the end of a block, do not need a semicolon at the end of the statement. 
	// The last statement in a PHP block does not need a semicolon at the end of it.

	?>


	<div>
		This text is green
	</div>



	<div style="color:<?= $colors[1] ?>">
		This text is green
	</div>

	<hr>
	<?php

	// In PHP, there are three major structures that we can use. An array, an object, and associative array.
	// Associative array which has a numbered indexes. There is an associative array that has string indexes. 
	// An object which is a very different thing in PHP than other two. 
	// In JavaScript, arrays and objects were kind of treated similarly. But in PHP, they are very different not only in their presentation but their use cases. 

	// Associative Array
	// It is an array with string indexes instead of number index
	// our GET variable is an associative array, it was not a PHP object.
	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"
	];

	echo $colorsAssociative['green'];

	?>

	<hr>
	<?php

	//PHP Objects
	//Casting
	// Casting is when take a value of one type and convert it into a different type
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	// echo $colorsObject;

	echo "<hr>";

	// Array Index Notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";


	// Object Property Notation
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

	?>


	<hr>
	<?php

	// Print out entire array or object
	print_r($colors);

	?>

	<hr>
	<?php

	// Print out entire array or object
	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	print_r($colorsObject);
	echo "<pre>", print_r($colorsObject),"</pre>";

	// echo is a PHP function, normally echo one thing, but can echo multiple and comma separate things out. 

	// Make a Function, it needs a value to pass it in  and print out. 
	function print_p($value) {
		echo "<pre>", print_r($value),"</pre>";
	}

	print_p($_GET);

	// print_p($GLOBALS);

	?>




</body>   
</html>