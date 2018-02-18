<?php
$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Comment à partir du php injecter (en html) un paragraphe à l'intérieur d'une div ?";
$good_answer = "<pre><?php echo '<div class=exemple><p>ceci est un paragraphe</p></div>' ?></pre> ";
$options = [
    $good_answer,
    "Ce n'est pas possible car on ne peut afficher de codes php dans de l'HTML",
    "<pre><?php echo '<div class=exemple><p>ceci est un paragraphe</p></div>' ></pre>",
];

echo_question( $type, $statement, $good_answer, $options, "a" );
?>
