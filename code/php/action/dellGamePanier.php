<?php
include_once '../action/config.php';
unset($_SESSION['user']['panier'][$_POST['id']]);
header('Location: ../page/panier.php');
