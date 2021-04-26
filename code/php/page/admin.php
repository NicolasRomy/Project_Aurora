<?php
include_once '../action/config.php';
if (! $_SESSION['user']['admin']){
  header('Location: ../page/index.php');
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php include '../content/head.php'; ?>
  <title>ajout jeux</title>
</head>

<body>
  <header>
    <?php include '../content/navbar.php'; ?>
  </header>

  <img src="../../../assets\background_gradiant.svg" alt="background" class="reverse2">
  <div class="row">
    <div class="col s12 center">
      <a class="waves-effect waves-light btn-large" href="AdminCreateGame.php">Ajouter un nouveau jeu</a>
    </div>
    <div class="col s12 center mt5">
      <a class="waves-effect waves-light btn-large" href="inscription.php">Modifier un jeu</a>
    </div>
  </div>
  <img src="../../../assets\background_gradiant.svg" alt="background"/>

  <?php include '../content/footer.php'; ?>

  <script type="text/javascript" src="../../js/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/materialize.js"></script>

  <script>

  $(document).ready(function(){

    $('.sidenav').sidenav();
    $('select').formSelect();
  });

  </script>
</body>
</html>
