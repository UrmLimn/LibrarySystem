<?php
	
	/**
	* Class author represent the authors of the books.
	*/
	class Author
	{
		
		private $name;
		private $surname;

		public function __construct($name, $surname)
		{
			$this->name = $name;
			$this->surname = $surname;
		}

		public function getName()
		{
			return $name;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function getSurname()
		{
			return $surname;
		}

		public function setSurname($surname)
		{
			$this->surname = $surname;
		}
	
		/*
   		* a String representation of the class Author.
   		*/
  		public function __toString()
  		{
    		return $this->name." ".$this->this->surname;
  		}
	}

?>