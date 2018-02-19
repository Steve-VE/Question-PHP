<?php
$dataURL = 'database/result.json';
$dataReceived = file_get_contents($dataURL);
// $datafile =  [$_SESSION['user'], $_SESSION['score']];
$datafile = array($_SESSION['user'] => $_SESSION['score']);
$log = json_decode($dataReceived, 'JSON_FORCE_ARRAY') ;
$log[] = $datafile;
$globalResult = json_encode($log, JSON_FORCE_OBJECT);
file_put_contents($dataURL, $globalResult);

$_SESSION['score'] = 20;

echo "<div class='result'><h6>Votre score est de"." ".$_SESSION['score']."</h6>";

if ($_SESSION['score'] <= 5 and $_SESSION['score'] >= 0 ){
    echo "<div class='rouge'>Noob learn to code ! </div></div>";
}
elseif ($_SESSION ['score'] <= 9 and $_SESSION['score'] >= 6 ){
    echo "<div class='rouge'> Tu as besoin de réviser </div></div>";
}
elseif ($_SESSION ['score'] <= 12 and $_SESSION['score'] >= 10 ){
    echo "<div class='orange'> Tout juste ! </div></div>";
}
elseif ($_SESSION ['score'] <= 15 and $_SESSION['score'] >= 13 ){
    echo "<div class='vert'> Pas mal ! </div></div>";
}
elseif ($_SESSION ['score'] <= 19 and $_SESSION['score'] >= 16 ){
    echo "<div class='vert'> Congratz mate ! </div></div>";
}
elseif ($_SESSION ['score'] == 20 ){
    echo "<div class='gold'> Wow! GG!<br />
    <img src='assets/images/doritos.png' alt='Logo BeCode'> </div></div>";
}
else {
    echo "<div class='rouge'>Cheater ?!</div></div>";
}



?>
