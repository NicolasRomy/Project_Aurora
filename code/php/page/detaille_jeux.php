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

  <?php  if ($jeu[0]['PEGI'] == 18){
    $couleur = "rouge"; }

    elseif ($jeu[0]['PEGI'] == 16){
      $couleur = "violetF"; }

      elseif($jeu[0]['PEGI'] == 12){
        $couleur = "violetC"; }

        elseif($jeu[0]['PEGI'] == 7){
          $couleur = "bleuF"; }

          elseif($jeu[0]['PEGI'] == 3){
            $couleur = "bleuF"; }
            ?>

            <div class = "presentation  <?php $couleur ?>">
              <div class = "row">
                <div class = "col m3"> <img src= "../../../<?php echo $jeu[0]['image'] ?>" class='jeux'></div>
                <div class = "col m4">
                  <div class ="offset-m1 col m12">
                    <h2 class="titre degrade_<?php echo $couleur ?>"> <?php echo $jeu[0]['title'] ?>   </h2>
                    <?php foreach($plateforms as $plateform){ ?>
                      <img src="../../../<?php echo $plateform['icon'] ?>" style="height:30px; width:32px; margin-bottom: 5px ;margin-top: 5px;margin-right:5px;">
                    <?php } ?>


                    <br>
                    <?php foreach($pegi as $pegis){ ?>
                      <img src="../../../<?php echo $pegis['icon'] ?>" class="pegi">
                    <?php } ?>
                    <img src="../../../assets\btn_PEGI\btn_PEGI_18.PNG" class='pegi'>
                    <p class="degrade_<?php echo $couleur ?>"><?php echo $jeu[0]['synopsis'] ?></p>

                    <div class = "col m12 warning">
                      <div class = "col m2"> <img src="../../../assets/btn_PEGI/btn_PEGI_18.PNG" class='pegi' style="margin-top: 30%;"></div>
                      <div class = "col m9 ">
                        <?php echo $jeu[0]['avisPEGI'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class = "offset-m1 col m3 acheter <?php echo $couleur ?>">
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
                  <div class="degrade_<?php echo $couleur ?> "> Avis de la direction</div>
                  <div class="avis-text col m10 offset-m1">
                    <?php echo $jeu[0]['avis'] ?>

                  </div>
                </div>
              </div>
            </div>
            <div class = "row">
              <div class = "avis-background offset-m2 col m8 ">
                <div class="ext col m12 degrade_<?php echo $couleur ?>">
                  Avis des joueurs (nombre) (note moyenne)
                </div>
                <div class="col m12">
                  <div class="col offset-m1 m2 pseudo degrade_<?php echo $couleur ?>">
                    pseudo
                  </div>
                  <div class="col offset-m7 m2 pseudo degrade_<?php echo $couleur ?>">
                    note
                  </div>
                  <div class="avis-text ">
                    woula ce jeu c'est de la balle
                  </div>
                  <button class="bouton">
                    voir plus d'avis
                  </button>

                  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

                  <div id="modal1" class="modal">
                    <div class="modal-content">
                      <div class="col s12">
                        <div class="input-field col s12">
                          <textarea id="text" class="materialize-textarea"></textarea>
                          <label for="text">Votre Avis</label>
                        </div>
                      </div>
                      <label for="text">Votre note</label>
                      <p class="range-field">
                        <input type="range" id="note" min="0" max="10"/>
                      </p>

                      <button class="btn waves-effect waves-light orange  modal-close" id="submit" type="button" name="action">Submit
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="row">
              <div class>
                <div  class="offset-m2 col m8">
                  <div class="carousel carousel-slider " style="border-radius: 30px;">
                    <a class="carousel-item" href="#one!"><img src="../../../assets/imgJeu/dark-souls-3-img-1.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="../../../assets/imgJeu/dark-souls-3-img-2.jpg"></a>
                    <a class="carousel-item" href="#three!"><img src="../../../assets/imgJeu/dark-souls-3-img-3.jpg"></a>
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
              fullWidth: false
            });

            $(document).ready(function(){
              $('.modal').modal();
            });

            </script>

            <script type="text/javascript">

             $('button#submit').click(function(){

              $.ajax({
                type: "POST",
                url: "../action/send_avis.php",
                data: {
                  note:$("#note").val(),
                  content:$("#text").val(),
                  jeux_id: <?php echo $jeu[0]['id'] ?>,
                },
              });
            });
          </script>


        </body>
        </html>
