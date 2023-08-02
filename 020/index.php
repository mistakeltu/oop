<?php

require __DIR__ . '/Forest.php';
require __DIR__ . '/Cart.php';

// $forest1 = new Forest(100, 'Labanoras');

// echo $forest1->area;
// echo '<br>';
// echo $forest1->treesCount;
// echo '<br>';

// echo $forest1->cut();
// echo '<pre>';
// var_dump($forest1);

// echo '<br>';

// $forest1->kill();

// Forest::addAnimals();

$cart1 = Cart::getCart();
$cart2 = Cart::getCart();

echo '<pre>';

var_dump($cart1);
var_dump($cart2);
