<?php
    // On charge les variables
    require "php/variables.php";
    // On charge les fonctions
    require "php/functions.php";
    
    $user = attribution('utilisateur');
    if (isset($user) && !empty($user)) {
        session_name($user);
        session_start();
        $current_page = "quest1";
    }
    else{
        $current_page = "login";
    }

    if(isset($_GET['debug'])){
        $temp = $_GET['debug'];
        if($temp == "quest1" || $temp == "quest2" || $temp == "result")
        $current_page = $temp;
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
            var_dump($current_page);
            require "php/header.php" ; 
            ?>
        </header>
        <main>
            <?php
            if($current_page == 'quest1' || $current_page == 'quest2'){
                require "php/form.php";
            }
            else if($current_page == "result"){
                require "php/result.php";
            }
            else{   
                require "php/login.php";
            }
            ?>
        </main>
        <footer>
            <?php
            require "php/footer.php";
            ?>
        </footer>
    </div>

</body>
</html>
