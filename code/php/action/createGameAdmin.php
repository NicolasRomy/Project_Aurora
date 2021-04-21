<?php
// add security of admin

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
$id = isExistGame($_POST, $pdo); //lance requete sql pour verifier si le jeux existe deja dans la bd
var_dump ($id);
if ($id != false){
  // renvoier que le jeu existe deja (à programmer !!!)
  echo 'vide';
}
else{
  $target_dir = '../../../assets/imgGame/';
  foreach ($_FILES as $file) { // enleve key tester as $key
    if(is_array($file['type'])){
      foreach ($file['type'] as $k => $fileType) {

        if ($fileType == ''){
          header('Location: '.$_SERVER['HTTP_REFERER']);
          // renvoie que le jeux est uplaod mais il n'a pas d'img carousel
        }
        if(isImg($fileType) == false){
          array_push($errors,$file['name'][$k]);
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
        header('Location: '.$_SERVER['HTTP_REFERER']);
      }
      else{
        $listePEGI = json_encode($_POST['listePEGI']);
        $name = namedFile($fileType);
        $targetJacket = $target_dir.$name;
        move_uploaded_file($_FILES['jacket']['tmp_name'], $targetJacket);
        echo 'file uploaded 1';
        postJeux($_POST, $targetJacket, $pdo, $listePEGI);
        $id = isExistGame($_POST, $pdo);
      }
    }
  }
}
