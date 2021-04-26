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
    <h2 class="center-align"><span class="titre white-text"> Page d'</span><span class="titre gradient"> inscription</span></h2>
  </header>


    <form action="../action/inscription.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col offset-s4 s4">
          <i class="material-icons prefix">face</i>
          <input id="pseudoInscription" name="pseudo" type="text" class="validate">
          <label for="pseudoInscription">pseudo</label>
        </div>
        <div class="input-field col offset-s4 s4">
          <i class="material-icons prefix">email</i>
          <input id="emailInscription" name="email" type="text" class="validate">
          <label for="emailInscription">Email</label>
        </div>
        <div class="input-field col offset-s4 s4">
          <i class="material-icons prefix">lock_outline</i>
          <input id="passwordInscription" name="password" type="password" class="validate">
          <label for="passwordInscription">Mot De Passe</label>
        </div>
        <div class="col offset-s4 s6">
          <input class="waves-effect bold waves-light btn violetC" type="submit" name="" value="inscription">
        </div>
      </div>
    </form>
    <?php if (isset($_SESSION['messageInscription'])){
      echo $_SESSION['messageInscription'];
    } ?>

  </div>

<footer>
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
