<?php
    $dataURL = '../database/result.json';
    $scorearray = file_get_contents($dataURL);
    $scoreresult = json_decode($scorearray, 'JSON_FORCE_ARRAY');echo "<br/>";

    foreach ($scoreresult as $key => $value) {
        $board[$key] = $value;
    }
    asort($board);
    $board = array_reverse($board);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../stylesheets/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scoreboard</title>
</head>
<body>
    <div class="scoreboard">
        <?php
            $i = 5;
            foreach ($board as $nom => $score) {
                echo "<h".(6 - $i).">";
                echo $nom." <span class='score'>";
                echo $score."pts</span></h".(6 - $i).">";
                $i--;
                if ($i == 0) {
                    break;
                }
            }
        ?>
    </div>
</body>
</html>