
<?php
    //Session start import of config
    session_start();
    $_SESSION;

    require_once "config.php";


    $sql = "SELECT * FROM admin WHERE PSEUDO='".$_POST['username']."'";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $user = current($pre->fetchAll(PDO::FETCH_ASSOC));
    //loop to check password and act acordingly
    if(password_verify($_POST['password'], $user['PASSWORD'])) {
        $_SESSION['user'] = $user;
        header('Location:../accueil.php');
    } else {
        header('Location:../connexion.php');
    }
?>