<?php
    include("./src/incluedes/header.php");
    session_start();
    if($_SESSION['usuario'] == null || $_SESSION['usuario'] = ''){
        echo '<script>alert("Usted no tiene autorización para acceder")</script>';
        header("Location: ../../index.html");
        die();
    }
?>
<div class="moduleSeo">
    <?php include("./src/incluedes/menu_slide.php"); ?>
    <div class="containerSeo">
        <br><br><br>
        <h2>Modulo Seo</h2>
        <br>
        <p style="width: 50%; color: white;font-family: 'Modern Sans'; text-align: justify; margin-left: 25%; font-size: 1.3rem;">En este apartado podrás manipular y crear los datos en nuestra página, ya que eres <b>SEO</b>, solo tú tienes acceso a este módulo y nadie más, aquí puedes hacer cosas como insertar productos y gestionar las personas registradas, ver sus datos básicos y ver los productos.</p>
    </div>
</div>
<?php
    include("./src/incluedes/footer.php")
?>