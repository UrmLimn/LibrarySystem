<?php  

	/**
	* Class Address represents a collection of information used for describing the location of a building.
	*/
	class Address
	{
		
		private $state;
		private $city;
		private $zipcode
		private $street;
		private $number;

		public function __construct($state, $city, $zipcode, $street, $number)
		{
			$this->state = $state;
			$this->city = $city;
			$this->zipcode = $zipcode;
			$this->street = $street;
			$this->number = $number;
		}

		public function getState() 
		{
			return $this->state;
		}

		public function setState($state)
		{
			$this->state = $state;
		}

		public function getCity() 
		{
			return $this->city;
		}

		public function setCity($city)
		{
			$this->city = $city;
		}

		public function getZipCode() 
		{
			return $this->zipcode;
		}

		public function setZipCode($zipcode)
		{
			$this->zipcode = $zipcode;
		}

		public function getStreet() 
		{
			return $this->street;
		}

		public function setStreet($street)
		{
			$this->street = $street;
		}

		public function getNumber() 
		{
			return $this->number;
		}

		public function setNUmber($number)
		{
			$this->number = $number;
		}

		/*
   		* a String representation of the address.
   		*/
  		public function __toString()
  		{
    		return $this->street.", ".$this->number."(".$this->city.", ".$this->state.")";
  		}
	}
?>