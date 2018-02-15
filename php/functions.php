<?php
/* ----------------------------------------------------//
// Dans ce fichier, uniquement les fonctions générales
//---------------------------------------------------- */


function attribution($input) {
    // if (isset($_POST['utilisateur']) || $errorcheck == false) {
    //   return $_POST['utilisateur'];
    // }
    // elseif($errorcheck) {
    //     echo "error";
    // };
    if (isset($_POST[$input])){
        return $_POST[$input];
    }
}

function get_random_value($value){
    if( is_array($value) ){
        return $value[ rand(0, count($value) - 1) ];
    }
    else{
        return $value;
    }
}

?>