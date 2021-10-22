<?php
    include("database.php");
    if(isset($_POST['save_register'])){
        // ** Variables user new
        $id_user = trim($_POST['id_user_sign']);
        $name_user = trim($_POST['name_sign']);
        $last_name = trim($_POST['last_name_sign']);
        $email_user = trim($_POST['email_sign']);
        $address_user = trim($_POST['address_sign']);
        $age_user = trim($_POST['age_sign']);
        $password_user = trim($_POST['password_sign']);
        $type_account = trim($_POST['select_user']);

        $dml = "INSERT INTO users (ID_User, Name_User, Last_name, User_password, Email, Address_user, Age, account_type) VALUES ('$id_user','$name_user','$last_name','$password_user','$email_user','$address_user','$age_user','$type_account')";

        $query_sql = mysqli_query($conection,$dml);

        header('Location: ../../index.html');
    }
?>