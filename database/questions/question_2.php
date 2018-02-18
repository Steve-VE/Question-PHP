<?php
$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Quelle fonction est sans erreurs ?";

// On stocke la bonne réponse dans la variable '$good_answer'...
$good_answer = "<pre>function afficher(\$texte){<br/>
                print_r(\$texte);}</pre>";

$options = [
    $good_answer,
                
    "<pre>function afficher(\$texte){<br/>
    print_r(\$texte)}</pre>",
                
    "<pre>function afficher(){<br/>
    print_r(\$texte)}</pre>"
];
echo_question( $type, $statement, $good_answer, $options, "side" );
?>
