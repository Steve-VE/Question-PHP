<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Quel boucle permet d'afficher ces choix: ";
$answer[$id_question] = $rnd_name . "='". $rnd_line ."';";

$_SESSION['answers'][$id_question] =  $answer[$id_question];
?>

<label for="Question 2"> <?php echo $statement; ?> </label>
<input type="radio" name="Question 2"/>
