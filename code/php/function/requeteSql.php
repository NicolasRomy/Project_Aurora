<?php
function postJeux($post, $lien, $pdo, $listePEGI){
  $sql =
  " INSERT INTO jeux(title, image, prix, synopsis, PEGI, listePEGI, avis, temps_jeux)
  VALUES(:title, :image, :prix, :synopsi, :PEGI, :listePEGI, :avis, :temps_jeux)
  ";
  $dataBinded = array(
    ':title' => $post['title'],
    ':image' => $lien,
    ':prix' => $post['price'],
    ':synopsi' => $post['synopsi'],
    ':PEGI' => $post['PEGI'],
    ':listePEGI' => $listePEGI,
    ':avis' => $post['avi'],
    ':temps_jeux' => $post['temps_jeux'],
  );

  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}

function isExistGame($post, $pdo){
  $sql =
  " SELECT id FROM jeux
    WHERE title=:titleGame
  ";

  $dataBinded = array(
    ':titleGame' => $post['title'],
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
  $id = current($prepareRequete->fetchAll(PDO::FETCH_ASSOC));
  return $id;
}

function postImgs(){
  $sql =
  " INSERT INTO images(jeux_id, url)
    ";
}
