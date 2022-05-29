<?php
            
include_once "lib/php/functions.php";

$product_id = $_POST['product_id'];
if(isset($product_id)) {
    $post_num = $_POST['num'];

    include_once "lib/php/database.php";
    $get_id = $product_id;
    $products_sql = "SELECT * FROM products WHERE id=$get_id";
    $products = $dbConn->query($products_sql);
    $users_data = $products->fetch_assoc();

    if(!empty($_SESSION['cart'][$product_id])){
            // var_dump($_SESSION['cart'][$product_id]);
            $jia = $_SESSION['cart'][$product_id]['num']+$post_num;
            $_SESSION['cart'][$product_id]['num'] = $jia;
        }else{
            $users_data['num'] = $post_num;
            $_SESSION['cart'][$product_id] = $users_data;
        }
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
            <h2>You added <span style="color: green;"><?php echo $users_data['name'] ?></span> to your cart</h2>
            
            <div class="display-flex">
            	<div class="flex-none"><a href="product_list.php">Contiue Shopping</a></div>
            	<div class="flex-stretch"></div>
            	<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
        	</div>
        </div>
    </div>

</body>

</html>