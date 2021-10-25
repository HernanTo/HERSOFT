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
    <div class="menu_admin">
        <nav class="nav_panel">
            <ul class="menu_seo">
                <a href="registroSeo.php"><li id="aI">Agregar SEO</li></a>
                <a href="registroSeo.php"><li id="b">Ver SEO</li></a>
                <a href="queryUser.php"><li id="c">Ver Usuarios</li></a>
                <a href="queryUser.php"><li id="d">Modificar Usuarios</li></a>
                <a href="verProductos.php"><li id="eI">Ver Productos</li></a>
                <a href="./src/PHP/cerrar_sesion.php"><li id="f">Cerrar sesión</li></a>
            </ul>
            <ul class="menu_seo_icons">
                <a href="registroSeo.php"><li><i class=" fi-sr-add" onmouseover="hoverA()" onmouseleave="hoverA()" id="a"></i></li></a>
                <a href=""><li><i class="fi-sr-eye" onmouseover="hoverB();" onmouseleave="hoverB()" id="e"></i></li></a>
                <a href="queryUser.php"><li><i class="fi-sr-user-add" onmouseover="hoverC();" onmouseleave="hoverC()" id="i"></i></li>
                <a href="queryUser.php"><li><i class="fi-sr-pencil" onmouseover="hoverD();" onmouseleave="hoverD()" id="o"></i></li>
                <a href="queryUser.php"><li><i class="fi-sr-eye" onmouseover="hoverE();" onmouseleave="hoverE()" id="u"></i></li>
                <a href="./src/PHP/cerrar_sesion.php">
                    <li onmouseover="hoverF()" onmouseleave="hoverF()"><i class="fi-sr-sign-out-alt"></i></li>
                </a>
            </ul>
        </nav>
    </div>
    <div class="containerSeo">

    </div>
</div>
<?php
    include("./src/incluedes/footer.php")
?>