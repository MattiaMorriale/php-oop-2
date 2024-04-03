<?php

class Category {

    protected $type;

    function __construct($_type) {
        
        $this->type = $_type;

    }

    public function getCategory() {
        
        return $this->type;

    }

}

?>