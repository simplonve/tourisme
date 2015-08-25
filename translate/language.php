<?php
	if(isset($_SESSION['language'])){
		include $_SESSION['language'] . '.php';
	}
	else{
		include 'fr.php';
	}
?>