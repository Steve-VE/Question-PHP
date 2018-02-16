<?php

$rnd_name = get_random_value($variable_names);
$rnd_line = get_random_value($greetings);

$type = "radio";
$statement = "Quelle fonction est sans erreurs ?";

$good_answer = "<pre>function afficher(\$texte){<br/>
                print_r(\$texte);</br> 
                }</pre>";

$options = [
    $good_answer,

    "<pre>function afficher(\$texte){<br/>
    print_r(\$texte)</br>
    }</pre>",

    "<pre>function afficher(){<br/>
    print_r(\$texte)</br>
    }</pre>"
];
shuffle($options);

// Dans le cas d'une question à choix multiple, on définit la réponse étant comme l'index correspondant à la bonne réponse


echo '<p>'. $statement .'</p>';
for($i = 0; $i < count($options); $i++){
    $current_option = "Option_" . ($i + 1);
    echo '<input type="radio" id="Question_'. $id_question .'" name="'. $current_option .'" value="'. $current_option .'"/>';

    if( $options[$i] == $good_answer){
        define_answer( $current_option );
    }

    echo '<label for="'. $current_option .'">';
    echo $options[$i];
    echo '</label>';
}
?>
<!-- <input type="radio" name="Question_3"/>
<pre>
  function afficher(){<br/>
    print_r()</br>
  }
</pre>
<input type="radio" name="Question_3" />
<pre>
  function afficher($texte){<br/>
    print_r($texte)</br>
  }
</pre>
<input type="radio" name="Question_3" />
<pre>
  function afficher($texte){<br/>
    print_r($texte);</br>
  }
</pre> -->
