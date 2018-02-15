<<<<<<< HEAD
<?php
    $debug = true; // 'true' pour afficher tout ce qui concerne le développement, 'false' pour le cacher
?>

=======
<?php require "php/login.php";
  if (isset($user) && !empty($user)) {
    session_name($user);
    session_start();
  }
?>
>>>>>>> 17a36e646a9cf3b7faeaf5db99075effde46aecb
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
            require("php/header.php"); 
            ?>
        </header>
        <main>
<<<<<<< HEAD
            <?php
            require("php/form.php");
            ?>
=======
            <section class="formulaire">
                <div class="question">

                </div>
                <div class="question">

                </div>
                <div class="question">

                </div>
                <div class="question">

                </div>
                <div class="question">

                </div>
            </section>
>>>>>>> 17a36e646a9cf3b7faeaf5db99075effde46aecb
        </main>
        <footer>
            <?php
            require("php/footer.php");
            ?>
        </footer>
    </div>

</body>
</html>
