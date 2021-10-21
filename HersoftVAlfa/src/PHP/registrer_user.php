<?php
    include('database.php');
    if(isset($_POST['save_register'])){
        // ** Variables user new
        $id_user = $_POST['id_user_sign'];
        $name_user = $_POST['name_sign'];
        $last_name = $_POST['last_name_sign'];
        $email_user = $_POST['email_sign'];
        $address_user = $_POST['address_sign'];
        $age_user = $_POST['age_sign'];
        $password_user = $_POST['password_sign'];
        $type_account = $_POST['select_user'];
        $query = 'INSERT INTO users (ID_User, Name, Last_name, User_password, Email, Address, Age, account_type) VALUES ("$id_user","$name_user","$last_name","$password_user","$email_user","$address_user","$age_user","$type_account")';
        $query_sql = mysqli_query($conection, $query);
        header('Location: ../../index.html');
    }
?>