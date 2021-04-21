<?php
include_once 'config.php';
$errors = array();

//$test2 = json_decode($test);
echo"<pre>";
var_dump($_FILES);
var_dump($_POST);
//var_dump($test2);
echo"</pre>";


if ($_POST['title'] == "" && $_POST['price'] == "" && $_POST['synopsi'] == "" && $_POST['avi'] == "" && array_key_exists('PEGI', $_POST) && array_key_exists('listePEGI', $_POST)){
header('Location: '.$_SERVER['HTTP_REFERER']);
}
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


      if(is_array($file['type'])){

          foreach ($file['type'] as $k => $fileType) {
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

      else{
        $fileType = $file['type'];
        if(isImg($fileType) == false){
          echo 'error seul';
          array_push($errors,$file['name']);
          //header('Location: '.$_SERVER['HTTP_REFERER']);
        }
        else{
          $listePEGI = json_encode($_POST['listePEGI']);
          $name = namedFile($fileType);
          $targetJacket = $target_dir.$name;
          move_uploaded_file($_FILES['jacket']['tmp_name'], $targetJacket);
          echo 'file uploaded 1';
          postJeux($_POST, $targetJacket, $pdo, $listePEGI);
        }
      }


  }
}
