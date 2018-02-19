<?php

    $score = 0;
    $id_question = 0;
    $current_page = "quizz";

    /* ----------------------------------------------------//
    // Récupération et traitements des réponses utilisateur
    //---------------------------------------------------- */

    // Array qui contiendra toutes les réponses données par l'utilisateur
    $user_answer; 

    // Condition qui permet de ne récupérer les réponses que si l'utilisateur a déjà répondu à l'une ou l'autre des questions
    if(isset($_POST['Question_0']) || isset($_POST['Question_5'])){  
        if( isset($_POST['Question_0']) ){// Première série de questions
            $score = 0;
        }
        else if( isset($_POST['Question_5']) ){// Deuxième série de questions
            $id_question = 5;
            $score = $_SESSION['score'];
        }

        // On parcourt les 5 questions, afin d'enregistrer les réponses de l'utilisateur dans le tableau '$user_answer'
        for($i = 0; $i < 5; $i++ ){
            $question_name = 'Question_'.($i+ $id_question);
            
            if( isset( $_POST[$question_name] )){ // Pour une question avec une réponse unique...
                $user_answer[ $question_name ] = normalize(sanitize( $question_name), true );
            }
            else { // Pour une question avec réponse multiple...
                for($j = 0; $j < 10; $j++){
                    $option_name = 'Option_'.$j;
                    $complete_name = $question_name.'-'.$option_name;

                    if( isset( $_POST[$complete_name] )){
                        $user_answer[  $question_name ][] = sanitize( $complete_name );
                        echo (sanitize( $complete_name ));
                    }
                }
            }
        }

        // Ensuite, pour chaque réponse enregistrée dans le tableau '$user_answer' ...
        if(isset($user_answer)){

            foreach($user_answer as $question => $current_answer){
                // ... on regarde s'il y a une correspondance dans le tableau de réponses propre à la session 
                if(isset( $_SESSION['answers'][$question] )){
                    if( is_array($current_answer) ){ // Si la réponse est un array...
                        // ... on vérifie que la différence entre les deux tableaux de réponse renvoit un tableau dont la taille est de 0 (via les fonction 'array_diff' et 'count')
                        if( count(array_diff($current_answer, $_SESSION['answers'][$question])) == 0
                        && count($current_answer) == count($_SESSION['answers'][$question]) ){
                            $score++;
                        }
                    }
                    else if($_SESSION['answers'][$question] == $current_answer){
                        // Si la réponse est la même, on augmente de 1 le score !
                        $score++;
                    }
                }
            }
        }
        // On enregistre le score dans la session
        $_SESSION['score'] = $score;

        if($debug){
            echo '<div class="debug left">';
            echo '<h3>Réponses de l\'utilisateur : </h3>';
            var_dump($user_answer);
            echo '</div>';
        }

    }

    // On vérifie si l'utilisateur a entré 5 réponses...
    if(isset($user_answer) && count($user_answer) == 5){
        if($id_question==0){ // ... si oui et qu'on était aux 5 premières questions, on passe directement aux 5 suivantes
            $id_question = 5;
        }
        else if($id_question==5){
            $current_page = "result";
        }
    }

    if($current_page == "quizz"){

        echo '<form action="" method="post" class="formq">';
        // On utilise une boucle pour afficher 5 questions à la fois
        for($i = 0; $i < 5; $i++){
            echo '<div class="question">';
            require("./database/questions/question_". $id_question .".php");
            echo '</div>';
            $id_question++; // On incrémente de 1 pour que la prochaine question à afficher soit la suivante.
        }
        
        echo '<input type="submit" value="Confirmer" id="bouton" />';
        echo '</form>';   
    }
    else if($current_page == "result"){
        require "php/result.php";
    }
?>