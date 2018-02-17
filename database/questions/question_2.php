<?php
$type = "radio";
$statement = "Quelle fonction est sans erreurs ?";

// On stocke la bonne réponse dans la variable '$good_answer'...
$good_answer = "<pre>function afficher(\$texte){<br/>
                print_r(\$texte);}</pre>";

                $options = [
                    $good_answer,
                
                    "<pre>function afficher(\$texte){<br/>
                    print_r(\$texte)}</pre>",
                
                    "<pre>function afficher(){<br/>
                    print_r(\$texte)}</pre>"
                ];

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
    
    echo '<div class="side">';
    echo '<input type="radio" id="Question_'. $id_question .'" name="Question_'. $id_question .'" value="'. $current_option .'"/>';
    echo '<label for="'. $current_option .'">';
    echo $options[$j];
    echo '</label>';
    echo '</div>';
}
echo '</div>';
?>
