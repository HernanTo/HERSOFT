<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Bienvenido a la página oficial de Creactly, ven y échale un vistazo a lo que tenemos, o en su defecto vende tus productos acá"
    />
    <meta
      name="keyword" content="Productos Biodegradables,Vender,Comprar,Biodegradable"
    />
    <title>Creactly</title>
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/stylepanelCeo.css" />
    <link rel="shortcut icon" href="./assets/img/Logo.gif" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="./assets/font/icons/css/uicons-solid-rounded.css"
    />
  </head>
  <header>
      <div class="logo">
        <a href="index.html"
          ><img src="assets/img/Logo.gif" alt="logo Creactly"
        /></a>
      </div>
      <!-- <h1 id="span_name"><a href="index.html" class="logo-text">Crea<span>ctly</span></a></h1> -->
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
          <a href="categories.php"><li>Categorias</li></a>
          <a href="FAQ"><li>FAQ</li></a>
          <a href="contactUs.html"><li>Contactanos</li></a>
          <br><br>
          <a href="./signIn.php" class="sign_in_btn" style="display: none;"><li>Registrate</li></a>
          <a href="./login.php" class="login_up_btn" style="display: none;"><li>Iniciar Sesión</li></a>
        </ul>
      </nav>
    </header>