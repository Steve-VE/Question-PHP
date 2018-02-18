<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "A quoi sert la fonction isset() ?";
$good_answer = "déterminer si une variable est définie et différente de NULL";
$options = [
    $good_answer,
    "vérifier si la variable est initiée",
    "vérifier si la variable est vide ou est égale à 0",
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
    echo '<input type="radio" id="Question_'. $id_question .'" name="Question_'. $id_question .'" value="'. $current_option .'"';
    if(isset( $_POST['Question_'.$id_question] )
    && $_POST['Question_'.$id_question] == $current_option ){
        echo ' checked';
    }
    echo '/>';
    echo '<label for="'. $current_option .'">';
    echo $options[$j];
    echo '</label>';
    echo '</div>';
}
echo '</div>';

?>
