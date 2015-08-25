<?php
	session_start();
	$_SESSION['language'] = $_POST['language'];
	include('../redirections/vers_index.php');
?>