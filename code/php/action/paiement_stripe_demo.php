<?php
include_once '../action/config.php';
unset($_SESSION['user']['panier']);
header('Location: ../page/validation_paiement.php');
?>
