    <?php
require_once('crud_people.php');
require_once('people.php');
 
$crud = new CrudPersona();
$persona = new Persona();
 
	if (isset($_POST['insertar'])) {
        $persona->setId($_POST['id_registrer_seo']);
		$persona->setNombre($_POST['name_registrer_seo']);
        $persona->setEmail($_POST['email_registrer_seo']);
        $persona->setAddress($_POST['adreess_registrer_seo']);
        $persona->setAge($_POST['age_registrer_seo']);
        $persona->setLastName($_POST['last_registrer_seo']);
        $persona -> setPassword($_POST['password_registrer_seo']);
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
	elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>