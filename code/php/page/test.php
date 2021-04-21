<?php require_once '../action/config.php'; ?>
<?php
     $sql= "SELECT * FROM jeux ";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $jeux = $pre->fetchAll(PDO::FETCH_ASSOC); 
      $sql= "SELECT * FROM images";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $image = $pre->fetchAll(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <link rel="stylesheet" href="../../css/master.css"/>
  <?php include '../content/head.php'; ?>
  <title></title>
</head>
<body>
<?php $background_color = "background color : red" ?>
<?php $img_jeux = " echo $jeu['image']" ?>
<?php include '../content/game_card.php'; ?>