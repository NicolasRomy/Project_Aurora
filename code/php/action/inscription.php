<?php
require_once "config.php";

$sql = "SELECT * FROM users WHERE pseudo=:pseudo OR email=:email";
$dataBinded=array(
  ':pseudo'   => $_POST['pseudo'],
  ':email'   => $_POST['email']
);

$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$user = current($prepareRequete->fetchAll(PDO::FETCH_ASSOC));
if(!empty($user)) {
  $_SESSION['messageInscription'] = 'email ou pseudo déja utilisé';
  header('Location: ../page/inscription.php');
}
else {

  $sql = "INSERT INTO users(pseudo, email, password) VALUES(:pseudo,:email, :password)";
  $dataBinded=array(
    ':pseudo'   => $_POST['pseudo'],
    ':email'   => $_POST['email'],
    ':password'=> password_hash($_POST['password'], PASSWORD_DEFAULT),
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
  header('Location: ../page/login.php');
}

?>
