<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "text";
$statement = "Utilisez une fonction en une ligne qui permet de mettre un mot en majuscule";
$answer = $rnd_name . "='". $rnd_line ."';";
?>

<label for="Question 4"> <?php echo $statement; ?> </label>
<input type="text" name="Question 4"/>
