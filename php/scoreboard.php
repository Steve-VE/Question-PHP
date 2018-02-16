<?php
    $dataURL = '../database/result.json';
    $scorearray = file_get_contents($dataURL);
    $scorearray = decode($scorearray);
    //scorearray est un tableau concentrant les noms et les scores
    $scoreboard = arsort($scorearray);
    //scoreboard étant le tableau contenant les tableau score/nom mais pas sûr
    for ($i = 0; $i <= 4; $i++) {
        print_r($scoreboard[$i]);
    };
?>
