<?php

$type = "radio";
$statement = "Est-il important de sanitiser des inputs de type \"radio\" ?";
$good_answer = "Oui";
$options = [
    $good_answer,
    "Non",
    "Uniquement si le formulaire comporte aussi des inputs de type \"text\""
];

echo_question( $type, $statement, $good_answer, $options, "a" );
?>