<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Quel boucle permet d'afficher ces choix: ";
$answer = $rnd_name . "='". $rnd_line ."';";
?>
<div class="label">
    <label for="Question_2"> <?php echo $statement; ?> </label>
</div>
<div class="input">
    <input type="radio" name="Question_2"/>
</div>