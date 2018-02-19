<?php

echo "<div class='result'><h6>Votre score est de"." ".$_SESSION['score']."</h6>";

if ($_SESSION['score'] <= 1 ){
    echo "<div class='rouge'>Noob learn to code ! </div></div>";
}
elseif ($_SESSION ['score'] <= 3 ){
    echo "<div class='rouge'> Tu as besoin de réviser </div></div>";
}
elseif ($_SESSION ['score'] <= 5 ){
    echo "<div class='orange'> Tout juste ! </div></div>";
}
elseif ($_SESSION ['score'] <= 7 ){
    echo "<div class='vert'> Pas mal ! </div></div>";
}
elseif ($_SESSION ['score'] <= 9 ){
    echo "<div class='vert'> Congratz mate ! </div></div>";
}
elseif ($_SESSION ['score'] == 10 ){
    echo "<div class='gold'> Wow! GG!<br />
    <img src='assets/images/doritos.png' alt='Logo BeCode'> </div></div>";
}
else {
    echo "<div class='rouge'>Cheater ?!</div></div>";
}
?>