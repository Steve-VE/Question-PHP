<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "text";
$statement = "Comment créer une variable \"" . $rnd_name . "\" qui contient la valeur \"" . $rnd_line . "\" ?";
$answer = $rnd_name . "='". $rnd_line ."';";
?>

<label for="Question_1"> <?php echo $statement; ?> </label>
<input type="text" name="Question_1"/>
