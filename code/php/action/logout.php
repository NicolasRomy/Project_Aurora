<?php 
    include_once("./config.php"); 
    unset($_SESSION['user']);
    header('Location:../pages/index.php')
?>
