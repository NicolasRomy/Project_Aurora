<?php

// configuration
include_once 'config.php';




  $sql= "SELECT * FROM comments where jeux_id = 1 order by date desc LIMIT 3 OFFSET ".$_POST['offset'];
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $comment = $pre->fetchAll(PDO::FETCH_ASSOC);
  


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
