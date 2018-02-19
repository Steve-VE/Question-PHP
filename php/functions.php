<?php
/* ----------------------------------------------------//
// Dans ce fichier, uniquement les fonctions générales
//---------------------------------------------------- */


function attribution($input) {
    if (isset($_POST[$input])){
        return $_POST[$input];
    }
}

// Permet de définir une réponse à une question
function define_answer($answer){
    global $id_question;
    $answers[$id_question] = $answer;
    $_SESSION['answers']['Question_'.$id_question] =  $answers[$id_question];
}


// Fonction qui s'occupe de transcrire les questions en HTML
function echo_question( $type, $statement, $good_answer, $options = null, $css_class = "" ){
    global $id_question;
    $current_question = "Question_".$id_question;

    // Si options est un tableau d'options...
        if( is_array($options) ){
        shuffle($options); // ... on les mélange afin que deux utilisateurs différents n'aient pas forcément le même ordre
    }

    if($type == "text"){ // Si la question a recourt à un input de type 'text'
        define_answer( $good_answer );

        echo '<label class="label" for="'. $current_question .'" >';
        echo $statement;
        echo '</label>';

        echo '<div class="input">';
        echo '<input type="text" name="'. $current_question .'"';
        echo ' value="'. get_value_for($current_question) .'"';
        echo ' />';
        echo '</div>';
    }
    else if($type == "checkbox"){ // Si la question a recourt à des inputs de type 'checkbox'
        $good_options = array();
        
        echo '<p class="label">'. $statement .'</p>';
        echo '<div class="input">';

        for($j = 0; $j < count($options); $j++){
            $current_option = "Option_" . ($j + 1);

            // Si l'option actuelle correspond à l'une des bonnes réponses...
            if( in_array($options[$j], $good_answer)){
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
        define_answer( $good_options );
    }
    else if( $type == "radio" ){ // Si la question a recourt à des inputs de type 'radio'
        echo '<p class="label">'. $statement .'</p>';
        echo '<div class="input">';

        for($j = 0; $j < count($options); $j++){

            $current_option = "Option_" . ($j + 1);
            // Si l'option actuelle correspond à la bonnse réponse...
            if( $options[$j] == $good_answer){
                // ... on indique que cette option est la bonne réponse via la fonction 'define_answer'
                define_answer( $current_option );
            }
            
            echo '<div class="'. $css_class .'">';
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
    }
    else if( $type == "select" ){ // Si la question a recourt à des inputs de type 'select'
        $good_options = array();

        echo '<p class="label">'. $statement .'</p>';
        echo '<div class="input">';

        for($j = 0; $j < count($options); $j++){
            shuffle($options[$j]);

            echo '<select name="Reponse_'. $j .'">';
            for($k = 0; $k < count($options[$j]); $k++){
                echo '<option value="Option_'.$k.'">';
                echo '</option>';
            }
            echo '</select>';
        }

        define_answer($good_options);

        echo '</div>';
    }

}



// Renvoit au hasard un élément pris dans un tableau
function get_random_value($value){
    if( is_array($value) ){
        return $value[ random(0, count($value) - 1, seed()) ];
    }
    else{
        return $value;
    }
}


// Renvoit une valeur "standardisé" afin de comparer plus efficacement les réponses données par l'utilisateur et la réponse attendue
function normalize($string, $brutal = false){
    $string = str_replace(" ", "", $string);
    $string = str_replace('"', "'", $string);

    if($brutal){
        $string = str_replace('(', "", $string);
        $string = str_replace(')', "", $string);
        // $string = str_replace(';', "", $string);
    }

    return $string;
}


// Renvoit un seed (utile pour la fonction random) qui dépend du nom de l'utilisateur
function seed(){
    $seed_string = "default";
    $seed = 0;

    if(isset($_SESSION['user'])){
        $seed_string = $_SESSION['user'];
    }
    for($i = strlen($seed_string) - 1; $i >= 0; $i--){
        $seed += ord($seed_string[$i]);
    }
    return $seed;
}

// Renvoit une valeur contenu dans un champ du formulaire
function get_value_for($input_name){
    $result = "";

    if(isset($_POST[$input_name])){
        $result = normalize(sanitize($input_name));
    }

    return $result;
}


// Renvoit un nombre pris aléatoirement entre '$min' et '$max' mais en se basant sur le nombre '$seed'
function random($min, $max, $seed){
    srand($seed);
    return rand($min, $max);
}

function sanitize($key){
    // TODO : vérifier si la clef existe dans le post, puis sanetiser et uniformiser la valeur, et enfin, renvoyer 'false' si il y a un soucis (la clef n'existe pas ou contient une valeur vide par exemple)
    return $_POST[$key];
}


// FONCTION PROPRE AUX SESSIONS

// Renvoit true si une section est active
function session_active(){
    return (isset($_SESSION['user']) && $_SESSION != "");
}

// Fonction à appeler quand on soit que l'utilisateur ouvre sa session
function login($username){
    // session_name($user);
    // session_start();
    $_SESSION['user'] = $username;

    // TODO : vérifier au préalable s'il existe déjà un score au nom de l'utilisateur. Si oui, le récupérer
    $_SESSION['score'] = 0;
}
?>