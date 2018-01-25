<?php

	class member{

		private $id;
		private $name;
		private $password;
		private $birthDate;
        private $email;
        private $pontos;

		function __construct($name, $password, $email, $birthDate, $id=null, $pontos){
			$this->name = $name;
			$this->password = $password;
			$this->email = $email;
			$this->birthDate = $birthDate;
            $this->id = $id;
            $this->pontos = $pontos;
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
        function getPontos(){
			return $this->pontos;
		}

	}

?>