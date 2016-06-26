<?php
	include '../includes/init.php';

	// If user is already logged in the index page cannot be displayed.
	if(logged_in() === true) {
		header('Location: html/home.php');
		exit();
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Library System</title>

		<meta name="description" content="A library system to store, lend and return books.">
		<meta charset="UTF-8">

		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" type="text/css" href="css/index.css">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<div id="loginsctn">
			<a href="index.php"><img src="images/logo.png" width="100px" height="100px" id="logoimg"></a>
			<p id="loginlbl">Log in</p>
			<p class="message <?php if(!isset($_SESSION['message'])) {echo "invisible";} else {echo "visible";} ?>"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
			<form id="loginfrm" method="post" action="login.php">
				<input type="email" name="email" placeholder="Email" id="emailinpt" class="inputs"></input>
				<input type="password" name="password" placeholder="Password" id="passwordinpt" class="inputs"></input>
				<input type="submit" value="Login" id="submitinpt" class="inputs"></input>
			</form>
		</div> <!-- End of login section -->
		<p class="centertxt label" id="forgotpasswordlbl"><a href="#">Forgot your password?</a></p>
		<p class="centertxt label"><a href="html/signup.php">Don't have an account? <span class="bold">Sign Up</span></a></p>

		<script type="text/javascript" language="JavaScript" src="js/main.js"></script>
	</body>
</html>