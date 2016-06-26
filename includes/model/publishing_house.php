<?php 

	include('address.php');
	
	/**
	* Class PublishingHouse represent a publishing house.
	*/
	class PublishingHouse
	{
		private $name;
		private $address;

		public function __construct($name, Address $address)
		{
			$this->name = $name;
			$this->address = $address;
		}

		public function getName() 
		{
			return $this->name;
		}

		public function setName($name) 
		{
			$this->name = $name;
		}

		public function getAddress() 
		{
			return $this->address;
		}

		public function setAddress(Address $address) {
			$this->address = $address;
		}

		/*
   		* a String representation of a publishing house.
   		*/
  		public function __toString()
  		{
    		return $this->name;
  		}
	}
	
?>