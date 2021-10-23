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
                <a href="queryUser.php"><li>Ver,Modificar usuarios</li></a>
                <a href="#"><li>Ver,Modificar productos</li></a>
            </ul>
        </nav>
    </div>
    <div class="containerSeo">
        <h2>Agregar SEO</h2>
        <div class="agregar_user">
            <form action="./src/PHP/administrar_persona.php" method="POST">
                <label>Id</label><input type="text" name="id_registrer_seo" id="id_registrer_seo" placeholder="Ingresa tu numero de identificacion"><br>
                <label>Nombre</label><input type="text" name="name_registrer_seo" id="name_registrer_seo" placeholder="Ingresa tu nombre"><br>
                <label>Apellidos</label><input type="text" name="last_registrer_seo" id="last_registrer_seo" placeholder="Ingresa tus apellidos"><br>
                <label>Email</label><input type="text" name="email_registrer_seo" id="email_registrer_seo" placeholder="Ingresa tu email"><br>
                <label>contraseña</label><input type="password" name="password_registrer_seo" id="password_registrer_seo" placeholder="ingresa tu contraseña"><br>
                <label>direccion</label><input type="text" name="adreess_registrer_seo" id="adreess_registrer_seo" placeholder="Ingresa tu direccion"><br>
                <label>age</label><input type="text" name="age_registrer_seo" id="age_registrer_seo" placeholder="Ingresa tu edad"><br>

                <input type="submit" value="Agregar" name="insertar">
            </form>
        </div>
    </div>
</div>