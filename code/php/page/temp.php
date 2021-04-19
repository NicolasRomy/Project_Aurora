<?php if($_SESSION['user']['admin'] == 0){
  header('Location: ../page/index.php');
} ?>
