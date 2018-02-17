<?php
$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "text";
$statement = "Comment créer une variable \"" . $rnd_name . "\" qui contient la valeur \"" . $rnd_line . "\" ?";

define_answer("$".$rnd_name . "='". $rnd_line ."';");
?>

<label class="label" for="Question_0"> <?php echo $statement; ?> </label>
<div class="input">    
    <input type="text" name="Question_0" id="Question_0" value="<?php echo(get_value_for("Question_0")); ?>"/>
</div>
