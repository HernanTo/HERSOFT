<?php
require_once('conexion.php');
	class CrudPersona{
		public function __construct(){}
        // crud insertar
		public function insertar($persona){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO persona values(NULL,:nombre,:telefono,:direccion)');
			$insert->bindValue('nombre',$persona->getNombre());
			$insert->bindValue('telefono',$persona->getTelefono());
			$insert->bindValue('direccion',$persona->getDireccion());
			$insert->execute();
 
		}
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
			$eliminar=$db->prepare('DELETE FROM persona WHERE id_persona=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
        // trarer un user
		public function obtenerPersona($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM persona WHERE id_persona=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$persona=$select->fetch();
			$myPersona= new Persona();
			$myPersona->setId($persona['id_persona']);
			$myPersona->setNombre($persona['nombre']);
			$myPersona->setTelefono($persona['telefono']);
			$myPersona->setEmail($persona['email']);
			$myPersona->setTypeAccount($persona['tipo de cuenta']);
			return $myPersona;
		}
        //actualizar User
		public function actualizar($persona){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE persona SET nombre=:nomb, telefono=:tel,direccion=:dir  WHERE id_persona=:id');
			$actualizar->bindValue('id',$persona->getId());
			$actualizar->bindValue('nomb',$persona->getNombre());
			$actualizar->bindValue('tel',$persona->getTelefono());
			$actualizar->bindValue('dir',$persona->getDireccion());
			$actualizar->execute();
		}
	}
?>