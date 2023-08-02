<?php

require __DIR__ . '/Customer.php';


// $user1 = new User('Karolis', 10);

// echo $user1->name;
// echo $user1->age;
// echo $user1->hello();

$user2 = new Customer('Jonas', 99, 100);

echo $user2->balance();
