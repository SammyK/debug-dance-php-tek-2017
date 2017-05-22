<?php

use App\{Order, User};

require __DIR__.'/vendor/autoload.php';

$buyer = new User('Andrea Faulds');
$order = new Order('1542', $buyer);

echo $order;
