<?php

class Food extends Products {
    
    public $quantity;
    public $taste;

    function __construct($_title, $_description, $_price, $_image, Category $category, $_quantity, $_taste) {
        
        parent::__construct($_title, $_description, $_price, $_image, $category);

        $this->quantity = $_quantity;
        $this->taste = $_taste;

    }
     
}

?>