<?php
include_once __DIR__ .'/product.php';
include_once __DIR__ .'/../traits/weightable.php';

class productAnimal extends Product {
    use Weightable;
    public $type;
    public function __construct(string $name, float $price, string $image, string $type=''){
        parent::__construct($name , $price , $image);
        $this->type = $type;
    }
}

