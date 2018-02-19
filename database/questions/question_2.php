<?php
$rnd_name = get_random_value($variable_text_names);
$rnd_function_name = get_random_value($function_print_names);

$type = "radio";
$statement = "Quelle fonction est sans erreurs ?";

// On stocke la bonne réponse dans la variable '$good_answer'...
$good_answer = "<pre>function ". $rnd_function_name ."(\$". $rnd_name ."){
    print_r(\$". $rnd_name .");<br/>
}</pre>";

$options = [
    $good_answer,
                
    "<pre>function ". $rnd_function_name ."(\$". $rnd_name ."){
    print_r(\$". $rnd_name .")<br/>
}</pre>",
                
    "<pre>function ". $rnd_function_name ."(){
    print_r(\$". $rnd_name .")<br/>
}</pre>"
];
echo_question( $type, $statement, $good_answer, $options, "side" );
?>
