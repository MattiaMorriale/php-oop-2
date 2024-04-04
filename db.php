<?php

require './models/category.php';
require './models/product.php';
require './models/food.php';
require './models/game.php';
require './models/kennels.php';
 
$cat = new Category("fa-solid fa-cat");
$dog = new Category("fa-solid fa-dog");


$error = null;
try {

    $food1 = new Food("Crocchette","Cibo per Gatti Adulti Sterilizzati Monoproteico Exclusion Mediterraneo", 3 ,"https://www.robinsonpetshop.it/16734-large_default/exclusion-mediterraneo-sterilized-manzo-noble-grain-per-gatti.jpg", $cat,"Gusto: Manzo", "500g", "1kg", "1,5kg");

} catch (Exception $e) {

    $error = "Errore: " . $e->getMessage();

};



$food2 = new Food("Crocchette","Crocchette per Cani Adulti Monoproteiche Exclusion Mediterraneo","16,40€","https://media.zooplus.com/bilder/3/400/111626_pla_exclusion_exclusionmediterraneo_monoprotein_nograin_medium_chicken_12kg_hs_01_3.jpg", $dog, "Gusto: Maiale", "800g", "1,5kg", "2,5kg");

$Kennels1 = new Kennels("Cuccia per cane", "Cuccia Trono Ovale per Cani Nasonero Linea Eco Trama Verde","35,00€","https://www.galleranistore.it/media/catalog/product/cache/1/image/600x/040ec09b1e35df139433887a97daa66f/p/r/progetto_senza_titolo.jpg", $dog, "Materiale: Stoffa",  "Taglia: S", "Taglia: M", "Taglia: L");

$Kennels2 = new Kennels("Torre per gatto", "Torre per gatto, arrampicata","68€","https://www.costway.it/media/catalog/product/cache/609f5cdc39db237cbce5e810838f4671/t/o/torre_per_gatti-pv10083gn-_4_.jpg", $cat, "Materiale: Corda, Stoffa", "Taglia: S", "Taglia: M", "Taglia: L");

$game1 = new Game("Osso", "Gioco per Cani Nylabone Moderate Dental Chew a Forma di Osso","20,00€","https://www.aqpet.it/1840-large_default/dental-giochi-per-cane-osso-di-gomma-123-x-66-cm.jpg", $dog, "Taglia: M");

$game2 = new Game("Topolino", "Topolino meccanico di stoffa MouseMagic","8€","https://www.epocaitalpigeon.com/12417/camon-topo-meccanico-senza-pelo-da-7-cm-gioco-per-gatto-colori-vari.jpg", $cat, "Taglia: M");



$products = [
    $food1,
    $food2,
    $game1,
    $game2,
    $Kennels1,
    $Kennels2,
];
 

?>