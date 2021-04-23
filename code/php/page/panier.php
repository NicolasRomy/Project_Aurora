<?php
include_once '../action/config.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php include '../content/head.php'; ?>
  <title>Panier</title>
</head>

<body>
  <header>
    <?php include '../content/navbar.php'; ?>
  </header>

  <img src="../../../assets\background_gradiant.svg" alt="background" class="reverse2">

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
