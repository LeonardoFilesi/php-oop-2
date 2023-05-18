<?php
require_once __DIR__ . "/category.php";
class Products {
   public $name;
   public $price;
   public $category;        
   public $img;

   


    function __construct(String $_name, Float $_price, category $_category, String $_img) {
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
       return $details
       }
}


?>