<?php
error_reporting(0);
?>
<?php
include_once "lib/php/functions.php"; ?>
<?php
include_once "lib/php/database.php";

$sql_index = "SELECT * FROM products LIMIT 0,4";
$result_index = $dbConn->query($sql_index);
if($result_index && mysqli_num_rows($result_index)>0){
    $data_index = array();
    while($row = mysqli_fetch_assoc($result_index)){
        $data_index[]=$row;
    }
}
// var_dump($data_index[0]);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Home--2o2</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Qahiri&display=swap" rel="stylesheet">

    <?php include "parts/meta.php"; ?>
    <?php include "parts/navbar.php"; ?>
    <link rel="stylesheet" href="css/storetheme.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
     <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="lib/css/carousel.css">
</head>
<body> 
 

    <div>
        
        <div class="carousel">
            <div class="slides">
                <div class="slide center" style="background:url(https://www.refinery29.com/images/10854312.jpg?format=webp&width=720&height=481&quality=85)center; background-size:cover"></div>

                <div class="slide center" style="background:url(https://images.pexels.com/photos/5706273/pexels-photo-5706273.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)center; background-size:cover"></div>
            </div>
            <div class="controls">
                <div class="control-left">&lt;</div>
                <div class="control-right">&gt;</div>
                <div class="control-pagination">
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="lib/css/carousel.js"></script>
    <script type="text/javascript">
        
        new Carousel({
             element: $ (".carousel").eq(0),
            timing:6000
        });
    </script>


<div style="width: 1280px;height: 200px;margin: 0 auto;margin-top:30px;">
    <div style="width: 220px;height: 200px;margin-right: 50px;text-align:center;margin-left:50px;float: left;background-color: #fff;border-radius: 10px">
        <br>
        <img src="img/1.png" style="width: 60px;height: 60px"  alt="">
        <h4>Free & Fast Delivery</h4>
        <small>On all order over $100.00</small>
    </div>
    <div style="width: 220px;height: 200px;margin-right: 50px;text-align:center;margin-left:50px;float: left;background-color: #fff;border-radius: 10px">
        <br>
        <img src="img/2.png" style="width: 60px;height: 60px" alt="">
        <h4>Free Return</h4>
        <small>Free return in North America</small>
    </div>
    <div style="width: 220px;height: 200px;margin-right: 50px;text-align:center;margin-left:50px;float: left;background-color: #fff;border-radius: 10px">
        <br>
        <img src="img/3.png" style="width: 60px;height: 60px"  alt="">
        <h4>Guarantee</h4>
        <small>30-Day Satisfaction Guarantee</small>
    </div>

    <div style="width: 220px;height: 200px;margin-right: 50px;text-align:center;margin-left:50px;float: left;background-color: #fff;border-radius: 10px">
        <br>
        <img src="img/4.png" style="width: 70px;height: 70px"  alt="">
        <h4>Free & Fast Delivery</h4>
        <small>On all order over $100.00</small>
    </div>
</div>

        <div style="width: 100%;height:300px;text-align: center;">
            <h2>New Product</h2>
            <p style="text-align: center">Browse the collection of our product</p>
            <br>
            <?php foreach($data_index as $v): ?>
                <a href="product_item.php?id=<?php echo $v['id'] ?>">
                    <div style="float: left;width: 395px;border-radius: 10px;height: 600px;background-color: #fff;margin-left: 10px;margin-right: 10px">
                        <img src="img/<?php echo $v['thumbnail'] ?>" style="width: 370px;margin-right: 10px;margin-left: 10px;height: 500px;">
                        <p style="text-align: center"><?php echo $v['name'] ?></p>
                        <p style="text-align: center">$<?php echo $v['price'] ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

</body>
</html>
