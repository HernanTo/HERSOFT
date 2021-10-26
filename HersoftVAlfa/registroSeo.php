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
        <h2>Agregar SEO</h2>
        <div class="agregar_user">
            <form action="./src/PHP/administrar_persona.php" method="post">
                <label>Id</label><input type="int" name="idregistrerseo" id="id_registrer_seo" placeholder="Ingresa tu numero de identificacion"><br>
                <label>Nombre</label><input type="text" name="nameregistrerseo" id="name_registrer_seo" placeholder="Ingresa tu nombre"><br>
                <label>Apellidos</label><input type="text" name="lastregistrerseo" id="last_registrer_seo" placeholder="Ingresa tus apellidos"><br>
                <label>Email</label><input type="text" name="emailregistrerseo" id="email_registrer_seo" placeholder="Ingresa tu email"><br>
                <label>contraseña</label><input type="password" name="passwordregistrerseo" id="password_registrer_seo" placeholder="password"><br>
                <label>direccion</label><input type="text" name="adreessregistrerseo" id="adreess_registrer_seo" placeholder="Ingresa tu direccion"><br>
                <label>age</label><input type="int" name="ageregistrerseo" id="age_registrer_seo" placeholder="Ingresa tu edad"><br>

                <input type="submit" value="Agregar" name="insertar">
            </form>
        </div>
    </div>
</div>
<?php
    include("./src/incluedes/footer.php")
?>