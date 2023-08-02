<?php

require __DIR__ . '/Bebras.php';


$bebras1 = new Bebras;
$bebras2 = new Bebras;
$bebras3 = $bebras1;




$bebras1->svoris = 80;
$bebras2->svoris = 10;



// $bebras1->plaukia();
// $bebras2->plaukia();

echo $bebras1->spalva;
echo '<br>';
echo $bebras1->amzius;
echo '<br>';
echo $bebras1->spalva = 'ryzas';


echo $bebras1->keistiSpalva('juoda');
// echo $bebras1->kokiaSpalva();



echo '<br><pre>';
// var_dump($bebras1);
// var_dump($bebras2);
// var_dump($bebras3);