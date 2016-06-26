<?php
	
	include '../includes/init.php';

	if(empty($_POST) === false) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($name) || empty($email) || empty($password)) {
			$messages[] = "You have to fill up all the inputs.";
		} elseif (user_exists($email) === true) {
			$messages[] = "Sorry! That email is already registered.";
		} else {
			user_register($name, $email, $password);
			header('Location: index.php');
		}
	}
	
?>