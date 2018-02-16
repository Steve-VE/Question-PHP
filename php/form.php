<?php
    
    echo '<form action="" method="post" class="formq">';

    for($i = 0; $i < 5; $i++){
        echo '<div class="question">';
        require("./database/questions/question_". $i .".php");
        echo '</div>';
    }


    echo '<input type="submit" value="Confirmer" id="bouton" />';
    echo '</form>';

?>