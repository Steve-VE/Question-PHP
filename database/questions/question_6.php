<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "text";
$statement = "Prenons une table \$array, si on considère une boucle
<pre>foreach (\$things as \$key => \$value)</pre>.<br/>
Que va afficher :<br/><pre>echo \$value</pre> et <br/><pre>echo \$key</pre>";
$answer = $rnd_name . "='". $rnd_line ."';";

// echo_question( $type, $statement, $answer );
?>

<label for="Question_7"> <?php echo $statement; ?> </label>
<input type="text" name="Question_7"/>
