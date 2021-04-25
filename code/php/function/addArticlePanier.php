<?php
function addArticle($id){
  if(! isset($_SESSION['user']['panier'])){
    $_SESSION['user']['panier'] = array();
  }
  if(array_key_exists($id)){
    $_SESSION['user']['panier'][$id] ++;
  }
  else{
    $arrayTempPush = array(
      $id => 1,
    );
    array_push($_SESSION['user']['panier'],$arrayTempPush);
    echo $_SESSION['user']['panier'];
  }
}
