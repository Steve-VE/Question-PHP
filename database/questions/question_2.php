<?php
$rnd_name = get_random_value($variable_text_names);
$rnd_function_name = get_random_value($function_print_names);

$type = "radio";
$statement = "Quelle fonction est sans erreurs ?";

// On stocke la bonne réponse dans la variable '$good_answer'...
$good_answer = "<br/><span class='code'>function ". $rnd_function_name ."(\$". $rnd_name ."){<br/>
    &nbsp;&nbsp;&nbsp;print_r(\$". $rnd_name .");
}</span>";

$options = [
    $good_answer,
                
    "<br/><span class='code'>function ". $rnd_function_name ."(\$". $rnd_name ."){<br/>
        &nbsp;&nbsp;&nbsp;print_r(\$". $rnd_name .")
}</span>",
                
    "<br/><span class='code'>function ". $rnd_function_name ."(){<br/>
        &nbsp;&nbsp;&nbsp;print_r(\$". $rnd_name .")
}</span>"
];
echo_question( $type, $statement, $good_answer, $options, "side" );
?>
