<?php
  if (isset($_POST['button'])) {
    function attribution($input, $errorcheck) {
    if (isset($_POST['utilisateur']) || $errorcheck == false) {
      return $_POST['utilisateur'];
    } elseif($errorcheck) {echo "error";};
  };
  $user = attribution('utilisateur', false);}
?>
<?php if (!isset($_POST['button']) && !isset($_POST['utilisateur'])): ?>
<section class="login">
  <img src="../assets/images/clippy.jpg" alt="">
  <form class="connexion" action="index.php" method="post">
    <label for="utilisateur"></label><input type="text" name="utilisateur" placeholder="Entrez votre nom ici" value="">
    <button type="submit" name="button">connexion</button>
  </form>
</section>
<?php elseif (isset($_POST['button']) && $_POST['utilisateur'] == ""): ?>
  <section class="login">
    <img src="../assets/images/badclippy.jpg" alt="">
    <form class="connexion" action="index.php" method="post">
      <label for="utilisateur"></label><input type="text" name="utilisateur" placeholder="Entrez votre nom ici" value="">
      <button type="submit" name="button">connexion</button>
    </form>
  </section>
<?php endif; ?>
