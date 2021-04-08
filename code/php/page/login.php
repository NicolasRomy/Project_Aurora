<?php require_once '../action/config.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <link rel="stylesheet" href="../../css/master.css"/>
  <link type="text/css" rel="stylesheet" href="../../css/materialize.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title></title>
</head>
<body>
  <header>
    <!-- menu -->
    <br><br>
  </header>

  <div class="row">
    <form action="../action/connexion.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="mdp" type="password" class="validate">
          <label for="mdp">Mot De Passe</label>
        </div>
        <div class="col s6">
          <input class="btn" type="submit" name="" value="Me Connecter">
        </div>
      </div>
    </form>
    <?php if (isset($_SESSION['message'])){
      echo $_SESSION['message'];
    } ?>



  </div>

  <footer>
  </footer>

  <script type="text/javascript" src="../../js/materialize.js">

  </script>
</body>
</html>
