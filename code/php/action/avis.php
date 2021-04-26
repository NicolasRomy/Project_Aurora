<?php

// configuration
include_once 'config.php';


  $sql= "SELECT * FROM comments where jeux_id = 1 order by id desc LIMIT 3 OFFSET ".$_POST["offset"];
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $comment = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach ($comment as $key => $comments) {

<<<<<<< HEAD
    foreach($comment as $comments):?>
                  
   <div class="col offset-m1 m2 pseudo degrade_<?php echo $couleur ?>">
   <?php echo $comments['pseudo'] ?>
   </div>
   <div class="col offset-m7 m2 pseudo degrade_<?php echo $couleur ?>">
   <?php echo $comments['note'] ?>
   </div>
   <div class="avis-text ">
   <?php echo $comments['content'] ?>
   </div>
   
   <?php endforeach; ?>
=======
  echo '
  <div class="row">
    <div class="col s12">
      <div class="card purple darken-1">
        <div class="card-content white-text">
          <p>Posté par : '.$comments['pseudo'].'</p>
          <p>
          '.$comments['content'].'
          </p>
          <p>
          '.$comments['note'].'
          </p>
        </div>
      </div>
    </div>
  </div>';
  }
>>>>>>> ea4ad22db526ef0adbf3460b6997eaffd363238e
