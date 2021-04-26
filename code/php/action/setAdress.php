<?php
include_once '../action/config.php';

setAdresse($pdo, $_POST['adresse'], $_SESSION['user']['id']);
$_SESSION['user']['adresse'] = $_POST['adresse'];
header('Location: ../page/Paiement.php');
