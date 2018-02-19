<?php
$dataURL = 'database/result.json';
$dataReceived = file_get_contents($dataURL);
// $datafile =  [$_SESSION['user'], $_SESSION['score']];
$datafile = array($_SESSION['user'] => $_SESSION['score']);
$log = json_decode($dataReceived, 'JSON_FORCE_ARRAY') ;
$log[] = $datafile;
$globalResult = json_encode($log, JSON_FORCE_OBJECT);
file_put_contents($dataURL, $globalResult);



echo "<div class='result'><p> votre score est de".$_SESSION['score']."félicitation </p></div>";

if ($_SESSION['score'] <= 5 and $_SESSION['score'] >= 0 ){
    echo "<div class='result'><p> Noob learn to code ! </p></div>";
}
elseif ($_SESSION ['score'] <= 9 and $_SESSION['score'] >= 6 ){
    echo "<div class='result'><p> Tu as besoin de réviser </p></div>";
}
elseif ($_SESSION ['score'] <= 12 and $_SESSION['score'] >= 10 ){
    echo "<div class='result'><p> Tout juste ! </p></div>";
}
elseif ($_SESSION ['score'] <= 15 and $_SESSION['score'] >= 13 ){
    echo "<div class='result'><p> Pas mal ! </p></div>";
}
elseif ($_SESSION ['score'] <= 19 and $_SESSION['score'] >= 16 ){
    echo "<div class='result'><p> Congratz mate ! </p></div>";
}
elseif ($_SESSION ['score'] == 20 ){
    echo "<div class='result'><p> Wow! GG! </p></div>";
}
else {
    echo "<div class='result'><p>Cheater ?!</p></div>";
}


?>
