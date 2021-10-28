    <?php
require_once('crud_people.php');
require_once('people.php');
include("database.php");
 
$crud = new CrudPersona();
$persona = new Persona();
 
	if(isset($_POST['actualizar'])){
        $persona->setId($_POST['ID_User']);
        $persona->setNombre($_POST['nombre_user']);
        $persona->setAddress($_POST['address_user']);
        $persona->setLastName($_POST['lastName_user']);
		$crud->actualizar($persona);
		header('Location: ../../queryUser.php');
    }
	elseif ($_GET['accion']=='borrar') {
		$crud->eliminar($_GET['id']);
		header('Location: ../../queryUser.php');		
	}elseif($_GET['accion']=='editar'){
		header('Location: ../../actualizar.php');
	}
?>