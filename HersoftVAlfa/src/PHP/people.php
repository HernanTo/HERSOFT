<?php
	class Persona{
		private $id;
		private $nombre;
		private $telefono;
		private $direccion;
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
        
        public function getDireccion(){
		return $this->direccion;
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
 
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
	}
?>