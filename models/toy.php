<?php
require_once __DIR__ . '/models/products.php';

class toy extends products {
    public $material;
    public $size;

    function __construct(String $_name, Float $_price, category $_category, String $_img, String $_material, String $_size)
    {
        parent::__construct($_name, $_price, $_category, $_img);
        $this->material = $_material;
        $this->size = $_size;
    }
}