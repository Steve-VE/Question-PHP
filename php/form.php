<?php

    $score = 0;
    $id_question = 0;
    $user_answer;

    if(isset($_POST['Question_0'])){
        // $id_question = 5;

        for($i = 0; $i < 3; $i++ ){
            $question_name = 'Question_'.$i;
            
            if( isset( $_POST[$question_name] )){
                $user_answer[$i] = sanitize( $question_name );
            }
            else {
                for($j = 0; $j < 6; $j++){
                    $option_name = 'Option_'.$j;
                    $complete_name = $question_name.'-'.$option_name;

                    if( isset( $_POST[$complete_name] )){
                        $user_answer[$i][] = sanitize( $complete_name );
                    }
                }
            }
        }
        if($debug){
            echo '<div class="debug left">';
            var_dump($user_answer);
            echo '</div>';
        }

    }
    else if(isset($_POST['Question_5'])){
        // $id_question = 5;
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