<?php

	include('profile.php');

	/**
	* Class Account
	*/
	class Account
	{
		
		private $username;
		private $password;
		private $profile;
		private $administrator;
		//private $rights;

		function __construct($username, $password, Profile $profile)
		{
			$this->username = $username;
			$this->password = $password;
			$this->profile = $profile;
			$this->administrator = false;
		}

		/**
		*Check if the account has admnistrative rights
		*@return a boolean valua
		*/
		public function isAdmin() {
			return $this->administrator;
		}

		/*
		*Set the permission rights to an account
		*/
		public function setAdmin($isAdmin) {
			$this->administrator = $isAdmin;
		} 
	}
?>