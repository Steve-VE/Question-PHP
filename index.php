<?php require "php/login.php";
  if (isset($user) && !empty($user)) {
    session_name($user);
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
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
        </header>
        <main>
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
        </main>
        <footer>

        </footer>
    </div>

</body>
</html>
