<?php

// configuration
include_once 'config.php';


  $sql= "SELECT * FROM comments where jeux_id =".$_POST["jeux_id"]." order by id desc LIMIT 3 OFFSET ".$_POST["offset"];
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $comment = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach ($comment as $key => $comments) {

  echo '
   <div class="col offset-m1 m2 pseudo ">
   <p class="degrade_'.$_POST["couleur"].' bold">'.$comments['pseudo'].' </p>
   </div>
   <div class="col offset-m7 m2 pseudo degrade_'. $_POST["couleur"].' bold">
   <p> '.$comments['note'].' / 10 </p>
   </div>
   <div class="avis-text ">
   <p>'.$comments['content'].' </p>
   </div>';
  }
