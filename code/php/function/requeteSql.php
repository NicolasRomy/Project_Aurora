<?php
function postJeux($post, $lien, $pdo){
  $listePEGI = json_encode($_POST['listePEGI']);
  $platformes = json_encode($_POST['platformes']);
  $sql =
  " INSERT INTO jeux(title, image, prix, synopsis, platformes, PEGI, listePEGI, avis, avisPEGI, temps_jeux)
  VALUES(:title, :image, :prix, :synopsi, :platformes, :PEGI, :listePEGI, :avis, :avisPEGI, :temps_jeux)
  ";
  $dataBinded = array(
    ':title' => $post['title'],
    ':image' => $lien,
    ':prix' => $post['price'],
    ':synopsi' => $post['synopsi'],
    ':platformes' => $platformes,
    ':PEGI' => $post['PEGI'],
    ':listePEGI' => $listePEGI,
    ':avisPEGI' => $post['avisPEGI'],
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

function postImgs($id, $url, $pdo){
  $sql =
  " INSERT INTO images(jeux_id, url)
    VALUES(:id, :url)
  ";
  $dataBinded = array(
    ':id' => $id['id'],
    ':url' => $url,
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}
