<?php
    session_start();
    $_SESSION;

    require_once "config.php";

    $sql = "SELECT * FROM user WHERE username=:username OR email=:email";
    $dataBinded=array(
        ':username'   => $_POST['username'],
        ':email'   => $_POST['email']
    );

    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user = current($pre->fetchAll(PDO::FETCH_ASSOC));
    if(!empty($user)) {
        echo "Nom d'utilisateur ou addresse mail déjà utilisés !";
    }
    else {
        $sql = "INSERT INTO user(username, email,password) VALUES(:username,:email,MD5(:password))";
        $dataBinded=array(
            ':username'   => $_POST['username'],
            ':email'   => $_POST['email'],
            ':password'=> $_POST['password']
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
    }

    header('Location:../connexion.php');
?>