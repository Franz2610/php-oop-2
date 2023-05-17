<?php

include_once __DIR__ . '/../models/product.php';
include_once __DIR__ . '/../models/productAnimal.php';

$products= [
    new Product('Collare', '13', 'https://tse4.mm.bing.net/th?id=OIP.3NTDlfQ6IrUGm1emxmzGKAHaHa&pid=Api&P=0&h=180'),
    new productAnimal('Guinzaglio', '8', 'https://tse4.mm.bing.net/th?id=OIP.LrKqKsgKw6lcmbubIc-3lwHaHa&pid=Api&P=0&h=180','dog'),
    new productAnimal('Lettiera', '25', 'https://tse1.mm.bing.net/th?id=OIP.qf-h0ol97mj6dz-gNFkFwAHaE7&pid=Api&P=0&h=180','cat'),

];