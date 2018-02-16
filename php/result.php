<?php
$dataURL = '../database/result.json';
$dataReceived = file_get_contents($dataURL);
// $datafile =  [$_SESSION['user'], $_SESSION['score']];
$datafile = array($_SESSION['user'] => $_SESSION['score']);
$log = json_decode($dataReceived) ;
$log[] = $datafile;
$globalResult = json_encode($log);
file_put_contents($dataURL, $globalResult);
?>
