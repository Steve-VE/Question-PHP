<?php
$type = "checkbox";
$statement = "Le(s) quel(s) de ces mots clef permet de concevoir une boucle ? ";

// On stocke la bonne réponse dans la variable '$good_answer'...
$good_answers = ["for", "foreach", "while"];

// ... on définit les différentes options possible pour le QCM, en oubliant pas d'y inclure la bonne réponse ('$good_answer')...
$options = [
    $good_answers[0],
    $good_answers[1],
    $good_answers[2],
    "loop",
    "boucle",
    "repeat"
];
$good_options = array();

echo_question( $type, $statement, $good_answers, $options );
?>