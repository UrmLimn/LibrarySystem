<?php
	include '../../includes/init.php';

	// If user is already logged in the sign up page cannot be displayed.
	if(logged_in() === true) {
		header('Location: home.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign Up - Library System</title>

		<meta name="description" content="A library system to store, lend and return books.">
		<meta charset="UTF-8">

		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" type="text/css" href="../css/signup.css">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<div id="signupsctn">
			<a href="../index.php"><img src="../images/logo.png" width="100px" height="100px" id="logoimg"></a>
			<p id="signuplbl">Sign Up</p>
			<form id="signupfrm" action="../signup.php" method="post">
				<input type="text" name="name" placeholder="Your name" id="nameinpt" class="inputs"></input>
				<input type="email" name="email" placeholder="Your email" id="emailinpt" class="inputs"></input>
				<input type="password" name="password" placeholder="Your password" id="passwordinpt" class="inputs"></input>
				<input type="submit" value="Sign Up" id="submitinpt" class="inputs"></input>
			</form>
		</div> <!-- End of login section -->
		<p class="centertxt label"><a href="../index.php">Already have an account? <span class="bold">Log in</span></a></p>

		<script type="text/javascript" language="JavaScript" src="../js/signup.js"></script>
	</body>
</html>