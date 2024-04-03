<?php

class Products {

    public $title;
    public $description;
    public $price;
    public $image;

    public $category;
    
    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_description
     * @param  mixed $_price
     * @param  mixed $_image
     * @return void
     */
    function __construct($_title, $_description, $_price, $_image, Category $category){
        
        $this->title = $_title;
        $this->description = $_description;
        $this->price = $_price;
        $this->image = $_image;

        $this->category = $category;
        
    }

}

?>