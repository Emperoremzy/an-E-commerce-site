<?php
ob_start();
session_start();

require('connect.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $query = "DELETE FROM cart_table WHERE prod_id=".$id;
    $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['succ_cart_del'] = 'product has been removed from cart';
                header('Location: cart.php');
                exit();
        }else{
            $_SESSION['error_cart_del'] = 'unable to remove product from cart';
            header('Location: cart.php');
                exit();
        
        }
    }
    ?>