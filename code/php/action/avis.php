<?php

// configuration
include_once 'config.php';


var_dump($_POST);

  $sql= "SELECT * FROM comments where jeux_id = 1 order by id desc LIMIT 3 OFFSET ".$_POST["offset"];
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $comment = $pre->fetchAll(PDO::FETCH_ASSOC);
  


    foreach($comment as $comments):?>
   <h1> grenouille <h1>
   <?php echo $comments['pseudo'] ?>
  
   <?php echo $comments['note'] ?>
  
   <?php echo $comments['content'] ?>
   <?php endforeach; ?>
