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
    <h1 class="center-align">Page de Connexion</h1>
  </header>
<img src="../../../assets\background_gradiant.svg" alt="background" class="reverse2">
  <div class="row">

    <form action="../action/connexion.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="mdp" name="password" type="password" class="validate">
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

    <div class="col s12 center mt5">
      <h5>Si vous n'avez pas de compte :</h3>
      <a class="waves-effect waves-light btn-large" href="inscription.php">S'insciption</a>
    </div>

  </div>
<img src="../../../assets\background_gradiant.svg" alt="background"/>

<?php include '../content/footer.php'; ?>

  <script type="text/javascript" src="../../js/materialize.js"></script>
  <script type="text/javascript" src="../../js/jquery.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  </script>
</body>
</html>
