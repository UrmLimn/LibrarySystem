<?php
	/*
	This file initializes the connection to the databases and also start the sessions.
	*/

	session_start();

	error_reporting(0);		//Hide the error reporting

	require 'database/connect.php';
	require 'functions/general.php';
	require 'functions/user.php';

	$messages = array();
?>