<?php 
	
	/*
	This is the file that processes the login data.
	*/

	include '../includes/init.php';

	if(empty($_POST) === false) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email) === true || empty($password) === true) {
			$_SESSION['message'] = "You need to enter an email and password!";
			header('Location: index.php');
			exit();
		} elseif(user_exists($email) === false) {
			$_SESSION['message'] = "We can't find that email. Have you registered?";
			header('Location: index.php');
			exit();
		} else {
			$login = login($email, $password);
			if($login === false) {
				$_SESSION['message'] = "The email or password is incorrect!";
				header('Location: index.php');
				exit();
			} else {
				//Set the user session
				$_SESSION['user_id'] = $login;
				//redirect user to home
				header('Location: html/home.php');
				exit();
			}
		}
	}
?>