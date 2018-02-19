<?php
    // On charge les variables
    require "php/variables.php";
    // On charge les fonctions
    require "php/functions.php";
    
    $user = attribution('utilisateur');
    $current_page = "";
    
    if(isset($_GET['debug'])){
        $temp = $_GET['debug'];
        if($temp == "result" || $temp == "login"){
            $current_page = $temp;
        }
        else if($temp == "logout"){
            if(session_active()){
                session_destroy();
            }
            $current_page = "login";
        }
    }

    session_start();
    
    if(isset($_GET['debug'])){
        $temp = $_GET['debug'];
         if($temp == "logout"){
            session_destroy();
            $_SESSION = null;
        }
    }

    if(!session_active()){
        $current_page = "login";

        if (isset($user) && !empty($user)) {
            login($user);
            $current_page = "quizz";
        }
    }
    else{
        $current_page = "quizz";
    }

    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="stylesheets/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <div class="page">
        <header>
            <?php
            require "php/header.php" ; 
            ?>
        </header>
        <main>
            <?php
            if($current_page == 'login'){
                require "php/login.php";
            }
            else if($current_page == "result"){
                require "php/result.php";
            }
            else{   
                require "php/form.php";
            }
            ?>
        </main>
        <footer>
            <?php
            require "php/footer.php";

            if($debug){
                // echo '<div class="debug left">';
                // echo '<h3>Etat de la session :</h3>';
                // echo "Session active ? " . (session_active() ? 'true' : 'false') . '<br/>';
                // echo "Session status : " . session_status() .'<br/>';
                // echo "Page à afficher : " . $current_page;
                // echo '</div>';

                echo '<div class="debug right">';
                if(isset($_POST)){
                    echo '$_POST : '; 
                    var_dump($_POST); 
                    echo '<br/>';
                }
                if(isset($_SESSION)){
                    echo '$_SESSION : '; 
                    var_dump($_SESSION); 
                    echo '<br/>';
                }
                if(isset($_GET)){
                    echo '$_GET : '; 
                    var_dump($_GET); 
                    echo '<br/>';
                }
                echo '</div>';
            }
            ?>
        </footer>
    </div>

</body>
</html>
