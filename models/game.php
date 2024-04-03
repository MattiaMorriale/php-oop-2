<?php

class Game extends Products {

    public $cut;


    function __construct($_title, $_description, $_price, $_image, Category $category, $_cut) {
        
        parent::__construct($_title, $_description, $_price, $_image, $category);

        $this->cut = $_cut;

    }

}

?>