<?php
$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "En PHP, comment injecter de l'HTML (un paragraphe par exemple) à l'intérieur d'une div ?";
$good_answer = "<span class='code'>&lt;?php echo '&lt;div class=exemple&gt;&lt;p&gt;ceci est un paragraphe&lt;/p&gt;&lt;/div&gt;' ?></span> ";
$options = [
    $good_answer,
    "Ce n'est pas possible car on ne peut afficher de codes php dans de l'HTML",
    "<span class='code'>&lt;?php echo '&lt;div class=exemple&gt;&lt;p&gt;ceci est un paragraphe&lt;/p&gt;&lt;/div&gt;' ></span>",
];

echo_question( $type, $statement, $good_answer, $options, "b" );
?>
