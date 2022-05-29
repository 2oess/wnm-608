<?php

    include_once "lib/php/functions.php";
     include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>

	<style>
		.figure{
			border: 3px solid black;
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
			<h2>NEW COLLECTION</h2>
			<ul>
				<li><a href="product_item.php?id=1">Clothing & Accessories</a></li>

			</ul>





         <div class="form-control" style="height: 130px">
                <form class="hotdog " action="./product_list.php" id="product-search">
                    <input type="search" placeholder="Search Products">
                </form>
            </div>


                <div class="card soft">
                        <div class="display-flex"
                        style="">

                            <div class="flex-stretch display-flex">


                            <div class="flex-none">
                                <button data-filter="category" data-value="" type="button" class="form-button" style="width:100px">All</button>
                            </div>
                          <div class="flex-none">
                                <button data-filter="category" data-value="women" type="button" class="form-button"  style="width:100px">Clothing</button>
                            </div>
                              <div class="flex-none">
                                <button data-filter="category" data-value="men" type="button" class="form-button"  style="width:100px">Accessories</button>
                            </div>
                            </div>


               <div class="flex-none">
                            <div class="form-select">
                                <select class="js-sort">
                                    <option value="1">NEWEST </option>
                                    <option value="2">OLDEST</option>

                                </select>
                            </div>
                        </div>
                        </div>

                        </div>




            <div class='productlist grid gap'></div>
    </div>



</body>


</html>