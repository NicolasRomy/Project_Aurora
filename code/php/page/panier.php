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

  <div class="row">
    <?php
    $totalNbJeu = 0;
    $totalPrix = 0;
    foreach ($_SESSION['user']['panier'] as $key => $value) {
      $totalNbJeu += $value;
      $jeux = recupGamePanier($pdo, $key);
      $totalPrix += $jeux[0]['prix'];
    }

    ?>
    <div class="col s4 offset-s4 white bd-raduis">
      <form class="" action="index.html" method="post">
        <div class="col s6">
          <h5>Panier(<?php echo $totalNbJeu ?>)</h5>
        </div>
        <div class="col s6">
          <h5 class="right "><?php echo $totalPrix ?> €</h5>
        </div>
      </form>
    </div>
    <?php


    foreach ($_SESSION['user']['panier'] as $id => $nb):
      $jeux = recupGamePanier($pdo, $id);
      $plateform = recupPlatForGame($pdo, $jeux[0]);
      ?>
      <div class="col s6 m6 l6 xl6 offset-s1 offset-m1 offset-l1 offset-xl1 bd-raduis-20 white mt5">
        <div class="col s12 m12 l12 xl12">
          <div class="col s3">
            <img class="taille-img bd-raduis-10 margin-top" src="../../../assets/imgJeu/<?php echo $jeux[0]['image']?>" alt="img jeu">
          </div>
          <div class="col s6">
            <h5><?php echo $jeux[0]['title']; ?></h5>
          </div>
          <div class="col s3">
            <h4><?php echo $jeux[0]['prix']; ?> €</h4>
          </div>
          <div class="col s5 margin-10">
            <div class="input-field col s12">
              <select>
                <option value="" disabled selected>Choisir la plateforme</option>
                <?php foreach ($plateform as $key => $plateformes) :?>
                <option value="<?php echo $plateformes['id']; ?>"><?php echo $plateformes['name']; ?></option>
              <?php endforeach; ?>
              </select>
              <label>Plateforme</label>
            </div>
          </div>
          <div class="col s2 offset-s1 center">
            <label for="nbGame">Quantitée</label>
            <input class="center-align" id="nbGame" type="text" name="" value="<?php echo $nb ?>">
          </div>
          <div class="col s9">
            <div class="col s6 left">
              <p class="green-text">En Stock</p>
            </div>
            <div class="col s4 offset-s2 right">
              <button class="btn" type="button" name="button">Supprimer</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col s4 m4 l4 xl4">

      </div>



    <?php endforeach; ?>
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
