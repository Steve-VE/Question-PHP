<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "A quoi sert la fonction isset() ?";
$answer = $rnd_name . "='". $rnd_line ."';";
?>

<label for="Question_9"> <?php echo $statement; ?> </label>
<input type="radio" name="Question_9"/>
