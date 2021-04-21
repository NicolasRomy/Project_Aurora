<?php
include_once 'config.php';
$errors = array();
echo"<pre>";
var_dump($_FILES);
var_dump($_POST);
echo"</pre>";


if ($_POST['title'] == "" && $_POST['price'] == "" && $_POST['synopsi'] == "" && $_POST['avi'] == ""){
//header('Location: '.$_SERVER['HTTP_REFERER']);
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
          //postJeux($_POST, $targetJacket, $pdo);
        }
      }
    }

  }
}
