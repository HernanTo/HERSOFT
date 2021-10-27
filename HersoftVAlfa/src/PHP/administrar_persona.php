    <?php
require_once('crud_people.php');
require_once('people.php');
include("database.php");
 
$crud = new CrudPersona();
$persona = new Persona();
 
	if (isset($_POST['insertar'])) {
        $id_seo = ($_POST['idregistrerseo']);
		$name_seo = ($_POST['nameregistrerseo']);
        $email_seo = ($_POST['emailregistrerseo']);
        $address_seo = ($_POST['adreessregistrerseo']);
        $age_seo = ($_POST['ageregistrerseo']);
        $last_seo = ($_POST['lastregistrerseo']);
        $password_seo = ($_POST['passwordregistrerseo']);
        $dml = "INSERT INTO users VALUES ($id_seo,$name_seo,$last_seo,$password_seo,$email_seo,$address_seo,$age_seo,'seo')";
        $query_sql = mysqli_query($conection,$dml);
		header('Location: ../../queryUser.php');
	}elseif(isset($_POST['actualizar'])){
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