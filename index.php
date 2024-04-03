<?php

 require './db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container-fluid d-flex flex-column align-items-center">
        <h1 class="text-success my-5" >Animal Planet</h1>

        <div class="my-container d-flex flex-wrap justify-content-center pb-5 ">
        <?php

            foreach($products as $product) {
                ?>
                <div class='card d-flex flex-column align-items-center p-0' style='width: calc(100% / 3 - 25px/ 3 * 2);'>
                    <i class="<?= $product->category->getCategory() ?> text-success"></i>
                    <div class="img-box m-4 ">
                        <img src='<?= $product->image ?>' class='card-img-top img-fluid' alt='#'>
                    </div>
                    <div class='card-body d-flex flex-column align-items-start w-100 pb-5 '>
                        <h3 class='card-title text-success '><?= $product->title?></h5>
                        <p class='card-text'><?= $product->description?></p>
                        <p class='card-text'><?= is_a($product, 'Food') ? $product->quantity : ''?></p>
                        <p class='card-text'><?= is_a($product, 'Food') ? $product->taste : ''?></p>
                        <p class='card-text'><?= is_a($product, 'Game') ? $product->cut : ''?></p>
                        <p class='card-text'><?= is_a($product, 'Kennels') ? $product->size : ''?></p>
                        <p class='card-text'><?= is_a($product, 'Kennels') ? $product->material : ''?></p>
                        <strong class="d-block position-absolute w-100 text-end fs-4 text-success"><?= $product->price ?></strong>
                    </div>
                </div>
                <?php
            };

        ?>
        </div>
    </div>

    <!-- bootscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1a036a6099.js" crossorigin="anonymous"></script>
  
</body>
</html>