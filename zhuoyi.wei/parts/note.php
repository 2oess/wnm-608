<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<body>
	<?php

	echo "<div>Hello World</div>";
	echo "<div>Bye World</div>";

	//Variables
	$a = 5;

	echo $a;


	//String Interpolation

	echo "<div> I have $a things</div>";
	echo '<div> I have $a things</div>';


	// Number
	// Integer
	$b = 15;

	// Float
	$b = 0.576;

	$b = 10;

	//String
	$name = "Sam2 ";

	// Boolean
	$isOn = true;



	// Math
	// PEMDAS
	echo (5 - 4) * 2;

	// Concatenation
	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a = ".($a+$b)."</div>";



	 ?>

	 <hr>
	 <div>This is my name</div>


	 	<?php

	 	$firstname = "Adela";

	 	$lastname = "Seo";

	 	$fullname = "$firstname $lastname";


	 	echo $fullname;

	 	?>

	 	<hr>
	 	<?php

	 	// ?name= zhuoyi wei

	 	echo "<a href='?name=zhuoyi wei'>visit</a><br>";
	 	echo $_GET['name'];

	 	// ?name=Joey & type= textarea

	 	echo "<a href='?name=zhuoyi wei&type=textarea'>visit</a><br>";
	 	echo "<{$_GET['type']}> My name is {$_GET['name']}</{$_GET['type']}>";

	 	?>

	 	<hr>
	 	<?php

	 	//Array

	 	$colors = array("yellow", "green","blue");

	 	echo $colors[0];

	 	echo "
	 		<br>$colors[0]
	 		<br>$colors[1]
	 		<br>$colors[2]
	 	";

	 	echo count($colors);

	 	?>

	 	<div style="color:<?= $colors[0] ?>">
	 		This text is yellow
	 	</div>

	 	<div style="color:<?= $colors[1] ?>">
        	 		This text is green
        </div>
        <div style="color:<?= $colors[2] ?>">
                	 		This text is blue
        </div>

	 	<br>
	 	<?php

	 	//Associative Array
	 	$colorsAssociative = [
	 		"yellow" => "#f00",
	 		"green" => "#0f0",
	 		"blue" => "00f"
	 	];

	 	echo $colorsAssociative ['green'];

	 	?>

	 	<hr>
	 	<?php

	 	// Casting

	 	$c = "$a";
	 	$d = $c*1;

	 	$colorsObject = (object)$colorsAssociative;


	 	// echo $colorsObject;

	 	echo "<hr>";

	 	// Array Index Notation
	 	echo $colors[0]."<br>";
	 	echo $colorsAssociative['yellow']."<br>";
	 	echo $colorsAssociative[$colors[0]]."<br>";


	 	// Object Property Notation
	 	echo $colorsObject->yellow."<br>";
	 	echo $colorsObject->{$colors[0]}."<br>";

	 	?>
	 	<hr>
	 	<?php
	 	print_r($colors);
	 	echo "<hr>";
	 	print_r($colorsAssociative);
	 	echo "<hr>";
	 	echo "<pre>",print_r($colorsObject),"</pre>";

	 	// function

	 	function print_p($v) {
	 		echo "<pre>",print_r($v),"</pre>";
	 	}
	 	print_p($_GET);

	 	?>
</body>
</html>
