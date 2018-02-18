<?php
$type = "text";
$statement = "Que permet cette syntaxe alternative ?";
$good_answer = "Afficher un bloc de code si la condition est respectée";
?>

<label for="Question_8"> <?php echo $statement ?><br />
    <pre> 
        "&lt;?php if ($things == 10 ) :?&gt;"
        "&lt;?php endif; ?&gt;"
    </pre>
</label>
<input type="text" name="Question_8" />