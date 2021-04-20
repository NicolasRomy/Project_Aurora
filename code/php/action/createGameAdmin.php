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
if (empty($title)){
  // renvoier que le jeu existe deja
}
else{
  $target_dir = '../../../assets/imgGame/';

  foreach ($_FILES as $key => $file) {

    if(is_array($file)){
      foreach ($file as $keys => $value) {
        if($keys == "type"){
          foreach ($value as $k => $fileType) {
            if(!empty(isImg($fileType))){
              echo 'error...';
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
    }
    else{
      if(!empty(isImg($file['type']))){
        echo 'error...';
        array_push($errors,$file['name']);
        //header('Location: '.$_SERVER['HTTP_REFERER']);
      }
      else{
        $name = namedFile($fileType);
        $target = $target_dir.$name;
        move_uploaded_file($_FILES['jacket']['tmp_name'], $target);
        echo 'file uploaded';
      }
    }
  }
}
/*

// uplaod img
$sql =
" INSERT INTO jeux(title, image, prix, synopsis, PEGI, avis, temps_jeux)
VALUES(:title, :prix, :synopsi, :PEGI, :avis, :temp_jeux)
";
$dataBinded = array(
  ':title' => $_POST['title'],
  'image'
);
*/
