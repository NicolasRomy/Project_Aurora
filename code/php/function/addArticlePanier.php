<?php
function addArticle($id){
  consol_log('okkkkkkkk');
  if(! isset($_SESSION['user']['panier'])){
    $_SESSION['user']['panier'] = array();
  }
  if(array_key_exists($id, $_SESSION['user']['panier'])){

    $_SESSION['user']['panier'][$id] ++;

  }
  else{

    $_SESSION['user']['panier'] += [$id => 1];

  }
}
