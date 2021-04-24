<?php
  include_once 'config.php';

  $sql =
  " INSERT INTO comments(pseudo, content, note, jeux_id )
    VALUES(:pseudo, :content, :note, :jeux_id)
  ";
  
  $dataBinded = array(
    ':pseudo' => $_SESSION['pseudo'],
    ':content' => $_POST['content'],
    ':note' => $_POST['note'],
    ':jeux_id' => $_POST['jeux_id'],
  );

  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
 ?>
