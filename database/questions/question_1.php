<?php
$type = "checkbox";
$statement = "Le(s) quel(s) de ces mots clef permet de concevoir une boucle ? ";

// On stocke la bonne réponse dans la variable '$good_answer'...
$good_answers = ["for", "foreach", "while"];

// ... on définit les différentes options possible pour le QCM, en oubliant pas d'y inclure la bonne réponse ('$good_answer')...
$options = [
    $good_answers[0],
    $good_answers[1],
    $good_answers[2],
    "loop",
    "boucle",
    "repeat"
];
$good_options = array();

// ... on mélange le tableau contenant les options...
shuffle($options);

echo '<p class="label">'. $statement .'</p>';

echo '<div class="input">';
// ... et on utilise une boucle pour parcourir le tableau et afficher une à une les différentes options.
for($j = 0; $j < count($options); $j++){
    $current_option = "Option_" . ($j + 1);
    // Si l'option actuelle correspond à l'une des bonnes réponses...
    if( in_array($options[$j], $good_answers)){
        // ... on indique que cette option est l'une des bonnes réponses...
        $good_options[] = $current_option;
    }
    
    echo '<input type="checkbox" id="Question_'. $id_question .'" name="Question_'. $id_question . '-' . $current_option .'" value="'. $current_option .'"';
    if(isset( $_POST[ 'Question_'.$id_question.'-'.$current_option ] )){
        echo ' checked';
    }
    echo '/>';
    echo '<label for="'. $current_option .'">';
    echo $options[$j];
    echo '</label>';
}
echo '</div>';
// ... 
define_answer( $good_options );
?>
