<?php
    function get_random_value($array){
        return $array;
    }
    echo '<form action="" method="post">';

    for($i = 0; $i < 5; $i++){
        echo '<div class="question">';
        require("./database/questions/question_0.php");
        echo '</div>';
    }


    echo '<input type="submit" value="Confirmer" id="bouton" />';
    echo '</form>';

?>