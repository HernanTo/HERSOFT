<?php
    include_once('./src/incluedes/header.php');
    require_once('./src/PHP/crud_people.php');
    require_once('./src/PHP/people.php');     
    $crud= new CrudPersona();
    $persona= new Persona();
    $listaPersonas=$crud->mostrar();
?>
<div class="products">
<table border=1 class="table">
            <tr>
                <th>ID Producto</th>
                <th>Nombre Producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
            <?php
                foreach ($listaPersonas as $persona){?>
                <tr>
                    <td><?php echo $persona->getId() ?></td>
                    <td><?php echo $persona->getNombreProduct() ?></td>
                    <td><?php echo $persona->getdescription() ?></td>
                    <td><?php echo $persona->getprice() ?></td>
                    <td><a href="./actualizar.php?id=<?php echo $persona->getId()?>&accion=editar"><i class="fi-sr-pencil"></i></a></td>
                    <td><a href="./src/PHP/administrar_persona.php?id=<?php echo $persona->getId()?>&accion=borrar"><i class="fi-sr-trash"></i></a></td>
                </tr>
            <?php }?>
        </table>
</div>