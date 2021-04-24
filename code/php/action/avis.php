<?php

// configuration
include_once 'config.php';

$sql = "select * from comments where jeux_id = ".$_POST['jeux']." order by date desc LIMIT 3 OFFSET ".$_POST['offset'];
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll();

foreach ($data as $avis) {
   ?> 
   <div class="row">
      <div class="col s12">
         <div class="card blue-grey darken-1">
            <div class="card-content white-text">
               <span class="card-title">Avis de <?php echo $avis['pseudo']?></span>
               <p><?php echo $avis['content']."<br />";?></p>
               <p>Note : <?php echo $avis['note']?>/10</p>
            </div>
         </div>
      </div>
   </div>
   <?php
}

?>