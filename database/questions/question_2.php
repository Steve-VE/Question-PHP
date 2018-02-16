<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Quelle fonction est sans erreurs ?";
$answer = $rnd_name . "='". $rnd_line ."';";
?>

<label for="Question 3"> <?php echo $statement; ?> </label>
<input type="radio" name="Question 3"/>
