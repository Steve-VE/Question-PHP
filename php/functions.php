<?php
/* ----------------------------------------------------//
// Dans ce fichier, uniquement les fonctions générales
//---------------------------------------------------- */




function get_random_value($value){
    if( is_array($value) ){
        return $value[ rand(0, count($value) - 1) ];
    }
    else{
        return $value;
    }
}

?>