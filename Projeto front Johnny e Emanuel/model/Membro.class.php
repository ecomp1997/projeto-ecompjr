<?php

	class member{

		private $id;
		private $name;
		private $password;
		private $birthDate;
        private $email;
		private $points;
		private $office;

		function __construct($name, $password, $email, $birthDate, $id=null, $points, $office){
			$this->name = $name;
			$this->password = $password;
			$this->email = $email;
			$this->birthDate = $birthDate;
            $this->id = $id;
			$this->points = $points;
			$this->office = $office;
		}

		function getId(){
			return $this->id;
		}

		function getName(){
			return $this->name;
		}

		function getPassword(){
			return $this->password;
		}

		function getEmail(){
			return $this->email;
		}

		function getBirthDate(){
			return $this->birthDate;
		}
		
        function getPoints(){
			return $this->points;
		}

		function getOffice(){
			return $this->office;
		}

	}

?>