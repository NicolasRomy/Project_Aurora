<?php
include_once 'config.php';
$errors = array();
echo"<pre>";
var_dump($_FILES);
echo"</pre>";


//if ($_POST['title']['lenght'] > 0 && $_POST['price']['lenght'] > 0 && $_POST['synopsi']['lenght'] > 0 && $_POST['avi']['lenght'] > 0){
$sql =
" SELECT * FROM jeux
WHERE title=:titleGame
";

$dataBinded = array(
  ':titleGame' => $_POST['title'],
);
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$title = current($prepareRequete->fetchAll(PDO::FETCH_ASSOC));

if ($title != false){
  // renvoier que le jeu existe deja
  echo 'vide';
}
else{
  $target_dir = '../../../assets/imgGame/';

  foreach ($_FILES as $key => $file) {

    foreach ($file as $keys => $value) {

      if(is_array($value)){
        echo '<pre>';
        echo $keys;
        echo '</pre>';
        if($keys == "type"){

          foreach ($value as $k => $fileType) {
            echo isImg($fileType);
            if(isImg($fileType) == false || $fileType[$k] == ''){
              echo 'error..';
              array_push($errors,$file['name'][$k]);
              //header('Location: '.$_SERVER['HTTP_REFERER']);
            }
            else{
              $name = namedFile($fileType);
              $target = $target_dir.$name;
              move_uploaded_file($file['tmp_name'][$k], $target);
              echo 'file uploaded';
            }
          }
        }
      }

      else{
        $fileType = $file['type'];
        if(isImg($file['type']) == false){
          echo 'error seul';
          array_push($errors,$file['name']);
          //header('Location: '.$_SERVER['HTTP_REFERER']);
        }
        else{

          $name = namedFile($fileType);
          $targetJacket = $target_dir.$name;
          move_uploaded_file($_FILES['jacket']['tmp_name'], $targetJacket);
          echo 'file uploaded 1';
        }
      }
    }

  }
}


$sql =
" INSERT INTO jeux(title, image, prix, synopsis, PEGI, avis, temps_jeux)
VALUES(:title, :image, :prix, :synopsi, :PEGI, :avis, :temps_jeux)
";
$dataBinded = array(
  ':title' => $_POST['title'],
  ':image' => $targetJacket,
  ':prix' => $_POST['price'],
  ':synopsi' => $_POST['synopsi'],
  ':PEGI' => $_POST['PEGI'],
  ':avis' => $_POST['avi'],
  ':temps_jeux' => $_POST['temps_jeux'],
);

$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
