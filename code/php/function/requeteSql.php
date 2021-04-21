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

function postImgs(){

}
