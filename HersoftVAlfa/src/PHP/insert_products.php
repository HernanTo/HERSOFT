<?php
    include("database.php");
    session_start();
    if($_SESSION['usuario'] == null || $_SESSION['usuario'] = ''){
        echo '<script>alert("Usted no tiene autorización para acceder")</script>';
        header("Location: ../../index.html");
        die();
    }
    if(isset($_POST['Publicar'])){
        // ** Variables user new
        $name_product = trim($_POST['name_sign']);
        $description = trim($_POST['email_sign']);
        $price = trim($_POST['address_sign']);
        $id_category = trim($_POST['age_sign']);
        $id_user = trim($_POST['password_sign']);
        

        $dml = "INSERT INTO publication (Name_User, Last_name, User_password, Email, Address_user, Age, account_type) 
        VALUES ('$id_user','$name_user','$last_name','$password_user','$email_user','$address_user','$age_user','$type_account')";

        $query_sql = mysqli_query($conection,$dml);

        header('Location: ../../index.html');
?>