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
        <div class="agregar_user" style="background: #121212;">
            <form action="./src/PHP/administrar_persona.php" method="POST">
                <input type="int" name="idregistrerseo" id="id_registrer_seo" placeholder="Ingresa tu numero de identificacion" style="color: white;"><br>
                <input type="text" name="nameregistrerseo" id="name_registrer_seo" placeholder="Ingresa tu nombre" style="color: white;"><br>
                <input type="text" name="lastregistrerseo" id="last_registrer_seo" placeholder="Ingresa tus apellidos" style="color: white;"><br>
                <input type="text" name="emailregistrerseo" id="email_registrer_seo" placeholder="Ingresa tu email" style="color: white;"><br>
                <input type="password" name="passwordregistrerseo" id="password_registrer_seo" placeholder="password" style="color: white;"><br>
                <input type="text" name="adreessregistrerseo" id="adreess_registrer_seo" placeholder="Ingresa tu direccion" style="color: white;"><br>
                <input type="int" name="ageregistrerseo" id="age_registrer_seo" placeholder="Ingresa tu edad" style="color: white;"><br>

                <input type="submit" value="Agregar" name="insertar" id="insertar_seo" style="background: rgba(17, 32, 49, 0.8); color: white; font-family: 'Monospace'; width: 35%; margin-left: 35%; border-bottom:none;">
            </form>
        </div>
    </div>
</div>
<?php
    include("./src/incluedes/footer.php")
?>