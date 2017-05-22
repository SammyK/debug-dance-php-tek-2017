<?php

function makeAwesome(string $a): string {
    return sprintf('Cannot make %s awesome b/c they already are!', $a);
}

$phpeople = [
    'Sara Golemon',
    'Nikita Popov',
    'Andrea Faulds',
    'Derick Rethans‏',
];

foreach ($phpeople as $nerd) {
    $message = makeAwesome($nerd);
    echo $message . PHP_EOL;
}
