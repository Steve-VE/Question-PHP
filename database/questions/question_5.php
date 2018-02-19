<?php 
// echo_question( "text", "Comment modifier une 'class' en PHP", "bla" );
$type = "text";
$statement = "Dans le code suivant, la ligne \"echo \$number\" va afficher quel nombre ?
<span class=\"code\">
\$number = 5;<br/>
while( \$number < 100){<br/>
    \$number = \$number * 2;<br/>
}<br/>
echo \$number;</span>";
echo_question( $type, $statement, "160" );
?>