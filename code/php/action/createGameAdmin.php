<?php
include_once 'config.php';
if ($_SESSION['user']['admin'] == 0){
  //pas admin
}
else{
  $errors = array();
  $_MESSAGE = "";
  //$test2 = json_decode($test);
  //echo"<pre>";
  //var_dump($_FILES);
  //var_dump($_POST);
  //var_dump($test2);
  //echo"</pre>";

  if ($_POST['temps_jeux'] == "" || $_POST['title'] == "" || $_POST['price'] == "" || $_POST['synopsi'] == ""
  || $_POST['avi'] == "" || ! array_key_exists('PEGI', $_POST) || ! array_key_exists('platformes', $_POST)){
    $_MESSAGE = 'veuillez remplir tout les champs';
  }
  else{
    $id = isExistGame($_POST, $pdo); //lance requete sql pour verifier si le jeux existe deja dans la bd
    //var_dump ($id);
    if ($id != false){
      // renvoier que le jeu existe deja (à programmer !!!)
      $_MESSAGE = "le jeu existe deja";
    }
    else{
      $target_dir = '../../../assets/imgJeu/';
      foreach ($_FILES as $file) { // enleve key tester as $key
        if(is_array($file['type'])){
          foreach ($file['type'] as $k => $fileType) {
            if ($fileType == ''){
              $_MESSAGE = "le jeu est uplaod mais il n'y a pas de carousel";
            }
            else{
              if(isImg($fileType) == false){
                array_push($errors,$file['name'][$k]);
              }
              else{
                $name = namedFile($fileType);
                $target = $target_dir.$name;
                move_uploaded_file($file['tmp_name'][$k], $target);
                postImgs($id, $target, $pdo);
                $_MESSAGE = "le jeux est upload";
              }
            }
          }
        }
        else{
          $fileType = $file['type'];
          if(isImg($fileType) == false){
            $_MESSAGE = "un fuchier n'est pas une image";
            array_push($errors,$file['name']);
            break;
          }
          else{
            $name = namedFile($fileType);
            $targetJacket = $target_dir.$name;
            move_uploaded_file($_FILES['jacket']['tmp_name'], $targetJacket);
          $targetJacket = $name;
            postJeux($_POST, $targetJacket, $pdo);
            $id = isExistGame($_POST, $pdo);
            //var_dump($id);
          }
        }
      }
    }
  }
}
header('Location: ../page/AdminCreateGame.php');
