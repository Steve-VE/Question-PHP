<?php 
// echo_question( "text", "Comment modifier une 'class' en PHP", "bla" );
$type = "text";
$statement = "Dans le code suivant, la ligne \"echo \$number\" va afficher quel nombre ?
<pre>
\$number = 5;
while( \$number < 100){
    \$number = \$number * 2;
}
echo \$number;
</pre>";
echo_question( $type, $statement, "160" );
?>