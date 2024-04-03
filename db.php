<?php

require './models/category.php';
require './models/product.php';
require './models/food.php';
require './models/game.php';
require './models/kennels.php';
 
$cat = new Category("Gatto");
$dog = new Category("Cane");

$food1 = new Food("Crocchette","Crochette per gatti obesi","10€","https://shop-cdn-m.mediazs.com/bilder/purina/one/sensitive/crocchette/per/gatti/7/400/1_icon_topseller_1_1_3__7.jpg", $cat,"250g","fish");

$food2 = new Food("Croccantini","Croccantini per cani felici","12€","https://www.bestprato.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/u/purina-pro-plan-all-size-opti-weight.jpg", $dog, "1kg", "chiken");

$game1 = new Game("Osso di gomma", "osso di gomma per cani","6€","https://www.aqpet.it/1840-large_default/dental-giochi-per-cane-osso-di-gomma-123-x-66-cm.jpg", $dog, "Taglia: S");

$game2 = new Game("Topolino", "Topolino meccanico di stoffa","8€","https://bau-miao.com/wp-content/uploads/2020/01/Topolino-di-stoffa-300x214.jpg", $cat, "Taglia: M");

$products = [
    $food1,
    $food2,
    $game1,
    $game2
];
 

?>