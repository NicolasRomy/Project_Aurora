<?php

// configuration
include_once 'config.php';


  $sql= "SELECT * FROM comments where jeux_id = 1 order by id desc LIMIT 3 OFFSET ".$_POST["offset"];
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $comment = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach ($comment as $key => $comments) {

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
