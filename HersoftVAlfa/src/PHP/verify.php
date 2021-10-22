<?php
    include("database.php");
    // variables datos login
    $email_user_login = trim($_POST['email_login']);
    $password_user_login = trim($_POST['password_login']);
    if($email_user_login == '' or $password_user_login == null){
        // pop up
        echo "<script>alert('Error: usuario y/o clave vacios!!');</script>";
    }else{
        $sql = "SELECT * FROM `users` WHERE Email = '$email_user_login' AND User_password = '$password_user_login' AND  account_type = 'user'";
        if(!$query_sql = $conection -> query($sql)){
            echo'bye';
        }else{
            $rows = mysqli_num_rows($query_sql);
            if($rows == 0){
            $sqlSeo = "SELECT * FROM `users` WHERE Email = '$email_user_login' AND User_password = '$password_user_login' AND  account_type = 'seo'";
            if(!$query_sql = $conection -> query($sqlSeo)){
                echo'bye';
            }else{
                $rows = mysqli_num_rows($query_sql);
                if($rows == 0){
                    echo'bye';
                }else{
                    echo "<script>alert('ACCESO ES  CORRECTO ');</script>";
                    header('location:../../panelCeo.php');
                }
            }
        }else{
            echo "<script>alert('ACCESO ES  CORRECTO ');</script>";
            header('location:../../index.html');
        }
    }
}
?>