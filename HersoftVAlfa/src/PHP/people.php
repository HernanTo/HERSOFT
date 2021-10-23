<?php
	class Persona{
		private $id;
		private $nombre;
		// private $telefono;
		private $email;
		private $age;
		private $typeAccount;
		private $address;
		private $lastName;
		private $password;
   function __construct(){}
                
        public function getId(){
			return $this->id;
		}
 
		public function getNombre(){
		return $this->nombre;
		}
            
        
        public function getEmail(){
			return $this->email;
		}
        
		public function getAddress(){
			return $this -> address;
		}

		public function getTypeAccount(){
			return $this->typeAccount;
		}
		
		public function getAge(){
			return $this ->age;
		}
		public function getPassword(){
			return $this -> password;
		}
		// !! FUnciones SET
		
        public function setId($id){
			$this->id = $id;
		}
        
		public function getLastName (){
			return $this -> lastName;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		
		public function setEmail($email){
			return $this->email = $email;
		}
				
		public function setTypeAccount($typeAccount){
			return $this->typeAccount = $typeAccount;
		}
		public function setAge($age){
			return $this ->age = $age;
		}
		public function setAddress($address){
			return $this -> address = $address;
		}
		public function setLastName($lastName){
			return $this -> lastName = $lastName;
		}
		public function setPassword($password){
			return $this -> password = $password;
		}
	}
?>