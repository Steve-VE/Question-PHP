<?php

    $score = 0;
    if(isset($_POST['Question 1'])){
        // $id_question = 5;
    }
    else if(isset($_POST['Question 5'])){
        // $id_question = 5;
    }
    else{
        $id_question = 0;
    }

    echo '<form action="" method="post" class="formq">';

    for($i = 0; $i < 5; $i++){
        echo '<div class="question">';
        require("./database/questions/question_". $id_question .".php");
        echo '</div>';
        $id_question++; // On incrémente de 1 pour que la prochaine question à afficher soit la suivante.
    }

    echo '<input type="submit" value="Confirmer" id="bouton" />';
    echo '</form>';

?>