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

    <script type="text/javascript" src="../../js/materialize.js">
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>

<div class = "row presentation">
         <div class = "col m3"> <img src="../../../assets\Hitman_3.png" class='jeux'></div>
         <div class = "col m4">
            hitman 3
            <br>
            <img src="../../../assets/pegi/violence.jpg" class='pegi'>
            <img src="../../../assets/pegi/fear.jpg" class='pegi'>
            <img src="../../../assets/pegi/bad-language.jpg" class='pegi'>

         </div>
      </div>


  </body>
</html>