<?php

	class projeto{

		private $id;
        private $name;
        private $contratingCompany;
		private $initialDate;
		private $deliveryDate;
        private $members;
        private $points;
        private $price;

		function __construct($id=null, $name, $contratingCompany, $initialDate, $deliveryDate, $members, $points, $price){
            $this->id = $id;
            $this->name = $name;
			$this->contratingCompany = $contratingCompany;
			$this->initialDate = $initialDate;
            $this->deliveryDate = $deliveryDate;
            $this->members = $members;
            $this->points = $points;
            $this->price = $price;
		}

		function getId(){
			return $this->id;
		}

		function getName(){
			return $this->name;
		}

		function getContratingCompany(){
            return $this->contratingCompany;
        }

        function getInitialDate(){
            return $this->initialDate;
        }

        function getDeliveryDate(){
            return $this->deliveryDate;
        }

        function getMembers(){
            return $this->members;
        }

        function getPoints(){
            return $this->points;
        }
        
        function getPrice(){
            return $this->price;
        }

	}

?>