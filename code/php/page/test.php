<?php include_once '../action/config.php';

$sql=
  " SELECT * FROM jeux
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$jeux = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql=
  " SELECT * FROM images
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$image = $pre->fetchAll(PDO::FETCH_ASSOC);
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
  <?php
  foreach($jeux as $jeu){
    include '../content/game_card.php';
  } ?>
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
