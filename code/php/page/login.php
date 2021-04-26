<?php require_once '../action/config.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <link rel="stylesheet" href="../../css/master.css"/>
  <link rel="stylesheet" href="../../css/jeux.css"/>

  <?php include '../content/head.php'; ?>
  <title></title>
</head>
<body>
  <header>

    <?php include '../content/navbar.php'; ?>
    <h1 class="center-align"><span class="titre white-text"> Page de </span><span class="titre gradient"> Connexion</span></h1>
  </header>
  <div class="row">

    <form action="../action/connexion.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="text" class="validate bold">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="mdp" name="password" type="password" class="validate bold">
          <label for="mdp">Mot De Passe</label>
        </div>
        <div class="col s6">
          <input class="waves-effect bold waves-light btn violetC" type="submit" name="" value="Me Connecter">
        </div>
      </div>
    </form>

    <?php if (isset($_SESSION['message'])){
      echo $_SESSION['message'];
    } ?>

    <div class="col s12 center mt5">
      <h5 class="medium white-text">Si vous n'avez pas de compte :</h3>
      <a class="waves-effect bold waves-light btn-large violetC" href="inscription.php">inscription</a>
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
