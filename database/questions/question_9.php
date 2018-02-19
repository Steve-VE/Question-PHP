<?php
$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Comment à partir du php injecter (en html) un paragraphe à l'intérieur d'une div ?";
$good_answer = "<pre>&lt;?php echo '&lt;div class=exemple&gt;&lt;p&gt;ceci est un paragraphe&lt;/p&gt;&lt;/div&gt;' ?></pre> ";
$options = [
    $good_answer,
    "Ce n'est pas possible car on ne peut afficher de codes php dans de l'HTML",
    "<pre>&lt;?php echo '&lt;div class=exemple&gt;&lt;p&gt;ceci est un paragraphe&lt;/p&gt;&lt;/div&gt;' ></pre>",
];

echo_question( $type, $statement, $good_answer, $options, "c" );
?>
