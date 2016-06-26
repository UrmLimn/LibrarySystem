<?php 

	include('author.php');
	
	/**
	* Class Book represents the books.
	*/
	class Book
	{
		private $title;
		private $author;
		private $gender;
		private $pagesnumber;
		private $price;

		public function __construct($title, $gender, $pagesnumber=0)
		{
			$this->author = new Author();
		}

		public function setTitle($title) 
		{
			$this->title = $title;
		}

		public function getTitle() 
		{
			return $this->title;
		}

		public function setAuthor(Author $author) {
			$this->author = $author;
		}

		public function getAuthor() {
			return $this->author;
		}

		public function setGender($gender) {
			$this->gender = $gender;
		}

		public function getGender() {
			return $this->gender;
		}

		public function setPagesnumber($pagesnumber) {
			$this->pagesnumber = $pagesnumber;
		}

		public function getPagesnumber() {
			return $this->pagesnumber;
		}

		public function setPrice($price) {
			$this->price = $price;
		}

		public function getPrice() {
			return $this->price;
		}

		/*
   		* a String representation for all books.
   		*/
  		public function __toString()
  		{
    		return $this->title." by ".$this->author;
  		}
	}

?>