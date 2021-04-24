<?php
include_once '../action/config.php';
$coupCoeur = recupCoeur($pdo);
var_dump($coupCoeur);
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php include '../content/head.php'; ?>
  <title>Accueil</title>
</head>

<body>
  <header>
    <?php include '../content/navbar.php'; ?>
  </header>
  <div class="row">

    <div class="col s12 m12 l12 xl12">
      <h2>Bienvenue sur Aurora, le site d'achat de jeu vidéo conçu pour les parents.</h2>
      <p>Acheter des jeux pour vos enfants en toute confiance grâce à nos différents indicateurs</p>
    </div>

    <img src="../../../assets\background_gradiant.svg" alt="background"/>

    <div class="col s12 m12 l12 xl12">
      <div class="col s12 m12 l12 xl12">
        <h2 class="center-align">Nos jeux par PEGI</h2>
        <p>Le PEGI est un système d'évaluation des jeux vidéo, créé pour aider les consommateurs
          (en particulier, les parents) à s'informer de chaque type de jeux vidéo à l'aide de
          différents logos exposé sur leur boite d'origine.</p>
      </div>

        <div class="col s2 m2 l2 xl2 offset-s1 offset-m1 offset-l1 offset-xl1">
          <a href="#"><img class="responsive-img" src="../../../assets/btn_PEGI/btn_PEGI_3.PNG" alt="bntPEGI3"></a>
        </div>
        <div class="col s2 m2 l2 xl2">
          <a href="#"><img class="responsive-img" src="../../../assets/btn_PEGI/btn_PEGI_7.PNG" alt="bntPEGI3"></a>
        </div>
        <div class="col s2 m2 l2 xl2">
          <a href="#"><img class="responsive-img" src="../../../assets/btn_PEGI/btn_PEGI_12.PNG" alt="bntPEGI3"></a>
        </div>
        <div class="col s2 m2 l2 xl2">
          <a href="#"><img class="responsive-img" src="../../../assets/btn_PEGI/btn_PEGI_16.PNG" alt="bntPEGI3"></a>
        </div>
        <div class="col s2 m2 l2 xl2">
          <a href="#"><img class="responsive-img" src="../../../assets/btn_PEGI/btn_PEGI_18.PNG" alt="bntPEGI3"></a>
        </div>

        <div class="col s12 m12 l12 xl12">
          <h3 class="center-align">Nos jeux coup de coeur</h3>
        </div>
        <div class="col s12">
          <?php foreach ($coupCoeur as $key => $jeu) {
                  if($jeu['PEGI'] == 3){
                    include '../content/game_card.php';
                  }
                }
              ?>
        </div>
        <div class="col s12">
          <?php
          foreach ($coupCoeur as $key => $jeu) {
                  if($jeu['PEGI'] == 7){
                    include '../content/game_card.php';
                  }
                }
          ?>
        </div>
        <div class="col s12">
          <?php
              foreach ($coupCoeur as $key => $jeu) {
                      if($jeu['PEGI'] == 12){
                        include '../content/game_card.php';
                      }
                    }
              ?>
        </div>
        <div class="col s12">
          <?php
              foreach ($coupCoeur as $key => $jeu) {
                      if($jeu['PEGI'] == 16){
                        include '../content/game_card.php';
                      }
                    }
              ?>
        </div>
            <div class="col s12">
              <?php
                foreach ($coupCoeur as $key => $jeu) {
                        if($jeu['PEGI'] == 18){
                          include '../content/game_card.php';
                        }
                      }
          ?>
            </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>

      <!-- card age fixe 3 7 12 16 18 -->

      <img src="../../../assets\background_gradiant.svg" alt="background" class="reverse">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <img src="../../../assets\background_gradiant.svg" alt="background">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>
    <?php include '../content/pegi_explanation.php'; ?>
    <footer>
    </footer>




    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.js"></script>

    <script>

    $(document).ready(function(){

      $('.sidenav').sidenav();

    });

    </script>
  </body>
  </html>
