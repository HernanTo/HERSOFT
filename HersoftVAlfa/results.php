<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Bienvenido a la página oficial de Creactly, ven y échale un vistazo a lo que tenemos, o en su defecto vende tus productos acá" />
    <meta name="keyword" content="Productos Biodegradables,Vender,Comprar,Biodegradable" />
    <title>Creactly</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/styleResults.css" />
    <link rel="shortcut icon" href="assets/img/Logo.gif" type="image/x-icon" />
    <link rel="stylesheet" href="assets/font/icons/css/uicons-solid-rounded.css" />
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="assets/img/Logo.gif" alt="logo Creactly" /></a>
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
                <br />
                <button class="login_up_btn">Iniciar Sesión</button>
            </div>
        </nav>
    </header>
    <div class="container_results">
        <div class="aside_results">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odio quam, quae doloremque temporibus minima beatae id libero. Velit aut aliquam amet ipsum, ullam rerum ad illo enim? Consequuntur, expedita!
        </div>
        <div class="container_all_results">
            <a href="">
                <div class="container_products_results">
                <figure class="img_product_results">
                    <img src="./assets/img/ejemplo.jpg" alt="">
                </figure>
                <hr>
                <div class="description_results">
                    <h2>Mouse Pad</h2>
                    <p>Interesante Mouse pad con colores gamming</p>
                </div>
                <div class="prices_results">
                    <h2>$20.000</h2>
                </div>
                </div>
            </a>
        </div>
    </div>
    <footer>
        <div class="aboutUs_index_index">
            <div class="text_about">
                <h2>Sobre Nosotros</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga rem
                    atque reprehenderit sequi architecto et possimus sint. Sit odit
                    culpa, iure quae accusamus, odio distinctio ex blanditiis mollitia
                    totam aliquid!
                </p>
            </div>
            <div class="Social_bar">
                <a href=""><img src="./assets/img/facebook.png" alt=""></a>
                <a href=""><img src="./assets/img/instagram.png" alt=""></a>
                <a href=""><img src="./assets/img/whatsapp.png" alt=""></a>
                <a href=""><img src="./assets/img/telegrama.png" alt=""></a>
                <a href=""><img src="./assets/img/github.png" alt=""></a>
            </div>
        </div>
        <div class="quick_link_index">
            <h2>Accesos rápidos</h2>
            <div class="quick">
                <a href="index.html">Inicio</a><br />
                <a href="categorias.html">Categorias</a><br />
                <a href="contactUs.html">Contactanos</a><br />
                <a href="login.html">Iniciar sesión</a><br />
                <a href="signIn.html">Registrarse</a><br />
            </div>
        </div>
        <div class="contactUs_index">
            <h2>Contactanos</h2>
            <div class="text_contact_index">
                <i class="fi-sr-phone-call"></i>
                <p>3143904543</p>
                <i class="fi-sr-home-location"></i>
                <p>Cl. 52 Sur #97C - 35, Bogotá</p>
                <i class="fi-sr-at"></i>
                <p>creactly@gmail.com</p>
            </div>
        </div>
    </footer>
    <script src="./src/JS/main.js"></script>
    <script src="./src/JS/index.js"></script>t
</body>

</html>