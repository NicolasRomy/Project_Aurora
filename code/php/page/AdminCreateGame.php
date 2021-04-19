

<?php
include_once '../action/config.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php include '../content/head.php'; ?>
  <title>ajout jeux</title>
</head>

<body>
  <header>
    <?php include '../content/navbar.php'; ?>
  </header>

  <div class="row">
    <form class="col s12" action="../action/createGameAdmin.php" method="post" enctype="multipart/form-data">
      <div class="col s5 m5 l5 xl5 offset-s1 offset-m1 offset-l1 offset-xl1 input-field">
        <input id="titleGame" type="text" name="title" value=""/>
        <label for="titleGame">Nom du jeu</label>
      </div>
      <div class="col s5 m5 l5 xl5 input-field">
        <input id="priceGame" type="number" name="price" value=""/>
        <label for="priceGame">Prix du Jeu</label>
      </div>
      <div class="col s5 m5 l5 xl5 offset-s1 offset-m1 offset-l1 offset-xl1 input-field">
        <select class="icons" name="PEGI">
          <option value="" disabled selected>Choisir le PEGI</option>
          <option value="3" data-icon="../../../assets/btn_PEGI/btn_PEGI_3.PNG">PEGI 3</option>
          <option value="7" data-icon="../../../assets/btn_PEGI/btn_PEGI_7.PNG">PEGI 7</option>
          <option value="12" data-icon="../../../assets/btn_PEGI/btn_PEGI_12.PNG">PEGI 12</option>
          <option value="16" data-icon="../../../assets/btn_PEGI/btn_PEGI_16.PNG">PEGI 16</option>
          <option value="18" data-icon="../../../assets/btn_PEGI/btn_PEGI_18.PNG">PEGI 18</option>
        </select>
      </div>
      <div class="col s5 m5 l5 xl5 input-field">
        <select multiple class="icon" name="PEGIicn">
          <option value=""disabled selected>Choisir les pictogrammes PEGI</option>
          <option value="1" data-icon="../../../assets/pegi/bad-language.jpg">Mauvais language</option>
          <option value="2" data-icon="../../../assets/pegi/discrimination.jpg">Discrimination</option>
          <option value="3" data-icon="../../../assets/pegi/drugs.jpg">Drogues</option>
          <option value="4" data-icon="../../../assets/pegi/fear.jpg">Peur</option>
          <option value="5" data-icon="../../../assets/pegi/gambling.jpg">Jeu de Hasard</option>
          <option value="6" data-icon="../../../assets/pegi/sexual-content.jpg">Contenue Sexuel</option>
          <option value="7" data-icon="../../../assets/pegi/violence.jpg">Violence</option>
        </select>
      </div>
      <div class="col s10 m10 l10 xl10 offset-s1 offset-m1 offset-l1 offset-xl1 input-field">
        <textarea id="synop" name="synopsi" rows="20" cols="80"></textarea>
        <label for="synop">Synopsi</label>
      </div>
      <div class="col s10 m10 l10 xl10 offset-s1 offset-m1 offset-l1 offset-xl1 input-field">
        <textarea id="avis" name="avi" rows="20" cols="80"></textarea>
        <label for="avis">Avis de la rédaction</label>
      </div>
      <div class="col s5 m5 l5 xl5 offset-s1 offset-m1 offset-l1 offset-xl1">
        <label class="white-text" for="imgJacket">Image de la Jacket</label>
        <input id="imgJacket" type="file" name="jacket"/>
      </div>
      <div class="col s5 m5 l5 xl5 offset-s1 offset-m1 offset-l1 offset-xl1">
        <label class="white-text" for="imgGame">Image du jeu</label>
        <input id="imgGame" type="file" name="imgs[]" multiple/>
      </div>
      <div class="col s12">
        <input type="submit" name="test" value="valide">
      </div>
    </form>

  </div>

    <footer>
    </footer>


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
