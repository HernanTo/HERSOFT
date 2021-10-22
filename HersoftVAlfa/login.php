<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenido a la página oficial de Creactly, ven y échale un vistazo a lo que tenemos, o en su defecto vende tus productos acá">
    <meta name="keyword" content="Productos Biodegradables,Vender,Comprar,Biodegradable">
    <title>Creactly</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="shortcut icon" href="assets/img/Logo.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/font/icons/css/uicons-solid-rounded.css">
</head>
<body>
    <header>
    <div class="logo">
    <div class="circle_white">
        <div class="circle_white_on">
        </div>
    </div>
    <div class="circle_blue">
        <div class="circle_blue_on">
    
        </div>
    </div>
    </div>
        <!-- <h1 class="logo-text">Crea<span>ctly</span></h1> -->
        <div class="shortcuts">
            <button class="shortcut_btn">
                <i class="fi-sr-shopping-cart"></i>
                <i class="fi-sr-cross-circle cross_car"></i>
            </button>
            <button class="shortcut_btn">
                <i class="fi-sr-user"></i>
                <i class="fi-sr-cross-circle cross_user"></i>
            </button>
            <button class="shortcut_btn" onclick="openCloseMenu()">
                <i class="fi-sr-menu-burger menu_burger" id="menu_burger"></i>
                <i class="fi-sr-cross-circle cross_menu" id="cross_menu"></i>
            </button>
        </div>
        <nav id="nav">
            <ul id="menu">
                <a href="index.html"><li>Inicio</li></a>
                <a href="categories.html"><li>Categorias</li></a>
                <a href="FAQ"><li>FAQ</li></a>
                <a href="contactUs.html"><li>Contactanos</li></a>
            </ul>
            <div class="nav_btn">
                <button class="sign_in_btn">Registrate</button>
                <br>
                <button class="login_up_btn">Iniciar Sesión</button>
            </div>
        </nav>
    </header>
    <div class="contenedor_main_login">
    </div>
    <div class="contenedor_login">
        <h2>Iniciar Sesión</h2>
        <form action="./src/PHP/verify.php" method="POST" id="form_login">
            <input type="email" name="email_login" id="email_login" placeholder="Correo Electronico"><br>
            <!-- <p>Correo no registrado</p> -->
            <input type="password" name="password_login" id="password_login" placeholder="Ingresa tu contraseña"><br>
            <!-- <p>Contraseña Incorrecta</p> -->
            <br><br>
            <a href="#">Olvidaste tu contraseña?</a><br>
            <div id="container_end_login">
                <a href="">Crear Cuenta</a><br>
                <button type="submit" name="btn_login">Iniciar Sesión</button>
            </div>
            <br><br><br>
        </form>
    </div>
    <!-- <div class="container_loaged">
        Cargando...
    </div> -->
    <script src="./src/JS/main.js"></script>
</body>
</html>