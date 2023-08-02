<?php

require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';
require __DIR__ . '/Kibiras2.php';

// $kibiras = new Kibiras1;
$pinigine = new Pinigine;

// echo $kibiras->prideti1Akmeni();
// echo '<br>';
// echo $kibiras->pridetiDaugAkmenu(50);
// echo $kibiras->pridetiDaugAkmenu(10);
// echo '<br>';
// echo $kibiras->kiekPririnktaAkmenu();

// $pinigine->ideti(1);
// $pinigine->ideti(1);
// $pinigine->ideti(1);
// $pinigine->ideti(1);
// $pinigine->ideti(1);
// $pinigine->ideti(1);
// $pinigine->ideti(5);
// $pinigine->ideti(5);
// $pinigine->ideti(5);
// $pinigine->ideti(5);
// $pinigine->ideti(5);

// echo $pinigine->skaiciuoti();

$kibiras1 = Kibiras2::add(5);
$kibiras2 = Kibiras2::add(5);
$kibiras3 = Kibiras2::add(5);

echo Kibiras2::gautiAkmenuKiekiVisuoseKibiruose();
