<?php
$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Comment à partir du php injecter (en html) un paragraphe à l'intérieur d'une div ?";
$good_answer = "<pre><?php echo '<div class=exemple><p>ceci est un paragraphe</p></div>' ?></pre> ";
$options = [
    $good_answer,
    "Ce n'est pas possible car on ne peut afficher de codes php dans de l'HTML",
    "<pre><?php echo '<div class=exemple><p>ceci est un paragraphe</p></div>' ></pre>",
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
