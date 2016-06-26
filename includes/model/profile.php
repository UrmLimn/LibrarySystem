<?php 
	include('address.php');

	/**
	* Class Profile represents a collection of information used for describing a user of the library system.
	*/
	class Profile
	{
		
		private $name;
		private $surname;
		private $address;
		private $id;
		private $borrowed;

		public function __construct($name, $surname, Address $address)
		{
			$this->name = $name;
			$this->surname = $surname;
			$this->address = $address;
			$this->borrowed = 0;
		}

		public function getName()
		{
			return $this->name;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function getSurname()
		{
			return $this->surname;
		}

		public function setSurname($surname)
		{
			$this->surname = $surname;
		}

		/**
		*Increments the barrowed value every time a book is borrowed from the library
		*/
		public function borrow()
		{
			$this->borrowed++;
		}

		/**
		*Decrements the barrowed value every time a book is returned to the library
		*/
		public function returnsBook()
		{
			if($this->borrowed > 0) 
			{
				$this->borrowed--;
			}
		}
	}

?>