<?php

$type = "select";
$statement = "Prenons une table \$array, si on considère une boucle
<pre>foreach (\$things as \$key => \$value)</pre>.<br/>
Que va afficher :<br/><pre>echo \$value</pre> et <br/><pre>echo \$key</pre>";
$answer = [
    "\"echo \$key\" va afficher la clé d'un élément du tableau \$things",
    "\"echo \$value\" va afficher la valeur contenue dans un élément du tableau \$things"
];

$options = [[
    $answer[0],
    "\"echo \$key\" va afficher la valeur contenue dans un élément du tableau \$things",
    "\"echo \$key\" va afficher le texte \"key\"",
    "\"echo \$key\" va afficher la valeur contenue dans \$value",
], [
    $answer[1],
    "\"echo \$value\" va afficher la clé d'un élément du tableau \$things",
    "\"echo \$value\" va afficher le texte \"value\"",
    "\"echo \$value\" va afficher la valeur contenue dans \$key"
]];

echo_question( $type, $statement, $answer, $options );
?>
