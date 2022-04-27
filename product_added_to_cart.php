<?php
            
include_once "lib/php/functions.php";

if(isset($_GET['id'])) {
    $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
    // print_p($product);
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Cart Page</title>

    <?php include "parts/meta.php"; ?>
    <?php include "parts/navbar.php"; ?> 


</head>
<body>

    
    

     <div class="container">
        <div class="card soft">
            <h2>You added___ to your cart</h2>
            
            <div class="display-flex">
            	<div class="flex-none"><a href="product_list.php">Contiue Shopping</a></div>
            	<div class="flex-stretch"></div>
            	<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
        	</div>
        </div>
    </div>

</body>

</html>