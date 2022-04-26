<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			

			<?php

			include_once "lib/php/functions.php";
			include_once "parts/templates.php";

			$result = makeQuery(
				makeConn(),
				"
				SELECT `id`,`title`
				FROM `products`
				"
			);

			echo array_reduce($result,'productListTemplate');

			

			?>
	    </div>
    </div>

</body>


</html>