<?php
    $debug = true; // 'true' pour afficher tout ce qui concerne le développement, 'false' pour le cacher
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <div class="page">
        <header>
            <!-- Need logo -->
            <?php require("php/header.php"); ?>
        </header>
        <main>
            <?php
                require("php/form.php");
            ?>
        </main>
        <footer>
            <?php
                require("php/footer.php");
            ?>
        </footer>
    </div>
    
</body>
</html>