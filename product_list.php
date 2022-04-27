<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
	<style>
		.figure{
			border: 1px solid #ffac00;
			margin: 10px 0; 
		}
		.container{
			max-width: 1000px;
		}
	</style>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	

	<div class="container">
		<div class="card">
			<h2>Product List</h2>
			<ul>
				<li><a href="product_item.php?id=1">Clothing & Accessories</a></li>

			</ul>


			

	<?php 
			include_once "lib/php/functions.php";
			include_once "parts/templates.php";

			$result = makeQuery(
					makeConn(),
					"
					SELECT *
					FROM `products` 
					ORDER BY `date_create` DESC
					LIMIT 12 
					"
			);

			echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>"; 

	?> 
	
	    </div>
    </div>
	<?php include "parts/footer.php"; ?>
</body>


</html>