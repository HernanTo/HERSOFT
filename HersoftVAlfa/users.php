<?php include("./src/incluedes/header.php");
    $typeAccount = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/users.css">
</head>
<body>

<div class="container">
    <div class="container_data">
        <button id = "upload_photo" >
            
        </button>
        <p id = "email_users">User@gmail.com</p>
        <p id = "name_users">Name of the user</p>
        <a href="#" id = "upload_password">Actualizar contraseña</a>
        <br> <br><br><br><br><br><br>
        <center>
        <?php
            if($typeAccount){
                echo'<a href="./newProduct.html" id="pS">Publicar Producto</a><br> <br><a href="./newProduct.html" id="tS">Todos mis productos</a>';
            }
        ?>
        </center>
    </div> 
    <div class="history_container">
        <h2>Historial de compras</h2>
        <hr>
        <br><br>
        <div id= "history">
            <br><img src="./assets/img/ejemplo.jpg" alt=""><br><br>
            <h2>producto x</h2><br><br>
            <p class="description_history">$000.000</p>
            <p class="description_history">Quos nam illo hic officiis pariatur possimus deserunt debitis. Corrupti repudiandae eos optio deserunt aliquid adipisci iusto enim eligendi aut. Libero, quos.</p>
        </div>
    </div>
</div>
</body>
</html>

<?php include("./src/incluedes/footer.php") ?>