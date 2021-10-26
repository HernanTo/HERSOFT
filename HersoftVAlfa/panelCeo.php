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

    </div>
</div>
<?php
    include("./src/incluedes/footer.php")
?>