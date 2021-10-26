    <?php
require_once('crud_people.php');
require_once('people.php');
 
$crud = new CrudPersona();
$persona = new Persona();
 
	if (isset($_POST['insertar'])) {
        $persona->setId($_POST['idregistrerseo']);
		$persona->setNombre($_POST['nameregistrerseo']);
        $persona->setEmail($_POST['emailregistrerseo']);
        $persona->setAddress($_POST['adreessregistrerseo']);
        $persona->setAge($_POST['ageregistrerseo']);
        $persona->setLastName($_POST['lastregistrerseo']);
        $persona -> setPassword($_POST['passwordregistrerseo']);
		$crud->insertar($persona);
		header('Location: location:../../panelCeo.php');
	}elseif(isset($_POST['actualizar'])){
        $persona->setId($_POST['ID_User']);
        $persona->setNombre($_POST['Name_user']);
        $persona->setEmail($_POST['Email']);
        $persona->setTypeAccount($_POST['account_type']);
        $persona->setAddress($_POST['Address_user']);
        $persona->setAge($_POST['Age']);
        $persona->setLastName($_POST['Last_name']);
		$crud->actualizar($persona);
		header('Location: location:../../queryUser.php');
    }
	elseif ($_GET['accion']=='borrar') {
		$crud->eliminar($_GET['id']);
		header('Location: ../../queryUser.php');		
	}elseif($_GET['accion']=='editar'){
		header('Location: actualizar.php');
	}
?>