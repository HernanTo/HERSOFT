<?php
	class Persona{
		private $id;
		private $nombre;
		private $telefono;
		private $email;
		private $age;
		private $typeAccount;
   function __construct(){}
                
        public function getId(){
			return $this->id;
		}
 
		public function getNombre(){
		return $this->nombre;
		}
            
        public function getTelefono(){
			return $this->telefono;
		}
        
        public function getEmail(){
			return $this->email;
		}
        
		public function getTypeAccount(){
			return $this->typeAccount;
		}
		
		public function getAge(){
			return $this ->age;
		}

        public function setId($id){
			$this->id = $id;
		}
        
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function setTelefono($telefono){
			$this->telefono = $telefono;
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
	}
?>