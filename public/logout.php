<?php
	
	/*
	*	Destroy the session and relocate back to the index page.
	*/
	session_start();
	session_destroy();
	header('Location: index.php');

?>