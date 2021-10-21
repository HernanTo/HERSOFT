<?php 

include ('database.php');

if (isset($_POST['save_register'])) {

      $name_sign = $_POST['name_sign'];
      $last_name_sign = $_POST['last_name_sign'];
      $id_user_sign = $_POST['id_user_sign'];
      $email_sign = $_POST['email_sign'];
      $address_sign = $_POST['address_sign'];
      $age_sign = $_POST['age_sign'];
      $password_sign = $_POST['password_sign'];
      $type_User = $_POST['select_user'];

  if ($type_User == 'user'){
      
    $query = "INSERT INTO users(ID_User, Name, Last_Name, User_password, Email, Address, Age)      VALUES  ('$id_user_sign','$name_sign','$last_name_sign','$password_sign','$email_sign','$address_sign','$age_sign')";

    $result = mysqli_query($conection_database, $query);
      if(!$result) {
        die("Query Failed.");
      }
  }elseif ($type_User == 'admin'){

    $query = "INSERT INTO admin(ID_Admin, Name, Last_Name, User_password, Email, Address, Age)      VALUES  ('$id_user_sign','$name_sign','$last_name_sign','$password_sign','$email_sign','$address_sign','$age_sign')";
  
    $result = mysqli_query($conection_database, $query);
      if(!$result) {
        die("Query Failed.");
      }
  }
}
  header ('Location: ../../index.html');
?>