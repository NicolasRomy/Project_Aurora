<?php include_once '../action/config.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="../../css/jeux.css"/>
    <?php include '../content/head.php'; ?>
    <title></title>
  </head>
  <body>
    <header>
      <?php include '../content/navbar.php'; ?>
    </header>

    <footer>
    </footer>

    <?php
    $sql= "SELECT * FROM jeux where id = 1 ";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $jeu = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php
    $sql= "SELECT * FROM jeux_plateforme jp INNER JOIN plateforme p ON p.id = jp.plateforme WHERE jeux=".$jeu[0]['id'];
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $plateforms = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php
    $sql= "SELECT * FROM jeux_pegi jp INNER JOIN pegi p ON p.id = jp.pegi WHERE jeux=".$jeu[0]['id'];
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $pegi = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>


 <div class = "presentation">
    <div class = "row">
        <div class = "col m3"> <img src= "../../../<?php echo $jeu[0]['image'] ?>" class='jeux'></div>
        <div class = "col m4">
          <div class ="offset-m1 col m12">
            <h2> <?php echo $jeu[0]['title'] ?>   </h2>
                <?php foreach($plateforms as $plateform){ ?>
                    <img src="../../../<?php echo $plateform['icon'] ?>" style="height:30px; width:32px; margin-bottom: 5px ;margin-top: 5px;margin-right:5px;">
                <?php } ?>


            <br>
            <?php foreach($pegi as $pegis){ ?>
                <img src="../../../<?php echo $pegis['icon'] ?>" class="pegi">
            <?php } ?>
            <img src="../../../assets\btn_PEGI\btn_PEGI_18.PNG" class='pegi'>
            <p class="degrade"><?php echo $jeu[0]['synopsis'] ?></p>

            <div class = "col m12 warning">
              <div class = "col m2"> <img src="../../../assets/btn_PEGI/btn_PEGI_18.PNG" class='pegi' style="margin-top: 30%;"></div>
              <div class = "col m9 ">
              <?php echo $jeu[0]['avisPEGI'] ?></p>
              </div>
            </div>
          </div>
        </div>

         <div class = "offset-m1 col m3 acheter">
            <p>acheter le jeux</p>
            <p><?php echo $jeu[0]['prix'] ?> € </p>
            <p>
            <div style="display:flex;align-items:center;justify-content:center">
                <?php foreach($plateforms as $plateform){ ?>
                    <img src="../../../<?php echo $plateform['icon'] ?>" style="height:30px; width:32px; margin-bottom: 5px ;margin-top: 5px;margin-right:5px;">
                <?php } ?>
            </div>
            </p>
            <p>livraison en 24H</p>
            <button class="btn" id="addPanier" type="button" name="addPanier">Ajouter au panier</button>
            <button class="btn" id="Acheter" type="button" name="acheter">Acheter maintenant</button>
          </div>
        </div>
      </div>
      <div class = "row">
        <div class = "offset-m2 col m8 ">
          <div class="avis-background col m12 ">
            <div class="degrade "> Avis de la direction</div>
            <div class="avis-text col m10 offset-m1">
            <?php echo $jeu[0]['avis'] ?>

            </div>
          </div>
        </div>
      </div>
      <div class = "row">
        <div class = "avis-background offset-m2 col m8 ">
          <div class="ext col m12 degrade">
            Avis des joueurs (nombre) (note moyenne)
          </div>
          <div class="col m12">
            <div class="col offset-m1 m2 pseudo degrade">
              pseudo
            </div>
            <div class="col offset-m7 m2 pseudo degrade">
              note
            </div>
            <div class="avis-text ">
              woula ce jeu c'est de la balle
            </div>
            <button class="bouton">
              voir plus d'avis
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class>
          <div  class="offset-m2 col m8">
            <div class="carousel carousel-slider " style="border-radius: 30px;">
              <a class="carousel-item" href="#one!"><img src="../../../assets/imgGame/Hitman-3-screenshots-1.jpg"></a>
              <a class="carousel-item" href="#two!"><img src="../../../assets/imgGame/Hitman-3-screenshots-2.jpg"></a>
              <a class="carousel-item" href="#three!"><img src="../../../assets/imgGame/Hitman-3-screenshots-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

        <?php include '../content/pegi_explanation.php'; ?>


      <script type="text/javascript" src="../../js/jquery.min.js"></script>
      <script type="text/javascript" src="../../js/materialize.js"></script>

      <script type="text/javascript">

      $(document).ready(function(){
        $('.sidenav').sidenav();
      });

      $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });


      </script>
  </body>
</html>
