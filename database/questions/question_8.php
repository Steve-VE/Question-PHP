<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "À quoi sert la fonction isset() ?";
$good_answer = "Déterminer si une variable est définie et différente de NULL";
$options = [
    $good_answer,
    "Vérifier si la variable est initiée",
    "Vérifier si la variable est vide ou est égale à 0"
];

echo_question( $type, $statement, $good_answer, $options, "a" );
?>
