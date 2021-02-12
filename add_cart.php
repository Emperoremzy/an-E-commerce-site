<?php  
  ob_start();
  session_start(); 
  require ('connect.php');
     if(!isset($_SESSION['log_name'])){
        header("Location:index.php");
        exit();
     }else{
        if(isset($_GET['id'])){
                  $id = (int)$_GET['id'];
                $sql1 = "SELECT * FROM reg_user where pass=".$_SESSION['pass'];
                    $sql2 = "SELECT * FROM products where id=".$id;
                        $prod_id = mt_rand();
                            $day = date("Y:m:d");
                                $query_user = mysqli_query($conn, $sql1);
                                    $query_prod = mysqli_query($conn, $sql2);

                $row = mysqli_fetch_assoc($query_user);
                    $row2 = mysqli_fetch_assoc($query_prod);

                    $tel= $row2['tel'];
                    $reg_id= $row['reg_id'];
                    $price= $row2['price'];
                    $image = $row2['image_dir'];
                    $descr = $row2['descr'];
                    $check = "select * from cart_table where reg_id='$reg_id' and img_dir='$image'";
                    $query_check= mysqli_query($conn, $check);
                if(mysqli_num_rows($query_check) == 1){
                    $_SESSION['err_cart'] = "already added to cart ";
                     header('location:cart.php');
                         exit();

                }else{
                        $cart_add =  "INSERT INTO cart_table(tel, reg_id, prod_id, price, img_dir, descr, c_day)
                        VALUES ('$tel', '$reg_id', '$prod_id', '$price', '$image', '$descr', '$day')";

                        if(mysqli_query($conn, $cart_add)){
                                // positively added to cart
                                $_SESSION['succ_cart'] = "successfully added to cart";
                                header('location:cart.php');
                                exit();
                        }else{
                                // a problem arose.
                                $_SESSION['err_cart'] = "couldnt add to cart: ".mysqli_error($conn);
                                header('location:cart.php');
                                exit();
                        }
                }
     }  
    }
     ?>