<?php
$sql =
" SELECT * FROM jeux
  WHERE coeur = 1
";

$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute();
$coupCoeur = current($prepareRequete->fetchAll(PDO::FETCH_ASSOC));
