<?php
include_once __DIR__ .'/product.php';

class productAnimal extends Product {
    public $type;
    public function __construct(string $name, int $price, string $image, string $type=''){
        parent::__construct($name , $price , $image);
        $this->type = $type;
    }
}