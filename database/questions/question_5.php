<?php 
// echo_question( "text", "Comment modifier une 'class' en PHP", "bla" );
$type = "text";
$statement = "
<span class=\"code\">
\$number = 5;<br/>
while( \$number < 100){<br/>
&nbsp;&nbsp;&nbsp;\$number = \$number * 2;<br/>
}</span><br/>
Quel nombre va afficher \"<span class='code'>echo \$number</span>\" ?";
echo_question( $type, $statement, "160" );
?>