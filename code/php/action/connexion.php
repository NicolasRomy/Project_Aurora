<?php
//Session start import of config
require_once "config.php";

$sql =
" SELECT * FROM users
  WHERE email = ':email'
";

$dataBinded = array(
  ':email' => $_POST['email'],
)
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);


$user = current($prepareRequete->fetchAll(PDO::FETCH_ASSOC));
//loop to check password and act acordingly
if(password_verify($_POST['password'], $user['PASSWORD'])) {
  $_SESSION['user'] = $user;
  $_SESSION['message'] = '';
  header('Location: ../page/index.php');
}

else {
  $_SESSION['message'] = 'Password ou Email incorect';
  header('Location: ../page/login.php');
}
