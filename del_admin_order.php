<?php
ob_start();
session_start();

require('connect.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $query = "DELETE FROM order_table WHERE prod_id=".$id;
    $result = mysqli_query($conn, $query);
        if($result){
           
         header('Location: admin.php');
                exit();
        }else{
           
        }
    }
    ?>