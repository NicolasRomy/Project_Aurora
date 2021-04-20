<?php
include_once 'config.php';

echo"<pre>";
var_dump($_FILES);

echo"</pre>";

foreach ($_FILES as $value) {
  var_dump(isImg($value));
  if(!empty(isImg($value))){
    echo "not empty";
    //header('Location: '.$_SERVER['HTTP_REFERER']);
  }
}

//if ($_POST['title']['lenght'] > 0 && $_POST['price']['lenght'] > 0 && $_POST['synopsi']['lenght'] > 0 && $_POST['avi']['lenght'] > 0){
  $sql =
  " SELECT * FROM jeux WHERE title=:titleGame
  ";

  $dataBinded = array(
    ':titleGame' => $_POST['title'],
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
  $title = current($prepareRequete->fetchAll(PDO::FETCH_ASSOC));
  if (empty($title)){
    // renvoier que le jeu existe deja
  //}
  //else{
    // uplaod img
    $sql =
    " INSERT INTO jeux(title, image, prix, synopsis, PEGI, avis, temps_jeux)
      VALUES(:title, :prix, :synopsi, :PEGI, :avis, :temp_jeux)
    ";
    $dataBinded = array(
      ':title' => $_POST['title'],
      'image'
    );
  //}
}
