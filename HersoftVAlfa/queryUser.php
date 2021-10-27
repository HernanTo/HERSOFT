<?php
    // session_start();
    // if($_SESSION['usuario'] == null || $_SESSION['usuario'] = ''){
    //     echo '<script>alert("Usted no tiene autorización para acceder")</script>';
    //     header("Location: ../../index.html");
    //     die();
    // }
    require_once('./src/PHP/crud_people.php');
    require_once('./src/PHP/people.php');     
    $crud= new CrudPersona();
    $persona= new Persona();
    $listaPersonas=$crud->mostrar();
    include('./src/incluedes/header.php');
?>
<div class="moduleSeo">
    <?php include("./src/incluedes/menu_slide.php"); ?>
    <div class="containerSeo">
        <h2>Datos Usuarios</h2>
        <table border=1 class="table">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Tipo Cuenta</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
            <?php
                foreach ($listaPersonas as $persona){?>
                <tr>
                    <td><?php echo $persona->getId() ?></td>
                    <td><?php echo $persona->getNombre() ?></td>
                    <td><?php echo $persona->getEmail() ?></td>
                    <td><?php echo $persona->getAge() ?></td>
                    <td><?php echo $persona->getTypeAccount() ?></td>
                    <td><a href="./actualizar.php?id=<?php echo $persona->getId()?>&accion=editar"><i class="fi-sr-pencil"></i></a></td>
                    <td><a href="./src/PHP/administrar_persona.php?id=<?php echo $persona->getId()?>&accion=borrar"><i class="fi-sr-trash"></i></a></td>
                </tr>
            <?php }?>
        </table>
    </div>
</div>
<?php
    include("./src/incluedes/footer.php")
?>