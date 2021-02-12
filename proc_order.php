<?php
ob_start();
session_start();

require('connect.php');

if(isset($_GET['id'])||isset($POST['qty'])){
    $id = (int)$_GET['id'];
    $query = "SELECT * FROM cart_table where prod_id=".$id;
    $result = mysqli_query($conn, $query);
    $query_order = mysqli_num_rows($result);
    
            $row = mysqli_fetch_assoc($result);

            $reg_id = $row['reg_id'];
            $prod_id = $row['prod_id'];
            $qty = $_POST['qty'];
            $price = $qty * (double)$row['price'];
            $status = "UNPAID";
            $img = $row['img_dir'];
            $tel= $row['tel'];
            $desc = $row['descr'];
            $date = date("Y:m:d");

            $query1 = "SELECT * FROM order_table where prod_id=".$prod_id;
            $result1 = mysqli_query($conn, $query1);
            $query_order2 = mysqli_num_rows($result1);

            if($query_order2 < 1){
                if($result){
                    $ins_order = "INSERT INTO order_table (reg_id, prod_id, prod_stat, price,qty,img_dir,tel,descr,o_day) VALUES ('$reg_id','$prod_id','$status','$price','$qty','$img','$tel','$desc','$date')";
                
                    if(mysqli_query($conn, $ins_order)){
                    $_SESSION['succ_order'] = 'product has been placed on order, please deposit ';
                        header('Location: cart.php');
                        exit();
                    }else{
                        $_SESSION['error_order'] = 'Something went wrong '.mysqli_error($conn);
                    header('Location: cart.php');
                        exit();
                    }
                }else{
                    $_SESSION['error_order'] = 'unable to find this product '.mysqli_error($conn);
                    header('Location: cart.php');
                        exit();
                
                }
    }else{
        $_SESSION['error_order'] = 'You have already placed this product on order';
        header('Location: cart.php');
            exit();
    }
    }
    ?>