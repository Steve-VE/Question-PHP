<?php

$type = "select";
$statement = "Prenons une table \$array, si on considère une boucle
<pre>foreach (\$things as \$key => \$value)</pre>.<br/>
Que va afficher :<br/><pre>echo \$value</pre> et <br/><pre>echo \$key</pre>";
$answer = [
    "<pre>echo \$key</pre> va afficher la clé d'un élément du tableau \$things",
    "<pre>echo \$value</pre> va afficher la valeur contenue dans un élément du tableau \$things"
];

$options = [[
    $answer[0],
    "<pre>echo \$key</pre> va afficher la valeur contenue dans un élément du tableau \$things",
    "<pre>echo \$key</pre> va afficher le texte \"key\"",
    "<pre>echo \$key</pre> va afficher la valeur contenue dans \$value",
], [
    $answer[1],
    "<pre>echo \$value</pre> va afficher la clé d'un élément du tableau \$things",
    "<pre>echo \$value</pre> va afficher le texte \"value\"",
    "<pre>echo \$value</pre> va afficher la valeur contenue dans\$key"
]];

echo_question( $type, $statement, $answer, $options );
?>
