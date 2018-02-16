
<section class="login">
  <?php  if (!isset($_POST['button']) && !isset($_POST['utilisateur'])){
  echo '<img src="../assets/images/clippy.jpg" alt="">'; }
  else {echo '<img src="../assets/images/badclippy.jpg" alt="">';} ?>
  <form class="connexion" action="" method="post">
    <label for="utilisateur"></label><input type="text" name="utilisateur" placeholder="Entrez votre nom ici" value="">
    <button type="submit" name="button">connexion</button>
  </form>
</section>
