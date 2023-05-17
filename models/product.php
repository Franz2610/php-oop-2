<?php
class Product {
    public 
    $name, $price, $image;

    public function __construct(string $name, int $price, string $image){
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}