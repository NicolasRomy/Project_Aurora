<?php
include_once '../action/config.php';
$coupCoeur = recupCoeur($pdo);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php include '../content/head.php'; ?>
  <link rel="stylesheet" href="../../css/index.css"/>
  <title>Accueil</title>
</head>

<body>
  <header>
    <?php include '../content/navbar.php'; ?>
  </header>
  <div class="row">

    <div class="col s12 m12 l12 xl10 offset-xl2 offset-xl2 offset-xl2 offset-xl2">
      <h2 class="titre white-text">Bienvenue sur Aurora, le site d'achat de jeu vidéo conçu</h2> <h2 class="titre white-text gradient"> pour les parents.</h2>
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
        <div class="col s10 m10 l10 xl10 offset-s1 offset-m1 offset-l1 offset-xl1">
          <div class="col s12 white mt5 bd-raduis"> <!-- à opti en un foreatch avec un array de PEGI -->
            <div class="col s2 m2 l2 xl2 valign-wrapper">
              <a href="#"><img class="taille" src="../../../assets/btn_PEGI/btn_PEGI_3.PNG" alt="bntPEGI3"></a>
            </div>
            <?php foreach ($coupCoeur as $key => $jeu) {
                    if($jeu['PEGI'] == 3){
                      gameCard($pdo, $jeu, 0);
                    }
                  }
                ?>
          </div>
          <div class="col s12 white mt5 bd-raduis">
            <div class="col s2 m2 l2 xl2 valign-wrapper">
              <a href="#"><img class="taille" src="../../../assets/btn_PEGI/btn_PEGI_7.PNG" alt="bntPEGI7"></a>
            </div>
            <?php
            foreach ($coupCoeur as $key => $jeu) {
                    if($jeu['PEGI'] == 7){
                      gameCard($pdo, $jeu, 0);
                    }
                  }
            ?>
          </div>
          <div class="col s12 white mt5 bd-raduis">
            <div class="col s2 m2 l2 xl2 valign-wrapper">
              <a href="#"><img class="taille" src="../../../assets/btn_PEGI/btn_PEGI_12.PNG" alt="bntPEGI12"></a>
            </div>
            <?php
                foreach ($coupCoeur as $key => $jeu) {
                        if($jeu['PEGI'] == 12){
                          gameCard($pdo, $jeu, 0);
                        }
                      }
                ?>
          </div>
          <div class="col s12 white mt5 bd-raduis">
            <div class="col s2 m2 l2 xl2 valign-wrapper">
              <a href="#"><img class="taille" src="../../../assets/btn_PEGI/btn_PEGI_16.PNG" alt="bntPEGI16"></a>
            </div>
            <?php
                foreach ($coupCoeur as $key => $jeu) {
                        if($jeu['PEGI'] == 16){
                          gameCard($pdo, $jeu, 0);
                        }
                      }
                ?>
          </div>
              <div class="col s12 white mt5 bd-raduis">
                <div class="col s2 m2 l2 xl2 valign-wrapper">
                  <a href="#"><img class="taille" src="../../../assets/btn_PEGI/btn_PEGI_18.PNG" alt="bntPEGI18"></a>
                </div>
                <?php
                  foreach ($coupCoeur as $key => $jeu) {
                          if($jeu['PEGI'] == 18){
                            gameCard($pdo, $jeu, 0);
                          }
                        }
            ?>
              </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>


      <img src="../../../assets\background_gradiant.svg" alt="background" class="reverse2">
      <?php include '../content/pegi_explanation.php'; ?>
      <img src="../../../assets\background_gradiant.svg" alt="background">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>

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
