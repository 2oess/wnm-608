
   
<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$total = 0;
$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (1,3,6)");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Cart---2o2</title>
    
    <?php include "parts/meta.php"; ?>


</head>
<body>

    <?php include "parts/navbar.php"; ?> 
    
<?php

if (!empty($_GET['num'])){
    $num_id = $_GET['id'];
    $edit_num = $_GET['num'];
    $_SESSION['cart'][$num_id]['num'] = $edit_num;
//    var_dump($_SESSION['cart'][$num_id]['num']);
}
?>
<div style="width: 1000px;background: #fff;margin: 0 auto;">
            <h2>My Cart</h2>
            <div class="grid gap">
                <div class="col-xs-12 col-md-7">
                     <?php if(!empty($_SESSION['cart'])):?>
                     <?php foreach($_SESSION['cart'] as $k => $v): ?>
                     <div class="card soft">
                        <div style="width:100%;height: 300px;background: #b0b0b0;border-radius: 10px;">
                            <div style="width:50%;float: right;">
                                <h2 style="float:left;margin-left:20px;">Name: <?php echo $v['name'] ?><br>Price: $<?php echo $v['price'] ?><br>
                                    <form action="product_cart.php" method="get">
                                        <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
                                        Num:<input type="number" name="num" id="num" value="<?php echo $v['num'] ?>" min="1" max="10">
                                        <input type="submit" value="edit">
                                    </form>
                                     </h2>
                            </div>
                            <div style="width:50%;">
                            <img src="./img/<?php echo $v['thumbnail'] ?>" style="width: 100%;height: 300px;">
                                
                            </div>
                        </div>
                        <br>

                         <?php   $total += $v['price']*$v['num']; ?>
                    <?php $nums =0;  $nums += $v['num']; ?>


                     </div>
                     <?php endforeach; ?>
                     <?php else: ?>
                        <h2>The shopping cart is empty.<a href="product_list.php">Go shopping</a></h2>
                     <?php endif; ?>
<!--                      --><?php //var_dump($total);exit; ?>



                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card flat">
                    <?php if(!empty($_SESSION['cart'])):?>

                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Sub Total</strong></div>
<!--                                                 --><?php //var_dump($total);exit; ?>

                        <div class="flex-none">&dollar;<?php echo $total; ?></div>
                    </div>

                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Tax</strong></div>
                        <div class="flex-none">&dollar;<?php $tax='16';echo $tax; ?></div>
                    </div>


                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Total</strong></div>
                        <div class="flex-none">&dollar;<?php echo $total-$tax; ?> </div>
                        <!-- <div class="flex-none">&dollar;<?php echo $nums; ?> </div> -->


                    </div>

                    <div class="card-section display-flex">
                        <button  type="button" class="form-button" style="margin-left: 200px;margin-bottom: 20px;"> <p><a href="product_checkout.php"> Checkout</p></button>

                    </div>
                     <?php endif; ?>

                </div>
            </div>

</div>
 




</body>

</html>