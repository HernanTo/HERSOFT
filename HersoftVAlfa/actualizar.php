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
        <form action="./src/PHP/administrar_persona.php" method="post">
            <label>Nombre Persona</label><input type="text" name="" id="" value="<?php echo $persona->getNombre()?>">
            <label>Apellidos</label><input type="text" name="" id="" value="<?php echo $persona->getLastName()?>">
            <label>Dirección</label><input type="text" name="" id="" value="<?php echo $persona->getAddress()?>">
            <input type="submit" name="actualizar" value="actualizar">
        </form>
    </div>
</div>
<?php
    include("./src/incluedes/footer.php");
?>