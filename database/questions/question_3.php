<?php

$type = "text";
$statement = [
    "Quelle fonction permet de mettre un mot ou une phrase en majuscule ?",
    "Quelle fonction permet de mettre un mot ou une phrase en minuscule ?",
    "Quelle fonction permet de savoir si une variable est vide ?",
    "Quelle fonction permet de calculer la taille d'une chaîne de caractère ?"
];
$answer = [
    'strtoupper',
    'strtolower',
    'empty',
    'strlen'
];
$rnd_index = random( 0, count($statement) - 1, seed() );

echo_question( $type, $statement[$rnd_index], $answer[$rnd_index] );
?>
