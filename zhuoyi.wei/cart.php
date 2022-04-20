<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>cart-2o2</title>
    <?php include "parts/meta.php"; ?>


</head>
<body>

    <?php include "parts/navbar.php"; ?>
    

     <div class="container">
        <div class="card soft">
            <h2>Product Item</h2>
            <p>This is item #  <?= $_GET['id'] ?> </p>
        </div>
    </div>


</body>

</html>