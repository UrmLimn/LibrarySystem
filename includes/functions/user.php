<?php
	/*
	* Checks if the user's email is on the database.
	*/	
	function user_exists($email) {
		$email = sanitize($email);
		$query = mysql_query("SELECT COUNT('USER_ID') FROM Account WHERE EMAIL='" . $email . "'");
		return (mysql_result($query, 0) == 1) ? true : false;
	}

	/*
	* Returns the user's id from the database that possesses that given email.
	*/
	function user_id_from_email($email) {
		$email = sanitize($email);
		return (mysql_result(mysql_query("SELECT USER_ID FROM Account WHERE EMAIL='$email'"), 0, 'USER_ID'));
	}

	/*
	* Checks if the user is registered. If so, returns the user id, otherwise false.
	*/
	function login($email, $password) {
		$user_id = user_id_from_email($email);

		$given_password = sanitize($password);
		$stored_password = mysql_result(mysql_query("SELECT PASSWORD FROM Account WHERE USER_ID=$user_id"), 0);
		
		return (password_verify($given_password, $stored_password)) ? $user_id : false;
	}


	/*
	* Registers the user's profile first, and then it creates an account
	*/
	function user_register($name, $email, $password) {
		$name = sanitize($name);
		$email = sanitize($email);
		$password = sanitize($password);

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$register_date = getdate();
		$date_as_string = $register_date['year'] . "-" . $register_date['mon'] . "-" . $register_date['wday'];
		
		$insert_user_profile = mysql_query("INSERT INTO User (NAME, REGISTERDATE) VALUES ('" 
			. $name . "', '" . $date_as_string . "')");
		$user_id = mysql_insert_id();

		$insert_user_account = mysql_query("INSERT INTO Account (EMAIL, PASSWORD, USER_ID) VALUES ('" 
			. $email . "', '" . $hashed_password . "', " . $user_id . ")");

		return true;
	}

	/*
	* Checks if user is logged in
	*/
	function logged_in() {
		return (isset($_SESSION['user_id'])) ? true : false;
	}
?>