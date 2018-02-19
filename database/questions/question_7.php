<?php
$type = "radio";
$statement = "Que permet la syntaxe alternative ?<br/>Exemple :
    <pre>
        \"&lt;?php if (\$things == 10 ) :?&gt;\"
        \"&lt;?php endif; ?&gt;\"
    </pre>";
$good_answer = "D'assembler des instructions à l'intérieur d'un bloc de manière plus verbale que la syntaxe classique";

$options = [
    $good_answer,
    "De lever des exceptions en cas d'erreur",
    "C'est la seule façon d'ajouter de l'HTML à l'intérieur du code PHP"
];

echo_question($type, $statement, $good_answer, $options, "side");
?>