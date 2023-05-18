<?php
require_once __DIR__ . '/models/products.php';

class food extends product {
    private $expiration

    function __construct(String $_name, Float $_price, category $_category, String $_img) 
    {
        parent::__construct($_name, $_price, $_category, $_img);
        $this->expiration = $_expiration;
    }

}

?>