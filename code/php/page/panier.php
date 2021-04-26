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

  <img src="../../../assets\background_gradiant.svg" alt="background" class="reverse2">

<div class="col s12">
  <?php
  $totalJeu = 0;
  foreach ($_SESSION['user']['panier'] as $id => $nb):
    $totalJeu += $nb;
    $jeux = recupGamePanier($pdo, $id);
    $plateform = recupPlatForGame($pdo, $jeux[0]);
   ?>
   <div class="col s6 m6 l6 xl6 offset-s1 offset-m1 offset-l1 offset-xl1 bd-raduis white">
     <img class="taille-img" src="../../../assets/imgJeu/<?php echo $jeux[0]['image']?>" alt="img jeu">
   </div>
   <div class="col s4 m4 l4 xl4">
<p>test</p>
   </div>

</div>

<?php endforeach; ?>

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
