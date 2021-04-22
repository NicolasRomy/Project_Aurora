<?php require_once '../action/config.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php include '../content/head.php'; ?>
  <title></title>
</head>
<body>
  <header>
    <?php include '../content/navbar.php'; ?>

  </header>

<img src="../../../assets\background_gradiant.svg" alt="background" class="reverse2">
  <div class="row valign-wrapper">
    <div class="col s12 center">
      <a class="waves-effect waves-light btn-large" href="login.php">Connexion</a>
    </div>
    <div class="col s12 center">
      <a class="waves-effect waves-light btn-large" href="inscription.php">Insciption</a>
    </div>
  </div>
<img src="../../../assets\background_gradiant.svg" alt="background"/>

<?php include '../content/footer.php'; ?>

  <script type="text/javascript" src="../../js/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/materialize.js"></script>


  <script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  </script>
</body>
</html>
