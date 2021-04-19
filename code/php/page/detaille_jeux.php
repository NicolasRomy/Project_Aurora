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


 <div class = "presentation">
    <div class = "row">
        <div class = "col m3"> <img src="../../../assets\Hitman_3.png" class='jeux'></div>
        <div class = "col m4">  
          <div class ="offset-m1 col m12">
            <h2>HITMAN 3 <img src="../../../assets/xbox-logo.png" class="logo" > <img src="../../../assets/PlayStation-logo.png" class="logo" > <img src="../../../assets/pc-logo.png" class="logo" > </h2> 
            <br>
            <img src="../../../assets/pegi/violence.jpg" class='pegi'>
            <img src="../../../assets/pegi/fear.jpg" class='pegi'>
            <img src="../../../assets/pegi/bad-language.jpg" class='pegi'>
            <img src="../../../assets\btn_PEGI\btn_PEGI_18.PNG" class='pegi'>
            <p class="intro">Hitman 3 est un jeu d'infiltration dans lequel vous incarnez l'agent 47.
              Dans ce troisième épisode de la nouvelle trilogie lancée en 2017,
              six lieux sont disponible au lancement, mais il est possible de
              transférer les ancienne missions des deux premier volets.</p>          

            <div class = "col m12 warning">
              <div class = "col m2"> <img src="../../../assets/btn_PEGI/btn_PEGI_18.PNG" class='pegi' style="margin-top: 30%;"></div>
              <div class = "col m9 ">
                Ce jeu a reçu un PEGI 18, cela restreint sa disponibilité pour les adultes uniquement
                et ne convient pas aux personnes mineurs. Cette note a été donnée car le  jeu contiens une forte violence,
                y compris à l'encontre de personnage vulnérable et sans défenses.
                Il y a aussi un fort usage de grossierté et de mots vulgaires</p>      
              </div>            
            </div>
          </div>
        </div>
        
         <div class = "offset-m1 col m3 acheter">
            <p>acheter le jeux</p>
            <p>PRIX</p>
            <p>Plateform</p>
            <img src="../../../assets/xbox-logo.png" class="logo" >
            <img src="../../../assets/PlayStation-logo.png" class="logo" >
            <img src="../../../assets/pc-logo.png" class="logo" >
            <p>livraison en 24H</p>
            <button>Ajouter au panier</button> <br/>
            <button>Acheter maintenant</button>
          </div>
        </div>
      </div>
      <div class = "row">
        <div class = "offset-m2 col m8 ">
          <div class="avis-background col m12">
            Avis de carine de la direction
            <div class="avis-text col m10 offset-m1">
            ce jeux est fortement déconseiller au personnes mineur, il contient de très nombreuse immage de grande violence.
   de plus ce jeu met en scène des meurtre atroce. vous incarner un tueur a gage qui doit tuer ces victimes sans se faire repèrer
   ce jeux est donc réservé a un publique avertie sur la violence du jeu

            </div>
          </div>
        </div>
      </div>
      <div class = "row">
        <div class = "offset-m2 col m8 avis-background ">
          <div class="ext col m12">
            Avis des joueurs (nombre) (note moyenne)
          </div>
          <div class="col m12">
            <div class="col offset-m1 m2 pseudo">
              pseudo
            </div>
            <div class="col offset-m7 m2 pseudo">
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



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <script type="text/javascript" src="../../js/materialize.js"></script>
      <script type="text/javascript" src="../../js/jquery.min.js"></script>

      <script type="text/javascript">
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });

      </script>
  </body>
</html>
