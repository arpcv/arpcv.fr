<?php

session_start();

function startSession() {	
	$_SESSION['admin'] = 'TRUE';
}

function checkSession() {
	if (isset($_SESSION['admin']) == false) {
		DelSession();
		header("location:index.php");
	}
} 

function DelSession() {
	session_destroy();
	unset($_SESSION);
} 

?>