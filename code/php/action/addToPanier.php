<?php
include_once '../action/config.php';

if(! isset($_SESSION['user']['panier'])){
  $_SESSION['user']['panier'] = array();
}

if(array_key_exists($_POST['id_'], $_SESSION['user']['panier'])){
  $_SESSION['user']['panier'][$_POST['id_']] ++;
}

else{

  $_SESSION['user']['panier'] += [$_POST['id_'] => 1];

}
