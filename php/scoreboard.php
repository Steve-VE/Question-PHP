<?php
    $dataURL = '../database/result.json';
    $scorearray = file_get_contents($dataURL);
    $scoreresult = json_decode($scorearray, 'JSON_FORCE_ARRAY');echo "<br/>";


    foreach ($scoreresult as $key => $value) {
        $board[key($value)] = $value[key($value)];

    }
    asort($board);
    $board = array_reverse($board);
    $i = 5;
    foreach ($board as $nom => $score) {
        echo $nom." ";
        echo $score."<br/>";
        $i--;
        if ($i == 0) {
            break;
        }
    }





?>
