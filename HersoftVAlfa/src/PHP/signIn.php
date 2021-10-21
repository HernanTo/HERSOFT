<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenido a la página oficial de Creactly, ven y échale un vistazo a lo que tenemos, o en su defecto vende tus productos acá">
    <meta name="keyword" content="Productos Biodegradables,Vender,Comprar,Biodegradable">
    <title>Creactly</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/styleSign.css">
    <link rel="shortcut icon" href="./assets/img/Logo.gif" type="image/x-icon">
    <link rel="stylesheet" href="./assets/font/icons/css/uicons-solid-rounded.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="assets/img/Logo.gif" alt="logo Creactly"></a>
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
                <a href="index.html">
                    <li>Inicio</li>
                </a>
                <a href="categories.html">
                    <li>Categorias</li>
                </a>
                <a href="FAQ">
                    <li>FAQ</li>
                </a>
                <a href="contactUs.html">
                    <li>Contactanos</li>
                </a>
            </ul>
            <div class="nav_btn">
                <button class="sign_in_btn">Registrate</button>
                <br>
                <button class="login_up_btn">Iniciar Sesión</button>
            </div>
        </nav>
    </header>
    <div class="container_sign_in">
        <h2>Registrate</h2>
        <div class="contenedor_form">
            <form action="save_register.php" method="POST">
                <label>Ingresa tus nombres</label><br><input type="text" name="name_sign" id="name_sign" autocomplete="non"><br>
                <label>Ingresa tus apellidos</label><br><input type="text" name="last_name_sign" id="last_name_sign"><br>
                <label>Ingresa tu número de identificación</label><br><input type="number" name="id_user_sign" id="id_user_sign"><br>
                <label>Ingresa tu Correo</label><br><input type="text" name="email_sign" id="email"><br>
                <label>Ingresa tu dirección</label><br><input type="text" name="address_sign" id=""><br>
                <label>Ingresa tu edad</label><br><input type="number" name="age_sign" id=""><br>
                <label>Ingresa tu contraseña</label><br><input type="password" name="password_sign" id="password_sign"><br>
                <label>Repite tu contraseña</label><br><input type="password" name="password_sign" id="password_sign"><br>
                <label>Selecciona el tipo de cuenta</label>
                <select name="select_user" id="select_user">
                    <option value="admin" name= "admin">Administrador</option>
                    <option value="user" name = "user">Usuario</option>
                </select>
                <input type="submit" value="Registrarse" name = "save_register" id="sign_btn">
            </form>
        </div>
    </div>
    <script src="./src/JS/main.js"></script>
</body>
</html>