<?php
require_once('conexion.php');
// require_once('people.php');
	class CrudPersona{
		public function __construct(){}
        //crud trarerUser
		public function mostrar(){
			$db=Db::conectar();
			$listaPersona=[];
			$select=$db->query('SELECT * FROM users');
            
			foreach($select->fetchAll() as $persona){
				$myPersona= new Persona();
				$myPersona->setId($persona['ID_User']);
				$myPersona->setNombre($persona['Name_user']);
				// $myPersona->setTelefono($persona['']);
				$myPersona->setEmail($persona['Email']);
				$myPersona->setTypeAccount($persona['account_type']);	
				$myPersona->setAge($persona['Age']);	
				$listaPersona[]=$myPersona;
			}
			return $listaPersona;
		}
        //eliminar user
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM users WHERE ID_User=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
        // trarer un user
		public function obtenerPersona($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM users WHERE ID_User=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$persona=$select->fetch();
			$myPersona= new Persona();
			$myPersona->setId($persona['ID_User']);
			$myPersona->setNombre($persona['Name_user']);
			$myPersona->setNombre($persona['Last_name']);
			$myPersona->setEmail($persona['Email']);
			$myPersona->setTypeAccount($persona['account_type']);
			return $myPersona;
		}
        //actualizar User
		public function actualizar($persona){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE users SET Name_User=:nomb, Last_Name=:lastName , Address_user=:dir  WHERE ID_User=:id');
			$actualizar->bindValue('id',$persona->getId());
			$actualizar->bindValue('nomb',$persona->getNombre());
			$actualizar->bindValue('lastName',$persona->getLastName());
			$actualizar->bindValue('dir',$persona->getAddress());
			$actualizar->execute();
		}
	}
