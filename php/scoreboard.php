<?php
    $dataURL = '../database/result.json';
    $scorearray = file_get_contents($dataURL);
    $scoreresult = json_decode($scorearray);
    // $datascore = array($scorearray);
    //scoreboard est un tableau concentrant les noms et les scores
    // $scoreboard = arsort($datascore);
    //scoreboard étant le tableau contenant les tableau score/nom mais pas sûr
    // for ($i = 0; $i <= 4; $i++) {
    //     print_r($scoreboard[$i]);
    // };
    var_dump($scorearray);
    var_dump($scoreresult);
?>
