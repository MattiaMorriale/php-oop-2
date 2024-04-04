<?php

require_once __DIR__ . "./Traits/quantitable.php";

class Food extends Products {

    use Quantitable;
    
    public $quantity;
    public $taste;

    function __construct($_title, $_description, $_price, $_image, Category $category, $_taste, $_smallQuantity, $_mediumQuantity, $_bigQuantity) {
        
        parent::__construct($_title, $_description, $_price, $_image, $category);

        $this->taste = $_taste;
        $this->smallQuantity = $_smallQuantity;
        $this->mediumQuantity = $_mediumQuantity;
        $this->bigQuantity = $_bigQuantity;

    }
     
}

?>