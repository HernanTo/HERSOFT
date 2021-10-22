<?php
    require_once('./src/PHP/crud_people.php');
    require_once('./src/PHP/people.php');     
    $crud= new CrudPersona();
    $persona= new Persona();
    $listaPersonas=$crud->mostrar();
    include('./src/incluedes/header.php');
?>
<div class="moduleSeo">
    <div class="menu_admin">
        <nav class="nav_panel">
            <ul class="menu_seo">
                <a href="registroSeo.php"><li>Agregar Usuarios</li></a>
                <a href="QueryUser.php"><li>Ver,Modificar usuarios</li></a>
                <a href="#"><li>Ver,Modificar productos</li></a>
            </ul>
        </nav>
    </div>
    <div class="containerSeo">
        <h2>Datos Usuarios</h2>
        <table class="table">
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
                    <!-- <td><?php echo $persona->getId() ?></td> -->
                    <!-- <td><?php echo $persona->getNombre() ?></td> -->
                    <!-- <td><?php echo $persona->getEmail() ?></td> -->
                    <!-- <td><?php echo $persona->getEdad() ?></td> -->
                    <!-- <td><?php echo $persona->getTypeAccount() ?></td> -->
                    <!-- <td><a href="#"><i class="fi-sr-pencil"></i></a></td> -->
                    <!-- <td><a href="#"><i class="fi-sr-trash"></i></a></td> -->
                </tr>
            <?php }?>
        </table>
    </div>
</div>