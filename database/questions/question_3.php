<?php

$type = "text";
$statement = "Quelle fonction permet de mettre un mot ou une phrase en majuscule ?";
$answer = 'strtoupper';

define_answer($answer);
?>

<div class="label">
    <label for="Question_3"> <?php echo $statement; ?> </label>
</div>
<div class="input">    
    <input type="text" name="Question_3" id="Question_3"/>
</div>
