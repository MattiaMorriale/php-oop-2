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
     * @param  float $_price
     * @param  mixed $_image
     * @return void
     */
    function __construct($_title, $_description, $_price, $_image, Category $category){
        
        $this->title = $_title;
        $this->description = $_description;
        $this->image = $_image;

        $this->category = $category;

        if(is_numeric($_price)) {

            $this->price = $_price;
            
        } else {
        
            throw new Exception("Il prezzo inserito non è di valore numerico");
            
        }
        
    }

}

?>