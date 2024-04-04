<?php

require_once __DIR__ . "./Traits/quantitable.php";

class Kennels extends Products {

    use Quantitable;

    public $size;
    public $material;


    function __construct($_title, $_description, $_price, $_image, Category $category, $_material, $_smallQuantity, $_mediumQuantity, $_bigQuantity) {
        
        parent::__construct($_title, $_description, $_price, $_image, $category);
        
        $this->material = $_material;
        $this->smallQuantity = $_smallQuantity;
        $this->mediumQuantity = $_mediumQuantity;
        $this->bigQuantity = $_bigQuantity;

    }

}

?>