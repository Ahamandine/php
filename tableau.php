<?php

$fruits = [
    'ananas',
    'banane',
    'cerise',
];

foreach ($fruits as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';

}

$legumes = [
    'a' => 'carotte',
    'b' => 'brocoli',
    'c' => 'topinambour',
];

//ne pas confondre la flêche => quand <= plus petit ou égal

foreach ($legumes as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';

}