<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Est-il important de sanitiser des inputs de type \"radio\" ?";
$good_answer = "Oui";
$options = [
    $good_answer,
    "Non",
    "Uniquement si le formulaire comporte aussi des inputs de type \"text\""
];
shuffle($options);
define_answer($good_answer);

echo '<p class="label">'. $statement .'</p>';
echo '<div class="input">';
// ... et on utilise une boucle pour parcourir le tableau et afficher une à une les différentes options.
for($j = 0; $j < count($options); $j++){

    $current_option = "Option_" . ($j + 1);
    // Si l'option actuelle correspond à la bonnse réponse...
    if( $options[$j] == $good_answer){
        // ... on indique que cette option est la bonne réponse via la fonction 'define_answer'
        define_answer( $current_option );
    }
    
    echo '<div class="a">';
    echo '<input type="radio" id="Question_'. $id_question .'" name="Question_'. $id_question .'" value="'. $current_option .'"/>';
    echo '<label for="'. $current_option .'">';
    echo $options[$j];
    echo '</label>';
    echo '</div>';
}
echo '</div>';
?>

<!-- <div class="label">
    <p class="label">
        <?php echo $statement; ?>
    </p>
</div>
<div class="input">
    <div class="a">
        <input type="radio" name="Question_4" value="oui"/> 
        <label> Oui</label>
    </div>
    <div class="a">
        <input type="radio" name="Question_4"/> 
        <label> Non</label>
    </div>
    <div class="a">
        <input type="radio" name="Question_4"/> 
        <label> Uniquement si le formulaire comporte aussi des input "text"</label>
    </div>
</div> -->


