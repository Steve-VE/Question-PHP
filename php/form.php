<?php

    $score = 0;
    $id_question = 0;

    /* ----------------------------------------------------//
    // Récupération et traitements des réponses utilisateur
    //---------------------------------------------------- */

    $user_answer; // Array qui contiendra toutes les réponses données par l'utilisateur
    if(isset($_POST['Question_0']) || isset($_POST['Question_5'])){ 
        if( isset($_POST['Question_0']) ){// Première série de questions
            $score = 0;
        }
        else if( isset($_POST['Question_5']) ){// Deuxième série de questions
            $id_question = 5;
            $score = $_SESSION['score'];
        }

        for($i = 0; $i < 5; $i++ ){
            $question_name = 'Question_'.$i;
            
            if( isset( $_POST[$question_name] )){ // Pour une question avec une réponse unique...
                $user_answer[ 'Question_'.($i + $id_question) ] = sanitize( $question_name );
            }
            else { // Pour une question avec réponse multiple...
                for($j = 0; $j < 10; $j++){
                    $option_name = 'Option_'.$j;
                    $complete_name = $question_name.'-'.$option_name;

                    if( isset( $_POST[$complete_name] )){
                        $user_answer[ 'Question_'.($i + $id_question) ][] = sanitize( $complete_name );
                    }
                }
            }
        }

        foreach($user_answer as $question => $answer){
            
        }

        if($debug){
            echo '<div class="debug left">';
            echo '<h3>Réponses de l\'utilisateur : </h3>';
            var_dump($user_answer);
            echo '</div>';
        }

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