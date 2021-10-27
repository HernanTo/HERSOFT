<?php
	require_once('./src/PHP/crud_people.php');
	require_once('./src/PHP/people.php');
	$crud= new CrudPersona();
	$persona=new Persona();
	$persona=$crud->obtenerPersona($_GET['id']);
    include('./src/incluedes/header.php');
?>
<div class="moduleSeo">
    <?php include("./src/incluedes/menu_slide.php"); ?>
    <div class="containerSeo">
        <h2>ACTUALIZAR REGISTRO PERSONA</h2>
        <div class="modificarUser" style="margin-left: 20%; width:60%; background: red; display: flex; justify-content: center;">
        <form action="./src/PHP/administrar_persona.php" method="post" style="width: 50%; margin-left: 25%;">
            <input type="text" name="ID_User" id="ID_User" value='<?php echo $persona->getId();?>' readonly style="width: 50%; height:30px;"><br>
            <input type="text" name="nombre_user" id="nombre_user" value='<?php echo $persona->getNombre();?>' style="width: 50%; height:30px;" placeholder="Ingresa el nuevo Nombre"><br>
            <input type="text" name="lastName_user" id="lastName_user" value='<?php echo $persona->getLastName();?>' style="width: 50%; height:30px;" placeholder="Ingresa los nuevos apellidos"><br>
            <input type="text" name="address_user" id="address_user" value='<?php echo $persona->getAddress();?>' style="width: 50%; height:30px;" placeholder="Ingresa la nueva direccion"><br>
            <input type="submit" name="actualizar" value="actualizar">
        </form>
        </div>
    </div>
</div>
<?php
    include("./src/incluedes/footer.php");
?>