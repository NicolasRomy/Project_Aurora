<?php
include_once '../action/config.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php include '../content/head.php'; ?>
  <link rel="stylesheet" href="../../css/panier.css"/>
  <title>Panier</title>
</head>

<body>
  <header>
    <?php include '../content/navbar.php'; ?>
  </header>

  <?php if($_SESSION['user']['adresse'] == NULL): ?>
    <div class="row mt5">
      <div class="col s12 white bd-raduis-20">
        <form class="" action="../action/setAdress.php" method="post">
          <div class="col s12 ">
            <label for="adress">Rentrer votre adresse</label>
            <input id="adresse" type="text" name="adress" value="">
          </div>
          <div class="col s12 center">
            <button class="btn mb5" type="submit" name="button">Valider</button>
          </div>
        </form>
      </div>
    </div>

  <?php else:
    header('Location: ../page/Paiement.php');

  endif;
  ?>


  <img src="../../../assets\background_gradiant.svg" alt="background"/>

  <?php include '../content/footer.php'; ?>

  <script type="text/javascript" src="../../js/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/materialize.js"></script>

  <script>

  $(document).ready(function(){

    $('.sidenav').sidenav();
    $('select').formSelect();
  });

  $('')

  </script>
</body>
</html>
