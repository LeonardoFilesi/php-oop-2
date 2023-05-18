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

    
    public function setDiscount($_discount) {
        if ($_discount < 0 || $_discount > 50) {
            throw new Exception("Scontotra 0 e 50.");
        }

        $this->discount = $_discount;
    }

    public function getDiscount() {
        return $this->discount;
    }
}


?>