

<?php

    include "../lib/php/functions.php";
 


$empty_product = (object)[

    "name"=>"2o2",
    "price"=>"65",
    "category"=>"clothing",
    "thumbnail"=>"accessories_2o2.jpg",
    "images"=>"accessories_2o2.jpg",
    "quantity"=>"1"
];





//LOGIC
if(isset($_GET['action'])){
try {
    $conn = makePDOConn();
    switch($_GET['action']) {
        case "update":
            $statement = $conn->prepare("UPDATE
            `products`
            SET
                `name`=?,
                `price`=?,
                `category`=?,
                `description`=?,
                `thumbnail`=?,
                `images`=?,
                `date_modify`=NOW()
            WHERE `id` =?
            ");
            $statement->execute([
                $_POST['product-name'],
                $_POST['product-price'],
                $_POST['product-category'],
                $_POST['product-description'],
                $_POST['product-thumbnail'],
                $_POST['product-images'],
                $_GET['id']
            ]);
            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
        case "create":
            $statement = $conn->prepare("INSERT INTO
            `products` 
            (     
                `name`,
                `price`,
                `category`,
                `description`,
                `thumbnail`,
                `images`,
                `date_create`,
                `date_modify`
            )
            VALUES (?,?,?,?,?,?,NOW(),NOW())
            ");
            $statement->execute([
                $_POST['product-name'],
                $_POST['product-price'],
                $_POST['product-category'],
                $_POST['product-description'],
                $_POST['product-thumbnail'],
                $_POST['product-images'],
            ]);
            $id = $conn->lastInsertID();
            header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;
        case "delete":
            $statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
            $statement->execute([$_GET['id']]);
            header("location:{$_SERVER['PHP_SELF']}");
            break;
    }
} catch(PDOException $e){
    die($e->getMessage());
}}







//TEMPLATES
function productListItem($r,$o){
    return $r.<<<HTML
<!--<div>-->
<!--<form action="">-->
<!--<input type="text" name="name" placeholder="Search Products">-->
<!--<input type="submit" value="Search">-->
<!--</form>-->
<!--</div>-->
<div class="card soft" style="width: 450px;height: 230px;float: left;margin-left: 20px;">
<div class="display-flex">
<div class="flex-none images-thumbs"><img style="width: 200px;height: 200px;" src='../img/$o->thumbnail'></div>
<div class="flex-stretch" style="padding:1em">$o->name <br><br> $o->price $</div>
<br> 
<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button" style="padding:10px;width:100px;">Edit</a></div>
</div>
</div>
HTML;
}



function showProductPage($o){
    
    $id = $_GET['id'];
    $addoredit = $id == "new" ? "Add" : "Edit";
    $createorupdate = $id == "new" ? "create" : "update";
    $images = array_reduce(explode(",",$o->images),function($r,$o){return $r."<img src='../img/$o'>";});

    $display = <<<HTML
    <div style="text-align: center">
        <h2>$o->name</h2>
        <div class="form-control">
            <label class="form-label">Price:</label>
            <span>&dollar;$o->price</span>
        </div>
                <br>

        <div class="form-control">
            <label class="form-label">Category:</label>
            <span>$o->category</span>
        </div>
                <br>

        <div class="form-control">
            <label class="form-label">Description:</label>
            <span>$o->description</span>
        </div>
        <br>
        <div class="form-control">
            <label class="form-label"></label>
            <span class="images-thumbs"><img src='../img/$o->thumbnail' style="width:500px;height:500px"></span>
            <p style="text-align: center">Thumbnail</p>
        </div>
    </div>
HTML;
    
    $form = <<<HTML
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
        <h2>$addoredit Product</h2>
        <div>
            <label class="form-label" for="product-name">Name</label>
            <input name="product-name" id="product-name" type="text" placeholder="Enter the Product Name" value="$o->name" class="form-input">
        </div>
        <div>
            <label class="form-label" for="product-price">Price</label>
            <input name="product-price" id="product-price" type="number" min="0" max="1000" step="0.01" placeholder="Enter the Product Price" value="$o->price" class="form-input">
        </div>
        <div>
            <label class="form-label" for="product-category">Category</label>
            <input name="product-category" id="product-category" type="text" placeholder="Enter the Product Category" value="$o->category" class="form-input">
        </div>
        <div>
            <label class="form-label" for="product-description">Description</label>
            <textarea name="product-description" id="product-description" placeholder="Enter the Product Description" class="form-input">$o->description</textarea>
        </div>
        <div>
            <label class="form-label" for="product-thumbnail">Thumbnail</label>
            <input name="product-thumbnail" id="product-thumbnail" type="text" placeholder="Enter the Product Thumbnail" value="$o->thumbnail" class="form-input">
        </div>
        <div>
            <label class="form-label" for="product-images">Other Image</label>
            <input name="product-images" id="product-images" type="text" placeholder="Enter the Product Images" value="$o->images" class="form-input">
        </div>
        <br>
        <div class="form-control">
            <input class="form-button" type="submit" style="background-color: #80804d;color:#fff" value="Save Changes">
        </div>
        <br>
    </form>
            </div>

    HTML;
    
    $output = $id == "new" ? "<div class='card soft'>$form</div>" :
        "<div class='grid gap'>
            <div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
            <div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
        </div>
        "; 
    
    $delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";
    
    echo <<<HTML
    <div class="card soft">
    <nav class="display-flex">
        <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">&#60; Back</a></div>
        <div class="flex-none">$delete</div>
    </nav>
    </div>
    $output
HTML;
    }

?>
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


 <link rel="stylesheet"href="../lib/css/styleguide.css">
    <link rel="stylesheet"href="../lib/css/gridsystem.css">
       <link rel="stylesheet"href="../css/storetheme.css">
</head>
<body>

  <header class="navbar">
            <div class="container display-flex">
                <div class="flex-none">
                    <h1>ADMIN</h1>
                </div>
                <div class="flex-stretch"></div>
                <nav class="nav nav-flex flex-none">
                    <ul>
                        <li><a href="<?= $_SERVER['PHP_SELF'] ?>">PRODUCT LIST</a></li>
                        <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">ADD NEW PRODUCT</a></li>
                    </ul>
                </nav>
            </div>
        </header>

<div   style="width: 1480px;margin: 0 auto;">

    <?php

        if(isset($_GET['id'])){
                showProductPage(
                    $_GET['id']=="new" ?
                    $empty_product :
                    makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
                );

            } else {
            
            ?>

            <h2 style="color:#fff">Product List</h2>
            
            <?php

            $result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create`DESC");



            if (!empty($_GET['name'])){
                include_once "../lib/php/database.php";
                $search_name = $_GET['name'];
                echo <<<HTML
<div>
<form action="index.php" method="get" style="margin-left:20px">
<input type="text" name="name" style="height:35px;width:500px;padding-left: 20px" value="$search_name" placeholder="Search Products">
<input type="submit" style="width:100px;height:42px;background-color: #fff;padding: 10px;border-radius: 10px" value="Search">
<a href="index.php" style="width:200px;background-color: #fff;padding: 10px;border-radius: 10px">All data</a>
</form>
</div>
HTML;


                $sql = "SELECT * FROM products WHERE name LIKE '%$search_name%'";

                $result = mysqli_query($dbConn, $sql);
                if(!$result) {
                    echo $sql;
                } else{
                    while($data = mysqli_fetch_assoc($result)) {
                        $data_search[] = $data;
                    }
                }

            if (empty($data_search[0])){
                echo"<script>alert('The data you want is not found!');history.go(-1);</script>";exit;// 显示错误信息

            }
                foreach ($data_search as $search_value){
                    echo <<<HTML
<div class="card soft" style="width: 450px;height: 230px;float: left;margin-left: 20px;">
<div class="display-flex">
<div class="flex-none images-thumbs"><img style="width: 200px;height: 200px;" src='../img/{$search_value['thumbnail']}'></div>
<div class="flex-stretch" style="padding:1em">{$search_value['name']}<br><br> {$search_value['price']} $</div>
<br> 
<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id={$search_value['id']}" class="form-button" style="padding:10px;width:100px;">Edit</a></div>
</div>
</div>
HTML;
                }



//                var_dump($data_search);
            }else{

                echo '<div>
<form action="index.php" method="get" style="margin-left:20px">

<input type="text" name="name" style="height:35px;width:500px;padding-left: 20px" placeholder="Search Products">
<input type="submit" style="width:100px;height:42px;background-color: #fff;padding: 10px;border-radius: 10px" value="Search">
<a href="index.php" style="width:200px;background-color: #fff;padding: 10px;border-radius: 10px">All data</a>

</form>
</div>';
                echo array_reduce($result,'productListItem');
            }




            ?>
            <?php } ?> 

 

</div>

       
</body>