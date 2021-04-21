<?php
function postJeux($post, $lien, $pdo){
  $sql =
  " INSERT INTO jeux(title, image, prix, synopsis, PEGI, avis, temps_jeux)
  VALUES(:title, :image, :prix, :synopsi, :PEGI, :avis, :temps_jeux)
  ";
  $dataBinded = array(
    ':title' => $post['title'],
    ':image' => $lien,
    ':prix' => $post['price'],
    ':synopsi' => $post['synopsi'],
    ':PEGI' => $post['PEGI'],
    ':listPEGI' => $post['listPEGI'],
    ':avis' => $post['avi'],
    ':temps_jeux' => $post['temps_jeux'],
  );

  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}

function postImgs(){

}
