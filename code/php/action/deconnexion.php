<?php
	session_start();
	$_SESSION;

	unset($_SESSION['user']);
	header('Location:../Page_dAcceuil.php');
?>