<?php

class Products {
   public $name;
   public $price;
   public $category;        
   public $img;

    function __construct($_name, $_price, $_category, $_img) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->img = $_img;
    }

    
    public function getDetails(){
       $details = [
        'name' => $this->name,
        'price' => $this->price,
        'category' => $this->category,
        'image' => $this->img
       ];
       return $details;
       

       }
}


?>