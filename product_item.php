<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",",$product->images);

$image_elements = array_reduce($images,function($r,$o){
return $r."<img src='img/$o'>";
});

// print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Item</title>
	<?php include "parts/meta.php"; ?>
<style>
    img{
        max-width: 300px;
    }
</style>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	

	<div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card ">
                    <div class="images-main">
                        <img src="img/<?= $product->thumbnail ?>">
                    </div>
                    <div class="images-thumbs">
                        <?= $image_elements ?>
                    </div>  
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <form class="card " method="post" action="product_added_to_cart.php">
                    <input type="hidden" name="product_id" value="<?php  echo $_GET['id'] ?>">

                    <div class="card-section">
                        <h2 class="product-title"><?= $product->name ?></h2>
                        <div class="product-price">&dollar;<?= $product->price ?></div>
                    </div>

                    <div class="card-selection">
                        <label for="product-amount" class="form-label">Amount</label>
                        <div class="form-select" id="product-amount">
                        	<select name="num">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option> 
                            </select>
                        </div>
                    </div>
                    <div class="card-section">
                        <input type="submit" name="" value="Add To Cart">
                        <!-- <a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a> -->
                            <div class="card ">

                           <p> DETAILS:<?= $product->description ?></p>
                           </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>





	

</body>


</html>