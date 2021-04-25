<?php
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

function postJeux($post, $lien, $pdo){
  $listePEGI = json_encode($_POST['listePEGI']);
  $sql =
  " INSERT INTO jeux(title, image, prix, synopsis, PEGI, listePEGI, avis, avisPEGI, temps_jeux)
  VALUES(:title, :image, :prix, :synopsi, :PEGI, :listePEGI, :avis, :avisPEGI, :temps_jeux)
  ";
  $dataBinded = array(
    ':title' => $post['title'],
    ':image' => $lien,
    ':prix' => $post['price'],
    ':synopsi' => $post['synopsi'],
    ':PEGI' => $post['PEGI'],
    ':listePEGI' => $listePEGI,
    ':avisPEGI' => $post['avisPEGI'],
    ':avis' => $post['avi'],
    ':temps_jeux' => $post['temps_jeux'],
  );

  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);

  $id = isExistGame($post, $pdo);

  foreach ($post['platformes'] as $key => $value) {
    echo $value;
    $sql =
    " INSERT INTO jeux_plateforme(jeux, plateforme)
      VALUES(:jeux, :plateforme)
    ";

    $dataBinded = array(
      ':jeux' => $id['id'],
      ':plateforme' => $value,
    );

    $prepareRequete = $pdo->prepare($sql);
    $prepareRequete->execute($dataBinded);
  }
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

function recupCoeur($pdo){
  $sql =
  " SELECT * FROM jeux
    WHERE coeur = 1
  ";

  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute();
  $coupCoeur = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);
  return $coupCoeur;
}

function recupAllGame($pdo){
  $sql=
    " SELECT * FROM jeux
    ";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $jeux = $pre->fetchAll(PDO::FETCH_ASSOC);
  return $jeux;
}

function recupAllImg($pdo){
  $sql=
    " SELECT * FROM images
    ";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $image = $pre->fetchAll(PDO::FETCH_ASSOC);
  return $image;
}

  function recupPlatForGame($pdo, $jeu){
    $sql =
      " SELECT * FROM jeux_plateforme jp
        INNER JOIN plateforme p
        ON p.id = jp.plateforme
        WHERE jeux = ".$jeu['id']."
      ";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $plateforms = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $plateforms;
}
