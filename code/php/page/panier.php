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


  <div class="row mt5">
    <?php
    $totalNbJeu = 0;
    $totalPrix = 0;
    $livraison = 0;
    $total = 0;
    foreach ($_SESSION['user']['panier'] as $key => $value) {
      $totalNbJeu += $value;
      $jeux = recupGamePanier($pdo, $key);
      $totalPrix += $jeux[0]['prix'];
      $livraison += 2;
    }
    $total = $livraison + $totalPrix;
    ?>
    <div class="col s4 offset-s4 white bd-raduis">
      <form class="" action="../page/adress.php" method="post">

        <div class="col s12">
          <div class="col s6">
            <h5>Panier(<?php echo $totalNbJeu ?>)</h5>
          </div>
          <div class="col s6">
            <h5 class="right "><?php echo $totalPrix ?> €</h5>
          </div>
        </div>

        <div class="col s12">
          <div class="col s6">
            <h5>Frais de livriason : </h5>
          </div>
          <div class="col s6">
            <h5 class="right"><?php echo $livraison ?> €</h5>
          </div>
        </div>

        <div class="col s12">
          <div class="col s6">
            <h5>Total : </h5>
          </div>
          <div class="col s6">
            <h5 class="right"><?php echo $total ?> €</h5>
          </div>
        </div>
        <div class="col s12 center mt5 mb5">
          <button class="btn" type="submit" name="button">Valider le panier</button>
        </div>
      </form>
    </div>
    <?php


    foreach ($_SESSION['user']['panier'] as $id => $nb):
      $jeux = recupGamePanier($pdo, $id);
      $plateform = recupPlatForGame($pdo, $jeux[0]);
      ?>
      <form class="" action="../action/dellGamePanier.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="col s6 m6 l6 xl6 offset-s3 offset-m3 offset-l3 offset-xl3 bd-raduis-20 white mt5">
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
                <button class="btn" type="submit" name="button">Supprimer</button>
              </div>
            </div>
          </div>
        </div>
      </form>
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

  $('')

  </script>
</body>
</html>
