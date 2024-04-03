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
<body data-bs-theme='dark'>

    <div class="container-fluid d-flex flex-column align-items-center">
        <h1>Animal Planet</h1>

        <div class="container">
        <?php

            foreach($products as $product) {
                ?>
                <div class='card' style='width: 18rem;'>
                    <img src='<?= $product->image ?>' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'><?= $product->title?></h5>
                        <p class='card-text'><?= $product->description?></p>
                        <p class='card-text'><?= is_a($product, 'Food') ? $product->quantity : ''?></p>
                        <p class='card-text'><?= is_a($product, 'Game') ? $product->cut : ''?></p>
                        <!-- <p class='card-text'><?= is_a($product, 'Food') ? $product->quantity : ''?></p> -->
                    </div>
                </div>
                <?php
            };

        ?>
        </div>
    </div>

    <!-- bootscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>