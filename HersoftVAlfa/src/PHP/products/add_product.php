<?php
    include("database.php");
    if(isset($_POST['send_product'])){
        // ** Variables product new
        // $id_user = trim($_POST['id_user_sign']);
        $name_produt = trim($_POST['name_products']);
        $desp = trim($_POST['desc_product']);
        $price = trim($_POST['price_product']);
        $category = trim($_POST['category']);            
        $date = date('Y-m-d');
        $dml = "INSERT INTO publication (ID_Publication,Name_product, Description, Price, category, dates) VALUES (NULL,'$name_produt', '$desp', '$price', '$category', '$date')";
        $query_sql = mysqli_query($conection,$dml);
        header('Location: ../../../index.html');
    }
?>