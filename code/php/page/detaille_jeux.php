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
if( isset($_POST['id']) ){
  $sql= "SELECT * FROM jeux where id =".$_POST['id'];
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $jeu = $pre->fetchAll(PDO::FETCH_ASSOC);


  if( isset($_POST['title']) ){
  $sql= "SELECT * FROM jeux where title =".$_POST["title"];
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $jeu = $pre->fetchAll(PDO::FETCH_ASSOC);
  var_dump($jeu);
  }
  
  $sql= "SELECT * FROM images where jeux_id =".$jeu[0]['id'];
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $img = $pre->fetchAll(PDO::FETCH_ASSOC);
  }


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
    $couleur = "rouge";
    $boutonPegi = "btn_PEGI_18.PNG"; }

    elseif ($jeu[0]['PEGI'] == 16){
      $couleur = "bleuF";
      $boutonPegi = "btn_PEGI_16.PNG";  }

      elseif($jeu[0]['PEGI'] == 12){
        $couleur = "bleuC";
        $boutonPegi = "btn_PEGI_12.PNG"; }

        elseif($jeu[0]['PEGI'] == 7){
          $couleur = "violetF";
          $boutonPegi = "btn_PEGI_7.PNG" ;}

          elseif($jeu[0]['PEGI'] == 3){
            $couleur = "violetC";
            $boutonPegi = "btn_PEGI_3.PNG" ;}
            ?>

    <div class = "presentation  <?php $couleur ?>">
    <div class = "row">
      <div class = "col m3"><img src= "../../../assets/imgJeu/<?php echo $jeu[0]['image'] ?>" class='jeux'></div>
      <div class = "col m4">
        <div class ="offset-m1 col m12">
          <h2 class="titre degrade_<?php echo $couleur ?>"> <?php echo $jeu[0]['title'] ?></h2>
          <?php foreach($plateforms as $plateform){ ?>
            <img src="../../../<?php echo $plateform['icon'] ?>" style="height:30px; width:32px; margin-bottom: 5px ;margin-top: 5px;margin-right:5px;">
          <?php } ?>


          <br>
          <?php foreach($pegi as $pegis){ ?>
            <img src="../../../<?php echo $pegis['icon'] ?>" class="pegi">
          <?php } ?>
          <img src="../../../assets\btn_PEGI\<?php echo $boutonPegi ?>" class='pegi'>
          <p class="degrade_<?php echo $couleur ?>"><?php echo $jeu[0]['synopsis'] ?></p>

          <div class = "col m12 warning">
            <div class = "col m2"> <img src="../../../assets/btn_PEGI/<?php echo $boutonPegi ?>" class='pegi' style="margin-top: 30%;"></div>
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
        <button class="btn  <?php echo $couleur ?> white-text" id="addPanier" type="button" name="Panier"> Ajouter au panier</button>
        <button class="btn   <?php echo $couleur ?> white-text" id="Acheter" type="button" name="acheter">Acheter maintenant</button>
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
          Avis des joueurs
        </div>
        <div id="divComments" class="col s10 m10 l10 xl10 offset-s1 offset-m1 offset-l1 offset-xl1">

        </div>
        <div class="col m12">


          <button class="waves-effect waves-light btn   <?php echo $couleur ?> white-text" onclick="show_avis()" >
            voir plus d'avis
          </button>

          <a class="waves-effect waves-light btn modal-trigger button  <?php echo $couleur ?> white-text" href="#modal1">donnez votre avis</a>

          <div id="modal1" class="modal">
            <div class="modal-content">
              <div class="col s12">
                <div class="input-field col s12">
                <p class="text bold degrade_<?php echo $couleur ?> text">Votre Avis</p>
                  <textarea id="text" class="materialize-textarea"></textarea>
                  
                </div>
              </div>
              <label class= "bold degrade_<?php echo $couleur ?> text" for="text">Votre note</label>
              <p class="range-field">
                <input type="range" id="note" min="0" max="10"/>
              </p>
              <button class="btn waves-effect waves-light  <?php echo $couleur ?> white-text modal-close" id="submit" type="button" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col l4 m2 s12">
          <div class="carousel carousel-slider " style="border-radius: 30px;">
          <?php foreach ($img as $imgs):?>
            <a class="carousel-item" href="#one!" ?><img src="../../../assets/imgJeu/<?php echo $imgs["url"]?> "></a>
          <?php
              endforeach; ?>
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


    $(document).ready(function(){
      $('.modal').modal();
    });

    </script>

    <script type="text/javascript">


      $('button#addPanier').click(function(){
        $.ajax({
          type: "POST",
          url: "../action/addToPanier.php",
          data: {
            id_: <?php echo $jeu[0]['id']; ?>,
          },
          success: console.log("ca marche"),
        });
        M.toast({html: 'Jeu ajouté au panier'});
      });

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

    offset = 0;
    function show_avis() {
      $.ajax({
        type: "POST",
        url: "../action/avis.php",
        data: {
          test:'test',
          offset:offset,
          jeux_id: <?php echo $jeu[0]['id'] ?>,
          couleur: "<?php echo $couleur ?>",
        },
        success: function(response){
          $('#divComments').append(response);
          offset+=3

        },
        error: function (jqXHR, textStatus, errorThrown) {
        },
      });
    }
    show_avis();

  </script>



</body>
</html>
