<?php
/* ----------------------------------------------------//
// Dans ce fichier, uniquement les fonctions générales
//---------------------------------------------------- */


function attribution($input) {
    if (isset($_POST[$input])){
        return $_POST[$input];
    }
}

// Renvoit au hasard un élément pris dans un tableau
function get_random_value($value){
    if( is_array($value) ){
        return $value[ rand(0, count($value) - 1) ];
    }
    else{
        return $value;
    }
}


// Renvoit un nombre pris aléatoirement entre '$min' et '$max' mais en se basant sur le nombre '$seed'
function random($min, $max, $seed){
    srand($seed);
    return rand($min, $max);
}


// FONCTION PROPRE AUX SESSIONS

function session_active(){
    return (isset($_SESSION['user']) && $_SESSION != "");
}
?>