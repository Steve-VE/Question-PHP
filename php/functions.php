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

// Renvoit au hasard un élément pris dans un tableau
function get_random_value($value){
    if( is_array($value) ){
        return $value[ random(0, count($value) - 1, seed()) ];
    }
    else{
        return $value;
    }
}

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
        $result = $_POST[$input_name];
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

function session_active(){
    return (isset($_SESSION['user']) && $_SESSION != "");
}
?>