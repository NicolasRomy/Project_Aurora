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

  <div style="text-align: center; color: white; font-size: 50px; margin-top : 60px;">
    <p>
      <span class="titre white-text"> Merci pour votre</span><span class="titre gradient"> achat !</span>
    </p>
  </div>
  <form method="get" action="index.php" style="align-items: center;">
    <button style="align-items: center;
    color: white;
    margin-left: 45%;
    margin-right: auto;
    padding-top:20px;
    padding-bottom:20px;
    border-radius: 40px;
    background: rgb(219,91,255);
    margin-top : 60px;
    background: linear-gradient(0deg, rgba(219,91,255,1) 0%, rgba(164,84,255,1) 100%);">



    retourner à l'accueil
  </button>
</form>
<div class="row">
  <div class='col offset-m1 m10'>
    <?php include '../content/payment_warning.php'; ?>
  </div>
</div>
