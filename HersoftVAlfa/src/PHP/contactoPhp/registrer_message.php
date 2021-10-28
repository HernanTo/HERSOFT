<?php
    include("database.php");
    if(isset($_POST['save'])){
        // ** Variables user new
        // $id_user = $_POST['id_user_sign'];
        $name_user = $_POST['nameUser'];
        $last_name = $_POST['lastName'];
        $email_user = $_POST['Email'];
        $phoneNumber = $_POST['phonenumber'];
        $suggetion = $_POST['Suggestion'];

        $dml = "INSERT INTO  suggestion (Nombre, Last_name, Email, Phone_number, suggetion VALUES ('$name_user','$last_name','$email_user','$phoneNumber','$suggetion')";

        $query_sql = mysqli_query($conection,$dml);

        header('Location: ../../../index.html');
    }
?>