<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Quelle fonction est sans erreurs ?";
$answer = $rnd_name . "='". $rnd_line ."';";
?>
<div class="label">
    <label for="Question_3"> <?php echo $statement; ?> </label>
</div>
<div class="input">
    <div class="side">
        <input type="radio" name="Question_3"/>
            <pre>
                function afficher(){
                print_r()}
            </pre>
    </div>
    <div class="side">
        <input type="radio" name="Question_3" />
            <pre>
                function afficher($texte){
                print_r($texte)}
            </pre>
    </div>
    <div class="side">
        <input type="radio" name="Question_3" />
            <pre>
                function afficher($texte){
                print_r($texte);}
            </pre>
    </div>
</div>
