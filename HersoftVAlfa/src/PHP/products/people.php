<?php
	class Persona{
		private $id;
		private $nombre;
		// private $telefono;
		private $descripcion;
        private $price;
        private $categoria;
        private $dates;
   function __construct(){}
                
        public function getId(){
			return $this->id;
		}
 
		public function getNombreProduct(){
		return $this->nombre;
		}
        
        public function getdescription(){
			return $this->descripcion;
		}
        
		public function getprice(){
			return $this -> precio;
		}

		public function getcategory(){
			return $this->category;
		}
		
		public function getdates(){
			return $this ->dates;
		}
		
        public function setId($id){
			$this->id = $id;
		}
        
		public function setNombreProduct($nombre){
			$this->nombre = $nombre;
		}
        public function setdescription($descripcion){
            $this ->descripcion = $descripcion;
        }
        public function setPrice($precio){
            $this ->precio = $precio;

        }
        public function setcategory($categoria){
			$this->category = $categoria;
		}
		
		public function setdates($dates){
			$this ->dates = $dates;
		}
	}
?>