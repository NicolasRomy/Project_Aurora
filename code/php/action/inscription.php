<?php
    session_start();
    $_SESSION;

    require_once "config.php";

    $sql = "SELECT * FROM users WHERE pseudo=:pseudo OR email=:email";
    $dataBinded=array(
        ':pseudo'   => $_POST['pseudo'],
        ':email'   => $_POST['email']
    );

    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user = current($pre->fetchAll(PDO::FETCH_ASSOC));
    if(!empty($user)) {
        $_SESSION['messageInscription'] = 'email ou pseudo déja utilisé';
        header('Location: ../page/login.php');
    }
    else {
        
        $sql = "INSERT INTO users(pseudo, email, password) VALUES(:pseudo,:email, password_hash(:password))";
        $dataBinded=array(
            ':pseudo'   => $_POST['pseudo'],
            ':email'   => $_POST['email'],
            ':password'=> $_POST['password']
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        header('Location: ../page/login.php');
    }

    header('Location:../connexion.php');
?>