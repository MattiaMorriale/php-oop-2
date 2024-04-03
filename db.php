<?php

require './models/category.php';
require './models/product.php';
 
$cat = new Category("Gatto");
$dog = new Category("Cane");

$products = [
    new Products("Crocchette","Crochette per gatti obesi","10€","https://www.google.com/url?sa=i&url=https%3A%2F%2Fmeafarma.it%2Fexigent-3530-savour-sensation&psig=AOvVaw24zJPPVqqDmky1ge0yFhi-&ust=1712244342659000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCIjKvrOtpoUDFQAAAAAdAAAAABAT", $cat),
    new Products("Croccantini","Croccantini per cani felici","12€","https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.arcaplanet.it%2Fmonge-mini-adult-al-pollo%2Fp&psig=AOvVaw11_SPBZsPp0nbmdvjIQSHw&ust=1712244490833000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLi2mvetpoUDFQAAAAAdAAAAABAE", $dog),
];
 

?>