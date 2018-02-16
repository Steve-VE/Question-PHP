<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Est-il important de sanitiser des inputs de type radio ?";
$answer = $rnd_name . "='". $rnd_line ."';";
?>

<label for="Question 5"> <?php echo $statement; ?> </label>
<input type="radio" name="Question 5"/> <label> Oui </label><br />
<input type="radio" name="Question 5"/> <label> Non </label><br />
<input type="radio" name="Question 5"/> <label> Non, uniquement les types "text" </label>
