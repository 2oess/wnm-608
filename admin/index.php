<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Home--2o2</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Qahiri&display=swap" rel="stylesheet">

    <?php include "parts/meta.php"; ?>
    <?php include "parts/navbar.php"; ?>
    <link rel="stylesheet" href="../css/storetheme.css">
    <link rel="stylesheet" href="../lib/css/styleguide.css">
     <link rel="stylesheet" href="../lib/css/gridsystem.css">
    <link rel="stylesheet" href="../lib/css/carousel.css">
</head>
<body>

    
    
<header>
        <h1 >Open your closet -- 2O2</h1>
    </header>

    <div>
        
        <div class="carousel">
            <div class="slides">
                <div class="slide center" style="background:url(https://www.refinery29.com/images/10854312.jpg?format=webp&width=720&height=481&quality=85)center; background-size:cover"></div>

                <div class="slide center" style="background:url(https://www.refinery29.com/images/10854297.jpg?format=webp&width=1220&height=458&quality=85&crop=8%3A3)center; background-size:cover"></div>
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

    <main>
        <link href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@1,600&family=Josefin+Sans:wght@400;700&family=Qahiri&display=swap" rel="stylesheet">
        <nav>
            <ul>
                <li><a href="./index.php">HOME</a></li>
                <li><a href="../product_list.php">SHOP</a></li>
                <li><a href="./users.php">ME</a></li>
                <li><a href="../about.php">ABOUT</a></li>
                <li><a href="../product_cart.php">CART</a></li>
            </ul>
        </nav>
    </main>
    <script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="lib/css/carousel.js"></script>
    <script type="text/javascript">
        
        new Carousel({
             element: $ (".carousel").eq(0),
            timing:6000
        });
    </script>





    

</body>
</html>
