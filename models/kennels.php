<?php

class Kennels extends Products {

    public $size;
    public $material;


    function __construct($_title, $_description, $_price, $_image, Category $category, $_size, $_material) {
        
        parent::__construct($_title, $_description, $_price, $_image, $category);

        $this->size = $_size;
        $this->material = $_material;

    }

}

?>