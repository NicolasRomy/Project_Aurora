<?php require_once '../action/config.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <link rel="stylesheet" href="../../css/master.css"/>
  <?php include '../content/head.php'; ?>
  <title></title>
</head>
<body>
  <header>

    <?php include '../content/navbar.php'; ?>
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </footer>

  <script type="text/javascript" src="../../js/materialize.js"></script>
  <script type="text/javascript" src="../../js/jquery.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  </script>
</body>
</html>
